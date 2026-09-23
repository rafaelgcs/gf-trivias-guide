import os
import re
import json

def clean_text(raw_html):
    clean = re.sub(r'<[^>]+>', ' ', raw_html)
    clean = ' '.join(clean.split())
    return clean.strip()

sheet_files = {
    'Kaslow': 'sheets/Kaslow.html',
    'Ilya': '/Users/rafaelgcs/.gemini/antigravity/brain/a99f55ef-e9ce-4e9f-ba7d-20c796375258/.system_generated/steps/228/content.md',
    'Jale': 'sheets/Jale.html',
    'Elsaland': 'sheets/Elsaland.html',
    'Baía Azul': 'sheets/Baia_Azul.html',
    'Saphael': 'sheets/Saphael.html',
    'Abertura do Tempo': 'sheets/Abertura_do_Tempo.html',
    'Dimensão Alternativa': 'sheets/Dimensao_Alternativa.html',
    'Tormentum': 'sheets/Tormentum.html',
    'Ilha Sprite': 'sheets/Ilha_Sprite.html',
}

all_parsed = {}

for city, filepath in sheet_files.items():
    if not os.path.exists(filepath): continue
    with open(filepath, 'r', encoding='utf-8') as f:
        text = f.read()
    trs = re.findall(r'<tr[^>]*>(.*?)</tr>', text, re.DOTALL)

    city_maps = {}
    current_map = 'Geral'
    current_trivia = None

    for tr in trs:
        # Check map header
        map_match = re.search(r'colspan=\"[0-9]+\"[^>]*>(.*?)</td>', tr, re.DOTALL)
        if map_match:
            m_title = clean_text(map_match.group(1))
            if m_title and 'Trivia Nome' not in m_title and 'Como fazer' not in m_title and 'Trívia' != m_title:
                current_map = m_title
                if current_map not in city_maps:
                    city_maps[current_map] = []
                current_trivia = None
                continue

        tds = re.findall(r'<td[^>]*>(.*?)</td>', tr, re.DOTALL)
        if not tds:
            continue

        clean_tds = [clean_text(td) for td in tds]
        if not clean_tds or not any(clean_tds):
            continue
        
        # Skip header rows
        concat_row = ' '.join(clean_tds)
        if 'Trivia Nome' in concat_row or 'Como fazer' in concat_row or concat_row == 'Trívia NPC Como fazer':
            continue

        # Parse based on column length
        if len(clean_tds) == 3:
            title = clean_tds[0]
            if title and not title.isdigit():
                current_trivia = {
                    'map': current_map,
                    'item_title': title,
                    'history_title': title,
                    'steps': [{'step': '1', 'inst': clean_tds[2]}]
                }
                if current_map not in city_maps: city_maps[current_map] = []
                city_maps[current_map].append(current_trivia)
            elif current_trivia and clean_tds[2]:
                step_num = clean_tds[0] if clean_tds[0].isdigit() else str(len(current_trivia['steps'])+1)
                current_trivia['steps'].append({'step': step_num, 'inst': clean_tds[2]})

        elif len(clean_tds) == 4:
            item_t = clean_tds[0]
            hist_t = clean_tds[1]
            step_col = clean_tds[2]
            inst_col = clean_tds[3]

            if (item_t or hist_t) and not item_t.isdigit() and not hist_t.isdigit():
                t_item = item_t if item_t else hist_t
                t_hist = hist_t if hist_t else item_t
                step_num = step_col if step_col.isdigit() else '1'
                current_trivia = {
                    'map': current_map,
                    'item_title': t_item,
                    'history_title': t_hist,
                    'steps': [{'step': step_num, 'inst': inst_col}]
                }
                if current_map not in city_maps: city_maps[current_map] = []
                city_maps[current_map].append(current_trivia)
            elif current_trivia and inst_col:
                step_num = step_col if step_col.isdigit() else str(len(current_trivia['steps'])+1)
                current_trivia['steps'].append({'step': step_num, 'inst': inst_col})

        elif len(clean_tds) >= 5:
            item_t = clean_tds[0]
            hist_t = clean_tds[1]
            inst_col = clean_tds[-1] if len(clean_tds) >= 5 else clean_tds[4]

            if (item_t or hist_t) and not item_t.isdigit() and not hist_t.isdigit():
                t_item = item_t if item_t else hist_t
                t_hist = hist_t if hist_t else item_t
                current_trivia = {
                    'map': current_map,
                    'item_title': t_item,
                    'history_title': t_hist,
                    'steps': [{'step': '1', 'inst': inst_col}]
                }
                if current_map not in city_maps: city_maps[current_map] = []
                city_maps[current_map].append(current_trivia)
            elif current_trivia and inst_col:
                step_num = str(len(current_trivia['steps'])+1)
                current_trivia['steps'].append({'step': step_num, 'inst': inst_col})

    city_maps = {k: v for k, v in city_maps.items() if len(v) > 0}
    all_parsed[city] = city_maps

def extract_npc_coords(inst):
    coords_match = re.search(r'\(([0-9]{1,4})\,\s*([0-9]{1,4})\)', inst)
    coords = f"{coords_match.group(1)}, {coords_match.group(2)}" if coords_match else None

    item_match = re.search(r'[<«\[]([^>»\]]+)[>»\]]', inst)
    item = item_match.group(1) if item_match else None

    npc = None
    npc_match = re.search(r'(?:Fale com|Vá até|Procure por|Fale com o|Fale com a|NPC)\s+([A-Z][a-zA-L\sº-]{2,30}?)(?=\s*\([0-9]+|\s+e\s+|\s+para\s+|\s*$)', inst)
    if npc_match:
        npc = npc_match.group(1).strip()

    return npc, coords, item

def escape_str(s):
    if not s:
        return 'null'
    escaped = s.replace("'", "\\'")
    return f"'{escaped}'"

# Generate PHP Seeder
php_code = """<?php

namespace Database\\Seeders;

use App\\Models\\Zone;
use App\\Models\\Trivia;
use App\\Models\\TriviaStep;
use App\\Models\\User;
use App\\Models\\Guide;
use App\\Models\\Comment;
use Illuminate\\Database\\Seeder;
use Illuminate\\Support\\Str;
use Illuminate\\Support\\Facades\\Hash;

class TriviaSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Primary Curator User (Rafael G C Santos)
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
total_trivias_count = 0

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
            total_trivias_count += 1
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
                        'step_number' => $sData['step_number'] ?? $sData['step'] ?? 1,
                        'npc_name' => $sData['npc_name'] ?? $sData['npc'] ?? null,
                        'coordinates' => $sData['coordinates'] ?? $sData['coords'] ?? null,
                        'item_required' => $sData['item_required'] ?? $sData['item'] ?? null,
                        'instruction' => $sData['instruction'] ?? $sData['inst'] ?? '',
                    ]);
                }
            }
        }
    }
}
"""

with open('database/seeders/TriviaSeeder.php', 'w', encoding='utf-8') as f:
    f.write(php_code)

print(f"Successfully generated database/seeders/TriviaSeeder.php with {total_trivias_count} trivias across all cities!")
