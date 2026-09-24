import os
import re
import html

def clean_text(raw_html):
    raw = html.unescape(raw_html)
    clean = re.sub(r'<[^>]+>', ' ', raw)
    clean = ' '.join(clean.split())
    return clean.strip()

sheet_files = {
    'Kaslow': 'sheets/Kaslow.html',
    'Ilya': 'last_user_prompt.html',
    'Jale': 'sheets/Jale.html',
    'Elsaland': 'sheets/Elsaland.html',
    'Baía Azul': 'sheets/Baia_Azul.html',
    'Saphael': 'sheets/Saphael.html',
    'Abertura do Tempo': 'sheets/Abertura_do_Tempo.html',
    'Dimensão Alternativa': 'sheets/Dimensao_Alternativa.html',
    'Tormentum': 'sheets/Tormentum.html',
    'Ilha Sprite': 'sheets/Ilha_Sprite.html',
}

def extract_npc_coords(inst):
    if not inst:
        return None, None, None

    coords_match = re.search(r'\(([0-9]{1,4})\,\s*([0-9]{1,4})\)', inst)
    coords = f"{coords_match.group(1)}, {coords_match.group(2)}" if coords_match else None

    item_match = re.search(r'[<«\[]([^>»\]]+)[>»\]]|item\s+[\"\'«<\[]([^\"\'»>\]]+)[\"\'»>\]]', inst, re.IGNORECASE)
    item = None
    if item_match:
        item = item_match.group(1) or item_match.group(2)

    npc = None
    npc_match = re.search(r'(?:Fale com|Vá até|Procure por|Fale com o|Fale com a|Compre com|Troque com|NPC)\s+([A-ZÀ-Ú][a-zA-ZÀ-ú0-9\sº-]{2,35}?)(?=\s*\([0-9]+|\s+e\s+|\s+para\s+|\s*,|\s*$)', inst)
    if npc_match:
        npc = npc_match.group(1).strip()
        if npc.startswith('NPC '):
            npc = npc[4:].strip()

    return npc, coords, item

def escape_str(s):
    if not s:
        return 'null'
    escaped = s.replace("\\", "\\\\").replace("'", "\\'")
    return f"'{escaped}'"

all_parsed = {}
grand_total_trivias = 0
grand_total_steps = 0

for city, filepath in sheet_files.items():
    if not os.path.exists(filepath):
        print(f"Skipping missing file: {filepath}")
        continue

    with open(filepath, 'r', encoding='utf-8') as f:
        text = f.read()

    trs = re.findall(r'<tr[^>]*>(.*?)</tr>', text, re.DOTALL)
    city_maps = {}
    current_map = 'Geral'
    current_trivia = None

    for tr in trs:
        map_match = re.search(r'colspan=\"[0-9]+\"[^>]*>(.*?)</td>', tr, re.DOTALL)
        if map_match:
            m_title = clean_text(map_match.group(1))
            if m_title and not any(k in m_title for k in ['Trivia', 'Trívia', 'Como fazer', 'Situação', 'Atualização', 'Wikia', 'Funcionamento', 'GS']):
                current_map = m_title
                current_trivia = None
                continue

        tds = re.findall(r'<td[^>]*>(.*?)</td>', tr, re.DOTALL)
        if not tds:
            continue

        clean_tds = [clean_text(td) for td in tds]
        if not clean_tds or not any(clean_tds):
            continue

        concat = ' '.join(clean_tds)
        if any(k in concat for k in ['Trivia Nome', 'Como fazer', '100% (', 'Última Atualização', 'O que são Trívias', 'Página no Wikia', 'Funcionamento:', 'GS Swain']):
            continue

        if len(clean_tds) == 2 and clean_tds[0] == '' and clean_tds[1]:
            if not any(k in clean_tds[1].lower() for k in ['fale', 'vá', 'derrote', 'compre', 'use', 'clique', 'aproxime', 'mate', 'procure', 'dê', 'obtenha', 'passeie', 'retorne', 'em seguida', 'depois']) and len(clean_tds[1]) < 50:
                current_map = clean_tds[1]
                current_trivia = None
                continue

        if len(clean_tds) == 1 and clean_tds[0]:
            if not any(k in clean_tds[0].lower() for k in ['fale', 'vá', 'derrote', 'compre', 'use', 'clique', 'aproxime', 'mate', 'procure', 'dê', 'obtenha', 'passeie', 'retorne', 'em seguida', 'depois']) and len(clean_tds[0]) < 50:
                current_map = clean_tds[0]
                current_trivia = None
                continue

        is_step_continuation = False
        step_num = '1'
        inst_text = ''

        if current_trivia is not None:
            if clean_tds[0].isdigit():
                is_step_continuation = True
                step_num = clean_tds[0]
                inst_text = clean_tds[1] if len(clean_tds) > 1 else ''
            elif len(clean_tds) >= 2 and clean_tds[0] == '' and clean_tds[1] and (clean_tds[1].isdigit() or any(k in clean_tds[1].lower() for k in ['fale', 'vá', 'derrote', 'compre', 'use', 'clique', 'aproxime', 'mate', 'procure', 'dê', 'obtenha', 'passeie', 'retorne', 'em seguida', 'depois'])):
                if clean_tds[1].isdigit() and len(clean_tds) >= 3:
                    is_step_continuation = True
                    step_num = clean_tds[1]
                    inst_text = clean_tds[2]
                elif any(k in clean_tds[1].lower() for k in ['fale', 'vá', 'derrote', 'compre', 'use', 'clique', 'aproxime', 'mate', 'procure', 'dê', 'obtenha', 'passeie', 'retorne', 'em seguida', 'depois']):
                    is_step_continuation = True
                    step_num = str(len(current_trivia['steps']) + 1)
                    inst_text = clean_tds[1]

        if is_step_continuation and inst_text:
            current_trivia['steps'].append({'step': step_num, 'inst': inst_text})
            continue

        item_t = ''
        hist_t = ''
        inst = ''
        s_num = '1'

        if len(clean_tds) >= 4:
            item_t = clean_tds[0]
            hist_t = clean_tds[1]
            if clean_tds[2].isdigit():
                s_num = clean_tds[2]
                inst = clean_tds[3]
            elif len(clean_tds) >= 5 and clean_tds[3].isdigit():
                s_num = clean_tds[3]
                inst = clean_tds[4]
            else:
                inst = clean_tds[-1]
        elif len(clean_tds) == 3:
            item_t = clean_tds[0]
            if clean_tds[1].isdigit():
                s_num = clean_tds[1]
                inst = clean_tds[2]
            else:
                hist_t = clean_tds[1]
                inst = clean_tds[2]

        if item_t or hist_t:
            t_item = item_t if item_t else hist_t
            t_hist = hist_t if hist_t else item_t
            current_trivia = {
                'map': current_map,
                'item_title': t_item,
                'history_title': t_hist,
                'steps': [{'step': s_num, 'inst': inst}] if inst else []
            }
            if current_map not in city_maps:
                city_maps[current_map] = []
            city_maps[current_map].append(current_trivia)

    city_maps = {k: v for k, v in city_maps.items() if len(v) > 0}
    all_parsed[city] = city_maps

    c_trivias = sum(len(v) for v in city_maps.values())
    c_steps = sum(len(t['steps']) for v in city_maps.values() for t in v)
    grand_total_trivias += c_trivias
    grand_total_steps += c_steps

