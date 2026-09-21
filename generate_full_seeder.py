import re
import json
import os

def clean_text(raw_html):
    clean = re.sub(r'<[^>]+>', ' ', raw_html)
    clean = ' '.join(clean.split())
    return clean.strip()

sheet_file = '/Users/rafaelgcs/.gemini/antigravity/brain/a99f55ef-e9ce-4e9f-ba7d-20c796375258/.system_generated/steps/228/content.md'
if not os.path.exists(sheet_file):
    sheet_file = 'last_user_prompt.html'

with open(sheet_file, 'r', encoding='utf-8') as f:
    text = f.read()

trs = re.findall(r'<tr[^>]*>(.*?)</tr>', text, re.DOTALL)

ilya_maps = {}
current_map = None
current_trivia = None

for tr in trs:
    map_match = re.search(r'colspan=\"[0-9]+\"[^>]*>(.*?)</td>', tr, re.DOTALL)
    if map_match:
        m_title = clean_text(map_match.group(1))
        if m_title and m_title != 'Trivia Nome (história)' and 'Como fazer' not in m_title and 'Trivia Nome' not in m_title:
            current_map = m_title
            if current_map not in ilya_maps:
                ilya_maps[current_map] = []
            current_trivia = None
            continue

    tds = re.findall(r'<td[^>]*>(.*?)</td>', tr, re.DOTALL)
    if not tds:
        continue

    clean_tds = [clean_text(td) for td in tds]
    if not clean_tds or not any(clean_tds) or 'Trivia Nome' in clean_tds[0] or 'Como fazer' in clean_tds[0]:
        continue

    if len(clean_tds) >= 4 and clean_tds[0] != '':
        item_title = clean_tds[0]
        history_title = clean_tds[1] if len(clean_tds) > 1 and clean_tds[1] else item_title
        step_num = clean_tds[2] if len(clean_tds) > 2 else '1'
        inst = clean_tds[3] if len(clean_tds) > 3 else ''

        current_trivia = {
            'map': current_map,
            'item_title': item_title,
            'history_title': history_title,
            'steps': [{
                'step': step_num if step_num and step_num.isdigit() else '1',
                'inst': inst
            }]
        }
        if current_map:
            ilya_maps[current_map].append(current_trivia)
    elif current_trivia:
        if len(clean_tds) >= 2:
            step_num = clean_tds[0] if clean_tds[0] and clean_tds[0].isdigit() else str(len(current_trivia['steps']) + 1)
            inst = clean_tds[1]
            if inst:
                current_trivia['steps'].append({
                    'step': step_num,
                    'inst': inst
                })

total_ilya = sum(len(v) for v in ilya_maps.values())
print(f'Parsed {total_ilya} Ilya trivias across {len(ilya_maps)} maps!')

def extract_npc_coords(inst):
    coords_match = re.search(r'\(([0-9]{1,4})\,\s*([0-9]{1,4})\)', inst)
    coords = f"{coords_match.group(1)}, {coords_match.group(2)}" if coords_match else None

    item_match = re.search(r'[<«\[]([^>»\]]+)[>»\]]', inst)
    item = item_match.group(1) if item_match else None

    npc = None
    if 'Soldado do Forte Yuri' in inst: npc = 'Soldado do Forte Yuri'
    elif 'Dono do Estaleiro Ali' in inst: npc = 'Dono do Estaleiro Ali'
    elif 'Alquimista Blair' in inst or 'Alquimista' in inst: npc = 'Alquimista Blair'
    elif 'Sprite Iyetta' in inst: npc = 'Sprite Iyetta'
    elif 'Blady' in inst: npc = 'Blady'
    elif 'Feiticeira Elina' in inst: npc = 'Feiticeira Elina'
    elif 'Monge Acético' in inst: npc = 'Monge Acético'
    elif 'Aldeã Ker' in inst or 'Ker' in inst: npc = 'Aldeã Ker'
    elif 'Aldeão Colby' in inst or 'Colby' in inst: npc = 'Aldeão Colby'
    elif 'Guarda de Ilya' in inst: npc = 'Guarda de Ilya'
    elif 'Carteiro Post' in inst or 'Post' in inst: npc = 'Carteiro Post'
    elif 'Bolai' in inst: npc = 'NPC Bolai'
    elif 'Tim' in inst: npc = 'Ajudante Tim'
    elif 'Yuma' in inst: npc = 'Yuma'
    elif 'Ters' in inst: npc = 'Ters'
    elif 'Angelo' in inst: npc = 'Angelo'
    elif 'Bernard' in inst: npc = 'Bernard'
    elif 'Merrill' in inst: npc = 'Merrill'
    elif 'Sayla' in inst: npc = 'Sayla'
    elif 'Dama Misteriosa' in inst: npc = 'Dama Misteriosa'
    elif 'Yedoda' in inst: npc = 'Yedoda'
    elif 'Soldado do Forte Mike' in inst: npc = 'Soldado Mike'
    elif 'Cientista Oz' in inst or 'Oz' in inst: npc = 'Cientista Oz'
    elif 'Jema' in inst: npc = 'Jema'
    elif 'Borono' in inst: npc = 'Borono'
    elif 'Comerciante Suspeito' in inst: npc = 'Comerciante Suspeito'
    elif 'Xiapuna' in inst: npc = 'Xiapuna'
    elif 'Ancião Bania' in inst: npc = 'Ancião Bania'
    elif 'Sprite Demis' in inst: npc = 'Sprite Demis'
    elif 'Popo' in inst: npc = 'Menino Popo'
    elif 'Adam Nice' in inst: npc = 'Adam Nice'
    elif 'Maria' in inst: npc = 'Maria'
    elif 'Podony' in inst: npc = 'Pirata Voraz Podony'
    elif 'Clive' in inst: npc = 'Pescador Clive'
    elif 'Dennis' in inst: npc = 'Soldado de Defesa Dennis'
    elif 'Ernest' in inst: npc = 'Franco-Atirador Ernest'
    elif 'Ilan' in inst: npc = 'Lojista Ilan'
    elif 'Claudie' in inst: npc = 'Feiticeira Claudie'
    elif 'Auston' in inst: npc = 'Capitão Auston'
    elif 'Totoko' in inst: npc = 'Aldeão Totoko'

    return npc, coords, item