# Generate PHP Seeder
php_code = """<?php

namespace Database\\Seeders;

use App\\Models\\Zone;
use App\\Models\\Trivia;
use App\\Models\\TriviaStep;
use App\\Models\\User;
use Illuminate\\Database\\Seeder;
use Illuminate\\Support\\Facades\\Hash;

class TriviaSeeder extends Seeder
{
    public function run(): void
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        TriviaStep::truncate();
        Trivia::truncate();
        Zone::truncate();
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

        // Primary Curator User
        $user = User::firstOrCreate(
            ['email' => 'rafael.santos@grandfantasia.wiki'],
            [
                'name' => 'Rafael G C Santos',
                'password' => Hash::make('password123'),
            ]
        );

        $zonesData = [
"""

sort_idx = 1
for city_name, maps in all_parsed.items():
    php_code += f"            // ==================== {city_name.upper()} ====================\n"
    for map_name, t_list in maps.items():
        slug = re.sub(r'[^a-z0-9]+', '-', f"{city_name}-{map_name}".lower()).strip('-')
        map_name_escaped = escape_str(map_name)

        php_code += f"""            [
                'city' => '{city_name}',
                'name' => {map_name_escaped},
                'slug' => '{slug}',
                'description' => 'Mapa de {map_name} na região de {city_name}.',
                'sort_order' => {sort_idx},
                'trivias' => [\n"""
        sort_idx += 1

        for t in t_list:
            item_t = escape_str(t['item_title'])
            hist_t = escape_str(t['history_title'])
            php_code += f"""                    [
                        'item_title' => {item_t},
                        'history_title' => {hist_t},
                        'steps' => [\n"""

            for s in t['steps']:
                s_num = int(s['step']) if str(s['step']).isdigit() else 1
                inst_escaped = escape_str(s['inst'])
                npc, coords, item = extract_npc_coords(s['inst'])

                npc_str = escape_str(npc)
                coords_str = escape_str(coords)
                item_str = escape_str(item)

                php_code += f"""                            ['step_number' => {s_num}, 'npc_name' => {npc_str}, 'coordinates' => {coords_str}, 'item_required' => {item_str}, 'instruction' => {inst_escaped}],\n"""

            php_code += """                        ],
                    ],\n"""

        php_code += """                ],
            ],\n"""

php_code += """        ];

        foreach ($zonesData as $zData) {
            $trivias = $zData['trivias'] ?? [];
            unset($zData['trivias']);

            $zone = Zone::updateOrCreate(
                ['slug' => $zData['slug']],
                $zData
            );

            $triviaOrder = 1;
            foreach ($trivias as $tData) {
                $steps = $tData['steps'] ?? [];
                unset($tData['steps']);

                $tData['zone_id'] = $zone->id;
                $tData['sort_order'] = $triviaOrder++;

                $trivia = Trivia::create($tData);

                foreach ($steps as $sData) {
                    TriviaStep::create([
                        'trivia_id' => $trivia->id,
                        'step_number' => $sData['step_number'] ?? 1,
                        'npc_name' => $sData['npc_name'] ?? null,
                        'coordinates' => $sData['coordinates'] ?? null,
                        'item_required' => $sData['item_required'] ?? null,
                        'instruction' => $sData['instruction'] ?? '',
                    ]);
                }
            }
        }
    }
}
"""

with open('database/seeders/TriviaSeeder.php', 'w', encoding='utf-8') as f:
    f.write(php_code)

print(f"Successfully generated database/seeders/TriviaSeeder.php with {grand_total_trivias} trivias and {grand_total_steps} steps!")