def escape_str(s):
    if not s:
        return 'null'
    escaped = s.replace("'", "\\'")
    return f"'{escaped}'"

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
            // ==================== KASLOW ====================
            [
                'city' => 'Kaslow',
                'name' => 'Baía Azul',
                'slug' => 'baia-azul',
                'description' => 'Região praiana e inicial de Kaslow, repleta de criaturas marinhas, fazendas e fortes militares.',
                'sort_order' => 1,
                'trivias' => [
                    [
                        'item_title' => 'Peixe Seco Delicioso',
                        'history_title' => 'Peixe Seco Delicioso',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Fazendeiro Cyer', 'coords' => '416, 229', 'item' => null, 'inst' => 'Fale com o NPC Fazendeiro Cyer (416, 229) e selecione "Mackrel delicioso?"'],
                            ['step' => 2, 'npc' => 'Mestre Mackerel', 'coords' => '500, 194', 'item' => 'Mackerel Premium', 'inst' => 'Fale com o NPC Mestre Mackerel (500, 194) (aparece das 20h até às 0h do Servidor) e troque 1g em um <Mackerel Premium.>'],
                            ['step' => 3, 'npc' => 'Fazendeiro Cyer', 'coords' => '416, 229', 'item' => 'Mackerel Premium', 'inst' => 'Retorne ao Fazendeiro Cyer (416, 229) e use o item <Mackrel Premium> para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Mágia Básica',
                        'history_title' => 'Mágica 101',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Soldado Adami', 'coords' => '641, 498', 'item' => null, 'inst' => 'Fale com Soldado do Forte Adami (641, 498) e selecione "É verdade que você deseja aprender uns truques de magia?"'],
                            ['step' => 2, 'npc' => 'Ralakeshia', 'coords' => '634, 505', 'item' => 'Como fazer magia', 'inst' => 'Vá até Ralakeshia (634, 505) e selecione "Adami espera que você o ensine alguns truques de magia." para receber <Como fazer magia>.'],
                            ['step' => 3, 'npc' => 'Soldado Adami', 'coords' => '641, 498', 'item' => 'Como fazer magia', 'inst' => 'Retorne a Adami e selecione "Ralakeshia quer que você pegue esse livro." para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Bocas Famintas',
                        'history_title' => 'Bocas Famintas',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Lojista Era', 'coords' => '616, 525', 'item' => 'Maçã Baía Azul', 'inst' => 'Vá até a Lojista Era (616, 525) e compre uma Maçã Baía Azul (requer 750 de Reputação com a Família Real de Kaslow). Não a use.'],
                            ['step' => 2, 'npc' => 'Soldado Adami', 'coords' => '645, 500', 'item' => null, 'inst' => 'Vá até Adami (645, 500) e ande próximo ao Pássaro Solar dele. <Voraz> Pássaro Solar irão aparecer para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Protetor Ecológico',
                        'history_title' => 'Enfermagem Ecológica',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Ancião Marcus', 'coords' => '252, 413', 'item' => 'Plano de Visitar o Recife', 'inst' => 'Fale com Ancião da Ilhota Marcus (252, 413) e selecione "O que tem de tão especial nesta ilha?" para receber o buff [Plano de Visitar o Recife de Corais]'],
                            ['step' => 2, 'npc' => 'Caçador de Recifes', 'coords' => '125, 333', 'item' => null, 'inst' => 'Vá até as coordenadas (125, 333) e derrote o Caçador de Recifes para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Você Já Coletou',
                        'history_title' => 'Já Grelhado',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Comerciante Ambulante', 'coords' => '412, 175', 'item' => 'Churrasco de Lombinho Cereja', 'inst' => 'Vá até o Comerciante Ambulante (412, 175) e compre o item <Churrasco de Lombinho Cereja> (requer 750 de Reputação com a Família Real de Kaslow).'],
                            ['step' => 2, 'npc' => 'Fogueira', 'coords' => '414, 160', 'item' => 'Churrasco de Lombinho Cereja', 'inst' => 'Aproxime-se da fogueira em (414, 160) para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Bebê Bobo e Curioso',
                        'history_title' => 'Bebê Bobo Curioso',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Agente Especial Real', 'coords' => '432, 188', 'item' => '1 Ouro', 'inst' => 'Fale com Agente Especial Real no Portal Kaslow (432, 188) e selecione "Quero usar 1 Ouro para me teletransportar para o lugar mais misterioso!". Você será teletransportado e completará a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Administrar Multi-Personagem',
                        'history_title' => 'Administrar Multi-Personagem',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Fazendeiro Cyer', 'coords' => '416, 229', 'item' => null, 'inst' => 'Fale com Fazendeiro Cyer (416, 229) e selecione "Você já pensou em expandir seu orquidário?"'],
                            ['step' => 2, 'npc' => 'Atalienne', 'coords' => '408, 219', 'item' => 'Ovo Cru', 'inst' => 'Fale com Atalienne (408, 219) e clique na opção "Você avalia o problema de minhocas de Cyer." para obter Ovo Cru.'],
                            ['step' => 3, 'npc' => 'Fazendeiro Cyer', 'coords' => '416, 229', 'item' => 'Ovo Cru', 'inst' => 'Retorne ao Fazendeiro Cyer (416, 229) e selecione a opção "Eu conversei com Atalienne." para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Siris no Balde',
                        'history_title' => 'Carangueijos no Balde',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Capitão Myge', 'coords' => '432, 183', 'item' => null, 'inst' => 'Fale com Capitão Myge (432, 183) e selecione a opção "Que tipos de frutos do mar você gosta?"'],
                            ['step' => 2, 'npc' => 'Siris Apaixonados', 'coords' => 'Praia', 'item' => 'Casca, Ovas e Patas de Siri', 'inst' => 'Derrote Siris Apaixonados até dropar <Casca de Siri>, <Ovas de Siri> e <Patas de Siri>'],
                            ['step' => 3, 'npc' => 'Alquimista', 'coords' => '623, 485', 'item' => 'Balde de Siri', 'inst' => 'Vá até o Alquimista (623, 485) e use as <Ovas de Siri> no slot e faça a alquimia para obter <Balde de Siri>.'],
                            ['step' => 4, 'npc' => 'Capitão Myge', 'coords' => '432, 183', 'item' => 'Balde de Siri', 'inst' => 'Retorne a Myge e selecione a opção "Aqui está o balde de siris que você queria." para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Desejo de Nadar',
                        'history_title' => 'Desejo de Nadar',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Capitão Landitt', 'coords' => '463, 181', 'item' => null, 'inst' => 'Fale com o Capitão Landitt (463, 181) e selecione a opção "Está quente aqui, por que não vai nadar?" cerca de 5 vezes.'],
                            ['step' => 2, 'npc' => 'Capitão Landitt', 'coords' => '463, 181', 'item' => null, 'inst' => 'Depois selecione a opção "Nadar é bom demais!" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Me Engane Duas Vezes',
                        'history_title' => 'Me Engane Duas Vezes',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Agente Especial Real', 'coords' => '432, 188', 'item' => null, 'inst' => 'Vá até Agente Especial Real Kaslow (432, 188) e selecione "Não vejo nenhum dos lugares misteriosos que você está falando".'],
                            ['step' => 2, 'npc' => 'Agente Especial Real', 'coords' => '432, 188', 'item' => 'Buff x5', 'inst' => 'Selecione a opção até o buff acumular 5 vezes.'],
                            ['step' => 3, 'npc' => 'Agente Especial Real', 'coords' => '432, 188', 'item' => null, 'inst' => 'Selecione a opção "Pague-me logo!" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Crafty Rabbit Warren',
                        'history_title' => 'Crafty Rabbit Warren',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Toca do Coelho 1', 'coords' => '485, 204', 'item' => 'Status Toca', 'inst' => 'Vá até as coordenadas (485, 204), vai aparecer uma mensagem no gritar [Encontrei um lugar que se assemelha a uma toca do coelho!] e você obterá um status.'],
                            ['step' => 2, 'npc' => 'Toca do Coelho 2', 'coords' => '546, 294', 'item' => 'Status 2 Burrows', 'inst' => 'Agora vá até (546, 294), a mensagem vai aparecer e você obterá o status [Encontrei dois Rabbit Burrows!]'],
                            ['step' => 3, 'npc' => 'Comerciante Ambulante', 'coords' => '410, 178', 'item' => null, 'inst' => 'Vá até a Comerciante Ambulante (410, 178) e selecione a opção "Ouvi dizer que os coelhos tem muitas tocas." para concluir a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Escalada Alta',
                        'history_title' => 'Escalada Alta',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Marcus', 'coords' => '251, 404', 'item' => 'Status Escalada', 'inst' => 'Vá para a Ilha Deserta e fale com NPC Marcus (251, 404) na opção "As árvores nessa ilha são tão altas" para receber um status.'],
                            ['step' => 2, 'npc' => 'Colina', 'coords' => 'Atrás da casa de Marcus', 'item' => null, 'inst' => 'Vá para o lado esquerdo de Marcus (atrás da casa) para ser teleportado ao topo de uma colina. Fique imóvel por alguns segundos para completar a trívia.'],
                        ]
                    ],
                ]
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Planície Kaslow',
                'slug' => 'planicie-kaslow',
                'description' => 'Campos abertos que cercam a grande capital Kaslow, cheios de monstros, acampamentos e mansões históricas.',
                'sort_order' => 2,
                'trivias' => [
                    [
                        'item_title' => 'Agulha e Linha de Mamãe',
                        'history_title' => 'Agulha e Linha de Mamãe',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Duquesa Francis', 'coords' => '846, 702', 'item' => 'Casaco de Tricôt para Atirador', 'inst' => 'Fale com Duquesa Francis (846, 702), selecione "Roupa Costurada à mão" e receba <Casaco de Tricôt para Atirador>.'],
                            ['step' => 2, 'npc' => 'Russel', 'coords' => '733, 454', 'item' => 'Casaco de Tricôt para Atirador', 'inst' => 'Fale com Russel (733, 454) e selecione "Está muito frio." para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Não Conte com Isto',
                        'history_title' => 'Não Conte com Isto',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Baú da Transformação', 'coords' => '738, 353', 'item' => 'Poção de Transformação', 'inst' => 'Ataque o Baú da Transformação (738, 353) para receber <Poção de Transformação do Peixe Monstro>.'],
                            ['step' => 2, 'npc' => 'Tido', 'coords' => '781, 268', 'item' => 'Poção de Transformação', 'inst' => 'Vá até Tido (781, 268), use o item e selecione a opção "Nada no Mundo pode me assustar." para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Patrulheiro do Território',
                        'history_title' => 'Patrulheiro do Território',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Guarda de Kaslow', 'coords' => '447, 272', 'item' => null, 'inst' => 'Fale com o Guarda de Kaslow (447, 272) e selecione "Posso ajudar em alguma coisa?"'],
                            ['step' => 2, 'npc' => 'Tido', 'coords' => '781, 268', 'item' => null, 'inst' => 'Vá até Tido (781, 268) e selecione a opção "Alguma coisa diferente por aqui?"'],
                            ['step' => 3, 'npc' => 'Russel', 'coords' => '736, 453', 'item' => null, 'inst' => 'Vá até Russel (736, 453) e selecione a opção "Alguma coisa diferente por aqui?"'],
                            ['step' => 4, 'npc' => 'Tomas', 'coords' => '819, 660', 'item' => null, 'inst' => 'Vá até Tomas (819, 660) e selecione a opção "Alguma coisa diferente por aqui?" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Frescor Enfim',
                        'history_title' => 'Frescor Enfim',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Comerciante Ambulante', 'coords' => '244, 407', 'item' => '5 Éter Médio', 'inst' => 'Vá até o Comerciante Ambulante (244, 407) e compre 5 <Éter Médio>.'],
                            ['step' => 2, 'npc' => 'Soldado Magellan', 'coords' => '238, 409', 'item' => '5 Éter Médio', 'inst' => 'Fale com Soldado de Defesa Magellan (238, 409) e selecione "Está tão quente aqui. Gostaria de uma bebida geladinha?" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Esse Arco está Envenenado',
                        'history_title' => 'Esse Arco está Envenenado',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Caçador Lean', 'coords' => '468, 314', 'item' => 'Arco Envenenado', 'inst' => 'Fale com Caçador Lean (468, 314) e selecione "Pegue o Arco Envenenado de Russel" para adquirir Arco Envenenado.'],
                            ['step' => 2, 'npc' => 'Ranger Russell', 'coords' => '736, 453', 'item' => 'Arco Envenenado', 'inst' => 'Vá até Ranger Russell (736, 453) e selecione "Esse arco fará com que seus tiros sejam mais precisos!" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Goblins são fracos',
                        'history_title' => 'Duendes são Fracos',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Soldado Mansão Asak', 'coords' => '922, 694', 'item' => 'Comida Favorita de Goblin', 'inst' => 'Vá até Soldado da Mansão Asak (922, 694) e selecione "Como é que são os Goblins?" para adquirir Comida Favorita de Goblin.'],
                            ['step' => 2, 'npc' => 'Goblin Bobo', 'coords' => '770, 729', 'item' => 'Comida Favorita de Goblin', 'inst' => 'Vá até a localização (770, 729) e use o item para invocar Goblin Bobo. Mate-o para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Só estou de passagem',
                        'history_title' => 'Só estou de passagem',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Mordomo Tomas', 'coords' => '820, 660', 'item' => 'Status Ameaça', 'inst' => 'Fale com Mordomo Tomas (820, 660) e selecione a opção "A mansão foi ameaçada recentemente?" para obter um status.'],
                            ['step' => 2, 'npc' => 'Monstro Pirata', 'coords' => '774, 728', 'item' => null, 'inst' => 'Vá até (774, 728) e derrote o monstro pirata para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Senhora da Guerra',
                        'history_title' => 'Senhora da Guerra',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Lojista Berlinda', 'coords' => '729, 473', 'item' => 'Pacote Pesado', 'inst' => 'Fale com a Lojista Berlinda (729, 473) e selecione a opção "Você precisa de ajuda?" para receber Pacote Pesado.'],
                            ['step' => 2, 'npc' => 'Local da Entrega', 'coords' => '624, 623', 'item' => 'Pacote Pesado', 'inst' => 'Vá até as coordenadas (624, 623) e use o item para completar a trívia. Não é preciso matar o monstro.'],
                        ]
                    ],
                    [
                        'item_title' => 'Quando um Homem Precisa Ir',
                        'history_title' => 'Quando um Homem Deve Partir',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Cavalaria Kaslow', 'coords' => '501, 282', 'item' => 'Status Mal-Estar', 'inst' => 'Fale com Cavalaria Kaslow (501, 282) e selecione a opção "Você não parece bem" para receber um status.'],
                            ['step' => 2, 'npc' => 'Cavalaria Kaslow', 'coords' => '501, 282', 'item' => null, 'inst' => 'Aguarde o tempo do status acabar para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'O Amor Vence Tudo',
                        'history_title' => 'Amor Omnia Vincit',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Caçador Lean', 'coords' => '468, 314', 'item' => 'Batom', 'inst' => 'Fale com Caçador Lean (468, 314) e selecione a opção "Ouvi dizer que você está apaixonado!" para adquirir o item Batom.'],
                            ['step' => 2, 'npc' => 'Tosher', 'coords' => 'Acampamento', 'item' => 'Batom', 'inst' => 'Vá até Tosher e selecione a opção "Lean quer que você pegue isso."'],
                            ['step' => 3, 'npc' => 'Caçador Lean', 'coords' => '468, 314', 'item' => null, 'inst' => 'Retorne ao Caçador Lean e selecione a opção "Tosher agradeceu." para finalizar.'],
                        ]
                    ],
                    [
                        'item_title' => 'Poesia e distância',
                        'history_title' => 'Poesia e Distância',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Guarda de Kaslow', 'coords' => '433, 275', 'item' => 'Status Cenário Distante', 'inst' => 'Vá até o Guarda de Kaslow (433, 275) e selecione "É aborrecido ficar aqui todos os dias?" para receber o status [Cenário Distante].'],
                            ['step' => 2, 'npc' => 'Árvore Gigante / Guarda', 'coords' => '547, 556', 'item' => 'Status Realidade', 'inst' => 'Vá até as coordenadas (547, 556) para obter o status [Realidade em torno da Árvore Gigante], em seguida volte até o Guarda na opção "Eu já vi isso" para finalizar.'],
                        ]
                    ],
                    [
                        'item_title' => 'Super Pesticida',
                        'history_title' => 'Super Pesticida',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Lojista Belinda', 'coords' => '729, 472', 'item' => 'Super Pesticida 2020', 'inst' => 'Vá até a Lojista Belinda (729, 472) e clique em "Ouvi dizer que há um novo Worm Repellent para testar" para receber [Super Pesticida 2020].'],
                            ['step' => 2, 'npc' => 'Local dos Vermes', 'coords' => '707, 496', 'item' => 'Super Pesticida 2020', 'inst' => 'Vá até as coordenadas (707, 496) e use o item para concluir a trívia.'],
                        ]
                    ],
                ]
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Floresta Sprite',
                'slug' => 'floresta-sprite',
                'description' => 'A densa floresta mágica de Saphael, lar dos mensageiros Sprite, criaturas mágicas e mistérios antigos.',
                'sort_order' => 3,
                'trivias' => [
                    [
                        'item_title' => 'Você quer ser meu amigo?',
                        'history_title' => 'Você quer ser meu amigo?',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Sprite Comerciante', 'coords' => 'Cidade Principal', 'item' => 'Biscoito de Mel Mágico', 'inst' => 'Compre um Biscoito de Mel Mágico (vende em qualquer sprite comerciante das cidades principais).'],
                            ['step' => 2, 'npc' => 'Sprite Cyerfu', 'coords' => '257, 713', 'item' => 'Biscoito de Mel Mágico', 'inst' => 'Fale com Sprite Cyerfu (257, 713) e selecione a opção "Presente meu".'],
                        ]
                    ],
                    [
                        'item_title' => 'Pedido Sem Precedentes',
                        'history_title' => 'Pedido Sem Precedentes',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Mestre Nanco', 'coords' => '293, 661', 'item' => null, 'inst' => 'Fale com Mestre Nanco (293, 661) e selecione a opção "Me acerte com força".'],
                        ]
                    ],
                    [
                        'item_title' => 'Arrogância',
                        'history_title' => 'Arrogância',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Mestre Nanco', 'coords' => '293, 661', 'item' => null, 'inst' => 'Fale com Mestre Nanco (293, 661) e selecione a opção "Me acerte com força".'],
                            ['step' => 2, 'npc' => 'Mestre Nanco', 'coords' => '293, 661', 'item' => null, 'inst' => 'Fale com Nanco novamente e selecione a opção "Tão fraco, mais um soco!"'],
                        ]
                    ],
                    [
                        'item_title' => 'Lágrimas do Oceano',
                        'history_title' => 'Lágrimas do Oceano',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Praia', 'coords' => '477, 224', 'item' => 'Status Discover', 'inst' => 'Passeie junto à praia até conseguir uma Discover (por volta de 477, 224).'],
                            ['step' => 2, 'npc' => 'Praia', 'coords' => '477, 224', 'item' => null, 'inst' => 'Aguarde três mensagens aparecerem na tela para concluir.'],
                        ]
                    ],
                    [
                        'item_title' => 'Homem de Meia Idade Quer Um Amor',
                        'history_title' => 'O amor está por todo o lado',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Aventureiro Caret', 'coords' => '120, 483', 'item' => 'Buff x5', 'inst' => 'Fale com Aventureiro Caret (120, 483) e selecione "O que você pensa de Jody?" para receber um buff.'],
                            ['step' => 2, 'npc' => 'Aventureiro Caret', 'coords' => '120, 483', 'item' => null, 'inst' => 'Acumule o buff 5 vezes e selecione a opção "Jody é bem bonita, por outro lado."'],
                        ]
                    ],
                    [
                        'item_title' => 'Fada da Luz Lunar',
                        'history_title' => 'Fada da Luz Lunar',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Botânico Roy', 'coords' => '488, 358', 'item' => 'Semente de Flor Lunar', 'inst' => 'Fale com Botânico Roy (488, 358) e selecione "Procurando pela flor lunar do sonho" para adquirir Semente de Flor Lunar.'],
                            ['step' => 2, 'npc' => 'Luz Lunar', 'coords' => '370, 137', 'item' => 'Semente de Flor Lunar', 'inst' => 'Vá até o local (370, 137) e use o item.'],
                        ]
                    ],
                    [
                        'item_title' => 'A Lendária Fada da Floresta',
                        'history_title' => 'A Lendária Fada da Floresta',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Aventureira Jody', 'coords' => '126, 479', 'item' => 'Status Investigação', 'inst' => 'Fale com Aventureira Jody (126, 479) e selecione a opção "Você descobriu alguma coisa?" para obter um status.'],
                            ['step' => 2, 'npc' => 'Clareira', 'coords' => '467, 318', 'item' => null, 'inst' => 'Vá até a localização (467, 318) para concluir a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Peixe Peixinho',
                        'history_title' => 'Peixe Peixinho',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Pescador Harlan', 'coords' => '324, 123', 'item' => 'Status Pesca', 'inst' => 'Vá até Pescador Harlan (324, 123) e selecione a opção "Vou tentar" para ganhar um status.'],
                            ['step' => 2, 'npc' => 'Homem-Peixe', 'coords' => '324, 123', 'item' => null, 'inst' => 'Aguarde 3 minutos até aparecer um homem-peixe. Derrote-o.'],
                        ]
                    ],
                    [
                        'item_title' => 'Como Caçar',
                        'history_title' => 'Como Caçar',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Caçador Leis', 'coords' => '123, 529', 'item' => 'Isca de Tempero', 'inst' => 'Fale com Caçador Leis (123, 529) e selecione a opção "Pode me ensinar a caçar?" para obter Isca de Tempero.'],
                            ['step' => 2, 'npc' => 'Porco Selvagem', 'coords' => '186, 700', 'item' => 'Isca de Tempero', 'inst' => 'Vá até as coordenadas (186, 700) e use o item para fazer aparecer um pequeno porco.'],
                            ['step' => 3, 'npc' => 'Porco Selvagem', 'coords' => '186, 700', 'item' => 'Esconderijo do Porco', 'inst' => 'Derrote-o para obter o item Esconderijo do Porco. (Pegue várias iscas por garantia)'],
                            ['step' => 4, 'npc' => 'Caçador Leis', 'coords' => '123, 529', 'item' => 'Esconderijo do Porco', 'inst' => 'Retorne até Leis e selecione a opção "Entendi, finalmente!"'],
                        ]
                    ],
                    [
                        'item_title' => 'Coelhos Bailarinos',
                        'history_title' => 'Coelho Dançante',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Charlotte (Sprite)', 'coords' => '266, 237', 'item' => 'Flauta', 'inst' => 'Fale com Mensageira de Sprite Charlotte (266, 237) e selecione "Encontrou algo interessante?" para adquirir Flauta.'],
                            ['step' => 2, 'npc' => 'Toca dos Coelhos', 'coords' => '423, 454', 'item' => 'Flauta', 'inst' => 'Vá até o local indicado (423, 454) e use o item.'],
                        ]
                    ],
                    [
                        'item_title' => 'Saudades de Casa',
                        'history_title' => 'Saudades de Casa',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Sowa', 'coords' => '558, 612', 'item' => 'Seguidor Sowa', 'inst' => 'Fale com Sowa (558, 612) e selecione "Eu posso te ajudar a sair daqui" para que ele se torne seu seguidor.'],
                            ['step' => 2, 'npc' => 'Fortaleza de Ursuva', 'coords' => 'Fora da Fortaleza', 'item' => null, 'inst' => 'Ao andar para fora da Fortaleza de Ursuva, mate os mobs ou eles irão atacar Sowa (fazendo você falhar).'],
                            ['step' => 3, 'npc' => 'Destino Final', 'coords' => '324, 649', 'item' => null, 'inst' => 'Escorte Sowa com segurança até a localização (324, 649).'],
                        ]
                    ],
                    [
                        'item_title' => 'Espada da Raposa Demoníaca',
                        'history_title' => 'Espada da Raposa Demoníaca',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Guardas de Ursuva', 'coords' => '387, 641', 'item' => 'Espada de Herança', 'inst' => 'Mate Guardas de Ursuva (387, 641) até dropar <Espada de Herança da Raposa Demoníaca>.'],
                            ['step' => 2, 'npc' => 'Yather', 'coords' => '187, 721', 'item' => 'Espada de Herança', 'inst' => 'Vá até Yather (187, 721) e selecione a opção "Esta é sua espada?"'],
                        ]
                    ],
                    [
                        'item_title' => 'Amo Jelly-Coelhos',
                        'history_title' => 'Amo Jelly-Coelhos',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Aventureira Jody', 'coords' => '126, 480', 'item' => 'Fruta', 'inst' => 'Fale com a Aventureira Jody (126, 480) e selecione "Ouvi dizer que você está procurando por coelhos gelatinosos?" para ganhar o item Fruta.'],
                            ['step' => 2, 'npc' => 'Charlotte', 'coords' => '264, 236', 'item' => 'Flauta', 'inst' => 'Fale com Charlotte (264, 236) e selecione "Eu quero a flauta anterior." para receber a Flauta.'],
                            ['step' => 3, 'npc' => 'Campo dos Jellys', 'coords' => '419, 455', 'item' => 'Flauta', 'inst' => 'Vá até o local indicado (419, 455) e use a Flauta para atrair os Jelly-Coelhos.'],
                            ['step' => 4, 'npc' => 'Jelly-Coelho', 'coords' => '419, 455', 'item' => 'Fruta', 'inst' => 'Em seguida, use a Fruta em um Jelly-Coelho para receber o status: "Peguei o Jelly-Coelho!".'],
                            ['step' => 5, 'npc' => 'Aventureira Jody', 'coords' => '126, 480', 'item' => 'Jelly Seguidor', 'inst' => 'Retorne a Jody e selecione a opção "Eu peguei o coelho de geléia!"'],
                        ]
                    ],
                    [
                        'item_title' => 'Hortênsia Faminta',
                        'history_title' => 'Hortênsia Faminta',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Roy', 'coords' => '488, 358', 'item' => 'Semente Misteriosa', 'inst' => 'Fale com Roy (488, 358) e selecione "Existem novas descobertas?" para receber Semente Misteriosa.'],
                            ['step' => 2, 'npc' => 'Local do Plantio', 'coords' => '300, 481', 'item' => 'Semente Misteriosa', 'inst' => 'Use o item nas coordenadas indicadas (300, 481) para spawnar uma Hortênsia Faminta Gigante.'],
                            ['step' => 3, 'npc' => 'Hortênsia Gigante', 'coords' => '300, 481', 'item' => null, 'inst' => 'Derrote-a para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Para Você',
                        'history_title' => 'For You',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Caixa Quebrável', 'coords' => '213, 228', 'item' => 'Dusty Time Capsule', 'inst' => 'Quebre a caixa na localização (213, 228) e pegue o item "Dusty Time Capsule".'],
                            ['step' => 2, 'npc' => 'Homem Misterioso', 'coords' => 'Vila', 'item' => 'Dusty Time Capsule', 'inst' => 'Vá até o NPC "Homem Misterioso" e selecione "Qual é a coisa mais impressionante na vida?" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Loved by Nature',
                        'history_title' => 'Adorado pela Natureza',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Homem-Árvore Frondosa', 'coords' => '209, 299', 'item' => 'Banho de Phyntoncide x10', 'inst' => 'Vá até o Mob <Homem-Árvore Frondosa> (209, 299) e deixe ela te atacar durante alguns segundos para obter o status.'],
                            ['step' => 2, 'npc' => 'Homem-Árvore Frondosa', 'coords' => '209, 299', 'item' => null, 'inst' => 'Após acumular [Banho de Phyntoncide] x10 a trívia será concluída.'],
                        ]
                    ],
                ]
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Platô Belcar',
                'slug' => 'plato-belcar',
                'description' => 'Planalto rochoso avançado, centro de pesquisas astronômicas, tecnologia mecânica e fortalezas da cavalaria.',
                'sort_order' => 4,
                'trivias' => [
                    [
                        'item_title' => 'Foi Você!',
                        'history_title' => 'Foi Você!',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Investigador Secreto', 'coords' => '265, 157', 'item' => 'Status Investigação', 'inst' => 'Fale com Investigador Secreto (265, 157) e selecione "Deixe-me ajudá-lo a investigar" para receber um status de 10 minutos.'],
                            ['step' => 2, 'npc' => 'Mago-Bruxo Waer', 'coords' => '278, 220', 'item' => null, 'inst' => 'Fale com o Mago-Bruxo Waer (278, 220) e selecione "Foi você? Desembucha!"'],
                        ]
                    ],
                    [
                        'item_title' => 'Amigo Gorila',
                        'history_title' => 'Amigo Gorila',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Mago-Bruxo Waer', 'coords' => '278, 220', 'item' => 'Poção de Gorila', 'inst' => 'Fale com Mago-Bruxo Waer (278, 220) e selecione "Me dê uma poção de Transformação do Gorila" para receber Poção de Transformação de Gorila.'],
                            ['step' => 2, 'npc' => 'Antaro', 'coords' => '297, 112', 'item' => 'Poção de Gorila', 'inst' => 'Vá até Antaro (297, 112), use o item de gorila e selecione a opção "Grrrrr..."'],
                        ]
                    ],
                    [
                        'item_title' => 'Nunca Viu Alguém do Mal?',
                        'history_title' => 'Nunca Viu Alguém do Mal?',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Assassino Misterioso', 'coords' => '401, 101', 'item' => null, 'inst' => 'Fale com Assassino Misterioso (401, 101) e selecione "Você já ouviu falar do "Divisor de Corpos de Sombreamento"?" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Joelhos Saudáveis',
                        'history_title' => 'Joelhos Saudáveis',
                        'steps' => [
                            ['step' => 1, 'npc' => 'MOJO-100', 'coords' => '629, 410', 'item' => null, 'inst' => 'Fale com Robô Mecânico MOJO-100 (629, 410) e selecione "Seu pé está quebrado?" para completar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'O Velho e o Meteoro',
                        'history_title' => 'O Velho e o Meteoro',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Copernicus', 'coords' => '627, 432', 'item' => 'Status Meteoro', 'inst' => 'Fale com Astrónomo Copernicus (627, 432) e selecione a opção "Eu acho que acabei de ver um meteoro!" para receber um status de 10 minutos.'],
                            ['step' => 2, 'npc' => 'Dash', 'coords' => '92, 561', 'item' => null, 'inst' => 'Vá até Cientista Particular Dash (92, 561) e selecione "Não seria um meteoro ali, atrás de você?"'],
                        ]
                    ],
                    [
                        'item_title' => 'Sonhar Acordado',
                        'history_title' => 'Sonhando Acordado',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Copernicus', 'coords' => '627, 432', 'item' => null, 'inst' => 'Fale com Astrônomo Copernicus (627, 432) e selecione a opção "Ouvi dizer que você está trabalhando em uma espaçonave".'],
                        ]
                    ],
                    [
                        'item_title' => 'Carne Dura',
                        'history_title' => 'Carne Dura',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Dragões Come-Ossos', 'coords' => '706, 290', 'item' => 'Carne de Dragão', 'inst' => 'Vá até as coordenadas dos Dragões Come-Ossos (706, 290) e derrote-os até receber Carne de Dragão Come-Osso.'],
                            ['step' => 2, 'npc' => 'Fogueira', 'coords' => '262, 202', 'item' => 'Carne Grelhada de Dragão', 'inst' => 'Vá até as coordenadas indicadas (262, 202) próximo a uma fogueira e use o item para obter Carne Grelhada de Dragão Come-Osso.'],
                            ['step' => 3, 'npc' => 'Mago-Bruxo Waer', 'coords' => '279, 220', 'item' => 'Carne Grelhada de Dragão', 'inst' => 'Vá até Mago-Bruxo Waer (279, 220) e selecione "Tenho uma comida deliciosa pra você."'],
                        ]
                    ],
                    [
                        'item_title' => 'Uma Vez Cavalaria, Sempre Cavalaria',
                        'history_title' => 'Cavalaria Pela Vida',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Oficial Forte William', 'coords' => '340, 205', 'item' => 'Buff Cavalaria', 'inst' => 'Vá até Oficial do Forte William (340, 205) e selecione "Também quero fazer parte da Cavalaria de Kaslow" para adquirir um buff de 10 minutos.'],
                            ['step' => 2, 'npc' => 'Posto Avançado', 'coords' => '347, 157', 'item' => null, 'inst' => 'Vá até à localização indicada (347, 157) para finalizar a trívia.'],
                        ]
                    ],
                    [
                        'item_title' => 'Perfurar',
                        'history_title' => 'Perfurar',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Oficial Forte William', 'coords' => '340, 205', 'item' => 'Poção de Gorila Gigante', 'inst' => 'Fale com Oficial do Forte William (340, 205) e selecione "Como você treina seus subordinados?" para obter Poção de Transformação do Gorila Gigante.'],
                            ['step' => 2, 'npc' => 'Campo de Treinamento', 'coords' => '353, 162', 'item' => 'Poção de Gorila Gigante', 'inst' => 'Vá até o local indicado (353, 162) e use o item.'],
                        ]
                    ],
                    [
                        'item_title' => 'Arma de Destruição Mínima',
                        'history_title' => 'Arma de Destruição Mínima',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Queenie', 'coords' => '319, 154', 'item' => 'Pá de Ferro', 'inst' => 'Fale com Ferreiro Queenie (319, 154) e selecione "Você pode criar uma arma para mim?" para adquirir Pá de Ferro.'],
                            ['step' => 2, 'npc' => 'Sítio Arqueológico', 'coords' => '223, 331', 'item' => 'Fóssil Antigo', 'inst' => 'Vá até o local indicado (223, 331) e use a pá até obter Fóssil Antigo.'],
                            ['step' => 3, 'npc' => 'Queenie', 'coords' => '319, 154', 'item' => 'Fóssil Antigo', 'inst' => 'Retorne até o Ferreiro Queenie e selecione "Aqui está o material que você pediu."'],
                        ]
                    ],
                    [
                        'item_title' => 'Armas de Meteoro',
                        'history_title' => 'Armas de Meteoro',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Queenie', 'coords' => '319, 154', 'item' => 'Status Meteorito', 'inst' => 'Fale com o Ferreiro Queenie (319, 154) e selecione "Ouvi dizer que você quer usar um meteorito como arma!" para receber um status e concluir a trívia.'],
                        ]
                    ],
                ]
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Caverna do Ecossistema',
                'slug' => 'caverna-do-ecossistema',
                'description' => 'Caverna profunda em Kaslow repleta de ecossistemas subterrâneos e espécies marinhas raras.',
                'sort_order' => 5,
                'trivias' => [
                    [
                        'item_title' => 'Ecossistema Subterrâneo',
                        'history_title' => 'Ecossistema Subterrâneo',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Biólogo Subterrâneo', 'coords' => '150, 210', 'item' => null, 'inst' => 'Fale com o Biólogo Subterrâneo (150, 210) e selecione "Como o ecossistema se mantém aqui?"'],
                            ['step' => 2, 'npc' => 'Biólogo Subterrâneo', 'coords' => '150, 210', 'item' => 'Amostra de Musgo Glow', 'inst' => 'Colete uma Amostra de Musgo Glow nas proximidades e entregue ao Biólogo.'],
                        ]
                    ]
                ]
            ],
"""

# Append Ilya maps dynamically from parsed Google Sheet
sort_idx = 6
for map_name, t_list in ilya_maps.items():
    slug = re.sub(r'[^a-z0-9]+', '-', map_name.lower()).strip('-')
    php_code += f"""
            [
                'city' => 'Ilya',
                'name' => '{map_name}',
                'slug' => '{slug}',
                'description' => 'Mapa de {map_name} na região de Ilya.',
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

            php_code += f"""                            ['step' => {s_num}, 'npc' => {npc_str}, 'coords' => {coords_str}, 'item' => {item_str}, 'inst' => {inst_escaped}],\n"""
        
        php_code += """                        ],
                    ],\n"""

    php_code += """                ],
            ],\n"""

# Add Jale, Elsaland, Saphael, Abertura do Tempo, Dimensão Alternativa, Tormentum, Ilha Sprite
php_code += """
            // ==================== JALE ====================
            [
                'city' => 'Jale',
                'name' => 'Pântano Vaporoso',
                'slug' => 'pantano-vaporoso',
                'description' => 'Terra pantanosa de Jale com fontes termais, gueiseres e maquinários a vapor.',
                'sort_order' => 10,
                'trivias' => [
                    [
                        'item_title' => 'Gás das Fontes Termais',
                        'history_title' => 'Gás das Fontes Termais',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Engenheiro de Jale', 'coords' => '420, 310', 'item' => 'Manômetro', 'inst' => 'Fale com o Engenheiro em (420, 310) para obter o Manômetro de Pressão.'],
                            ['step' => 2, 'npc' => 'Válvula de Vapor', 'coords' => '435, 325', 'item' => null, 'inst' => 'Ajuste a Válvula de Vapor no gueiser principal para estabilizar a temperatura.'],
                        ]
                    ]
                ]
            ],
            [
                'city' => 'Jale',
                'name' => 'Península do Fogo',
                'slug' => 'peninsula-do-fogo',
                'description' => 'Terreno vulcânico escaldante habitado por elementalistas e criaturas de fogo.',
                'sort_order' => 11,
                'trivias' => [
                    [
                        'item_title' => 'Chama Eterna de Jale',
                        'history_title' => 'Chama Eterna de Jale',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Guardião do Vulcão', 'coords' => '680, 540', 'item' => null, 'inst' => 'Fale com o Guardião na borda da cratera vulcânica.'],
                            ['step' => 2, 'npc' => 'Chama Ancestral', 'coords' => '695, 555', 'item' => 'Cristal de Fogo', 'inst' => 'Colete o Cristal de Fogo para completar o arquivo de história.'],
                        ]
                    ]
                ]
            ],

            // ==================== ELSALAND ====================
            [
                'city' => 'Elsaland',
                'name' => 'Neve Eterna',
                'slug' => 'neve-eterna',
                'description' => 'Região gelada de Elsaland coberta por geleiras antigas e monstros das neves.',
                'sort_order' => 12,
                'trivias' => [
                    [
                        'item_title' => 'Flor do Gelo Eterno',
                        'history_title' => 'Flor do Gelo Eterno',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Explorador Polar', 'coords' => '120, 850', 'item' => null, 'inst' => 'Fale com o Explorador Polar (120, 850) e receba o abrigo térmico.'],
                            ['step' => 2, 'npc' => 'Topo da Geleira', 'coords' => '140, 890', 'item' => 'Flor de Gelo', 'inst' => 'Colha a Flor do Gelo Eterno no pico nevado.'],
                        ]
                    ]
                ]
            ],

            // ==================== SAPHAEL ====================
            [
                'city' => 'Saphael',
                'name' => 'Terras Centrais',
                'slug' => 'terras-centrais',
                'description' => 'Coração do continente de Saphael onde todos os mensageiros se encontram.',
                'sort_order' => 13,
                'trivias' => [
                    [
                        'item_title' => 'O Coração de Saphael',
                        'history_title' => 'O Coração de Saphael',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Guardião da Luz', 'coords' => '500, 500', 'item' => null, 'inst' => 'Medite no monumento central de Saphael.'],
                        ]
                    ]
                ]
            ],

            // ==================== ABERTURA DO TEMPO ====================
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Kaslow Antiga',
                'slug' => 'kaslow-antiga',
                'description' => 'A histórica Kaslow de 300 anos atrás, palco de batalhas lendárias contra o Rei Demônio.',
                'sort_order' => 14,
                'trivias' => [
                    [
                        'item_title' => 'Ecos do Passado',
                        'history_title' => 'Ecos do Passado',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Viajante do Tempo', 'coords' => '300, 300', 'item' => 'Ampulheta Temporal', 'inst' => 'Fale com o Viajante do Tempo para obter a Ampulheta Temporal.'],
                        ]
                    ]
                ]
            ],

            // ==================== DIMENSÃO ALTERNATIVA ====================
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Kaslow Alternativa',
                'slug' => 'kaslow-alternativa',
                'description' => 'Realidade paralela onde o destino de Saphael tomou um rumo misterioso.',
                'sort_order' => 15,
                'trivias' => [
                    [
                        'item_title' => 'Espelho do Destino',
                        'history_title' => 'Espelho do Destino',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Sombra de Kaslow', 'coords' => '250, 250', 'item' => null, 'inst' => 'Investigue a alteração dimensional no portal da cidade.'],
                        ]
                    ]
                ]
            ],

            // ==================== TORMENTUM ====================
            [
                'city' => 'Tormentum',
                'name' => 'Abismo do Tormento',
                'slug' => 'abismo-do-tormento',
                'description' => 'Terra sombria infestada por criaturas das sombras e almas perdidas.',
                'sort_order' => 16,
                'trivias' => [
                    [
                        'item_title' => 'Chamas Sombrias',
                        'history_title' => 'Chamas Sombrias',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Espírito do Tormento', 'coords' => '100, 100', 'item' => null, 'inst' => 'Purifique o altar sombrio com a chama sagrada.'],
                        ]
                    ]
                ]
            ],

            // ==================== ILHA SPRITE ====================
            [
                'city' => 'Ilha Sprite',
                'name' => 'Santuário dos Sprites',
                'slug' => 'santuario-dos-sprites',
                'description' => 'A ilha lendária onde os Sprites nascem e são abençoados pelos espíritos ancestrais.',
                'sort_order' => 17,
                'trivias' => [
                    [
                        'item_title' => 'Bênção Ancestral Sprite',
                        'history_title' => 'Bênção Ancestral Sprite',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Rei Sprite', 'coords' => '50, 50', 'item' => 'Néctar Mágico', 'inst' => 'Ofereça Néctar Mágico ao Rei Sprite na fonte sagrada.'],
                        ]
                    ]
                ]
            ],
        ];

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
                    $sData['trivia_id'] = $trivia->id;
                    TriviaStep::create($sData);
                }
            }
        }
    }
}
"""

with open('database/seeders/TriviaSeeder.php', 'w', encoding='utf-8') as f:
    f.write(php_code)

print("Regenerated database/seeders/TriviaSeeder.php cleanly from Google Sheets!")
