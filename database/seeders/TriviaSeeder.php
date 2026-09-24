<?php

namespace Database\Seeders;

use App\Models\Trivia;
use App\Models\TriviaStep;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class TriviaSeeder extends Seeder
{
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        TriviaStep::truncate();
        Trivia::truncate();
        Zone::truncate();
        Schema::enableForeignKeyConstraints();

        // Primary Curator User
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
                'slug' => 'kaslow-ba-a-azul',
                'description' => 'Mapa de Baía Azul na região de Kaslow.',
                'sort_order' => 1,
                'trivias' => [
                    [
                        'item_title' => 'Peixe Seco Delicioso',
                        'history_title' => 'Peixe Seco Delicioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro Cyer', 'coordinates' => '416, 229', 'item_required' => null, 'instruction' => 'Fale com o NPC Fazendeiro Cyer (416, 229) e selecione "Mackrel delicioso?"'],
                            ['step_number' => 2, 'npc_name' => 'Mestre Mackerel', 'coordinates' => '500, 194', 'item_required' => null, 'instruction' => 'Fale com o NPC Mestre Mackerel (500, 194) (aparece das 20h até às 0h do Servidor) e troque 1g em um'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '416, 229', 'item_required' => null, 'instruction' => 'Retorne ao Fazendeiro Cyer (416,229) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mágia Básica',
                        'history_title' => 'Mágica 101',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado do Forte Adami', 'coordinates' => '641, 498', 'item_required' => null, 'instruction' => 'Fale com Soldado do Forte Adami (641, 498) e selecione "É verdade que você deseja aprender uns truques de magia?"'],
                            ['step_number' => 2, 'npc_name' => 'Ralakeshia', 'coordinates' => '634, 505', 'item_required' => null, 'instruction' => 'Vá até Ralakeshia (634, 505) e selecione "Adami espera que você o ensine alguns truques de magia." para receber .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Adami e selecione "Ralakeshia quer que você pegue esse livro." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bocas Famintas',
                        'history_title' => 'Bocas Famintas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '616, 525', 'item_required' => null, 'instruction' => 'Vá até a Lojista Era (616, 525) e compre uma Maçã Baía Azul (requer 750 de Reputação com a Família Real de Kaslow) . Não a use.'],
                            ['step_number' => 2, 'npc_name' => 'Adami', 'coordinates' => '645, 500', 'item_required' => null, 'instruction' => 'Vá até Adami (645, 500) e ande próximo ao Pássaro Solar dele. Pássaro Solar irão aparecer para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Protetor Ecológico',
                        'history_title' => 'Enfermagem Ecológica',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião da Ilhota Marcus', 'coordinates' => '252, 413', 'item_required' => 'Plano de Visitar o Recife de Corais', 'instruction' => 'Fale com Ancião da Ilhota Marcus (252, 413) e selecione "O que tem de tão especial nesta ilha?" para receber o buff [Plano de Visitar o Recife de Corais]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '125, 333', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (125, 333) e derrote o Caçador de Recifes para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Já Coletou',
                        'history_title' => 'Já Grelhado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '412, 175', 'item_required' => null, 'instruction' => 'Va até o Comerciante Ambulante (412, 175) e compre o item (requer 750 de Reputação com a Família Real de Kaslow) .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '414, 160', 'item_required' => null, 'instruction' => 'Aproxime-se da fogueira em (414, 160) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bebê Bobo e Curioso',
                        'history_title' => 'Bebê Bobo Curioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Portal Kaslow Agente Especial Real', 'coordinates' => '432, 188', 'item_required' => null, 'instruction' => 'Fale com Portal Kaslow Agente Especial Real (432, 188) e selecione "Quero usar 1 Ouro para me teletransportar para o lugar mais misterioso!". Você será teletransportado e completará a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Administrar Multi-Personagem',
                        'history_title' => 'Administrar Multi-Personagem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro Cyer', 'coordinates' => '416, 229', 'item_required' => null, 'instruction' => 'Fale com Fazendeiro Cyer (416, 229) e selecione "Você já pensou em expandir seu orquidário?"'],
                            ['step_number' => 2, 'npc_name' => 'Atalienne', 'coordinates' => '408, 219', 'item_required' => null, 'instruction' => 'Fale com Atalienne (408, 219) e clique na opção "Você avalia o problema de minhocas de Cyer." para obter Ovo Cru.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '416, 229', 'item_required' => null, 'instruction' => 'Retorne ao Fazendeiro Cyer (416,229) e selecione a opção "Eu conversei com Atalienne." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Siris no Balde',
                        'history_title' => 'Carangueijos no Balde',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Capitão Myge', 'coordinates' => '432, 183', 'item_required' => null, 'instruction' => 'Fale com Capitão Myge (432, 183) e selecione a opção "Que tipos de frutos do mar você gosta?"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Siris Apaixonados até dropar , e'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '623, 485', 'item_required' => null, 'instruction' => 'Vá até o Alquimista (623, 485) e use as no slot e faça a alquimia para obter .'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Myge e selecione a opção "Aqui está o balde de siris que você queria." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Desejo de Nadar',
                        'history_title' => 'Desejo de Nadar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Capitão Landitt', 'coordinates' => '463, 181', 'item_required' => null, 'instruction' => 'Fale com o Capitão Landitt (463, 181) selecione a opção "Está quente aqui, por que não vai nadar?" cerca de 5 vezes.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois selecione a opção "Nadar é bom demais!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Me Engane Duas Vezes',
                        'history_title' => 'Me Engane Duas Vezes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Agente Especial Real Kaslow', 'coordinates' => '432, 188', 'item_required' => null, 'instruction' => 'Vá até Agente Especial Real Kaslow (432, 188) e selecione "Não vejo nenhum dos lugares misteriosos que você está falando".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Selecione a opção até o buff acumular cinco vezes.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Selecione a opção "Pague-me logo!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Crafty Rabbit Warren',
                        'history_title' => 'Crafty Rabbit Warren',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '485, 204', 'item_required' => 'Encontrei um lugar que se assemelha a uma toca do coelho!', 'instruction' => 'Vá até as coordenadas (485, 204), vai aparecer então uma mensagem no gritar [Encontrei um lugar que se assemelha a uma toca do coelho!] E obter um status'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '546, 294', 'item_required' => 'Encontrei dois Rabbit Burrows!', 'instruction' => 'Agora você deverá ir até (546, 294), a mesma mensagem vai aparecer e você vai obter um novo status [Encontrei dois Rabbit Burrows!]'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '410, 178', 'item_required' => null, 'instruction' => 'Vá até a Comerciante Ambulante (410, 178) e seleciona a opção "Ouvi dizer que os coelhos tem muitas tocas." para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Escalada Alta',
                        'history_title' => 'Escalada Alta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marcus', 'coordinates' => '251, 404', 'item_required' => null, 'instruction' => 'Vá para a Ilha Deserta e fale com NPC Marcus (251, 404) na opção "As árvores nessa ilha são tão altas" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá para o lado esquerdo de Marcus (atrás da casa) e você será teleportado para o topo de uma colina. Você após ficar imóvel uns segundos completará a trívia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Planície Kaslow',
                'slug' => 'kaslow-plan-cie-kaslow',
                'description' => 'Mapa de Planície Kaslow na região de Kaslow.',
                'sort_order' => 2,
                'trivias' => [
                    [
                        'item_title' => 'Agulha e Linha de Mamãe',
                        'history_title' => 'Agulha e Linha de Mamãe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Duquesa Francis', 'coordinates' => '846, 702', 'item_required' => null, 'instruction' => 'Fale com Duquesa Francis (846, 702) e seleciona "Roupa Costurada à mão" e receba .'],
                            ['step_number' => 2, 'npc_name' => 'Russel', 'coordinates' => '733, 454', 'item_required' => null, 'instruction' => 'Fale com Russel (733, 454) e selecione "Está muito frio." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não Conte com Isto',
                        'history_title' => 'Não Conte com Isto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '738, 353', 'item_required' => null, 'instruction' => 'Ataque o Baú da Transformação (738, 353) para receber .'],
                            ['step_number' => 2, 'npc_name' => 'Tido', 'coordinates' => '781, 268', 'item_required' => null, 'instruction' => 'Vá até Tido (781, 268), use o item e selecione a opção "Nada no Mundo pode me assustar." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Patrulheiro do Território',
                        'history_title' => 'Patrulheiro do Território',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Guarda de Kaslow', 'coordinates' => '447, 272', 'item_required' => null, 'instruction' => 'Fale com o Guarda de Kaslow (447, 272) e selecione "Posso ajudar em alguma coisa?"'],
                            ['step_number' => 2, 'npc_name' => 'Tido', 'coordinates' => '781, 268', 'item_required' => null, 'instruction' => 'Vá até Tido (781, 268) e selecione a opção "Alguma coisa diferente por aqui?"'],
                            ['step_number' => 3, 'npc_name' => 'Russel', 'coordinates' => '736, 453', 'item_required' => null, 'instruction' => 'Vá até Russel (736, 453) e e selecione a opção "Alguma coisa diferente por aqui?"'],
                            ['step_number' => 4, 'npc_name' => 'Tomas', 'coordinates' => '819, 660', 'item_required' => null, 'instruction' => 'Vá até Tomas (819, 660) e selecione a opção "Alguma coisa diferente por aqui?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Frescor Enfim',
                        'history_title' => 'Frescor Enfim',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '244, 407', 'item_required' => null, 'instruction' => 'Vá até o Comerciante Ambulante (244, 407) e compre 5 .'],
                            ['step_number' => 2, 'npc_name' => 'Soldado de Defesa Magellan', 'coordinates' => '238, 409', 'item_required' => null, 'instruction' => 'Fale com Soldado de Defesa Magellan (238, 409) e selecione "Está tão quente aqui. Gostaria de uma bebida geladinha?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esse Arco está Envenenado',
                        'history_title' => 'Esse Arco está Envenenado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Caçador Lean', 'coordinates' => '468, 314', 'item_required' => null, 'instruction' => 'Fale com Caçador Lean (468, 314) e selecione "Pegue o Arco Envenenado de Russel" para adquirir Arco Envenenado.'],
                            ['step_number' => 2, 'npc_name' => 'Ranger Russell', 'coordinates' => '736, 453', 'item_required' => null, 'instruction' => 'Vá até Ranger Russell (736, 453) e selecione "Esse arco fará com que seus tiros sejam mais precisos!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Goblins são fracos',
                        'history_title' => 'Duendes são Fracos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado da Mansão Asak', 'coordinates' => '922, 694', 'item_required' => null, 'instruction' => 'Vá até Soldado da Mansão Asak (922, 694) e selcione "Como é que são os Goblins?" para adquirir Comida Favorita de Goblin.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '770, 729', 'item_required' => null, 'instruction' => 'Vá até a localização (770, 729) e use o item para invocar Goblin Bobo. Mate-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só estou de passagem',
                        'history_title' => 'Só estou de passagem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mordomo Tomas', 'coordinates' => '820, 660', 'item_required' => null, 'instruction' => 'Fale com Mordomo Tomas (820, 660) e selecione a opção "A mansão foi ameaçada recentemente?" para obter um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '774, 728', 'item_required' => null, 'instruction' => 'Vá até (774, 728) e derrote o monstro pirata para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Senhora da Guerra',
                        'history_title' => 'Senhora da Guerra',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lojista Berlinda', 'coordinates' => '729, 473', 'item_required' => null, 'instruction' => 'Fale com a Lojista Berlinda (729, 473) e selecione a opção "Você precisa de ajuda?" para receber Pacote Pesado.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '624, 623', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (624, 623) e use o item para completar a trívia. Não é preciso matar o monstro.'],
                        ],
                    ],
                    [
                        'item_title' => 'Quando um Homem Precisa Ir',
                        'history_title' => 'Quando um Homem Deve Partir',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cavalaria Kaslow', 'coordinates' => '501, 282', 'item_required' => null, 'instruction' => 'Fale com Cavalaria Kaslow (501, 282) e selecione a opção "Você não parece bem" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Aguarde o status acabar para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Amor Vence Tudo',
                        'history_title' => 'Amor Omnia Vincit',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Caçador Lean', 'coordinates' => '468, 314', 'item_required' => null, 'instruction' => 'Fale com Caçador Lean (468,314) e selecione a opção "Ouvi dizer que você está apaixonado!" para adquirir o item: Batom.'],
                            ['step_number' => 2, 'npc_name' => 'Tosher', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Tosher e selecione a opção "Lean quer que você pegue isso."'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao Caçador Lean e selecione a opção "Tosher agradeceu."'],
                        ],
                    ],
                    [
                        'item_title' => 'Poesia e distância',
                        'history_title' => 'Poesia e Distância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '433, 275', 'item_required' => 'Cenário Distante', 'instruction' => 'Vá até o Guarda de Kaslow (433, 275) e selecione a opção "É aborrecido ficar aqui todos os dias?" para receber o status [Cenário Distante]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '547, 556', 'item_required' => 'Realidade em torno da Árvore Gigante', 'instruction' => 'Vá até as coordenadas (547, 556) para obter o status [Realidade em torno da Árvore Gigante], em seguida volte até o Guarda na opção "Eu já vi isso" para finalizar.'],
                        ],
                    ],
                    [
                        'item_title' => 'Super Pesticida',
                        'history_title' => 'Super Pesticida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '729, 472', 'item_required' => 'Super Pesticida 2020', 'instruction' => 'Vá até a Lojista Belinda (729, 472) e clique na opção "Ouvi dizer que há um novo Worm Repellent para testar" para receber o item [Super Pesticida 2020]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '707, 496', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (707, 496) e use o item para concluir a trívia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Floresta Sprite',
                'slug' => 'kaslow-floresta-sprite',
                'description' => 'Mapa de Floresta Sprite na região de Kaslow.',
                'sort_order' => 3,
                'trivias' => [
                    [
                        'item_title' => 'Você quer ser meu amigo?',
                        'history_title' => 'Você quer ser meu amigo?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Compre um Biscoito de Mel Mágico (vende em qualquer sprite comerciante das cidades principais).'],
                            ['step_number' => 2, 'npc_name' => 'Sprite Cyerfu', 'coordinates' => '257, 713', 'item_required' => null, 'instruction' => 'Fale com Sprite Cyerfu (257,713) e selecione a opção "Presente meu".'],
                        ],
                    ],
                    [
                        'item_title' => 'Pedido Sem Precedentes',
                        'history_title' => 'Pedido Sem Precedentes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mestre Nanco', 'coordinates' => '293, 661', 'item_required' => null, 'instruction' => 'Fale com Mestre Nanco (293, 661) e selecione a opção "Me acerte com força".'],
                        ],
                    ],
                    [
                        'item_title' => 'Arrogância',
                        'history_title' => 'Arrogância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mestre Nanco', 'coordinates' => '293, 661', 'item_required' => null, 'instruction' => 'Fale com Mestre Nanco (293, 661) e selecione a opção "Me acerte com força".'],
                            ['step_number' => 2, 'npc_name' => 'Nanco', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Nanco e selecione a opção "Tão fraco, mais um soco!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Lágrimas do Oceano',
                        'history_title' => 'Lágrimas do Oceano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Passeie junto à praia até conseguir uma Discover (consegui a minha por volta de 477, 224)'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Aguarde três mensagens aparecerem na tela.'],
                        ],
                    ],
                    [
                        'item_title' => 'Homem de Meia Idade Quer Um Amor',
                        'history_title' => 'O amor está por todo o lado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aventureiro Caret', 'coordinates' => '120, 483', 'item_required' => null, 'instruction' => 'Fale com Aventureiro Caret (120, 483) e selecione "O que você pensa de Jody?" para receber um buff.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Acumule o buff 5 vezes e selecione a opção "Jody é bem bonita, por outro lado."'],
                        ],
                    ],
                    [
                        'item_title' => 'Fada da Luz Lunar',
                        'history_title' => 'Fada da Luz Lunar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Botânico Roy', 'coordinates' => '488, 358', 'item_required' => null, 'instruction' => 'Fale com Botânico Roy (488, 358) e selecione "Procurando pela flor lunar do sonho" para adquirir Semente de Flor Lunar.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '370, 137', 'item_required' => null, 'instruction' => 'Vá até o local (370, 137) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Lendária Fada da Floresta',
                        'history_title' => 'A Lendária Fada da Floresta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aventureira Jody', 'coordinates' => '126, 479', 'item_required' => null, 'instruction' => 'Fale com Aventureira Jody (126, 479) e selecione a opção "Você descobriu alguma coisa?" para obter um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '467, 318', 'item_required' => null, 'instruction' => 'Vá até a localização (467, 318)'],
                        ],
                    ],
                    [
                        'item_title' => 'Peixe Peixinho',
                        'history_title' => 'Peixe Peixinho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pescador Harlan', 'coordinates' => '324, 123', 'item_required' => null, 'instruction' => 'Vá até Pescador Harlan (324, 123) e selecione a opção "Vou tentar" para ganhar um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Aguarde 3 minutos até aparecer um homem-peixe. Derrote-o. (Não é necessário matar os monstros peixinho e peixão que aparecem durante esse tempo)'],
                        ],
                    ],
                    [
                        'item_title' => 'Como Caçar',
                        'history_title' => 'Como Caçar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Caçador Leis', 'coordinates' => '123, 529', 'item_required' => null, 'instruction' => 'Fale com Caçador Leis (123, 529) e selecione a opção "Pode me ensinar a caçar?" para obter Isca de Tempero.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '186, 700', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (186, 700) e use o item para fazer aparecer um pequeno porco.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o para obter o item Esconderijo do Porco. Caso falhe, terá que repetir o passo 1 e 2 (Recomendo pegar várias Iscas de Tempero)'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne até Leis e selecione a opção "Entendi, finalmente!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Coelhos Bailarinos',
                        'history_title' => 'Coelho Dançante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mensageira de Sprite Charlotte', 'coordinates' => '266, 237', 'item_required' => null, 'instruction' => 'Fale com Mensageira de Sprite Charlotte (266, 237) e selecione "Encontrou algo interessante?" para adquirir Flauta.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '423, 454', 'item_required' => null, 'instruction' => 'Vá até o local indicado (423, 454) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Saudades de Casa',
                        'history_title' => 'Saudades de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sowa', 'coordinates' => '558, 612', 'item_required' => null, 'instruction' => 'Fale com Sowa (558, 612) e selecione "Eu posso te ajudar a sair daqui" para que ele se torne seu seguidor.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ao andar para fora da Fortaleza de Ursuva, mate os mobs ou eles irão atacar Sowa. Isso fará com que você falhe.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '324, 649', 'item_required' => null, 'instruction' => 'Vá até o local indicado (324, 649)'],
                        ],
                    ],
                    [
                        'item_title' => 'Espada da Raposa Demoníaca',
                        'history_title' => 'Espada da Raposa Demoníaca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '387, 641', 'item_required' => null, 'instruction' => 'Mate Guardas de Ursuva (387, 641) até dropar Espada de Herança da Raposa Demoníaca.'],
                            ['step_number' => 2, 'npc_name' => 'Yather', 'coordinates' => '187, 721', 'item_required' => null, 'instruction' => 'Vá até Yather (187, 721) e selecione a opção "Esta é sua espada?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Amo Jelly-Coelhos',
                        'history_title' => 'Amo Jelly-Coelhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aventureira Jody', 'coordinates' => '126, 480', 'item_required' => null, 'instruction' => 'Fale com a Aventureira Jody (126, 480) e selecione "Ouvi dizer que você está procurando por coelhos gelatinosos?" para ganhar o item Fruta.'],
                            ['step_number' => 2, 'npc_name' => 'Charlotte', 'coordinates' => '264, 236', 'item_required' => null, 'instruction' => 'Fale com Charlotte (264, 236) e selecione "Eu quero a flauta anterior." para receber Flauta.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '419, 455', 'item_required' => null, 'instruction' => 'Vá até o local indicado (419, 455) e use a Flauta para atrair os Jelly-Coelhos.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, use a Fruta em um Jelly-Coelho para receber o status: Peguei o Jelly-Coelho! (ele começará a segui-lo, cuidado para não deixar morrer)'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Jody e selecione a opção "Eu peguei o coelho de geléia!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Hortênsia Faminta',
                        'history_title' => 'Hortênsia Faminta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Roy', 'coordinates' => '488, 358', 'item_required' => null, 'instruction' => 'Fale com Roy (488, 358) e selecione "Existem novas descobertas?" para receber Semente Misteriosa.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '300, 481', 'item_required' => null, 'instruction' => 'Use o item nas coordenadas indicadas (300, 481) para spawnar uma Hortênsia Faminta Gigante.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-a para completar.'],
                        ],
                    ],
                    [
                        'item_title' => 'Para Você',
                        'history_title' => 'For You',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '213, 228', 'item_required' => 'Dusty Time Capsule', 'instruction' => 'Quebre a caixa na localização (213, 228) e pegue o item "Dusty Time Capsule"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC "Homem Misterioso" e selecione "Qual é a coisa mais impressionante na vida?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Loved by Nature',
                        'history_title' => 'Adorado pela Natureza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '209, 299', 'item_required' => null, 'instruction' => 'Vá até o Mob (209, 299) e deixe ela te atacar durante alguns segundos para obter um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Banho de Phyntoncide', 'instruction' => 'Após acumular [Banho de Phyntoncide] x10 para concluir a trívia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Platô Belcar',
                'slug' => 'kaslow-plat-belcar',
                'description' => 'Mapa de Platô Belcar na região de Kaslow.',
                'sort_order' => 4,
                'trivias' => [
                    [
                        'item_title' => 'Foi Você!',
                        'history_title' => 'Foi Você!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '265, 157', 'item_required' => null, 'instruction' => 'Fale Investigador Secreto (265,157) e selecione "Deixe-me ajudá-lo a investigar" para receber um status que dura 10 minutos.'],
                            ['step_number' => 2, 'npc_name' => 'Mago-Bruxo Waer', 'coordinates' => '278, 220', 'item_required' => null, 'instruction' => 'Fale com o Mago-Bruxo Waer (278,220) e selecione "Foi você? Desembucha!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Amigo Gorila',
                        'history_title' => 'Amigo Gorila',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mago-Bruxo Waer', 'coordinates' => '278, 220', 'item_required' => null, 'instruction' => 'Fale com Mago-Bruxo Waer (278,220) e selecione "Me dê uma poção de Transformação do Gorila" para receber Poção de Transformação de Gorila'],
                            ['step_number' => 2, 'npc_name' => 'Antaro', 'coordinates' => '297, 112', 'item_required' => null, 'instruction' => 'Vá até Antaro (297, 112), use o item e selecione a opção "Grrrrr..."'],
                        ],
                    ],
                    [
                        'item_title' => 'Nunca Viu Alguém do Mal?',
                        'history_title' => 'Nunca Viu Alguém do Mal?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Assassino Misterioso', 'coordinates' => '401, 101', 'item_required' => null, 'instruction' => 'Fale com Assassino Misterioso (401, 101) e selecione "Você já ouviu falar do "Divisor de Corpos de Sobreamento"?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Joelhos Saudáveis',
                        'history_title' => 'Joelhos Saudáveis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Robô Mecânico MOJO-100', 'coordinates' => '629, 410', 'item_required' => null, 'instruction' => 'Fale com Robô Mecânico MOJO-100 (629, 410) e selecione "Seu pé está quebrado?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Velho e o Meteoro',
                        'history_title' => 'O Velho e o Meteoro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Astrónomo Copernicus', 'coordinates' => '627, 432', 'item_required' => null, 'instruction' => 'Fale com Astrónomo Copernicus (627, 432) e selecione a opção "Eu acho que acabei de ver um meteoro!" para receber um status de 10 minutos.'],
                            ['step_number' => 2, 'npc_name' => 'Cientista Particular Dash', 'coordinates' => '92, 561', 'item_required' => null, 'instruction' => 'Vá até Cientista Particular Dash (92, 561) e selecione "Não seria um meteoro ali, atrás de você?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Sonhar Acordado',
                        'history_title' => 'Sonhando Acordado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Astrônomo Copernicus', 'coordinates' => '627, 432', 'item_required' => null, 'instruction' => 'Fale com Astrônomo Copernicus (627, 432) e selecione a opção "Ouvi dizer que você está trabalhando em uma espaçonave".'],
                        ],
                    ],
                    [
                        'item_title' => 'Carne Dura',
                        'history_title' => 'Carne Dura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '706, 290', 'item_required' => null, 'instruction' => 'Vá até as coordenadas dos Dragões Come-Ossos (706, 290) e derrote-os até receber Carne de Dragão Come-Osso.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '262, 202', 'item_required' => null, 'instruction' => 'Vá até as coordenadas indicadas (262, 202) e use o item pra obter Carne Grelhada de Dragão Come-Osso. (Próximo a uma fogueira)'],
                            ['step_number' => 3, 'npc_name' => 'Mago-Bruxo Waer', 'coordinates' => '279, 220', 'item_required' => null, 'instruction' => 'Vá até Mago-Bruxo Waer (279, 220) e selecione "Tenho uma comida deliciosa pra você."'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Vez Cavalaria, Sempre Cavalaria',
                        'history_title' => 'Cavalaria Pela Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oficial do Forte William', 'coordinates' => '340, 205', 'item_required' => null, 'instruction' => 'Vá até Oficial do Forte William (340, 205) e selecione "Também quero fazer parte da Cavalaria de Kaslow" para adquirir um buff de 10 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '347, 157', 'item_required' => null, 'instruction' => 'Vá até à localização indicada (347, 157).'],
                        ],
                    ],
                    [
                        'item_title' => 'Perfurar',
                        'history_title' => 'Perfurar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oficial do Forte William', 'coordinates' => '340, 205', 'item_required' => null, 'instruction' => 'Fale com Oficial do Forte William (340, 205) e selecione "Como você treina seus subordinados?" para obter Poção de Transformação do Gorila Gigante.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '353, 162', 'item_required' => null, 'instruction' => 'Vá até o local indicado (353, 162) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Arma de Destruição Mínima',
                        'history_title' => 'Arma de Destruição Mínima',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferreiro Queenie', 'coordinates' => '319, 154', 'item_required' => null, 'instruction' => 'Fale com Ferreiro Queenie (319, 154) e selecione "Você pode criar uma arma para mim?" para adquirir Pá de Ferro.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '223, 331', 'item_required' => null, 'instruction' => 'Vá até o local indicado (223, 331) e use a pá até obter Fóssil Antigo.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne até o Ferreiro Queenie e selecione "Aqui está o material que você pediu."'],
                        ],
                    ],
                    [
                        'item_title' => 'Armas de Meteoro',
                        'history_title' => 'Armas de Meteoro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferreiro Queenie', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o Ferreiro Queenie e selecione "Ouvi dizer que você quer usar um meteorito como arma!" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '89, 553', 'item_required' => null, 'instruction' => 'Em seguida, procure por Dash (89, 553) e selecione "Você pode me dar alguns meteoritos?" para receber Pedaço do Meteorito.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale novamente com Queenie e selecione "Use esse meteorito para forjar uma arma para mim!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Bife ao Molho Barbecue Delicioso',
                        'history_title' => 'Bife Delicioso ao Molho Barbecue',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Iaque Tagarela (por volta de 512, 330) até dropar Carne de Iaque.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '262, 202', 'item_required' => null, 'instruction' => 'Vá até as coordenadas indicadas (262, 202) e use o item pra obter Bife ao Molho Barbecue. (Próximo a uma fogueira)'],
                            ['step_number' => 3, 'npc_name' => 'Mago-Bruxo Waer', 'coordinates' => '279, 220', 'item_required' => null, 'instruction' => 'Vá até Mago-Bruxo Waer (279, 220) e selecione "Desta vez a carne deve ser macia."'],
                        ],
                    ],
                    [
                        'item_title' => 'Apenas Ossos Normais',
                        'history_title' => 'Apenas Ossos Normais',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '140, 486', 'item_required' => null, 'instruction' => 'Derrote Servo Tanta (140, 486) até obter o item Ossos Púrpuras Escuros.'],
                            ['step_number' => 2, 'npc_name' => 'Epton', 'coordinates' => '310, 334', 'item_required' => null, 'instruction' => 'Vá até Epton (310, 334) e selecione "Eu encontrei os ossos contaminados por meteoritos."'],
                        ],
                    ],
                    [
                        'item_title' => 'Nunca Ocupado Demais para Manutenção',
                        'history_title' => 'Nunca Ocupado Demais para Manutenção',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '331, 141', 'item_required' => null, 'instruction' => 'Vá até a Lojista Allie (331, 141) e compre o item Protetor Solar.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '266, 233', 'item_required' => null, 'instruction' => 'Em seguida, fale com Maribelle (266, 233) e selecione a opção "Talvez você precise disso."'],
                        ],
                    ],
                    [
                        'item_title' => 'O Segredo do Xamã',
                        'history_title' => 'O Segredo do Xamã',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '649, 219', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (649, 219) e então irão aparecer alguns diálogos no gritar (Discover), aguarde até que a trívia se complete ao final deles.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pombinhos',
                        'history_title' => 'Pombinhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '147, 326', 'item_required' => 'Carta a Ivan', 'instruction' => 'Vá até as coordenadas (147, 326) para receber o item [Carta a Ivan] e vá até as coordenadas (246, 403) para receber a [Carta a Aldy]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '147, 326', 'item_required' => null, 'instruction' => 'Volte para (147, 326) para concluir a trívia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Kaslow',
                'name' => 'Floresta da Praga',
                'slug' => 'kaslow-floresta-da-praga',
                'description' => 'Mapa de Floresta da Praga na região de Kaslow.',
                'sort_order' => 5,
                'trivias' => [
                    [
                        'item_title' => 'Cupido por um dia',
                        'history_title' => 'Cupido por um dia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cavaleiro Romeo', 'coordinates' => '632, 682', 'item_required' => null, 'instruction' => 'Fale com Cavaleiro Romeo (632, 682) e selecione "Por favor, me ajude" para receber Carta de Amor Devoto.'],
                            ['step_number' => 2, 'npc_name' => 'Juliet', 'coordinates' => '760, 702', 'item_required' => null, 'instruction' => 'Fale com Juliet (760,702) e selecione "Leia esta carta" para receber Resposta de Julieta.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até o Cavaleiro Romeo e selecione "Esta é a resposta de Juliet."'],
                        ],
                    ],
                    [
                        'item_title' => 'Esta é a Luz',
                        'history_title' => 'Esta é a Luz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Ambulante', 'coordinates' => '340, 293', 'item_required' => null, 'instruction' => 'Vá até Comerciante Ambulante (340, 293) e compre 1x Batata Chips de Bern (requer 12000 de fama com a Família Real de Kaslow)'],
                            ['step_number' => 2, 'npc_name' => 'Aventureiro Myron', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Aventureiro Myron e selecione "Estou com tanta fome e tão fraco."'],
                        ],
                    ],
                    [
                        'item_title' => 'Guilda Vingadora',
                        'history_title' => 'Guilda Vingadora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado Explorador William', 'coordinates' => '329, 614', 'item_required' => null, 'instruction' => 'Fale com Soldado Explorador William (329, 614) e selecione "(Toque neste osso...)" para receber um status e virar um esqueleto.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Mate vários Guerreiro Lobisomen da Montanha para completar a trívia. (Completei com 5)'],
                        ],
                    ],
                    [
                        'item_title' => 'Não me Assusta',
                        'history_title' => 'Terra dos Sem Medo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '656, 161', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (656, 161) e pequenas aranhas fantasma irão aparecer por pouco tempo. Mate todas para completar.'],
                        ],
                    ],
                    [
                        'item_title' => 'BebaAté Encher',
                        'history_title' => 'Melhore Essa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lojista Benny', 'coordinates' => '612, 692', 'item_required' => null, 'instruction' => 'Vá até Lojista Benny (612, 692) e compre 5x Vinho Medicinal Pupa Envelhecida (requer 12000 de fama com a Família Real de Kaslow).'],
                            ['step_number' => 2, 'npc_name' => 'Bêbado Caído Foster', 'coordinates' => '643, 728', 'item_required' => null, 'instruction' => 'Fale com Bêbado Caído Foster, o Trezeavos (643, 728) e selecione "Soube que você aguenta seu drink" para adquirir um buff. Acumule-o 5 vezes.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale novamente com Foster e selecione "Parece que você está para desmoronar"'],
                        ],
                    ],
                    [
                        'item_title' => 'Prevalecer',
                        'history_title' => 'Protesto Inválido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ajudante Tukarnie', 'coordinates' => '667, 733', 'item_required' => null, 'instruction' => 'Fale com Ajudante Tukarnie (667, 733) e selecione "Dando uma carta disciplinar ao Tenente" para adquirir Carta Disciplinar.'],
                            ['step_number' => 2, 'npc_name' => 'Tenente Real Charna', 'coordinates' => '309, 205', 'item_required' => null, 'instruction' => 'Vá até Tenente Real Charna (309, 205) e selecione "Essa é uma carta disciplinar dos Soldados."'],
                        ],
                    ],
                    [
                        'item_title' => 'Chama Azul',
                        'history_title' => 'Chama Azul',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feiticeira Juliet', 'coordinates' => '760, 702', 'item_required' => null, 'instruction' => 'Fale com Feiticeira Juliet (760,702) e selecione "Parece que você está frustrado com algo." para obter Garrafa Mágica.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '623, 357', 'item_required' => null, 'instruction' => 'Vá até o local indicado (623, 357) e use o item para spawnar um monstro que você deve derrotar para obter Garrafa repleta de Chama azul.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne até Juliet e selecione "É isso que você queria?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Feliz Agricultura',
                        'history_title' => 'Feliz Agricultura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro', 'coordinates' => '632, 740', 'item_required' => null, 'instruction' => 'Fale com o Fazendeiro (632, 740) e selecione "Vou plantar esta semente" para receber Semente Estranha e Aparelho de Rega'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use a semente e depois o aparelho, um monstro irá spawnar, derrote-o.'],
                        ],
                    ],
                    [
                        'item_title' => 'Recurso de Água',
                        'history_title' => 'Bêbado Inverterado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chefe da Vila Pine', 'coordinates' => '705, 698', 'item_required' => null, 'instruction' => 'Fale com Chefe da Vila Pine (705, 698) e selecion a opção "Onde posso encontrar água potável?" para receber Tubo de Ensaio.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '472, 411', 'item_required' => null, 'instruction' => 'Vá até as coordenadas indicadas (472, 411) e use o item para receber Amostra de Água.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '667, 734', 'item_required' => null, 'instruction' => 'Depois, vá até Ajudante Tukarnie (667, 734) e selecione "Tenho a Amostra de Água".'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '643, 728', 'item_required' => null, 'instruction' => 'Por último, fale com Bebado Caido Foster o Trezeavos (643,728) e selecione "O cheiro no Tubo é muito parecido com o próprio odor dele."'],
                        ],
                    ],
                    [
                        'item_title' => 'Desejo dos Mortos',
                        'history_title' => 'Desejo dos Mortos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Shirlee', 'coordinates' => '658, 146', 'item_required' => null, 'instruction' => 'Fale com Shirlee (658, 146) e slecione "Como posso lhe ajudar?" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => 'Oficial Médico Mabel', 'coordinates' => '687, 744', 'item_required' => null, 'instruction' => 'Vá até Oficial Médico Mabel (687, 744) e selecione "Eu tenho uma mensagem da sua filha para você."'],
                        ],
                    ],
                    [
                        'item_title' => 'A Linguagem das Flores Sempre vai Amar Você',
                        'history_title' => 'A Linguagem das Flores Sempre vai Amar Você',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mabel', 'coordinates' => '684, 742', 'item_required' => null, 'instruction' => 'Vá até Mabel (684, 742) e selecione "Ela não quer que você fique triste." para receber Lírios Vermelhos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '657, 144', 'item_required' => null, 'instruction' => 'Em seguida, vá até Shirlee (657, 144) e selecione "Esta é a flor que sua mãe te deu."'],
                        ],
                    ],
                    [
                        'item_title' => 'É só uma Minhoca.',
                        'history_title' => 'É só uma Minhoca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mensageira de Sprite Charlotte', 'coordinates' => '690, 736', 'item_required' => null, 'instruction' => 'Fale com Mensageira de Sprite Charlotte (690, 736) e selecione "Você aprendeu algo com o livro de feitiços?" para receber Garrafa de Poção Misteriosa.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '289, 195', 'item_required' => null, 'instruction' => 'Vá até a Origem da Praga (289, 195) e use o item em qualquer monstro Minhoca Come-Praga.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lenda do Lobisomem',
                        'history_title' => 'Lenda do Lobisomem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Membro da Patrulha', 'coordinates' => '259, 782', 'item_required' => null, 'instruction' => 'Fale com Membro da Patrulha (259, 782) e selecione "Ouvi dizer que você viu pessoas se tornarem lobos?" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '228, 488', 'item_required' => null, 'instruction' => 'Vá até o local (228, 488) e fique andando até aparecer uma mensagem no gritar (esta trívia funciona apenas a noite nas terças, quintas e sábados)'],
                        ],
                    ],
                    [
                        'item_title' => 'Buraco sem Fundo',
                        'history_title' => 'Buraco sem Fundo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Agatha', 'coordinates' => '452, 216', 'item_required' => null, 'instruction' => 'Fale com Agatha (452, 216) e selecione a opção "Origem da Cavidade da Peste" para receber Rocha.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '93, 81', 'item_required' => null, 'instruction' => 'Vá até a Origem da Praga (93, 81) e tente ficar o mais próximo possível do buraco. Use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Flor do Milagre',
                        'history_title' => 'Flor do Milagre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '196, 175', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (196, 175), vai aparecer uma mensagem no gritar "Encontraste uma flor a crescer nas profundezas nas profundezas da Peste. É um milagre."'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '274, 235', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (274, 235), aparecerá outra mensagem e então a trívia será concluida.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Memória Persiste',
                        'history_title' => 'A Memória Persiste',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '66, 609', 'item_required' => 'Restos do Soldado de Guarda Kip', 'instruction' => 'Vá até as coordenadas (66, 609) para adquirir o item [Restos do Soldado de Guarda Kip]'],
                            ['step_number' => 2, 'npc_name' => 'Soldado de Defesa Tabor', 'coordinates' => '655, 649', 'item_required' => null, 'instruction' => 'Vá até o NPC Soldado de Defesa Tabor (655, 649) e selecione a opção "Os mortos estão guardando suas casas." para concluir a trívia.'],
                        ],
                    ],
                ],
            ],
            // ==================== ILYA ====================
            [
                'city' => 'Ilya',
                'name' => 'Monte Shell',
                'slug' => 'ilya-monte-shell',
                'description' => 'Mapa de Monte Shell na região de Ilya.',
                'sort_order' => 6,
                'trivias' => [
                    [
                        'item_title' => 'Porco Matsuzaka Delicioso',
                        'history_title' => 'Porco Matsuzaka Delicioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado do Forte Yuri', 'coordinates' => '368, 440', 'item_required' => null, 'instruction' => 'Fale com o Soldado do Forte Yuri (368, 440) e selecione "Eu estou com fome." para receber Corda de Porco Matsuzaka'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '242, 492', 'item_required' => null, 'instruction' => 'Vá até as Coordenadas indicadas (242, 492) e use o item para obter um status: Porco Caminhante por 5 minutos.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '335, 470', 'item_required' => null, 'instruction' => 'Leve-o até à Fogueira do Campo (335, 470)'],
                        ],
                    ],
                    [
                        'item_title' => 'Até a Próxima Reencarnação!',
                        'history_title' => 'Até a Próxima Reencarnação',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até os Porcos-Espinhos e mate vários até dropar "Relíquia do Filho de Ali".'],
                            ['step_number' => 2, 'npc_name' => 'Dono do Estaleiro Ali', 'coordinates' => '220, 200', 'item_required' => null, 'instruction' => 'Fale com Dono do Estaleiro Ali (220, 200) e selecione "Saudade do seu Filho."'],
                        ],
                    ],
                    [
                        'item_title' => 'Arrependimento do Yuri',
                        'history_title' => 'A Vingança e Yoli',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado do Forte Yuri', 'coordinates' => '368, 440', 'item_required' => null, 'instruction' => 'Vá até Soldado do Forte Yuri (368, 440) e selecione "É verdade que você caiu no chão quando estava fora da aldeia." para receber Geleia Ardentemente Quente.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '313, 489', 'item_required' => null, 'instruction' => 'Vá até as coordenadas indicadas (313, 489) e use o item para invocar Rei dos Jelly-Coelhos safados. Basta derrotá-lo.'],
                        ],
                    ],
                    [
                        'item_title' => 'Incrível Tecnologia Goblin',
                        'history_title' => 'Incrível Tecnologia Goblin',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Alquimista Blair', 'coordinates' => '382, 469', 'item_required' => null, 'instruction' => 'Fale com Alquimista Blair (382, 469) e selecione "Disseram que você tem uma pedra do som especial?" para receber Pedra de Ressonância do Goblin Imbatível.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '377, 466', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (377, 466) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Hmmm, Hambúrguer de Siri!',
                        'history_title' => 'Hmmm, Hambúrguer de Siri!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sprite Iyetta', 'coordinates' => '397, 466', 'item_required' => null, 'instruction' => 'Fale com Sprite Iyetta (397, 466) e selecione "O que aconteceu com seu rosto?" para adquirir Receita de Hambúrguer de Siri Secreta.'],
                            ['step_number' => 2, 'npc_name' => 'Comerciante Ambulante', 'coordinates' => '351, 437', 'item_required' => null, 'instruction' => 'Fale com Comerciante Ambulante (351, 437) e compre o item Casquinha de Siri Crocante (requer 750 de Reputação com a Conselho dos Antigos de Ilya)'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '382, 469', 'item_required' => null, 'instruction' => 'Vá até o Alquimista (382, 469) e use a Receita para conseguir Hambúrguer de Siri Supremo.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte novamente até Iyetta e selecione "Esse é o Hambúrguer de Siri Supremo que você queria?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Guardião dos Navios Naufragados',
                        'history_title' => 'O Anjo da Guarda do Estaleiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Reparador das Embarcações Blady', 'coordinates' => '248, 194', 'item_required' => null, 'instruction' => 'Fale com Reparador das Embarcações Blady (248, 194) e escolha "Eu vou ajudá-lo a se livrar dos Jelly-Coelhos" para receber 3x Bolsa Cheirosa.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '229, 191', 'item_required' => null, 'instruction' => 'Vá até a localização (229, 191) e use a Bolsa Cheirosa correspondente a essa localização para adquirir Pó Amarelo Restante.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '258, 180', 'item_required' => null, 'instruction' => 'Vá até a segunda localização (258, 180) e use a Bolsa Cheirosa correspondente a essa localização para adquirir Pó Roxo Restante.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '292, 219', 'item_required' => null, 'instruction' => 'Vá até a última localização (292, 219) e use a Bolsa Cheirosa correspondente a essa localização para adquirir Pó Vermelho Restante.'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale novamente com Blady e selecione "Todos os Jelly-Coelhos foram afugentados!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Gotas do Paraíso',
                        'history_title' => 'Gotas do Paraíso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dono do Estaleiro Ali', 'coordinates' => '220, 200', 'item_required' => null, 'instruction' => 'Fale com Dono do Estaleiro Ali (220, 200) e selecione "Dizem que todos os funcionários estão felizes com o trabalho" para obter Um grande balde de água gelada.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '273, 196', 'item_required' => null, 'instruction' => 'Vá até o local indicado (273, 196) e use o item.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Ali e selecione "Seus funcionários parecem adorar água fria."'],
                        ],
                    ],
                    [
                        'item_title' => 'A Lenda de Cora',
                        'history_title' => 'A Lenda de Cora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '336, 467', 'item_required' => null, 'instruction' => 'Vá até o Mago-bruxo Ifu (336, 467) e selecione "Ouvi dizer que a Cora já foi a rainha da Cocada Preta" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '342, 456', 'item_required' => null, 'instruction' => 'Em seguida, fale com Treinador Bishop (342,456) e selecione "Cora era mesmo tão forte?" para receber um segundo status.'],
                            ['step_number' => 3, 'npc_name' => 'Líder da Equipe do Forte Candice', 'coordinates' => '375, 490', 'item_required' => null, 'instruction' => 'Procure por Líder da Equipe do Forte Candice (375,490) e selecione "Cora era mesmo tão forte?" para receber mais um status.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '340, 478', 'item_required' => null, 'instruction' => 'Por fim, vá até Comerciante de Armas Cora (340, 478) e selecione "Todo mundo diz como você é forte!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Não Alimentar',
                        'history_title' => 'Não Alimentar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lobo Dócil', 'coordinates' => '370, 439', 'item_required' => null, 'instruction' => 'Vá até Lobo Dócil (370, 439) e selecione a opção "Acariciar o Lobo" 5x.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Importância da Localização',
                        'history_title' => 'A Importância da Localização',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '380, 418', 'item_required' => null, 'instruction' => 'Derrote Jelly-Coelhos Malcriados (380, 418) até obter Resíduo de Jelly-Coelho.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '311, 166', 'item_required' => null, 'instruction' => 'Derrote Jelly-Coelhos Mágicos (311, 166) até obter Pele de Jelly-Coelho.'],
                            ['step_number' => 3, 'npc_name' => 'Comerciante de Armas Borono', 'coordinates' => '379, 447', 'item_required' => null, 'instruction' => 'Vá até Comerciante de Armas Borono (379, 447) e selecione "Já é o suficiente?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Segredo Comercial',
                        'history_title' => 'Segredo Comercial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Suspeito', 'coordinates' => '341, 441', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (341, 441) e fale com o NPC Comerciante Suspeito (341, 441) e selecione na opção "O que você está fazendo aqui?" para adquirir um status'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '274, 206', 'item_required' => null, 'instruction' => 'Visite os estaleiros navais de Ali (274, 206), (275, 257), (254, 247) e (254, 214). Retorne ao NPC e selecione a opção "Isto é o que você quer." para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os cachorros são giros',
                        'history_title' => 'Os cachorros são giros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '346, 445', 'item_required' => 'Mingau de aveia', 'instruction' => 'Vá até o Comerciante Ambulante (346, 445) e compre o item [Mingau de aveia]. Vá até as coordenadas (44, 541) e use o mingau para completar a trívia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Ilya',
                'name' => 'Floresta Luz da Lua',
                'slug' => 'ilya-floresta-luz-da-lua',
                'description' => 'Mapa de Floresta Luz da Lua na região de Ilya.',
                'sort_order' => 7,
                'trivias' => [
                    [
                        'item_title' => 'Cartas na Mesa',
                        'history_title' => 'Resolvendo Situações',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ker', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Ker e escolha "Sobre o namoro do Colby" para adquirir Poção de Metamorfose.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '410, 261', 'item_required' => null, 'instruction' => 'Vá até o Aldeão Colby (410, 261) e use o item que recebeu de Ker. Selecione a opção "Ker tem algo a lhe dizer."'],
                        ],
                    ],
                    [
                        'item_title' => 'Peixe Rosa',
                        'history_title' => 'Peixe Rosa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aldeã Ker', 'coordinates' => '429, 236', 'item_required' => null, 'instruction' => 'Fale com Aldeã Ker (429,236) e selecione "Ajude-me a pegar um peixe rosa." para receber Rede de Pesca Fofinha.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '162, 120', 'item_required' => null, 'instruction' => 'Vá até as Coordenadas (162, 120) e use o item para receber Carpa Branca.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '429, 236', 'item_required' => null, 'instruction' => 'Vá até o Aldeão Colby (429, 236) e selecione "Pense em um modo de transformar o peixe rosa" para receber "Carpa Ornamental Rosa."'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne até Ker e selecione "Este é o peixe rosa que você queria."'],
                        ],
                    ],
                    [
                        'item_title' => 'Autocultivo',
                        'history_title' => 'Autocultivo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Monge Acético', 'coordinates' => '158, 119', 'item_required' => null, 'instruction' => 'Fale com o Monge Acético (158, 119) e selecione "Eu também quero tentar meditar embaixo da cachoeira para receber dois status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Aguarde o final do status de 5 minutos chamado Acético.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao Monge e selecione "Eu quero compartilhar meus pensamentos da meditação."'],
                        ],
                    ],
                    [
                        'item_title' => 'Exuberância',
                        'history_title' => 'Exuberância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Colhedor de Cogumelos Fanny', 'coordinates' => '492, 433', 'item_required' => null, 'instruction' => 'Vá até Colhedor de Cogumelos Fanny (492, 433) e selecione "Você pode me dar um pouco daqueles molhos deliciosos?" para receber Molho Caseiro para Churrasco.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '564, 182', 'item_required' => null, 'instruction' => 'Depois, fale com Colhedor de Cogumelos Watt (564, 182) e selecione "Você pode me dar um cogumelo fresquinho?" para receber Cogumelos Frescos.'],
                            ['step_number' => 3, 'npc_name' => 'Colhedor de Cogumelos Lane', 'coordinates' => '308, 344', 'item_required' => null, 'instruction' => 'Fale com Colhedor de Cogumelos Lane (308, 344) e selecione "Você sabe como assar um cogumelo delicioso?" para receber um item.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use o item Espetinhos de Cogumelos Assados com Paixão que você recebeu de Lane.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dignidade Inquestionável do Capitão',
                        'history_title' => 'A Dignidade do Capitão Não Pode ser Questionada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '516, 248', 'item_required' => null, 'instruction' => 'Vá até o Comerciante Ambulante (516, 248) e compre o item Salada de Cogumelo Silvestre (requer 2000 de Reputação com a Conselho dos Antigos de Ilya)'],
                            ['step_number' => 2, 'npc_name' => 'Capitão da Fortaleza Joe', 'coordinates' => '250, 450', 'item_required' => null, 'instruction' => 'Fale com Capitão da Fortaleza Joe (250, 450) e selecione "Eu quero comer uma salada de cogumelo silvestre."'],
                        ],
                    ],
                    [
                        'item_title' => 'Batalha dos Sonhos do Homem',
                        'history_title' => 'Um duelo dos sonhos entre homens homens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Monge Acético', 'coordinates' => '158, 119', 'item_required' => null, 'instruction' => 'Fale com o Monge Acético (158, 119) e selecione "Porque você treina tanto?"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Aguarde o Monge Acético spawnar e derrote-o.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coisas Não Descobertas da Magia',
                        'history_title' => 'Coisas Não Descobertas da Magia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feiticeira Elina', 'coordinates' => '472, 253', 'item_required' => null, 'instruction' => 'Fale com Feiticeira Elina (472, 253) e selecione "Como a pesquisa de Magia está indo?" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '471, 289', 'item_required' => null, 'instruction' => 'Vá até (471, 289) para receber um novo status chamado: A verdade sobre o acidente.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne até Elina e selecione "Notícias sobre a situação dos fogos de artíficio."'],
                        ],
                    ],
                    [
                        'item_title' => 'Falha',
                        'history_title' => 'Falha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Guarda de Ilya', 'coordinates' => '514, 554', 'item_required' => null, 'instruction' => 'Fale com Guarda de Ilya (514, 554) e selecione "O que você está pensando?" para receber Laço.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '338, 282', 'item_required' => null, 'instruction' => 'Use o item num Lobo da Floresta (338, 282) para receber o status: Lobo Capturado.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '539, 414', 'item_required' => null, 'instruction' => 'Vá até o Caçador Moro (539, 414) e selecione "Alguém quer te dar esse lobo."'],
                        ],
                    ],
                    [
                        'item_title' => 'A Porta É Ali',
                        'history_title' => 'A Porta Está Ali',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lenhador Deve', 'coordinates' => '494, 262', 'item_required' => null, 'instruction' => 'Fale com Lenhador Deve (494,262) e selecione "Você parece um pouco irritado." para adquirir Carta de Protesto.'],
                            ['step_number' => 2, 'npc_name' => 'Capataz Swafer', 'coordinates' => '462, 270', 'item_required' => null, 'instruction' => 'Fale com Capataz Swafer (462, 270) e selecione "Você parece um pouco irritado." para adquirir Carta de Protesto.'],
                            ['step_number' => 3, 'npc_name' => 'Aldeão Colby', 'coordinates' => '413, 262', 'item_required' => null, 'instruction' => 'Fale com Aldeão Colby (413, 262) e selecione "Você parece um pouco irritado." para adquirir Carta de Protesto.'],
                            ['step_number' => 4, 'npc_name' => 'Chefe da Vila Xiapuna', 'coordinates' => '456, 226', 'item_required' => null, 'instruction' => 'Vá até Chefe da Vila Xiapuna (456, 226) e selecione "Vários habitants do vilarejo não estão felizes com você."'],
                        ],
                    ],
                    [
                        'item_title' => 'Parecença Inquietante',
                        'history_title' => 'Semelhança Inquietante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião Bania', 'coordinates' => '259, 209', 'item_required' => null, 'instruction' => 'Fale com Ancião Bania (259,209) e selecione "O que você está pensando?" para receber um status que dura 30 minutos.'],
                            ['step_number' => 2, 'npc_name' => 'Sprite Demis', 'coordinates' => '248, 95', 'item_required' => null, 'instruction' => 'Vá até Sprite Demis (248,95) e selecione "Você e Dartagnan são irmãos?"'],
                        ],
                    ],
                    [
                        'item_title' => 'A Vanishing Delicacy',
                        'history_title' => 'A Vanishing Delicacy',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Cogumelos ameaçados de extinção', 'instruction' => 'Derrote os cogumelos que ficam próximos as arvores até obter o item [Cogumelos ameaçados de extinção].'],
                            ['step_number' => 2, 'npc_name' => 'Watt', 'coordinates' => '560, 189', 'item_required' => null, 'instruction' => 'Vá até as coordenadas o NPC Watt (560, 189) e selecione a opção "O Sabor Escondido" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A aparência é importante',
                        'history_title' => 'A aparência é importante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Que Aberração', 'instruction' => 'Derrote os cogumelos que ficam próximos as arvores até acumular o status [Que Aberração] x5 (Pode demorar até acumular)'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '540, 534', 'item_required' => null, 'instruction' => 'Vá até o Guarda de Ilya (540, 534) e clique na opção "Algo estranho parece estar a crescer nos degraus." para concluir a trívia'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Ilya',
                'name' => 'Floresta Antiga',
                'slug' => 'ilya-floresta-antiga',
                'description' => 'Mapa de Floresta Antiga na região de Ilya.',
                'sort_order' => 8,
                'trivias' => [
                    [
                        'item_title' => 'Cobaia Pela Primeira Vez',
                        'history_title' => 'Rato de Laboratório',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ajudante Tim', 'coordinates' => '364, 891', 'item_required' => null, 'instruction' => 'Fale com Ajudante Tim (364, 891) e selecione a opção "Tente o experimento Poção No. 1"'],
                        ],
                    ],
                    [
                        'item_title' => 'Cabra Macho',
                        'history_title' => 'Cabra Macho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Loja de Material Médico Yuma', 'coordinates' => '410, 800', 'item_required' => null, 'instruction' => 'Fale com Loja de Material Médico Yuma (410, 800) e selecione "Dê-me um jarro de Mel Fresco." para adquirir o item.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '390, 483', 'item_required' => null, 'instruction' => 'Vá até o local indicado (390, 483) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sem Fôlego',
                        'history_title' => 'Sem Fôlego',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Carteiro Post', 'coordinates' => null, 'item_required' => 'Carta de Bolai', 'instruction' => 'Fala com o NPC Carteiro Post e selecione "Deixe-me ajudar a entregar a carta!" para receber o item «Carta de Bolai»'],
                            ['step_number' => 2, 'npc_name' => 'Bolai', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até ao NPC Bolai e selecione "Estou aqui para entregar a carta pelo Boster".'],
                        ],
                    ],
                    [
                        'item_title' => 'Não bata na minha Mãe!',
                        'history_title' => 'Não machuque minha mãe!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Mamãe Urso Mel', 'instruction' => 'Mate mobs do tipo «Mamãe Urso Mel» até conseguir o item «Pata de Urso» ( Observação as vezes pode demorar cair) .'],
                            ['step_number' => 2, 'npc_name' => 'Yuma', 'coordinates' => null, 'item_required' => 'Ursinho', 'instruction' => 'Vá até o NPC Yuma e selecione "Eu tenho Pata de Urso para você" para aparecer «Ursinho» e mate-o.'],
                        ],
                    ],
                    [
                        'item_title' => 'L-l-l-l-l-lenhador',
                        'history_title' => 'Lenhadooores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ters', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Ters e selecione "Como você dá ordens ao seu assistente?" para receber o buff "Mandando no Lenhador" - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => 'Tim', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Tim e selecione "O lenhador cortou umas boas árvores para mim" para receber o buff "O Lenhador sendo Mandado" - dura 5 min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Acumule o Buff "O Lenhador sendo Mandado" 4x.'],
                        ],
                    ],
                    [
                        'item_title' => 'Evitar Incêndio',
                        'history_title' => 'Prevenção de Incendio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Angelo', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Angelo e selecione "Quero contribuir em prol da segurança da Floresta Antiga" para adquirir 3 itens: "Detetor de Umidade", "Anemômetro" e "Detector de Temperatura".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '184, 888', 'item_required' => null, 'instruction' => 'Vá até as três localizações (184, 888), (545, 527) e (283, 448) - cada item tem uma localização específica - e dê clique direito em cada item para adquirir "Relatório de Umidade", "Relatório do Vento" e "Relatório de Temperatura".'],
                            ['step_number' => 3, 'npc_name' => 'Bolai', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois de conseguir os 3 relatórios, vá até ao NPC Bolai e selecione "Trouxe os relatórios da Floresta Antiga".'],
                        ],
                    ],
                    [
                        'item_title' => 'Por favor, me dê madeira',
                        'history_title' => 'Por favor, me dê madeira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '473, 614', 'item_required' => null, 'instruction' => 'Vá até as coodenadas (473, 614) e derrube a plantinha para adquirir "Peças de Madeira".'],
                            ['step_number' => 2, 'npc_name' => 'Tim', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Tim e selecione "Você derrubou algo?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Abelha-Rainha',
                        'history_title' => 'Abelha Rainha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '209, 620', 'item_required' => 'Feromônios da Rainha', 'instruction' => '"Ande pelas coordenadas (209, 620) até entrar no status [Feromônios da Rainha].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Aguarde um pouco no lugar, derrotando as Abelhas Vampiras da Floresta que surjam até o status terminar.'],
                        ],
                    ],
                    [
                        'item_title' => 'Promotor de Mergulho',
                        'history_title' => 'Promotor de Mergulho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ters', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Ters e selecione "Ouvi dizer que você está promovendo mergulhos" para adquirir .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '542, 670', 'item_required' => 'Pernas Macias', 'instruction' => 'Use o aparelho nas coordenadas (542, 670) para entrar no status [Pernas Macias] e ser teleportado.'],
                        ],
                    ],
                    [
                        'item_title' => 'Produto da Natureza',
                        'history_title' => 'Produto da Natureza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Homem-Árvore Velhos e Homem-Árvore Guerreiros até conseguir 10 .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Nada mal', 'instruction' => 'Use os 10 Mels nos Papai Urso Mel para entrar no status [Nada mal] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Quando as Galinhas atacam',
                        'history_title' => 'Quando as Galinhas atacam',
                        'steps' => [
                        ],
                    ],
                    [
                        'item_title' => 'Mostre sua verdadeira forma!',
                        'history_title' => 'Mostre sua verdadeira forma',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ladrão Ligeiro',
                        'history_title' => 'Ladrão Ligeiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o para obter Carta Cheia de Digitais.'],
                            ['step_number' => 2, 'npc_name' => 'Post novamente', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Post novamente e selecione "Pegue a carta de volta!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Cogumelos Elásticos',
                        'history_title' => 'Cogumelos Elásticos',
                        'steps' => [
                        ],
                    ],
                    [
                        'item_title' => 'É necessário estar bem no meio, você será teleportado para outro local.',
                        'history_title' => 'É necessário estar bem no meio, você será teleportado para outro local.',
                        'steps' => [
                        ],
                    ],
                    [
                        'item_title' => 'Equilíbrio Nutricional',
                        'history_title' => 'Equilíbrio Nutricional',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '548, 670', 'item_required' => null, 'instruction' => 'Você irá receber um BUFF de "Minha Carne" durante 10 Minutos, vá falar com a Aldeã Sayla (548,670)!'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Clique em Sayla e clique na primeira opção para receber o BUFF "O meu tipo" por 10minutos, depois disso clique na segunda opção "Ela acha que você é o tipo de garoto dela" para ta concluindo a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Fanático por Ursos',
                        'history_title' => 'Fanático por Ursos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bernard', 'coordinates' => '333, 412', 'item_required' => null, 'instruction' => 'Você irá ter o disfarce do urso durante 10 minutos, vá para (333,412) para brincar com eles! após obter o status (Companheiro do urso), volte ao NPC Bernard e clique na segunda opção "Urso Adorável" para ta concluindo a trívia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Ilya',
                'name' => 'Pântano Negro',
                'slug' => 'ilya-p-ntano-negro',
                'description' => 'Mapa de Pântano Negro na região de Ilya.',
                'sort_order' => 9,
                'trivias' => [
                    [
                        'item_title' => 'Comedor de Ossos',
                        'history_title' => 'Comedor de Ossos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '43, 407', 'item_required' => null, 'instruction' => 'Ataque a Dama Misteriosa (43, 407) para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Deleite Gastronômico',
                        'history_title' => 'Deleite Gastronômico',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '92, 791', 'item_required' => null, 'instruction' => 'Ataque o Cogumelo Misterioso (92, 791) para obter Cogumelo Perfumado.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Dê clique direito no item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Descanse em Paz',
                        'history_title' => 'Descanse em Paz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Yedoda', 'coordinates' => '207, 341', 'item_required' => 'Osso Branco', 'instruction' => 'Fale com o NPC Yedoda (207, 341) e selecione "Quem pode me ajudar?" para adquirir o item «Osso Branco».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '70, 339', 'item_required' => null, 'instruction' => 'Siga até a área (70,339) e dê clique direito no item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Carne das Trevas',
                        'history_title' => 'Carne das Trevas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '378, 475', 'item_required' => 'Carne de Siri Preto', 'instruction' => 'Mate Siri Lama Negra Mutante (378, 475) para adquirir o item «Carne de Siri Preto».'],
                            ['step_number' => 2, 'npc_name' => 'Soldado do Forte Mike', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Soldado do Forte Mike e selecione "É gostosa essa carne de Siri Lama Negra Mutante?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Rapsódia da Lua',
                        'history_title' => 'Rapsódia da Luz da Lua',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cientista Oz', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Cientista Oz e selecione "Soube que você está fazendo um teste" para adquirir o item'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '411, 219', 'item_required' => null, 'instruction' => 'Vá até (411, 219) e dê clique direito para invocar um "Sanguessuga".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Vampiro semi-humano', 'instruction' => 'Mate-o para receber o buff [Vampiro semi-humano] - você vai se transformar e o buff irá durar uma hora.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC Oz e selecione "Ajude-me a voltar a ser o que eu era antes! Que dor!".'],
                        ],
                    ],
                    [
                        'item_title' => 'Lobisomem com Costas Coçando',
                        'history_title' => 'Lobisomem com Cócegas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Amazona Templária Jema', 'coordinates' => '511, 488', 'item_required' => null, 'instruction' => 'Fale com o NPC Amazona Templária Jema (511, 488) e selecione "Soube que tem um lobisomem que gosta de receber carinho de outras pessoas"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => '"Lobisomem com Cócegas" irá aparecer do seu lado e te seguirá.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '237, 672', 'item_required' => null, 'instruction' => 'Mate "Árvore Sábia" (237, 672) para obter o item .'],
                            ['step_number' => 4, 'npc_name' => 'Jema', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Jema e selecione "A magia está no "Pó Anti-coceira"" para obter o item .'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Teste do Maluco pela Ciência',
                        'history_title' => 'O Teste do Maluco pela Ciência',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Gigantes Parafuso-Solto e Gigantes Pele-Costurada até obter 3 .'],
                            ['step_number' => 2, 'npc_name' => 'Cientista Oz', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Cientista Oz e clique em "Me disseram que você está realizando pesquisas incríveis" para obter .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use a poção.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os Vampiros Não Prestam',
                        'history_title' => 'Vampiros São de Nada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cientista Oz', 'coordinates' => null, 'item_required' => 'Noite Eterna', 'instruction' => 'Fale com NPC Cientista Oz e selecione "Parece que tem algo estranho acontecendo aqui" para entrar no status [Noite Eterna] que dura 10 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '562, 207', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (562, 207) para fazer aparecer os Totens de Sacrifício e o Fantasma de Racod.'],
                        ],
                    ],
                ],
            ],
            // ==================== JALE ====================
            [
                'city' => 'Jale',
                'name' => 'Praia Roda de Ferro',
                'slug' => 'jale-praia-roda-de-ferro',
                'description' => 'Mapa de Praia Roda de Ferro na região de Jale.',
                'sort_order' => 10,
                'trivias' => [
                    [
                        'item_title' => 'Mau Olhado',
                        'history_title' => 'Mau Olhado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pescador Zoro', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Pescador Zoro e selecione "Me dê Água Benta". .'],
                            ['step_number' => 2, 'npc_name' => 'Capitão Browney', 'coordinates' => '292, 283', 'item_required' => null, 'instruction' => 'Fale com o Capitão Browney e selecione "Me dê um Papel em Branco Enfeitiçado" (292,283)'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '290, 331', 'item_required' => null, 'instruction' => 'Vá até ao alquimista Boris (290,331), clique em "Iniciar Alquimia", coloque o Papel em Branco Enfeitiçado no slot e inicie a alquimia.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '55, 263', 'item_required' => null, 'instruction' => 'Dê clique direito no Amuleto Invocador nas coordenadas (55,263).'],
                        ],
                    ],
                    [
                        'item_title' => 'Encontro Alegre',
                        'history_title' => 'Encontro Alegre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jale', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Jale, o Soldado Mecha e selecione "O robô se balança e se agita. Parece ter algo a dizer.". Irá receber o status "Robô Imediato".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '35, 241', 'item_required' => null, 'instruction' => 'Leve-o até o Montaria Mecha (35,241) e selecione "O robô se balança e se agita. Parece ter algo a dizer.".'],
                        ],
                    ],
                    [
                        'item_title' => 'Mantendo o Nível',
                        'history_title' => 'Mantenha a Dianteira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Portal Mecha Agente Mecânico', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o Portal Mecha Agente Mecânico e selecione "Leve-me de volta para o Grande Tesouro do Mundo", você será teleportado.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro Secreto do Marinheiro',
                        'history_title' => 'O Tesouro Secreto do Navegante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Passeie ao redor de Ancoradouro Browney para encontrar uma caixa do tesouro vermelha (Ex. 310,259) para obter o item Pá Enferrujada.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '88, 150', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (88,150) e clique no item.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Foto do Amor', 'instruction' => 'Ladrão de Tesouros irá aparecer, derrote-o para completar a trívia. (Você poderá obter ainda o item «Foto do Amor» após derrotar o Ladrão de Tesouros)'],
                        ],
                    ],
                    [
                        'item_title' => 'Luz Oriental',
                        'history_title' => 'Luz Oriental',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Administrador do Farol Cyloter', 'coordinates' => null, 'item_required' => 'Parte do Farol', 'instruction' => 'Fale com o NPC Administrador do Farol Cyloter e selecione "Deixe-me ajudar você a consertar o farol" para receber o item "Parte do Farol".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '492, 145', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (492, 145) e dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ainda tenho fome',
                        'history_title' => 'Ainda tenho fome',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lider da Equipe do Forte Pippen', 'coordinates' => null, 'item_required' => 'Bolo de Arroz Artesanal do Pippen', 'instruction' => 'Fale com o NPC Lider da Equipe do Forte Pippen e selecione "Soube de um soldado meio esfameado ontem" para adquirir o item "Bolo de Arroz Artesanal do Pippen".'],
                            ['step_number' => 2, 'npc_name' => 'Soldado do Forte Hayden', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Soldado do Forte Hayden e selecione "Você está com fome?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Oops!',
                        'history_title' => 'Ops!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Compre da Lojista Elma ou Comerciante Ambulante.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Entregue o item ao Guardião do Farol, selecionando a opção "Seus componentes parecem danificados. Passe um óleo neles!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Isso é pedra',
                        'history_title' => 'Isso sim é Rock!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Membro da Associação Pedra Ferro Borsda na opção "Você sabe uma ou duas coisinhas de rock?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '369, 153', 'item_required' => null, 'instruction' => 'Vá as coordenadas (369, 153), use a Máquina para completar a trívia. (Nota: Siris vão aparecer assim que usar a máquina.)'],
                        ],
                    ],
                    [
                        'item_title' => 'Hora de Montar',
                        'history_title' => 'Hora do Passeio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lider da Equipe do Forte Pippen', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Lider da Equipe do Forte Pippen e selecione "Está pensando em algo?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '104, 112', 'item_required' => null, 'instruction' => 'Vá nas coordenadas (104, 112), use o Robô para montar em uma Montaria de Robô que dura 30 minutos, dê umas voltas em circulo para adquirir o buff "Hora de Voltar".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '32, 247', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (32, 247) evitando entrar em combate com os monstros para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Melhor Isca',
                        'history_title' => 'A Melhor Isca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pescador Zoro', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Pescador Zoro e selecione "Ouvi dizer que você faz boas iscas" para receber .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Lagartas Esponjosas até obter um .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '261, 272', 'item_required' => null, 'instruction' => 'Depois fale com Montaria Mecha (261, 272) e clique em "Pancada no robô" para obter .'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o Alquimista Boris, introduza a Receita de Isca no slot e inicie a alquimia para obter .'],
                            ['step_number' => 5, 'npc_name' => 'Zoro', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Zoro e clique em "Eu fiz uma Isca de Paraufsos e Lagartas para você!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Negócios de Contrabando',
                        'history_title' => 'Negócios de Contrabando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '307, 245', 'item_required' => null, 'instruction' => 'Vá para as coordenadas (307, 245) e fale com o marinheiro da esquerda e escolha a opção "vocês dois estão falando de que?", terá o "palpite" para entrar nos detalhes.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'A seguir, fale com o marinheiro da direita, na sua única opção. Terá agora o estatuto de "Bom negócio?'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Finalmente, fale mais uma vez com o primeiro marinheiro e escolha "O chamado bom negócio é realmente...".'],
                        ],
                    ],
                    [
                        'item_title' => 'Antigo Parceiro',
                        'history_title' => 'Antigo Parceiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '75, 145', 'item_required' => null, 'instruction' => 'Caminhe perto do maquinario abandonado (75, 145), até aparecer um anúncio. Receberá a Foto Antiga com Notas.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '50, 265', 'item_required' => null, 'instruction' => 'Leve a fotografia a Hayden (50, 265) e quando falar com ele escolha a opção "Esta escavadora foi abandonada no deserto'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Montanha Mina de Vapor',
                'slug' => 'jale-montanha-mina-de-vapor',
                'description' => 'Mapa de Montanha Mina de Vapor na região de Jale.',
                'sort_order' => 11,
                'trivias' => [
                    [
                        'item_title' => 'A Natureza Contra-Ataca',
                        'history_title' => 'A Natureza Contra-Ataca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Equipe da Associação Pedra Ferro Asi', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Equipe da Associação Pedra Ferro Asi e selecione a opção "Por favor me empreste um Poder Escavador". Irá adquirir um "Poder Escavador".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '411, 346', 'item_required' => null, 'instruction' => 'vá até às coordenadas (411,346) e dê clique direito no item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Testemunha Ocular',
                        'history_title' => 'Nunca Visto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Engenheiro Bru', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Engenheiro Bru e selecione a opção "Por favor me empreste um detetor de Metal".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '520, 178', 'item_required' => null, 'instruction' => 'Use o Detetor de metal nas coordenadas (520,178).'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '467, 390', 'item_required' => null, 'instruction' => 'Entregue o Minério Desconhecido que encontrar ao Universitário Yalashi (467,390) selecionando "Ajude-me a identificar esta pedra".'],
                        ],
                    ],
                    [
                        'item_title' => 'Querida, O Robo Espichou',
                        'history_title' => 'O Robô Vai Ficar Maior',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Equipe da Associação Pedra Ferro Asi', 'coordinates' => null, 'item_required' => 'Robozinho Explorador Modelo X96', 'instruction' => 'Fale com o NPC Equipe da Associação Pedra Ferro Asi e selecione "Me empreste um robô, por favor" para receber o item «Robozinho Explorador Modelo X96».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '481, 213', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (481,213) e dê clique direito no item.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Espere até o seu robot desaparecer na mina - Robô de Mineração X96 irá aparecer, derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Especialista em Despesas',
                        'history_title' => 'Especialista em Despesas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lojista Dane', 'coordinates' => null, 'item_required' => 'Débito', 'instruction' => 'Fale com o NPC Lojista Dane e selecione "Dizem que alguém pegou dinheiro emprestado e nunca devolveu" para adquirir o estado «Débito» (dura 30min).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '213, 319', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (213,319) para ver uma Discover.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até à porta do pequeno castelo para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Despertar da pessoa com Excremento',
                        'history_title' => 'A Tarefa do Cocô',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Excremento Muito Fedorento', 'instruction' => 'Mate "Pássaro Solar de Bico Amarelo" até obter o item "Excremento Muito Fedorento".'],
                            ['step_number' => 2, 'npc_name' => 'Mecânico Saermon', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Mecânico Saermon e selecione "Eu tenho algo para você! (Apertando o nariz)" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Iguaria Perdida',
                        'history_title' => 'Muita Saudades',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mulher Tesala', 'coordinates' => null, 'item_required' => 'Carne de Coxa Deliciosa', 'instruction' => 'Fale com a NPC Mulher Tesala e selecione "Dê o lombo para meu filho Moray" para adquirir o item "Carne de Coxa Deliciosa".'],
                            ['step_number' => 2, 'npc_name' => 'Murray', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Murray e selecione "A carne de coxa quente está aqui!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Grande Sujo',
                        'history_title' => 'O Grande Sujo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com NPC Universitário Yalashi selecionando a opção "Tem alguma fonte termal aqui perto?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '430, 487', 'item_required' => null, 'instruction' => 'Vá as coordenadas (430, 487) e use o item.'],
                            ['step_number' => 3, 'npc_name' => 'Universitário Yalashi', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao NPC Universitário Yalashi e clique na opção "Encontrei a fonte termal!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Exploração da Mina',
                        'history_title' => 'Exploração da Mina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Engenheiro Bru selecionando a opção "Vou ajudar você a explorar a mina" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '576, 180', 'item_required' => null, 'instruction' => 'Vá nas coordenadas (576, 180) e use a pá para adquirir .'],
                            ['step_number' => 3, 'npc_name' => 'Engenheiro Bru', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao NPC Engenheiro Bru e clique em "Eu desenhei um mapa da mina para você" para completar uma trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mantenha-se Hidratado',
                        'history_title' => 'Mantenha-se Hidratado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Duendes Guardas para adquirir .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Renault clicando na opção "Essa garrafa é sua?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Aroma Único',
                        'history_title' => 'Aroma Único',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Equipe da Associação Pedra Ferro Asi', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Equipe da Associação Pedra Ferro Asi e selecione a opção "Que cara é essa?" para ganhar o item'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '184, 416', 'item_required' => null, 'instruction' => 'Vá até as coordenadas(184, 416) e use o item para obter'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '415, 340', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (415, 340) e use o item para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Alerta de Fumaça',
                        'history_title' => 'Alerta de Fumaça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Você vai precisar fazer o evento cronometrado da Montanha Mina do Vapor para dar continuidade a trívia. Saiba mais sobre os Cronometrados no Wikia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Máscara à prova de pó', 'instruction' => 'Após concluir o cronometrado você deve ir até o Comerciante Ambulante e comprar o item [Máscara à prova de pó]'],
                            ['step_number' => 3, 'npc_name' => 'Dylon', 'coordinates' => '407, 342', 'item_required' => null, 'instruction' => 'Fale com o NPC Dylon (407, 342) e selecione a opção "O smog está a piorar recentemente." para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Quente! Quente!',
                        'history_title' => 'Quente! Quente!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Chefe da Vila Benlen ( 529, 601) e selecione a opção "O ambiente geográfico por aqui é muito especial."'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '589, 590', 'item_required' => null, 'instruction' => 'Em seguida vá até as coordenadas (589, 590) para completar a trívia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Cordilheira Vermelha',
                'slug' => 'jale-cordilheira-vermelha',
                'description' => 'Mapa de Cordilheira Vermelha na região de Jale.',
                'sort_order' => 12,
                'trivias' => [
                    [
                        'item_title' => 'Vida de Inseto',
                        'history_title' => 'A Vida de Inseto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro Mua', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Fazendeiro Mua e selecione a opção "Eu ouvi dizer que você tem uma fórmula Inseticida Especial".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até ao Comerciante Ambulante mais próximo e compre um Adesivo Mágico.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '399, 336', 'item_required' => null, 'instruction' => 'Retorne a Mua e realize a alquimia, colocando a fórmula no slot. Irá adquirir um Super Paration - use-o nas coordenadas (399, 336).'],
                        ],
                    ],
                    [
                        'item_title' => 'Águas Termais Energéticas',
                        'history_title' => 'Águas Termais Energéticas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Geólogo Maud', 'coordinates' => null, 'item_required' => 'Picareta', 'instruction' => 'Fale com o NPC Geólogo Maud e selecione a opção "Fontes Termais?" - irá receber o item "Picareta".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '454, 167', 'item_required' => null, 'instruction' => 'Dê clique direito neste item nas coordenadas (454, 167).'],
                        ],
                    ],
                    [
                        'item_title' => 'Romance Engarrafado',
                        'history_title' => 'Romance Engarrafado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '867, 133', 'item_required' => 'Mensagem na Garrafa', 'instruction' => 'Vá até as coordenadas (867,133) e ataque a grama para obter o item «Mensagem na Garrafa».'],
                            ['step_number' => 2, 'npc_name' => 'Soldado Cansado Wood', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até ao NPC Soldado Cansado Wood e selecione "Sentindo um vazio, solidão e frio" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sempre Jantar Fora',
                        'history_title' => 'Sempre Jantar Fora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chefe da Vila Sangil', 'coordinates' => null, 'item_required' => 'Lancheira Vegetariana do Papai', 'instruction' => 'Fale com o NPC Chefe da Vila Sangil e selecione "Ajude-me a enviar uma marmita para Wayne" para adquirir o item «Lancheira Vegetariana do Papai».'],
                            ['step_number' => 2, 'npc_name' => 'Filho do Chefe da Vila Wayne', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Filho do Chefe da Vila Wayne e selecione "Que mudança na alimentação" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'É Mais Facil Invocar um Espirito Maligno do que um Bom',
                        'history_title' => 'Verdadeiro Crente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Wayne', 'coordinates' => null, 'item_required' => 'Escultura Bizarra', 'instruction' => 'Fale com o NPC Wayne e selecione "Você acredita em Deus?" para adquirir o item "Escultura Bizarra".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '718, 308', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (718, 308) e dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Quero Ser o Rei da Geologia',
                        'history_title' => 'Eu quero ser um mestre Geólogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menino Mimi', 'coordinates' => null, 'item_required' => 'Mapa Artesanal de Maud', 'instruction' => 'Fale com o NPC Menino Mimi e selecione "Quem é seu ídolo?" para adquirir o item "Mapa Artesanal de Maud".'],
                            ['step_number' => 2, 'npc_name' => 'Geólogo Maud', 'coordinates' => null, 'item_required' => 'Mapa assinado por Maud', 'instruction' => 'Fale com o NPC Geólogo Maud e selecione "Tem um garotinho que te idolatra" para adquirir o item "Mapa assinado por Maud".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até ao Mimi e selecione "Esse é um mapa assinado por Maud" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Procure pelo Ovo Frito',
                        'history_title' => 'Procure pelo Ovo Frito',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '241, 350', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (241, 350), derrote o casulo verde para adquirir .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com NPC Geológo Maud na opção "Dizem que você cozinha comida nas fontes termais" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Aspirante a Marinheiro',
                        'history_title' => 'Pseudo-Marinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Guardas Karzak até adquirir .'],
                            ['step_number' => 2, 'npc_name' => 'Perseguidor dos Sonhos Jamie', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Perseguidor dos Sonhos Jamie e clique em "Aqui está seu projeto" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Animal de Estimação Perdido',
                        'history_title' => 'Mascote Perdida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mulher Miranda', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com a NPC Mulher Miranda e selecione "Você parece triste. O que aconteceu?" para adquirir .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '495, 112', 'item_required' => 'Pesquisar Mascote', 'instruction' => 'Vá até (495, 112) use o item para entrar no status [Pesquisar Mascote] - dura 10 min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '506, 411', 'item_required' => 'Mascote Meigo', 'instruction' => 'Invocará também um «Mascote Meigo» que terá de ser entregue (sem deixá-lo morrer) nas coordenadas (506, 411), perto da Miranda para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Troca com um Interno',
                        'history_title' => 'Comércio Interno',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lojista Raymond', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Lojista Raymond e selecione "Você está colecionando essa coisa, não é?".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'De seguida, derrote Escorpiões Vermelhos (perto das coordenadas 615, 86) até adquirir .'],
                            ['step_number' => 3, 'npc_name' => 'Lojista Raymond', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao NPC Lojista Raymond e clique na opção "É isso o que você está procurando, não é?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Picando',
                        'history_title' => 'Picando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Escorpião Vermelho', 'coordinates' => '604, 82', 'item_required' => null, 'instruction' => 'Vá até Escorpião Vermelho (604, 82) e mate-o para receber um buff.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Acumule o buff 20x matando 20 escorpiões.'],
                        ],
                    ],
                    [
                        'item_title' => 'Beleza Incomparável',
                        'history_title' => 'Beleza Incomparável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Perseguidor de Sonhos Jamie', 'coordinates' => '865, 137', 'item_required' => null, 'instruction' => 'Fale com o NPC Perseguidor de Sonhos Jamie (865, 137) e selecione "Ouvi dizer que você tem uma foto de uma mulher bonita?" para receber Foto em Preto e Branco.'],
                            ['step_number' => 2, 'npc_name' => 'Mulher Miranda', 'coordinates' => '510, 412', 'item_required' => null, 'instruction' => 'Vá até Mulher Miranda (510, 412) e selecione "Você conhece essa pessoa?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Vamos Deixar que Profissionais lidem com Isso',
                        'history_title' => 'Vamos Deixar que Profissionais lidem com Isso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Geólogo Maud', 'coordinates' => '462, 186', 'item_required' => null, 'instruction' => 'Vá até Geólogo Maud (462, 186) e selecione "Existe uma maneira de ativar o solo?" para receber Jarra de Minhoca.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '526, 347', 'item_required' => null, 'instruction' => 'Vá até as coordenadas indicadas (526, 347) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Vista do Olho de Pássaro',
                        'history_title' => 'Vista do Olho de Pássaro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menino Mimi', 'coordinates' => '508, 414', 'item_required' => null, 'instruction' => 'Fale com Menino Mimi (508, 414) e selecione "Eu ouvi dizer que você conhece um lugar onde você pode ver a vila inteira?" para ganhar um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '645, 342', 'item_required' => null, 'instruction' => 'Vá até (645, 342).'],
                        ],
                    ],
                    [
                        'item_title' => 'Visão do Futuro',
                        'history_title' => 'Visão do Futuro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com a Aldeã e escolhemos a opção "Este lugar é pobre". Recebemos o buff "Saudades das grandes cidades".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '506, 411', 'item_required' => null, 'instruction' => 'Agora falamos com Miranda (506, 411) e com Ella (505, 385), e voltamos para a Aldeã. Ao falar com ela, escolhemos "Respostas sobre o futuro".'],
                        ],
                    ],
                    [
                        'item_title' => 'O Jogo Acabou?',
                        'history_title' => 'O Jogo Acabou?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '460, 365', 'item_required' => null, 'instruction' => 'Dirija-se ao celeiro próximo a (460, 365). Vários diálogos aparecerão. Aguarde até que eles terminem de aparecer e o feito seja concluído.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Ilha do Sul',
                'slug' => 'jale-ilha-do-sul',
                'description' => 'Mapa de Ilha do Sul na região de Jale.',
                'sort_order' => 13,
                'trivias' => [
                    [
                        'item_title' => 'João Honesto',
                        'history_title' => 'João Honesto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '216, 541', 'item_required' => null, 'instruction' => 'Destrua Baú Naufragado (216, 541). Para dropar "Tesouro de Casas"'],
                            ['step_number' => 2, 'npc_name' => 'Pessoa Rica Casas', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Pessoa Rica Casas, falando com ele e selecionando "Você perdeu isso?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Regresso Antes de Voltar',
                        'history_title' => 'Regresso Antes de Voltar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pessoa Rica Casas', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com NPC Pessoa Rica Casas e selecione a opção "Você quer voltar para a Ilha Angoya?" para obter um .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '255, 556', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (255, 556) e use o item para obter (dois homens-peixes aparecerão para o atacar).'],
                            ['step_number' => 3, 'npc_name' => 'Pessoa Rica Casas', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao NPC Pessoa Rica Casas e clique em "Encontrei algo da sereia que parece valioso" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coração do Oceano',
                        'history_title' => 'Coração do Oceano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pescadora Elena', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com a NPC Pescadora Elena e selecione "Sobre o amuleto no seu peito".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '263, 976', 'item_required' => null, 'instruction' => 'Dê clique direito neste item na localização de coordenadas (263, 976).'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Devolva o amuleto a NPC Pescadora Elena selecionando "Devolva o amuleto reabastecido".'],
                        ],
                    ],
                    [
                        'item_title' => 'Onde está o amor?',
                        'history_title' => 'Onde está o amor?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '587, 808', 'item_required' => 'Carta em uma Garrafa Coberta de Areia', 'instruction' => 'Vá até às coordenadas (587, 808) e ataque a caixa do tesouro para obter o item «Carta em uma Garrafa Coberta de Areia».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Pescadora Elena. Selecione "Acredito que o amor encontrou-se com o destino!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Presente do Coração',
                        'history_title' => 'Presente do Coração',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado de Defesa Jacques', 'coordinates' => null, 'item_required' => 'Fórmula para Armadura de Liga de Alumínio', 'instruction' => 'Fale com o NPC Soldado de Defesa Jacques e selecione "Eu quero te pedir um favor...." para adquirir o item «Fórmula para Armadura de Liga de Alumínio»'],
                            ['step_number' => 2, 'npc_name' => 'Comerciante de Armas Tobys', 'coordinates' => null, 'item_required' => 'Liga de Alumínio', 'instruction' => 'vá até o NPC Comerciante de Armas Tobys e selecione "Dizem que você possui um metal misterioso" para receber o item «Liga de Alumínio».'],
                            ['step_number' => 3, 'npc_name' => 'Comerciante Armaduras Cheryl', 'coordinates' => null, 'item_required' => 'Tecido de Anjo', 'instruction' => 'Para receber o item «Tecido de Anjo» - fale com o NPC Comerciante Armaduras Cheryl e selecione "Dizem que você tem pano misterioso"'],
                            ['step_number' => 4, 'npc_name' => 'Lubu', 'coordinates' => null, 'item_required' => 'Armadura de Liga de Alumínio', 'instruction' => 'Vá até o NPC Lubu para fazer o item «Armadura de Liga de Alumínio» (Iniciar alquimia e arraste a fórmula) e de seguida selecionar "Um agrado que veio de longe" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A coisa que você não sabe',
                        'history_title' => 'Algo que você não sabe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Naiauburn', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Naiauburn e selecione "Você sabe mesmo de tudo?" para obter o buff "Qual o nome do Necromante" - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até ao Morto Desconhecido e selecione "Qual é o seu nome mesmo?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sabe-Tudo',
                        'history_title' => 'Sabe-Tudo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Dragão Veloz da Ilha do Sul, Dragão Veloz da Selva e Dragão Agressor Veloz até dropar 10 .'],
                            ['step_number' => 2, 'npc_name' => 'Naiauburn', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Naiauburn e clique na opção "Você sabe o que é este fragmento?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Visão de Tirar o Fôlego',
                        'history_title' => 'É solitário Aqui em Cima',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Base Secreta de Lubu', 'instruction' => 'Fale com o NPC Lubu na opção "Qual é a melhor paisagem por aqui?" para obter o status [Base Secreta de Lubu] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '582, 305', 'item_required' => null, 'instruction' => 'Vá para as coordenadas (582, 305) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Como Ficar Feliz',
                        'history_title' => 'Como Ser Feliz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Lubu na opção "Não acha entediante ficar em pé aqui o dia inteiro?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '645, 125', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (645, 125) para usar o item e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ser Bonita é a Justiça',
                        'history_title' => 'Ser Bonita é a Justiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Promessa com a Menina', 'instruction' => 'Fale com NPC Weillian na opção "Você tem um machado para parar os homens-peixe?" para entrar no status [Promessa com a Menina] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Sangue de Peixe Esparramado', 'instruction' => 'Derrote Guerreiros Homem-Peixe e/ou Oráculo Homem-Peixe para obter o status [Sangue de Peixe Esparramado].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Continue derrotando-os até acumular o status 10x. Retorne a Weillian e clique na opção "Acabei com um homem-peixe aqui perto" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Eu escolho ficar em silêncio',
                        'history_title' => 'Eu escolho ficar em silêncio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '184, 917', 'item_required' => null, 'instruction' => 'Vá até o Sprite Tarferg (184, 917) e selecione "Olhe pra ele"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, selecione "Continue olhando pra ele"'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Por último, selecione "Por que você não diz alguma coisa?"'],
                        ],
                    ],
                    [
                        'item_title' => 'A floresta e as árvores',
                        'history_title' => 'A floresta e as árvores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '574, 1066', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (574, 1066) e quebre o jarro para receber Vara de Pescar Delgada.'],
                            ['step_number' => 2, 'npc_name' => 'Ferlo', 'coordinates' => '575, 1064', 'item_required' => null, 'instruction' => 'Fale com Ferlo (575, 1064) e selecione "Você viu minha vara de pescar?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Você nunca está ocupado demais para ter preguiça',
                        'history_title' => 'Você nunca está ocupado demais para ter preguiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lubu', 'coordinates' => '676, 461', 'item_required' => null, 'instruction' => 'Fale com Lubu (676, 461) e selecione "Ouvi dizer que os homens-peixe gostam de afrouxar?"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '326, 634', 'item_required' => null, 'instruction' => 'Vá até o local indicado (326, 634).'],
                        ],
                    ],
                    [
                        'item_title' => 'É a Vida',
                        'history_title' => 'É a Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marinheiro', 'coordinates' => '632, 1088', 'item_required' => null, 'instruction' => 'Fale com Marinheiro (632, 1088) e selecione "O que você está olhando?"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '594, 959', 'item_required' => null, 'instruction' => 'Ande até (594, 959) para receber o buff "É a vida" e espere 1 minuto.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sem Inimigos no Shoping!',
                        'history_title' => 'Sem Inimigos no Shoping!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cheryl', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Cheryl, escolhendo a opção "Tenho uma ideia audaciosa sobre negócios". Vá derrotar Fritz, o Primeiro Oficial do Mar Morto. Você receberá um bônus e é necessário retornar a Cheryl.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com ela e escolha a opção "Este é o resultado das negociações...".'],
                        ],
                    ],
                    [
                        'item_title' => 'Minha Lenda',
                        'history_title' => 'Minha Lenda',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Fermen', 'coordinates' => '588, 1100', 'item_required' => null, 'instruction' => 'Fale com o Comerciante Fermen e compre a Placa de Matrícula. Em seguida, vá falar com o Tendero Fermen (588, 1100) e escolha a opção "Matrícula?".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Ilha Angoya',
                'slug' => 'jale-ilha-angoya',
                'description' => 'Mapa de Ilha Angoya na região de Jale.',
                'sort_order' => 14,
                'trivias' => [
                    [
                        'item_title' => 'Virando o Copo',
                        'history_title' => 'Virando o Copo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '955, 551', 'item_required' => null, 'instruction' => 'Ataque Jarro Quebrado (955, 551) e pegue o drop "Sprite Ligeirinho".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Entregue o item a Viajante Cansado selecionando "Você está cansado?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Adeus, meu Amor',
                        'history_title' => 'Adeus, meu Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Velho Poe', 'coordinates' => '951, 497', 'item_required' => null, 'instruction' => 'Fale com Velho Poe (951,497) e pergunte sobre o noivo da Maggie (irá receber a primeira parte da carta).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '938, 528', 'item_required' => null, 'instruction' => 'De seguida, fale com Chavez (938,528) e pergunte o mesmo (irá conseguir a segunda parte da carta).'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '878, 429', 'item_required' => null, 'instruction' => 'Finalmente, fale com Bulon (878,429) para conseguir a terceira parte da carta (obs.: há três Bulon, só o das coordenadas tem o item).'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '905, 512', 'item_required' => null, 'instruction' => 'Dirija-se ao alquimista para reunir as três partes e devolva a carta para Maggie (905,512).'],
                        ],
                    ],
                    [
                        'item_title' => 'Tempestade Perfeita',
                        'history_title' => 'Tempestade Perfeita',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Viajante', 'coordinates' => null, 'item_required' => 'Resposta do Soldado Cansado', 'instruction' => 'Fale com o NPC Viajante e selecione "Há uma carta a ser entregue" para adquirir o item «Resposta do Soldado Cansado» .'],
                            ['step_number' => 2, 'npc_name' => 'Weidor', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, fale com o NPC Weidor e selecione "Tenho uma carta para você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Golpe de Sorte',
                        'history_title' => 'Golpe de Sorte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pequeno Jan', 'coordinates' => null, 'item_required' => 'postador Inveterado', 'instruction' => 'Vá até o NPC Pequeno Jan e selecione "Eu posso ajudar a aumentar a sua sorte de aposta" (usa 5g) para receber o estado «postador Inveterado» (dura 5min).'],
                            ['step_number' => 2, 'npc_name' => 'Chi', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Chi e selecione "Quero apostar em você na competição" (usa-se mais 5g) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Magnata dos Transportes',
                        'history_title' => 'Magnata dos Transportes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oleanda', 'coordinates' => null, 'item_required' => 'Projeto de Barco', 'instruction' => 'Fale com Oleanda e selecione "Como é que se faz para construir um barco?" para adquirir o item "Projeto de Barco".'],
                            ['step_number' => 2, 'npc_name' => 'Barbi', 'coordinates' => '1022, 350', 'item_required' => null, 'instruction' => 'Fale com o NPC Barbi (1022, 350) - selecione "Por favor, me dê as peças de que preciso para construir um barco" para adquirir "Pedaço do Barco".'],
                            ['step_number' => 3, 'npc_name' => 'Rex', 'coordinates' => '550, 283', 'item_required' => null, 'instruction' => 'Fale com o NPC Rex (550, 283) - selecione "Por favor, me dê um pouco de adesivo." para adquirir "Adesivo".'],
                            ['step_number' => 4, 'npc_name' => 'Alquimista', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Alquimista para fazer o seu "Barco Mecânico Pequeno" assim que obter a fórmula e as duas partes.'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até Oleanda e selecione a opção "Esse é meu barco mecânico!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Também Quero ser um Mestre Mergulhador',
                        'history_title' => 'Também Quero ser um Mestre do Mergulho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mulia', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com a NPC Mulia e selecione "Passando uma licença de mergulho" para obter o buff "Mergulhador Aprendiz" - dura 10 min'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '111, 319', 'item_required' => null, 'instruction' => 'Vá até (111, 319). Ande em redor da área até conseguir a mensagem no chat Gritar "Depois de você reviver, domina a arte do mergulho. Relatar a Mulia!" - irá obter o buff "e veja como alguém pode se afogar" que dura 10min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até Mulia e selecione "Mergulhar não é tão difícil quanto eu imaginava." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Nascimento de um Novo Jogo de Lavagem de Dinheiro',
                        'history_title' => 'O Nascimento de um Novo Jogo de Lavagem de Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Pesquisa', 'instruction' => 'Fale com o NPC Akai na opção "O que você está fazendo?" para entrar no status [Pesquisa] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '932, 512', 'item_required' => 'Jogo de Lavagem de Dinheiro 1-4', 'instruction' => 'Fale com 4 NPCs Funcionários diferentes, selecionando em cada um na opção "O que você acha da diversão na Ilha Angoya?", nas coordenadas (932, 512), (979, 512), (989, 528) e (996, 482) para obter os status [Jogo de Lavagem de Dinheiro 1-4].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Akai e selecione a opção "Resumo da diversão na Ilha Angoya" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Envolver-se',
                        'history_title' => 'Envolver-se',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Desafio de Mergulho em Profundidade', 'instruction' => 'Fale com a NPC Mulia na opção "Eu treinei muito para melhorar minhas habilidades de mergulho!" para entrar no status [Desafio de Mergulho em Profundidade] - dura 10 min. V'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '238, 71', 'item_required' => 'Jovem Demais', 'instruction' => 'á até as coordenadas (238, 71) para entrar nos status [Jovem Demais] - dura 5 min - e [Quase Morto] - dura 1 min. Será teleportado para perto de Mulia.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com ela selecionando "O que aconteceu comigo?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dragão Construtor Naval',
                        'history_title' => 'Drake, o Carpinteiro Naval',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Rex selecionando "Você está preocupado com o prazo curto para a construção de um navio?" para adquirir .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Dragão Cruel', 'instruction' => 'Use o item sobre um «Dragão Cruel» para entrar no status [Draco Cruel Capturado].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Leve-o até Rex e clique em "Mais um carpinteiro de ribeira chegando" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Vida é uma Aposta',
                        'history_title' => 'A Vida é Imprevisível',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Cego Roubado', 'instruction' => 'Fale com o NPC Akai na opção "Aposto 1G" para obter o status [Cego Roubado] ou [Eu Ganhei]. Se obter o status [Cego Roubado], aposte novamente. Se obter o status [Eu Ganhei], completa a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Eu simplesmente AMO Suco de Coco!',
                        'history_title' => 'Eu simplesmente AMO Suco de Coco!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Elimine Jelly-Coelho Cabeça de Coco ou Jelly-Coelho Cocobongo (por volta de 730, 534) até obter 10x Cocos Deliciosos.'],
                            ['step_number' => 2, 'npc_name' => 'Mandor', 'coordinates' => '902, 458', 'item_required' => null, 'instruction' => 'Vá até Mandor (902, 458) e selecione "Você está com sede?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Mão Amiga',
                        'history_title' => 'Mão Amiga',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chloe', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Chloe e selecione "Você precisa de ajuda?" para receber um status.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '643, 583', 'item_required' => null, 'instruction' => 'Derrote Pássaro Solar Tropical (643, 583) para acumular o buff 30x.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Chloe e selecione "Está feito!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Adega Privada',
                        'history_title' => 'Adega Privada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '830, 776', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (830, 776) e derrote o baú para receber Vinho Fino.'],
                            ['step_number' => 2, 'npc_name' => 'Marlin', 'coordinates' => '855, 373', 'item_required' => null, 'instruction' => 'Vá até Marlin (855, 373) e selecione "Esta garrafa de vinho é preciosa?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Grande Vazio',
                        'history_title' => 'Grande Vazio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '731, 951', 'item_required' => 'Paciência', 'instruction' => 'Vá até (731, 951) e fique em frente às Estátuas de Pedra Hamo para receber um buff [Paciência]. Espere ele sumir (2 minutos) para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Escolha entre Amor e Carreira',
                        'history_title' => 'Escolha entre Amor e Carreira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Funcionario', 'coordinates' => '997, 482', 'item_required' => null, 'instruction' => 'Falamos com o NPC Funcionario (997,482) e escolhemos "O que você acha do amor?". Em seguida, falamos com o funcionário em (989, 528) e escolhemos "O que você acha do romance no escritório?".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Levamos a resposta para o NPC anterior, na opção "O garoto bonito que você admira diz...".'],
                        ],
                    ],
                    [
                        'item_title' => 'Nem Um a Menos!',
                        'history_title' => 'Nem Um a Menos!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '838, 409', 'item_required' => null, 'instruction' => 'Vamos para (838, 409) e falamos com a Jovem. Podemos procurar a criança em três locais: (862, 349), (906, 426) e (936, 546).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ao encontrá-la, conversamos com ela e depois voltamos para a Jovem. Falamos com ela escolhendo a mesma opção de antes.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'OBS: o menino aparece apenas em 1 unico lugar.'],
                        ],
                    ],
                ],
            ],
            // ==================== ELSALAND ====================
            [
                'city' => 'Elsaland',
                'name' => 'Vale dos Cavaleiros',
                'slug' => 'elsaland-vale-dos-cavaleiros',
                'description' => 'Mapa de Vale dos Cavaleiros na região de Elsaland.',
                'sort_order' => 15,
                'trivias' => [
                    [
                        'item_title' => 'Te disse para não ver',
                        'history_title' => 'Te disse para não ver',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Ambulante', 'coordinates' => '420, 580', 'item_required' => null, 'instruction' => 'Fale com o Comerciante Ambulante (420, 580) e compre o item Roupas com estilo especial.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '353, 584', 'item_required' => null, 'instruction' => 'Vá até as coordenadas descritas no item (353, 584) e dê um clique no item para usá-lo. Então Apyu aparecerá, basta matá-lo para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Perseguição',
                        'history_title' => 'Perseguição',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mulher Tanmi', 'coordinates' => '378, 570', 'item_required' => null, 'instruction' => 'Fale com Mulher Tanmi (378, 570) e selecione a opção "Me dê um Pacote Térmico" e então você receberá o item Pacote Térmico.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '296, 309', 'item_required' => null, 'instruction' => 'Vá a coordenada citada (296, 309) e ao chegar nelas use o item e então aparecerá Peixe Obeso do Vale, ao matá-lo ele dropará o item Peixe Gordo do Vale.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até Tanmi e selecione "Dê o Peixe Gordo do Vale para Tanmi" para completar a Trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Jantar Solidário',
                        'history_title' => 'Jantar Solidário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Caçador Kodahan', 'coordinates' => '377, 571', 'item_required' => 'Pegue um galho', 'instruction' => 'Vá até ao NPC Caçador Kodahan (377, 571) e selecione as seguintes opções por ordem: «Pegue um galho», «Pegue dois galhos», «Pegue três galhos».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois de selecionar cada uma destas opções, dê clique direito nos vários galhos que vai recebendo.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Eu quero ouvir a sua história.', 'instruction' => 'Depois de quebrar todos os galhos, selecione a opção «Eu quero ouvir a sua história.» para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Me Bata! Tolo!',
                        'history_title' => 'Me Bata! Tolo!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '420, 581', 'item_required' => 'Pedido de Gangue Shengtang', 'instruction' => 'Vá até ao Comerciante Ambulante (420, 581) e compre o item «Pedido de Gangue Shengtang» por 1g.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '394, 171', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (394,171) - use o item para distrair o Sr. Fang, derrote-o e de seguida vá até à margem do lago para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Gosto do Sofrimento',
                        'history_title' => 'O Gosto da Dificuldade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Lombo de Cabra Congelado', 'instruction' => 'Mate vários "Boneco de Neve Sentinela do Castelo" até dropar o item "Lombo de Cabra Congelado" - só precisa de um.'],
                            ['step_number' => 2, 'npc_name' => 'Intendente do Acampamento Anderson', 'coordinates' => '331, 160', 'item_required' => null, 'instruction' => 'Fale com o NPC Intendente do Acampamento Anderson (331, 160) e selecione "Quer comer isso?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Donzela do Vale Apaixonada',
                        'history_title' => 'A Mente de Uma garota do Vale',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Loja de Artigos Gerais Thot', 'coordinates' => '323, 132', 'item_required' => 'Javali Recheado Esquisito', 'instruction' => 'Fale com o NPC Loja de Artigos Gerais Thot (323, 132) e selecione "Que tipo de novidades você tem?" para adquirir o item "Javali Recheado Esquisito".'],
                            ['step_number' => 2, 'npc_name' => 'Cavaleiro Ashley', 'coordinates' => '406, 187', 'item_required' => null, 'instruction' => 'Fale com o NPC Cavaleiro Ashley (406, 187) e selecione "Gostou desse javali recheado?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ancião Teimoso',
                        'history_title' => 'Ancião Teimoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Velho Ranger Boder', 'coordinates' => '146, 463', 'item_required' => 'Caindo no Sono', 'instruction' => 'Fale com Velho Ranger Boder (146, 463) e selecione a opção "Ouça Boder" para entrar no status [Caindo no Sono] - dura 1 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Acumule 5x o status e depois clique em "Poderia parar tudo, por favor?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Incrivelmente Enorme',
                        'history_title' => 'Incrivelmente Enorme',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Adjunto do Acampamento Bonboby', 'coordinates' => '329, 117', 'item_required' => 'Onde Está O Robô Prometido?', 'instruction' => 'Fale com Adjunto do Acampamento Bonboby (329, 117) e selecione "Eu não vi nenhum robô!" para entrar no status [Onde Está O Robô Prometido?] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '333, 351', 'item_required' => 'Zangão', 'instruction' => 'Vá até as coordenadas (333, 351) para encontrar um robô «Zangão» completando assim a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Um Pouco do Seu Próprio Remédio',
                        'history_title' => 'Um Pouco do Seu Próprio Remédio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Caçador de Demônios Atara', 'coordinates' => '283, 481', 'item_required' => null, 'instruction' => 'Vá até Caçador de Demônios Atara (283, 481) e selecione "Você tem alguma história divertida para contar?" para adquirir .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Clique com o botão direito sobre o item.'],
                            ['step_number' => 3, 'npc_name' => 'Velho Ranger Boder', 'coordinates' => '146, 463', 'item_required' => null, 'instruction' => 'Vá até Velho Ranger Boder (146, 463) e clique na opção "É a minha vez de contar uma história?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Maníaco da Caça',
                        'history_title' => 'Maníaco de Caça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Líder dos Caçadores Tolsky', 'coordinates' => '413, 600', 'item_required' => 'Caça Selvagem', 'instruction' => 'Vá até Líder dos Caçadores Tolsky (413, 600) e selecione "Ouvi dizer que você caça bem. Vamos faer uma competição" para entrar no status [Caça Selvagem] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Farra na Caça', 'instruction' => 'Mate 15 Porcos Ímpeto Raivosos em menos de 10 minutos. Acumulando 15x o status [Farra na Caça] retorne a Tolsky e selecione "Eu ganhei de você!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Às Vezes você precisa ir em frente',
                        'history_title' => 'Às Vezes você precisa ir em frente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Takanthy', 'coordinates' => '288, 114', 'item_required' => null, 'instruction' => 'Vá até o NPC Takanthy (288, 114) e selecione a opção "Ouvi dizer que você foi odiado pelos cavaleiros estagiários?" para receber o buff "Um Instrutor Renascido"'],
                            ['step_number' => 2, 'npc_name' => 'Sathorne', 'coordinates' => '284, 186', 'item_required' => null, 'instruction' => 'Fale com o NPC Sathorne (284, 186) e selecione a opção "Você fez muito bem! O instrutor está tão orgulhoso de você!" para receber o buff "Aconteceu alguma coisa com o instrutor? "'],
                            ['step_number' => 3, 'npc_name' => 'Nut', 'coordinates' => '349, 181', 'item_required' => null, 'instruction' => 'Fale com o NPC Nut (349, 181) e selecione a opção "Você fez muito bem! O instrutor está tão orgulhoso de você!" para recber o buff "O instrutor é diferente!"'],
                            ['step_number' => 4, 'npc_name' => 'Tolls', 'coordinates' => '323, 136', 'item_required' => null, 'instruction' => 'Fale com o NPC Tolls (323, 136) e selecione a opção "Você fez muito bem! O instrutor está tão orgulhoso de você!" para receber o buff "Instrutor Assustador!"'],
                            ['step_number' => 5, 'npc_name' => 'Takanthy', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte no NPC Takanthy e selecione a opção "Você deveria ser você mesmo!" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Seu nome',
                        'history_title' => 'Seu nome',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Kerbrat', 'coordinates' => '341, 166', 'item_required' => null, 'instruction' => 'Vá até o NPC Kerbrat (341, 166) e selecione a opção "Você pode dizer seu nome de novo?" 5 vezes para obter o buff "Noch Doyle, e?"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Após acumular o buff x5, selecione a opção "Desculpe, eu realmente não consigo lembrar seu nome." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Todos Porcos Cairão',
                        'history_title' => 'Todos Porcos Cairão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sting', 'coordinates' => '416, 597', 'item_required' => null, 'instruction' => 'Vá até o NPC Sting (416, 597) e selecione a opção "Você tem alguma lenda?" para receber o item Isca de Javali Fragrante'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '463, 610', 'item_required' => null, 'instruction' => 'Vá até (463,610) e use o item e irão aparecer 5 , mate todos para receber o buff "Vença os porcos" x5'],
                            ['step_number' => 3, 'npc_name' => 'Sting', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte no NPC Sting e selecione a opção "Eu não preciso de uma segunda flecha para fazer todos os javalis caírem!" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Sr. Depressão',
                        'history_title' => 'Sr. Depressão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Borne', 'coordinates' => '278, 137', 'item_required' => null, 'instruction' => 'Fale com o NPC Borne (278, 137) e selecione a opção "Eu me sinto tão deprimido..." 15 vezes para receber o buff "Sofocamento Inexplicável" e acumlar ele x15'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Após acumular o buff x15, selecione a opção "Talvez a vida seja assim..." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Quer levar uma surra?',
                        'history_title' => 'Quer levar uma surra?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Sting e escolher a opção "Você não parece muito forte". Ele nos dará um buff e então falamos com ele novamente para acumulá-lo 5 vezes.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ao falar com ele, selecionamos agora "Então, onde você é forte?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Relação Perfeita',
                        'history_title' => 'Relação Perfeita',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, escolhemos "Essa bebida ainda está muito forte. Você pode diluir novamente para mim?". Por fim, usamos o chá com 20% de açúcar.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Montanhas Eternas',
                'slug' => 'elsaland-montanhas-eternas',
                'description' => 'Mapa de Montanhas Eternas na região de Elsaland.',
                'sort_order' => 16,
                'trivias' => [
                    [
                        'item_title' => 'Que a Luz Esteja com Você',
                        'history_title' => 'Que a Luz Esteja com Você',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até as coordenadas 85, 650 e veja que há um cristal amarelo, quebre-o para que possa obter o item Pingente Sagrado.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois você deve seguir até as coordenadas 113, 621 e usar o item, matando o Demonio Noturno completará a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Faz bem para a saúde',
                        'history_title' => 'Faz bem para a saúde',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Magistrado da Cidade Criphner', 'coordinates' => '533, 420', 'item_required' => null, 'instruction' => 'Fale com o NPC Magistrado da Cidade Criphner(533, 420) e selecione a opção "Me dê um pouco do Pó de Águas Termais Energéticas" para receber o item Pó de Águas Termais Energéticas.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '102, 433', 'item_required' => null, 'instruction' => 'Como descrito no item siga as coordenadas (102, 433) e use o item e você ganhará o status "Perda dos Sentidos".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC e clique na segunda opção "Informe o magistrado da cidade sobre os efeitos das fontes de água" para completar esta trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Por que um novo pai?',
                        'history_title' => 'Por que substituir um Pai?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feiticeiro Ivan', 'coordinates' => '570, 440', 'item_required' => 'Ficha do Feiticeiro Sem Nome', 'instruction' => 'Vá até ao NPC Feiticeiro Ivan (570, 440) e selecione a opção "Eu quero matar o líder dos Rover das terras do norte" para adquirir o item «Ficha do Feiticeiro Sem Nome».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '769, 279', 'item_required' => 'Filha do Chefão dos Bandidos do Norte', 'instruction' => 'Vá até às coordenadas (769,279) - dê clique direito no item para invocar «Filha do Chefão dos Bandidos do Norte». Derrote-a para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ovos de Galinha ou de Aço',
                        'history_title' => 'Ovos de Galinha ou de Aço',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Procure em redor da Vila Nascente Branca até encontrar uma caixa do tesouro vermelha.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '637, 347', 'item_required' => 'Um ovo', 'instruction' => 'Acerte-a para receber o item «Um ovo» - vá até as coordenadas (637,347) e dê clique direito no ovo para receber o item «Ovo Aromático».'],
                            ['step_number' => 3, 'npc_name' => 'Menino Corajoso Nafgolgan', 'coordinates' => '574, 477', 'item_required' => null, 'instruction' => 'Fale com o NPC Menino Corajoso Nafgolgan (574, 477) e selecione "Eu quero comer um Ovinho Primavera" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cadê a Experiência?',
                        'history_title' => 'Onde é o Treinamento?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Barbatana Assombrosa', 'instruction' => 'Mate vários "Monstro Peixe Cartilaginoso" ou "Peixe Nadadeira Selvagem" até conseguir dropar o item "Barbatana Assombrosa".'],
                            ['step_number' => 2, 'npc_name' => 'Cavaleiro Olho-de-Falcão Hawks', 'coordinates' => '530, 426', 'item_required' => null, 'instruction' => 'Fale com o NPC Cavaleiro Olho-de-Falcão Hawks (530, 426) e selecione "O que acha disso?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Nascido para Elegância',
                        'history_title' => 'A Natureza da Beleza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Ovo de Águia do Gelo', 'instruction' => 'Mate vários "Águia Asa-de-Ferro" até conseguir dropar o item "Ovo de Águia do Gelo" e mate "Homem-Gorila Metal Leve" até conseguir o item "Máscara de Ferro".'],
                            ['step_number' => 2, 'npc_name' => 'Observador da AreiaVento Vinia', 'coordinates' => '844, 759', 'item_required' => null, 'instruction' => 'Fale com o NPC Observador da AreiaVento Vinia (844, 759) e selecione "Será que isso fará bem para a pele dela?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tim-Tim',
                        'history_title' => 'Saúde',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Guarda do Observatório Telgolgan', 'coordinates' => '829, 723', 'item_required' => null, 'instruction' => 'Vá até os NPC Guarda do Observatório Telgolgan (829, 723), Cavaleiro de Elsaland Rudy (565, 480) e Comerciante da Vila Nascente Branca Chuck (583, 394) selecionando em "Qual é a bebida mais famosa aqui?" para adquirir , e .'],
                            ['step_number' => 2, 'npc_name' => 'Ferreiro Caman', 'coordinates' => '604, 410', 'item_required' => null, 'instruction' => 'Vá até NPC Ferreiro Caman (604, 410) e clique em "Virando o Copo!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Pesar da Espada da Herança',
                        'history_title' => 'Pesar da Espada da Herança',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Guarda do Observatório Telgolgan', 'coordinates' => '829, 723', 'item_required' => 'Escudo da Família Gauguin', 'instruction' => 'Vá até o NPC Guarda do Observatório Telgolgan (829, 723) e selecione "História sobre a espada de Gauguin" Para adquirir o item "Escudo da Família Gauguin".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Converse com o NPC Reitor da Academia dos Cavaleiros Lancelot e selecione a opção "História da família Gauguin e sua Espada" para concluir a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Coma Assim e Fique Bem',
                        'history_title' => 'Coma Assim e Fique Bem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jovem Observador Terk', 'coordinates' => '843, 745', 'item_required' => null, 'instruction' => 'Vá até o NPC Jovem Observador Terk (843, 745) e selecione "Não acredito no que você ouve" para receber o status "Frescura para comer"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '827, 660', 'item_required' => null, 'instruction' => 'Chegue até as coordenadas (827, 660) e derrote o cogumelo para receber "Matsutake Coberto de Neve".'],
                            ['step_number' => 3, 'npc_name' => 'Observador da AreiaVento Vinia', 'coordinates' => '844, 759', 'item_required' => null, 'instruction' => 'Fale com o NPC Observador da AreiaVento Vinia (844, 759) e selecione "Isso é para você. Terks falou que esses cogumelos são deliciosos." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cuidado com os Radares',
                        'history_title' => 'Cuidado com os Radares',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '755, 355', 'item_required' => null, 'instruction' => 'Fale com "Placa de Rua" (755, 355) e selecione a opção "Cadê os radares?" para receber o status "Eu só quero acelerar com vontade"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '720, 328', 'item_required' => null, 'instruction' => 'Corra até as coordenadas (720, 328) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Subiu na Árvore Errada',
                        'history_title' => 'Você Subiu na Árvore Errada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feiticeiro Ivan', 'coordinates' => '570, 440', 'item_required' => null, 'instruction' => 'Vá até o NPC Feiticeiro Ivan (570, 440) e selecione a opção "Observar o nascer do Espírito do Vento" para receber o status "Procurando os Ovos do Espírito do Vento"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '327, 152', 'item_required' => 'Ovo Quase Chocado', 'instruction' => 'Em seguida vá até as coordenadas (327, 152) para receber o item "Ovo Quase Chocado"'],
                            ['step_number' => 3, 'npc_name' => 'Ivan', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne até o NPC Ivan e selecione a opção "Parece que vai chocar" em seguida derrote a ave para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Chá Oolong Inflamável',
                        'history_title' => 'Chá Oolong Inflamável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos até onde Caman está e falamos com ele. Escolhemos a opção "Ouvi dizer que é possível fazer um tipo de chá Oolong que pode proteger do frio"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '598, 464', 'item_required' => null, 'instruction' => 'Recebemos um Chá Oolong especial, usamos o item e recebemos um buff. Agora devemos falar com Elizabeth (598, 464) e escolher a opção "O que tem de especial neste chá Oolong?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Poupando Dinheiro',
                        'history_title' => 'Poupando Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '866, 758', 'item_required' => null, 'instruction' => 'Precisamos falar com Criphner e escolher "Já que economizar energia não é possível, por que não considerar outras fontes?". Em seguida, vamos até Satian (866, 758) e conversamos com ele.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '150, 690', 'item_required' => null, 'instruction' => 'Ele nos dará um detector de força do vento, que usamos em (150, 690), e levamos os resultados de volta para Criphner. Falamos com ele e entramos na opção "Encontrei uma nova fonte de energia".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Fronteira do Esquecimento',
                'slug' => 'elsaland-fronteira-do-esquecimento',
                'description' => 'Mapa de Fronteira do Esquecimento na região de Elsaland.',
                'sort_order' => 17,
                'trivias' => [
                    [
                        'item_title' => 'Não roubei o urso',
                        'history_title' => 'Não roubei o urso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Quebre as árvore de fruta próximas a Toca do Urso Branco (879;904) e você receberá o item Filhote de Urso Assustado.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '1047, 1078', 'item_required' => null, 'instruction' => 'Siga para as coordenadas descritas (1047, 1078) e use o item e . O Urso da Fronteira aparecerá, mate-o para completar esta trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A volta dos Mortos-Vivos',
                        'history_title' => 'A volta dos Mortos-Vivos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Siga até as coordenadas 690, 137 e encontre uma orbe amarela flutuante, quebre-a para receber o item Cristal Vermelho Misterioso.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '764, 149', 'item_required' => null, 'instruction' => 'Siga para as coordenadas citadas (764, 149) e use o item para invocar Feiticeiro do Abismo, matando-o irá receber o status Aura dos Mortos Vivos.'],
                            ['step_number' => 3, 'npc_name' => 'Bruxa Suya', 'coordinates' => '779, 151', 'item_required' => null, 'instruction' => 'Fale com a Bruxa Suya (779, 151), escolha a primeira opção para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => '(item sem o nome "Trívia - ")',
                        'history_title' => 'Se for grande, é pássaro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cientista de Fronteira Brahms', 'coordinates' => '1076, 413', 'item_required' => 'Ovo de pássaro gigante', 'instruction' => 'Fale com o NPC Cientista de Fronteira Brahms (1076, 413) e selecione "Como vai sua investigação?" para receber o item «Ovo de pássaro gigante».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '967, 486', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (967,486) e dê clique direito no item para invocar "Pequeno Tucano". Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tolo Esquisito',
                        'history_title' => 'Ele não entende mesmo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pesquisadora Nola Anna', 'coordinates' => '1052, 372', 'item_required' => 'Confesse seu amor ao funcionário', 'instruction' => 'Fale com a NPC Pesquisadora Nola Anna (1052, 372) e selecione "Deixe-me ajudá-lo a expressar o que você pensa!" para receber o estado «Confesse seu amor ao funcionário» (dura 1min).'],
                            ['step_number' => 2, 'npc_name' => 'Durst', 'coordinates' => '1043, 375', 'item_required' => null, 'instruction' => 'Vá até o NPC Durst (1043,375) e selecione "Você sabe que alguém te ama?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Oportunidade Comercial Mortal',
                        'history_title' => 'Oportunidade Comercial Mortal',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Bandagem Embriagada', 'instruction' => 'Mate múmias até obter o item "Bandagem Embriagada".'],
                            ['step_number' => 2, 'npc_name' => 'Giro em alta velocidade Secador', 'coordinates' => '1059, 367', 'item_required' => 'Bandagem Seca Esquisita', 'instruction' => 'Fale com o NPC Giro em alta velocidade Secador (1059, 367) e selecione "(Coloque o que estiver molhado no secador)" para adquirir o item "Bandagem Seca Esquisita".'],
                            ['step_number' => 3, 'npc_name' => 'O Ricão Phils', 'coordinates' => '1092, 388', 'item_required' => null, 'instruction' => 'Fale com o NPC O Ricão Phils (1092, 388) e selecione "Alguém compraria isto?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Infância Mecânica',
                        'history_title' => 'Infância Mecha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Procure por jarros brancos e azuis em redor da Plataforma de Perfuração do Mar, irá precisar de encontrar 3, quebrá-los e recolher os itens dropados.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '694, 471', 'item_required' => 'Componentes de Som', 'instruction' => 'Procure perto das localizações (694, 471) - para obter o item "Componentes de Som". (739, 499) - para obter "Peças Antigas" e (746, 425) - para obter "Um Punhado de Nozes".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '774, 517', 'item_required' => 'Mini Caixa de Música da Armadura de Vapor', 'instruction' => 'Vá até ao NPC Trabalhador da Plataforma de Perfuração McKey (774, 517) e selecione "Você poderia remendar um pouco para mim?" para adquirir o item "Mini Caixa de Música da Armadura de Vapor".'],
                            ['step_number' => 4, 'npc_name' => 'Mestre de Caça-ao-Tesouro Roxette', 'coordinates' => '328, 561', 'item_required' => null, 'instruction' => 'Fale com o NPC Mestre de Caça-ao-Tesouro Roxette (328, 561) e selecione "Você parece ser alguém sensível." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Doce Amizade',
                        'history_title' => 'Uma Doce Amizade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feiticeiro Sander', 'coordinates' => '1010, 430', 'item_required' => 'Armadura Mini Mágica', 'instruction' => 'Vá até o NPC Feiticeiro Sander (1010, 430) e selecione "Parece que Brahms não gosta de magia." para adquirir o item "Armadura Mini Mágica"'],
                            ['step_number' => 2, 'npc_name' => 'Cientista de Fronteiras Bhrams', 'coordinates' => '1071, 414', 'item_required' => null, 'instruction' => 'Fale Com o NPC Cientista de Fronteiras Bhrams (1071, 414) e selecione "Sander quer que eu te entregue isso" para adquirir "Armadura Mini Turbinada"'],
                            ['step_number' => 3, 'npc_name' => 'Feiticeiro Sander', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao NPC Feiticeiro Sander e selecione "Fizeram alguns ajustes..." para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Descansar é muito importante',
                        'history_title' => 'Descansar é muito importante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Parasita do Emissário Cadrina', 'coordinates' => '693, 795', 'item_required' => null, 'instruction' => 'Converse com a NPC Parasita do Emissário Cadrina (693, 795) e selecione a opção "Você está ocupada, Cadrina?" 5 vezes para receber o status "Emissário do Juizo Final Atarefado"x5'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida selecione a opção "Katrina, você está dormindo?" para concluir a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Mensagem de Morte',
                        'history_title' => 'Mensagem de Morte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Assombração Jovem', 'instruction' => 'Derrote Lobo Congelado de Pele-Aço ou Lobo Agulha Congelado para obter o item "Assombração Jovem".'],
                            ['step_number' => 2, 'npc_name' => 'Cientista de Fronteira Brahms', 'coordinates' => '1076, 413', 'item_required' => null, 'instruction' => 'Fale com o NPC Cientista de Fronteira Brahms (1076, 413) e selecione "Me ajude a interpretar os pensamentos dessa alma morta" para receber o status "Mensagem da Morte"'],
                            ['step_number' => 3, 'npc_name' => 'Caçador da Fronteira Bucks', 'coordinates' => '1080, 558', 'item_required' => null, 'instruction' => 'Fale com o NPC Caçador da Fronteira Bucks (1080, 558) e selecione "Tenho uma mensagem para você" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você é Fã Nº1',
                        'history_title' => 'Você é Fã Nº1',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '1058, 457', 'item_required' => null, 'instruction' => 'Derrote os baús nas coordenadas (1058, 457) para adquirir "Cartões de Safes - Melhor", (1040, 375) para adquirir "Cartões Safes - Médio" e (1080, 385) para adquirir "Cartões Safes - Inferior"'],
                            ['step_number' => 2, 'npc_name' => 'Cavaleiro Guarda da Fronteira Paris', 'coordinates' => '1026, 414', 'item_required' => null, 'instruction' => 'Fale com o NPC Cavaleiro Guarda da Fronteira Paris (1026, 414) e selecione a opção "Já conclui o Conjunto de Cartas Seguras" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Namorada Selvagem',
                        'history_title' => 'Namorada Selvagem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cavaleiro Stardust Cairo', 'coordinates' => '340, 540', 'item_required' => null, 'instruction' => 'Vá até o NPC Cavaleiro Stardust Cairo (340, 540) e selecione a opção "Quer voltar para minha namorada" para adquirir "Estaca de Madeira Reforçada"'],
                            ['step_number' => 2, 'npc_name' => 'Bruxa Suya', 'coordinates' => '780, 160', 'item_required' => null, 'instruction' => 'Em seguida vá até a NPC Bruxa Suya (780, 160) e selecione a opção "Isso é de Cairo. Ele quer consertar as coisas entre vocês dois." para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ordinário e Entediante',
                        'history_title' => 'Ordinário e Entediante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '339, 551', 'item_required' => null, 'instruction' => 'Falamos com o Milionário Phils e escolhemos a opção "Como é a vida de uma pessoa rica?". Recebemos uma caixa de ouro, que levamos até Joson (339, 551)'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com ele e selecionamos a opção "Quero que você me ajude a explorar". Assim, obtemos um buff e precisamos acumulá-lo 5 vezes,'],
                        ],
                    ],
                    [
                        'item_title' => 'Duelo de Cartão',
                        'history_title' => 'Duelo de Cartão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '1026, 413', 'item_required' => null, 'instruction' => 'Vamos até Darnacy e adquirimos o Jogo de Cartas da Caixa-Forte. Agora nos dirigimos até Paris (1026, 413), conversamos com ele e escolhemos "Duelo!".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Floresta do Inverno',
                'slug' => 'elsaland-floresta-do-inverno',
                'description' => 'Mapa de Floresta do Inverno na região de Elsaland.',
                'sort_order' => 18,
                'trivias' => [
                    [
                        'item_title' => 'De Quem É Este Machado?',
                        'history_title' => 'De Quem É Este Machado?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Loja de Artigos Gerais Luluni', 'coordinates' => '1058, 822', 'item_required' => null, 'instruction' => 'Fale com o NPC Loja de Artigos Gerais Luluni (1058, 822) e compre o item Machado de Prata.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '1059, 492', 'item_required' => null, 'instruction' => 'Vá para as coordenadas citadas (1059, 492) e use o item para invocar Rainha de Gelo, mate-a para completar esta trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dor de Barriga',
                        'history_title' => 'Dor de Barriga',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menina Fiona', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Menina Fiona (253, 88 ) e escolha a primeira opção "Eu preciso de um Depositório de Comida" para receber o item Depositório de Comida.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '899, 219', 'item_required' => null, 'instruction' => 'Vá para as coordenadas (899, 219) e use o item para receber Cogumelo Amarelo Esquisito.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC e escolha a segunda opção "Dê a ela o Cogumelo Amarelo Esquisito" para receber o item Cogumelo Surpres.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '436, 149', 'item_required' => null, 'instruction' => 'Vá para as coordenadas (436, 149) e use o item para invocar Urso da Colina, mate-o para completar a Trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Muitos Desastres',
                        'history_title' => 'Muitos Desastres',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Loja de Artigos Gerais Luluni', 'coordinates' => '1059, 821', 'item_required' => 'Pacotes Térmicos sob medida de Luluni', 'instruction' => 'Fale com o NPC Loja de Artigos Gerais Luluni (1059, 821) e compre o item «Pacotes Térmicos sob medida de Luluni» por 1g.'],
                            ['step_number' => 2, 'npc_name' => 'Pesquisador de Ruínas Sut', 'coordinates' => '991, 796', 'item_required' => null, 'instruction' => 'Vá até o NPC Pesquisador de Ruínas Sut (991, 796) e selecione "Você quer um pacote quente?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Força Clandestina',
                        'history_title' => 'Força Clandestina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Loja de Artigos Gerais Luluni', 'coordinates' => '1059, 821', 'item_required' => null, 'instruction' => 'Fale com o NPC Loja de Artigos Gerais Luluni (1059, 821) e selecione "Empurrou Luluni com força" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amor Descomplicado',
                        'history_title' => 'Sentimentos Simples',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Loja de Armaduras Katetani', 'coordinates' => '318, 85', 'item_required' => 'Anel Simples', 'instruction' => 'Fale com o NPC Loja de Armaduras Katetani (318, 85)e compre o item "Anel Simples".'],
                            ['step_number' => 2, 'npc_name' => 'Arquimaga Aposentada Angeline', 'coordinates' => '265, 124', 'item_required' => null, 'instruction' => 'Fale com o NPC Arquimaga Aposentada Angeline (265, 124) e selecione "Era isto que você buscava?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O mesmo gosto',
                        'history_title' => 'O Delicioso Sabor que Não Muda',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Guarda da Energia Troll Tempo', 'coordinates' => '301, 105', 'item_required' => 'Biscoito de Sprite Antigo Conservado', 'instruction' => 'Fale com o NPC Guarda da Energia Troll Tempo e Espaço (301, 105) e selecione "Você tem coisas velhas?" para obter o item "Biscoito de Sprite Antigo Conservado".'],
                            ['step_number' => 2, 'npc_name' => 'Camarada de Safes Phoebios', 'coordinates' => '1205, 733', 'item_required' => null, 'instruction' => 'Vá até o NPC Camarada de Safes Phoebios (1205, 733) e selecione "Soube que você gosta de comer antigos Biscoitos de Sprite" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Humor Antigo',
                        'history_title' => 'Humor Antigo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Guarda da Energia Troll Tempo', 'coordinates' => '301, 105', 'item_required' => null, 'instruction' => 'Fale com o NPC Guarda da Energia Troll Tempo e Espaço (301, 105) e selecione "Você sabe alguma coisa sobre coreografias anceistrais?".'],
                            ['step_number' => 2, 'npc_name' => 'Cavaleiro da Chama Azul Seth', 'coordinates' => '1074, 832', 'item_required' => null, 'instruction' => 'Fale com o NPC Cavaleiro da Chama Azul Seth (1074, 832) e selecione "Venha e confira minha nova dança" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Assassino de Dragão',
                        'history_title' => 'Assassino de Dragão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Dragão Congelado até adquirir "Cortadores de Unhas do Veterano"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '1070, 488', 'item_required' => null, 'instruction' => 'Fale com o NPC Caçador de Dragões Relâmpago Selvagem (1070, 488) e selecione "Seu nome está escrito aqui" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amante do Karaokê',
                        'history_title' => 'Amante do Karaokê',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menino Rama', 'coordinates' => '1024, 815', 'item_required' => null, 'instruction' => 'Derrote o baú (1024, 815) para adquirir "Gramofone Simples" e fale com a NPC Menino Rama (990, 785) e selecione "Vou ajudar você a gravar o canto" para obter "Canção de Amor Juvenil"'],
                            ['step_number' => 2, 'npc_name' => 'Menina Fiona', 'coordinates' => '253, 90', 'item_required' => null, 'instruction' => 'Vá até a NPC Menina Fiona (253, 90) e selecione a opção "Esta é a canção que Rama cantou para você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tristeza das Memórias',
                        'history_title' => 'Tristeza das Memórias',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião Krona', 'coordinates' => '286, 72', 'item_required' => 'Garrafa Vazia de Retenção de Energia', 'instruction' => 'Fale com a NPC Ancião Krona (286, 72) e selecione "Chrono parece precisar de cuidados" para obter o item "Garrafa Vazia de Retenção de Energia"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '664, 418', 'item_required' => null, 'instruction' => 'Use o item nas coordenadas (664, 418) para obter "Garrafa de Energia dos Trol".'],
                            ['step_number' => 3, 'npc_name' => 'Guarda Energia Troll Tempo', 'coordinates' => '299, 102', 'item_required' => null, 'instruction' => 'Vá até o NPC Guarda Energia Troll Tempo e Espaço (299, 102) e selecione a opção "Recarregue a garrafa de energia para Chrono" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Arbustos Barulhentos',
                        'history_title' => 'Arbustos Barulhentos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Magistrado da Cidade Gorgon', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Magistrado da Cidade Gorgon e selecione "Arbusto de aparência estranha" para receber o status "Arbustos Estranhos"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '278, 106', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (278, 106), então derrote Nômade para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Magia de Estouro',
                        'history_title' => 'Magia de Estouro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '265, 124', 'item_required' => null, 'instruction' => 'Conversamos com Tomak e, em seguida, vamos até Angeline (265, 124). Escolhemos a opção "Quero ver os segredos com meus próprios olhos".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Seremos transportados e teremos uma habilidade em nossa barra de ações. Usamos essa habilidade.'],
                        ],
                    ],
                    [
                        'item_title' => 'Arte é Explosão',
                        'history_title' => 'Arte é Explosão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '1020, 520', 'item_required' => null, 'instruction' => 'Nos dirigimos a Murphy, falamos com ele e escolhemos "O que você acha que é arte?". Ele nos dará alguns explosivos novos. Usamos o item em (1020, 520).'],
                        ],
                    ],
                    [
                        'item_title' => '2',
                        'history_title' => '2',
                        'steps' => [
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Ruínas Polares Antigas',
                'slug' => 'elsaland-ru-nas-polares-antigas',
                'description' => 'Mapa de Ruínas Polares Antigas na região de Elsaland.',
                'sort_order' => 19,
                'trivias' => [
                    [
                        'item_title' => 'Contra-Ataque dos Gigantes',
                        'history_title' => 'Contra-Ataque dos Gigantes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oráculo Daki', 'coordinates' => '997, 177', 'item_required' => null, 'instruction' => 'Fale com o Oráculo Daki (997, 177) e escolha a opção "Eu quero uma Bússola do Tempo" para receber o item Bússola do Tempo.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '369, 189', 'item_required' => null, 'instruction' => 'Siga para as coordenadas (369, 189) e use o item para invocar Assassino de Dragões Gigante, derrote-o para completar esta trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Purificador de Ar',
                        'history_title' => 'Renovador de Ar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oráculo Daki', 'coordinates' => '997, 177', 'item_required' => null, 'instruction' => 'Fale com o Oráculo Daki (997, 177) e selecione a opção "Me dê um Renovador de Ar." para receber o item Renovador de Ar.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '845, 238', 'item_required' => null, 'instruction' => 'Vá para as coordenadas (845, 238) e use o item para invocar Meleca Nojenta, derrote-o para receber o item Purificador de Ar.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC e escolha a opção "Aqui está um purificador quebrado." para completar a trívia. (para completar essa trivia é necessário ter completado a quest L77. Esquema do Dragão 1 para poder acessar o outro lado do mapa.)'],
                        ],
                    ],
                    [
                        'item_title' => 'Respeite os Deuses',
                        'history_title' => 'Respeite os Deuses',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oráculo Daki', 'coordinates' => '997, 177', 'item_required' => null, 'instruction' => 'Fale com o NPC Oráculo Daki (997, 177) e selecione "Porque chamam você de profeta?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Devo estar imaginando coisas',
                        'history_title' => 'Devo estar imaginando coisas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Injúria', 'instruction' => 'Procure uma caixa do tesouro vermelha no Campo de Batalha Philapei. Acerte a caixa para receber o estado «Injúria» (dura 5min).'],
                            ['step_number' => 2, 'npc_name' => 'Jovem Travesso Carubon', 'coordinates' => '554, 121', 'item_required' => null, 'instruction' => 'Vá até o NPC Jovem Travesso Carubon (554, 121) e selecione "Sua mãe está logo atrás de você. Ela está extremamente furiosa." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Poder do Artefato',
                        'history_title' => 'O Poder do Artefato Ancião',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Peças Antigas', 'instruction' => 'Mate vários monstros "Predestinados" (qualquer tipo) até conseguir o item "Peças Antigas".'],
                            ['step_number' => 2, 'npc_name' => 'Estranho', 'coordinates' => '160, 265', 'item_required' => 'Geringonça Anciã Esquisita', 'instruction' => 'Fale com o NPC Estranho (160, 265) e selecione "Você sabe para que são usadas essas peças?" para obter o item "Geringonça Anciã Esquisita".'],
                            ['step_number' => 3, 'npc_name' => 'Filha do Cacique Morara', 'coordinates' => '156, 320', 'item_required' => null, 'instruction' => 'Vá até ao NPC Filha do Cacique Morara (156, 320) e selecione "Soube que você tem uma queda por antiquários" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Por isso sou turista',
                        'history_title' => 'Apenas diga que é um turista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Carne Aparentemente Deliciosa', 'instruction' => 'Mate vários monstros "Arraia do Círculo Ártico" até conseguir o item "Carne Aparentemente Deliciosa".'],
                            ['step_number' => 2, 'npc_name' => 'Chefe Regnit', 'coordinates' => '610, 129', 'item_required' => null, 'instruction' => 'Fale com o NPC Chefe Regnit (610, 129) e selecione "Você se importaria de fazer alguma especialidade da cozinha local?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gosto Local',
                        'history_title' => 'Gosto Local',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sprite Rodall', 'coordinates' => '538, 131', 'item_required' => null, 'instruction' => 'Vá até Sprite Rodall (538, 131) e clique em "Quer comer biscoitinhos cobertos de mel?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '610, 129', 'item_required' => null, 'instruction' => 'Depois fale com Chefe Regnit (610, 129) na opção "Parece que a magia congelada pode ser usada na cozinha" para obter .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Rodall e clique em "Seus pãezinhos estão aqui. E Racni diz..." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Especialista da Neve',
                        'history_title' => 'Especialista da Neve',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jovem do Clã Enlutado Donakuku', 'coordinates' => '141, 236', 'item_required' => null, 'instruction' => 'Vá até o NPC Jovem do Clã Enlutado Donakuku (141, 236) e selecione a opção "Dizem que você tem habilidades únicas" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Colocando Lentes de Contato pela Primeira Vez',
                        'history_title' => 'Colocando Lentes de Contato pela Primeira Vez',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Rajna', 'coordinates' => '531, 150', 'item_required' => null, 'instruction' => 'Derrote Aranha de Cristal de Gelo para obter "Cristal Suave Incrível". Fale com a NPC Comerciante Rajna (531, 150) e selecione "São Óculos?" e obtenha "Lentes de Contato de Teste"'],
                            ['step_number' => 2, 'npc_name' => 'Veterano Ronaldo', 'coordinates' => '575, 89', 'item_required' => null, 'instruction' => 'Vá até o NPC Veterano Ronaldo (575, 89) e selecione "Eles vão ajudar você a ver com mais clareza" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Conto do Velho Soldado',
                        'history_title' => 'Conto do Velho Soldado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado Balial', 'coordinates' => '604, 93', 'item_required' => null, 'instruction' => 'Fale com NPC Soldado Balial (604, 93) e selecione "História de fantasma do soldado" para obter o status "Você conhece alguma história de fantasmas?"'],
                            ['step_number' => 2, 'npc_name' => 'Veterano Kujia', 'coordinates' => '616, 112', 'item_required' => null, 'instruction' => 'Logo após vá até o NPC Veterano Kujia (616, 112) e selecione a opção "Uma história de fantasma de soldado?" para ganhar o status "Você já ouviu falar em fantasmas?"'],
                            ['step_number' => 3, 'npc_name' => 'Veterano Ronaldo', 'coordinates' => '575, 89', 'item_required' => null, 'instruction' => 'Vá até o NPC Veterano Ronaldo (575, 89) e selecione "Você já ouviu falar em fantasmas?" para ganhar completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Que Nome Bacana',
                        'history_title' => 'Que Nome Bacana',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Filha do Cacique Morara', 'coordinates' => '156, 323', 'item_required' => 'Coleirinha', 'instruction' => 'Fale com a NPC Filha do Cacique Morara (156, 323) e selecione a opção "Quer um animalzinho?" para obter o item "Coleirinha"'],
                            ['step_number' => 2, 'npc_name' => 'Morara', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use o item no para adquir "Jelly Coelho de Colarinho". Leve até a NPC Morara e selecione "Não é adorável?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Pode Beber Magma Uma Vez na Vida',
                        'history_title' => 'Você Pode Beber Magma Uma Vez na Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com Carubon, escolhendo a opção "Há algo interessante?". Ele nos dará uma garrafa de vidro especial.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '727, 321', 'item_required' => null, 'instruction' => 'Vamos usar o item em (727, 321). Agora temos a garrafa de vidro cheia de magma.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Usamos o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Rito de Passagem Antigo',
                        'history_title' => 'Rito de Passagem Antigo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Agora', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com NPC Agora e escolhemos "Ouvi dizer que você tem uma misteriosa cerimônia de passagem para a idade adulta". Ele nos entregará a Tábua de Pedra Antiga.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '56, 350', 'item_required' => null, 'instruction' => 'Vamos para (56, 350) e usamos a tábua, aparecerá um inimigo que devemos derrotar.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Baía de Auris',
                'slug' => 'elsaland-ba-a-de-auris',
                'description' => 'Mapa de Baía de Auris na região de Elsaland.',
                'sort_order' => 20,
                'trivias' => [
                    [
                        'item_title' => 'Longe da Vista',
                        'history_title' => 'Longe da Vista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jovem Basimine', 'coordinates' => '138, 294', 'item_required' => null, 'instruction' => 'Fale com o NPC Jovem Basimine (138, 294) e selecione a opção "Mande uma mensagem para alguém" para receber o status desejo muito esperado.'],
                            ['step_number' => 2, 'npc_name' => 'Oficial de Elsaland', 'coordinates' => '627, 565', 'item_required' => null, 'instruction' => 'Vá até o NPC Oficial de Elsaland (627, 565) e selecionar a opção "Entregue a mensagem de Basimine" para completar a trívia. Observação: Para chegar na Terra Sagrada fale com o NPC Conselheiro Jenota (287, 861) e escolha a opção "Providencia um navio de guerra para a Ilha Sagrada"'],
                        ],
                    ],
                    [
                        'item_title' => 'Dê-me Poderes Mágicos',
                        'history_title' => 'Dê-me Poderes Mágicos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '340, 950', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (340, 950) e ataque o vaso para receber o item Selo de Poseidon.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '338, 935', 'item_required' => null, 'instruction' => 'Siga para as coordenadas (338, 935) use o item para invocar e derrote-o para receber o Status Poder de Poseidon.'],
                            ['step_number' => 3, 'npc_name' => 'General Bath', 'coordinates' => '272, 882', 'item_required' => null, 'instruction' => 'Fale com o NPC General Bath (272, 882) e escolha a opção "Eu tenho o poder de Poseidon" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coração Jovem',
                        'history_title' => 'Coração Jovem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menino', 'coordinates' => '105, 323', 'item_required' => 'Grande Foguete', 'instruction' => 'Fale com o NPC Menino (105, 323) e selecione "Vou ajudá-lo a afugentar o Cordeiro Maligno" para receber o item «Grande Foguete».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '156, 206', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (156,206) e dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Artesão Legendário',
                        'history_title' => 'Artesão Legendário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Artesã Edia', 'coordinates' => '154, 308', 'item_required' => 'Máscara Anciã', 'instruction' => 'Fale com a NPC Artesã Edia (154, 308) e selecione "Quero uma máscara" para receber o item «Máscara Anciã».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '156, 247', 'item_required' => null, 'instruction' => 'Vá para as coordenadas (156,247) e dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ver é crer',
                        'history_title' => 'Veja você mesmo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menino', 'coordinates' => '105, 323', 'item_required' => null, 'instruction' => 'Fale com o NPC Menino (105, 323) e selecione "Tem algum lugar legal nas redondezas?" para obter o buff "Em busca da verdade" - dura 20 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '137, 887', 'item_required' => null, 'instruction' => 'Vá até à Placa de Rua (137, 887) e selecione "(Parece que alguém entalhou algo no sinal)" para receber o buff "Veja você mesmo" - dura 20 min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '720, 1180', 'item_required' => null, 'instruction' => 'Vá até à localização (720, 1180) e irá ver uma mensagem no chat Gritar "A vista impressionante do abismo deixa você boquiaberto, e você sente a grandiosidade da natureza" - irá completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Vá Fundo',
                        'history_title' => 'Espírito Experimental',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Posiney', 'coordinates' => '383, 906', 'item_required' => 'Brinquedo de Auris de Edição Limitada', 'instruction' => 'Compre o item "Brinquedo de Auris de Edição Limitada" com o NPC Comerciante Posiney (383, 906) e selecione "Por que este Brinquedo Encapsulado não abre?" para receber o buff "Persuasão" - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Acumule o buff 3 vezes e fale com o NPC de novo - selecione "Que burburinho é esse sobre a Cápsula de Brinquedo?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Combinação!',
                        'history_title' => 'Combinação!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Conselheiro Jenota', 'coordinates' => '291, 861', 'item_required' => 'Autorização do Chefe de Cajado', 'instruction' => 'Vá até Conselheiro Jenota (291, 861) e clique em "Eris é mesmo um grande cliente, não é?" para obter o status [Autorização do Chefe de Cajado] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => 'Guarda Capitão Maruk', 'coordinates' => '466, 897', 'item_required' => 'Sugestão do Capitão da Guarda', 'instruction' => 'Fale com Guarda Capitão Maruk (466, 897) e selecione "Como lidar com Eris?" para obter o status [Sugestão do Capitão da Guarda] - dura 10 min.'],
                            ['step_number' => 3, 'npc_name' => 'Colecionador de Armas Ork', 'coordinates' => '414, 945', 'item_required' => null, 'instruction' => 'Fale com Colecionador de Armas Ork (414, 945) e selecione "Você tem novas espadas aqui?" para adquirir .'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '465, 890', 'item_required' => null, 'instruction' => 'Por fim, fale com Chefe Eris (465, 890) e selecione "Peça para Eris ver a espada." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Caçador de Luz',
                        'history_title' => 'Caçador de Luz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Arqueólogo Niwat', 'coordinates' => '166, 239', 'item_required' => null, 'instruction' => 'Fale com o NPC Arqueólogo Niwat (166, 239) e selecione a opção "Nova descoberta" para entrar no status "Caçador de Luz"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até a região "Tarin Stonehenge" e encontre os pontos de luz (Se parecem com os de eventos cronometrados da Ilha Sprite) para adquirir o Status "Ponto de Luz impossível de Capturar", acumule o status 10x para concluir a trívia.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '703, 400', 'item_required' => null, 'instruction' => 'Nota: Você precisa também precisa estar com o buff "Caçador da Luz". Os locais são aleatórios. Possíveis localizações: (703, 400), (661 377), (789, 382), (654, ​​378), (729, 330), (728, 337).'],
                        ],
                    ],
                    [
                        'item_title' => 'Pastor em Pele de Cordeiro',
                        'history_title' => 'Pastor em Pele de Cordeiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'China', 'coordinates' => '132, 317', 'item_required' => null, 'instruction' => 'Fale com a NPC China (132, 317) e selecione a opção "Proteção do Rebanho" para adquirir o status "Proteção do Rebanho"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '188, 260', 'item_required' => null, 'instruction' => 'Em seguida vá até as coordenadas (188, 260) para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Violando a Lei',
                        'history_title' => 'Violando a Lei',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chefe Eris', 'coordinates' => '466, 893', 'item_required' => null, 'instruction' => 'Fale com o NPC Chefe Eris (466, 893) e selecione "Sobre as leis militares" para receber o status "Propaganda Militar Disciplinar"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '470, 895', 'item_required' => null, 'instruction' => 'Destruia o baú vermelho (470, 895) para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sprite e Navio de Guerra',
                        'history_title' => 'Sprite e Navio de Guerra',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sprite Sondam', 'coordinates' => '459, 925', 'item_required' => null, 'instruction' => 'Fale com o NPC Sprite Sondam (459, 925) e selecione "Por que você está sempre buscando encouraçados?" para receber o status "Primeira Experiência Naval"'],
                            ['step_number' => 2, 'npc_name' => 'Conselheiro Jenota', 'coordinates' => '292, 861', 'item_required' => null, 'instruction' => 'Vá até o NPC Conselheiro Jenota (292, 861) e selecione "Providencie um navio de guerra para a ilha sagrada" para ser teletransportado'],
                            ['step_number' => 3, 'npc_name' => 'Oficial de Elsaland', 'coordinates' => '633, 559', 'item_required' => null, 'instruction' => 'Fale com o NPC Oficial de Elsaland (633, 559) e selecione "Partida e retorno do posto militar"'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao Sprite Sondam e selecione "É legal navegar em um encouraçado?" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bênção do Poderoso Rei do Mar',
                        'history_title' => 'Bênção do Poderoso Rei do Mar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '333, 934', 'item_required' => null, 'instruction' => 'Vamos até Jenota e conversamos com ele, selecionando "Você acredita na lenda do Rei do Mar?". Ele nos dará a Relíquia Sagrada do Rei do Mar. Vamos para (333, 934) e usamos o objeto.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '272, 882', 'item_required' => null, 'instruction' => 'Obteremos o buff do Poder do Rei do Oceano. Em seguida, temos que ir até Bath (272, 882), conversamos com ele e escolhemos "Deixe-me mostrar o verdadeiro poder do Rei do Mar".'],
                        ],
                    ],
                    [
                        'item_title' => 'Muito Distante',
                        'history_title' => 'Muito Distante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com Ork e escolhemos "Ouvi dizer que você tem uma espada amaldiçoada aqui".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '90, 103', 'item_required' => null, 'instruction' => 'Ele nos dará a espada da desgraça. Levamos a espada até (90, 103), a usamos e conseguiremos a espada celestial.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Voltamos para Ork e ao falar com ele escolhemos "Já te ajudei a se livrar da aura maligna".'],
                        ],
                    ],
                ],
            ],
            // ==================== BAÍA AZUL ====================
            [
                'city' => 'Baía Azul',
                'name' => 'Prado da Ilha Prisma',
                'slug' => 'ba-a-azul-prado-da-ilha-prisma',
                'description' => 'Mapa de Prado da Ilha Prisma na região de Baía Azul.',
                'sort_order' => 21,
                'trivias' => [
                    [
                        'item_title' => 'Vamos Dançar!',
                        'history_title' => 'Vamos Dançar!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dançarina Ricci', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com a Dançarina Ricci e selecione a opção "Me dê o pandeiro que faz as pessoas dançarem!".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use-o nas proximidades de Ricci para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cenoura Para Cima!',
                        'history_title' => 'Cenoura Para Cima!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Pá Universal', 'instruction' => 'Vá até o Comerciante Ambulante/Lojista e compre o item "Pá Universal"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '619, 149', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (619, 149) onde encontrará uma cenoura gigante e clique na pá. Irá aparecer o Jelly-coelho Picante. Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ligeireza',
                        'history_title' => 'Ligeireza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Caixa Forte Trancada', 'instruction' => 'Passeie em redor do Campo Pirata Noturno até encontrar uma caixa vermelha do tesouro - acerte a caixa para receber o item «Caixa Forte Trancada».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'De seguida, vá até ao Viajante Misterioso e selecione "Você consegue reconhecer este cofre?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Guarda sem sentido',
                        'history_title' => 'Guarda sem sentido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '870, 411', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (870,411) e derrote os guardas que rodeiam o Baú Antigo. Fale com ele e selecione a opção "Você está protegendo alguma coisa?" - mate o mob que aparece para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tour da Pradaria',
                        'history_title' => 'Tour da Pradaria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião da Pradaria', 'coordinates' => '393, 274', 'item_required' => 'Tour do Pássaro Solar', 'instruction' => 'Fale com Ancião da Pradaria e selecione "Eu gostaria de alugar um pássaro solar. Aqui está 20 em ouro" para entrar no status [Tour do Pássaro Solar] - dura 15 min. Vá pela seguinte ordem, às coordenadas (393, 274), (546, 181) e (641, 235) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Posto Preguiçoso',
                        'history_title' => 'O Posto Preguiçoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Reiley', 'coordinates' => null, 'item_required' => 'Formas de Registo Climático', 'instruction' => 'Fale com o NPC Reiley e selecione "Como assim?" para obter o item "Formas de Registo Climático". Vá até o NPC Rice e selecione "Você quer ganhar dinheiro ficando deitado?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bardo da Ilha de Três Pontas',
                        'history_title' => 'Bardo da Ilha de Três Pontas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferma', 'coordinates' => '792, 195', 'item_required' => 'Gaita de Fermat', 'instruction' => 'Fale com o NPC Ferma e selecione "Os dias melancólicos ficaram no passado" para obter o item "Gaita de Fermat". Vá até ao local (792, 195) e dê clique direito no item para receber o buff "Anotações Alegres" - dura 5 min. Volte ao NPC Reiley e selecione "Você ouviu a música que vem das montanhas?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lâmpada Insensível',
                        'history_title' => 'Lâmpada Insensível',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tato', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com NPC Tato e selecione "Por que está olhando para o Capitão da Guarda?" para adquirir . Fale com Stiffany na opção "Esta é uma carta sua para o Tenente" para adquirir . Va até as coordenadas ( 71, 242) para usar o item. Após o usar retorne a Tato clicando na opção .'],
                        ],
                    ],
                    [
                        'item_title' => 'O Reparador',
                        'history_title' => 'O Reparador',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Trunan', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Alce da Pradaria para obter 1x e derrote Aranhas Cristal para obter 5x . Fale com Trunan e selecione "Você pode fazer uma Panaceia para mim?" para adquirir . Vá até o NPC Anson e clique em "Não precisa procurar. Já tenho a Panaceia aqui." para completara trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Justiça Será Feita',
                        'history_title' => 'A Justiça Será Feita',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marinheiro Ferido Ato', 'coordinates' => '824, 300', 'item_required' => 'Pirata Ganancioso', 'instruction' => 'Fale com Marinheiro Ferido Ato e selecione "Posso ajudar você a capturar um pirata?" para adquirir . Vá nas coordenadas (824, 300) e use o item para fazer aparecer um «Pirata Ganancioso». Derrote-o para entrar no status [Pirata capturado] - dura 10 min. Retorne ao NPC Ato nas coordenadas (820, 368).'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Nunca Vai Me Entender!',
                        'history_title' => 'Você Nunca Vai Me Entender!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ricci', 'coordinates' => '140, 226', 'item_required' => 'Recipiente Vazio Limpo', 'instruction' => 'Fale com a NPC Ricci (140, 226) e selecione a opção "Você parece um pouco desconfortável" para receber o buff "Preocupação". Vá até o NPC Reiley (789, 363) e selecione a opção "Você recebeu os itens enviados por Ricci?" para receber o item "Recipiente Vazio Limpo". Volte no NPC Ricci e selecione a opção "Ele é muito chato" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Disse Tudo',
                        'history_title' => 'Disse Tudo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feather', 'coordinates' => '1478, 572', 'item_required' => null, 'instruction' => 'Fale com o NPC Feather (1478, 572) e selecione a opção "Pena, por que você tem penas?" para obter "Penas Leves". Vá até (85, 147) e use o item para receber o buff "Estou saindo devagar agora". Volte no NPC Feather e selecione a opção "Eu estou vindo com o vento, você vai com o vento" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Não desista!',
                        'history_title' => 'Não desista!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'AnxiFale com o NPC Anxi', 'coordinates' => '1737, 354', 'item_required' => null, 'instruction' => 'Vá até (1737, 354) até aparece a mensagem no Discover "Jovem, Não seja idiota" e receber o buff por 30 segundos. Antes do buff acabar vá para (1736, 385) e irá aparecer o NPC AnxiFale com o NPC Anxi e selecione a opção "Professor, eu só quero ver o mar..." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Tomando Coragem',
                        'history_title' => 'Tomando Coragem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ross', 'coordinates' => '73, 246', 'item_required' => 'Conjunto de Ferramentas e Pregos', 'instruction' => 'Derrote "Vanguarda Pirata Noturno" ou "Guarda Pirata Noturno" para obter o item "Conjunto de Ferramentas e Pregos" e "Tábuas de Madeira de Alta Qualidade". Vá até o NPC Ross (73, 246) e selecione a opção "Ajude-me a martelar um prego em uma placa de madeira" e "Me ajude a tirar as unhas do quadro." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Enjoo',
                        'history_title' => 'Enjoo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '138, 266', 'item_required' => null, 'instruction' => 'Nos dirigimos a falar com Ross e escolhemos a opção "Você não está realmente tonto?", faremos esse processo duas vezes. Agora vamos até Moss (138, 266) e compramos Medicamentos para Enjoo. Voltamos para Ross, falamos com ele e escolhemos "Eu tenho um remédio para o enjoo".'],
                        ],
                    ],
                    [
                        'item_title' => 'Esta não é a minha carne',
                        'history_title' => 'Esta não é a minha carne',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '163, 220', 'item_required' => null, 'instruction' => 'Falamos com Chardika na opção "Você quer comer algo?". Agora vamos até Smater (163, 220), falamos com ele e ele nos dará Carne de Salmão. Agora só precisamos voltar para Chardika, falar com ele e escolher "Eu trouxe carne para você!".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Baía Azul',
                'name' => 'Montanha dos Leões Gêmeos',
                'slug' => 'ba-a-azul-montanha-dos-le-es-g-meos',
                'description' => 'Mapa de Montanha dos Leões Gêmeos na região de Baía Azul.',
                'sort_order' => 22,
                'trivias' => [
                    [
                        'item_title' => 'Fragrância no Ar',
                        'history_title' => 'Fragrância no Ar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Espeto Cru de Porco', 'instruction' => 'Fale com o lojista e compre o item "Espeto Cru de Porco" e vá até às coordenadas 450, 535 - próximo ao NPC mecha de Jale. Use o item aí para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Piada triste',
                        'history_title' => 'Piada triste',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Noraba', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Noraba e selecione a opção "Porque não tem mais "ninguém" aqui"'],
                        ],
                    ],
                    [
                        'item_title' => 'Sinto Muita Saudade',
                        'history_title' => 'Sinto Muita Saudade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sayi', 'coordinates' => null, 'item_required' => 'Anotações Desgastadas', 'instruction' => 'Vá derrotando potes vermelhos (Jarras de Cerâmica) até obter o item "Anotações Desgastadas" - acumule 4 deles primeiro. Fale com o NPC Sayi e selecione "Estas notas parecem ter sido escritas por você" irá obter o buff "Questionamento Repetido" - dura 5 min. Acumule o buff 4 vezes e selecione a opção "E você está me contando a verdade?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Entrando no Acampamento Errado',
                        'history_title' => 'Entrando no Acampamento Errado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '935, 365', 'item_required' => 'Trevo da Sorte', 'instruction' => 'Vá até ao Comerciante Ambulante e compre «Trevo da Sorte» por 1g. De seguida, siga até às coordenadas (935,365) para invocar "Pessoa Retumbante" com o Trevo da Sorte. Derrote-os para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Despedida',
                        'history_title' => 'A Despedida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chase', 'coordinates' => null, 'item_required' => 'Ossos da Besta Demônio', 'instruction' => 'Fale com Chase e selecione "Sinto um clima pesado por aqui" para obter o item "Ossos da Besta Demônio". Vá até à Pedra da Alma Antiga Fera e selecione a opção "Tome, pegue estes ossos" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Registro Superior',
                        'history_title' => 'Registro Superior',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Placa de Rua', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com a Placa de Rua e selecione a opção "Leia com atenção as letras miúdas das placas no caminho".'],
                        ],
                    ],
                    [
                        'item_title' => 'A Libertação do Super Poder',
                        'history_title' => 'A Libertação do Super Poder',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Antony', 'coordinates' => null, 'item_required' => 'A libertação do super poder', 'instruction' => 'Fale com o NPC Antony e escolha a opção ""Você inventou algo legal nos últimos tempos?"" para obter o status [A libertação do super poder] - dura 5min. Após ter o status, fale com o NPC Pulitzer e escolha a opção ""WalaWalaWala!"". De seguida fale com Jalien e selecione a opção ""WalaWalaWala!"" Finalmente volte ao Antony e escolha a opção ""Olhe o que você fez."" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cajado Maravilhoso',
                        'history_title' => 'Cajado Maravilhoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '667, 675', 'item_required' => 'Tubarão Gigante', 'instruction' => 'Vá até ao lojista e compre . Vá nas coordenadas (667, 675) e use o item para invocar um «Tubarão Gigante» que o atacará. Derrote-o para obter e vá para as coordenadas (451, 522). Use a carne para obter e vá até Jalien, selecionando a opção "Ouvi dizer que você não tem comido bem nos últimos tempos. Tenho um pouco de carne de tubarão para você".'],
                        ],
                    ],
                    [
                        'item_title' => 'Lampejo na Panela',
                        'history_title' => 'Lampejo na Panela',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '970, 784', 'item_required' => 'Chamas do Ódio', 'instruction' => 'Derrote «Chamas do Ódio» até obter , depois vá até as coordenadas (970, 784) e e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Costa Bonita, Mar Vasto',
                        'history_title' => 'Costa Bonita, Mar Vasto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dudley', 'coordinates' => '1233, 357', 'item_required' => null, 'instruction' => 'Vá até o NPC Dudley e selecione"Certo, me entregue a foto" para adquirir . Vá até (1233, 357) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você está cansado?',
                        'history_title' => 'Você está cansado?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Et', 'coordinates' => '452, 549', 'item_required' => null, 'instruction' => 'Fale com o NPC Et (452,549) e compre "Fórmula de Tartaruga Selvagem da Montanha dos Leões Gêmeos". Derrote "Tartaruga Dente-Afiado" ou "Besta Tartaruga Pata-de-Aço" para obter " Fragmentos de Casco de Tartaruga" x5. Vá até o NPC Chase(885, 422) e faça o no alquimista. Vá até o NPC Pulitzer (460, 524) e selecione a opção "Você está cansado?" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Quanto Mais Clara a Luz, Mais Escuras as Sombras',
                        'history_title' => 'Quanto Mais Clara a Luz, Mais Escuras as Sombras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Antony', 'coordinates' => '460, 517', 'item_required' => null, 'instruction' => 'Fale com o NPC Antony (460, 517) "Você viu pessoas na Cidade Nombardi?" para receber o buff "O Sexto Fantasma?"Vá até (156, 467) para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Bis?',
                        'history_title' => 'Bis?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '1140, 240', 'item_required' => null, 'instruction' => 'Derrote (1140,240) até dropar "Pérola Mágica". Use a "Pérola Mágica" em (1119, 162) e irá aparecer o mob , derrote para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Curto e Grosso',
                        'history_title' => 'Curto e Grosso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jalien', 'coordinates' => '457, 576', 'item_required' => null, 'instruction' => 'Fale com "Baú de Tesouro de Brilho Dourado" (457, 576) e selecione a opção "Seja uma pessoa honrada" para receber o buff "Curto e Grosso". Vá até o NPC Jalien (441, 534) e selecione a opção "Eu peguei um baú do tesouro." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Você o fez chorar!',
                        'history_title' => 'Você o fez chorar!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos conversar com Dudley e selecionar, na ordem, as opções "Você está triste?", "Você está realmente triste?" e por último "Você está realmente triste?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Unifique!',
                        'history_title' => 'Unifique!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => '1000,470', 'instruction' => 'Vá até as coordenadas [1000,470] e fale com o NPC e clique na primeira opção "Qual é a bela paisagem por aqui?" >Para obter o item e, em seguida vá até as coordenadas [1025,653] >Use o item nessas coordenadas para obter o status [Paisagem quente] >Retorne ao NPC e clique na segunda opção "Esta é a beleza que você está falando" para completar a trívia.'],
                        ],
                    ],
                ],
            ],
            // ==================== SAPHAEL ====================
            [
                'city' => 'Saphael',
                'name' => 'Terra dos Suspiros',
                'slug' => 'saphael-terra-dos-suspiros',
                'description' => 'Mapa de Terra dos Suspiros na região de Saphael.',
                'sort_order' => 23,
                'trivias' => [
                    [
                        'item_title' => 'Que Nojo!',
                        'history_title' => 'Que Nojo!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Investigador Gode', 'coordinates' => '786, 1106', 'item_required' => null, 'instruction' => 'Fale com o NPC Investigador Gode (786, 1106) e selecione a opção "Eu quero ajudar com o experimento".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '760, 107', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (760, 107) e dê clique direito no item que recebeu para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Preço Absurdo',
                        'history_title' => 'Preço Absurdo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '445, 981', 'item_required' => 'Manual de Luta da Flor de Ameixa', 'instruction' => 'Vá até as coordendas (445, 981), onde irá encontrar Baú de Livros. Ataque-o para dropar o item "Manual de Luta da Flor de Ameixa".'],
                            ['step_number' => 2, 'npc_name' => 'Lutador Muca', 'coordinates' => '685, 1062', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (685, 1062) para falar com o NPC Lutador Muca e selecione "Dê uma olhada nesse manual de artes marciais" (você precisa do livro para completar a trívia).'],
                        ],
                    ],
                    [
                        'item_title' => 'Nem Tudo o Que é Colorido é Gostoso',
                        'history_title' => 'Nem Tudo o Que é Colorido é Gostoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Cogumelos Verdes', 'instruction' => 'Derrote o grande cogumelo verde (localização: 777,572) para obter o item «Cogumelos Verdes».'],
                            ['step_number' => 2, 'npc_name' => 'Aventureiro Hermann', 'coordinates' => '444, 544', 'item_required' => null, 'instruction' => 'Fale com o NPC Aventureiro Hermann (444, 544) e selecione "O gosto de um cogumelo verde" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ouse tentar',
                        'history_title' => 'Que tal tentar?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sargento Feiticeira Wanessa', 'coordinates' => '433, 551', 'item_required' => 'Bisque de cogumelos verdes', 'instruction' => 'Fale com a NPC Sargento Feiticeira Wanessa (433, 551) e selecione "Experimente esta bisque de cogumelos verdes" para adquirir o item «Bisque de cogumelos verdes»'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lembranças da Cidade Natal',
                        'history_title' => 'Lembranças de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Inspetor Cliff', 'coordinates' => '790, 1163', 'item_required' => 'Carta Anônima', 'instruction' => 'Fala com o NPC Inspetor Cliff (790, 1163), selecione "Com o que você está se estressando?" e irá obter o item "Carta Anônima".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '732, 1131', 'item_required' => null, 'instruction' => 'Depois vá até Soldado Mágico Barriet (732, 1131), selecione "Você sabe que escreveu essa carta?" e irá obter o buff "Não É Óbvio".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '443, 551', 'item_required' => null, 'instruction' => 'Em seguida vá e converse com a Sargento Feiticeira Wanessa (443, 551) escolhendo a opção "Você escreveu essa carta?" e ficará com o buff "É Outra Pessoa".'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '448, 556', 'item_required' => null, 'instruction' => 'Então fale com Amazona da Chama Branca Lilia (448, 556), selecione "Essa carta é sua?" e irá adquirir o buff "Colega Tímido".'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => '418, 615', 'item_required' => null, 'instruction' => 'Para concluir, converse com a Caçadora de Demônios Marisa (418, 615) e escolha "Você escreveu para alguém ultimamente?" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Herdeira dos Dragões',
                        'history_title' => 'O Sucessor do Dragão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lojista Rayona', 'coordinates' => '812, 1151', 'item_required' => 'Túnca de Escamas de Dragão Áspera', 'instruction' => 'Fale com a NPC Lojista Rayona (812, 1151), selecione "Você encontrou alguma coisa interessante ultimamente?" e irá receber o item "Túnca de Escamas de Dragão Áspera".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Alma Sopro do Dragão', 'instruction' => 'Em seguida vá até a localização 688, 659, quebre um jarro e pegue o item "Alma Sopro do Dragão".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '811, 1172', 'item_required' => 'Túnica de Escamas de Dragão Brilhante', 'instruction' => 'Depois fale com Arqueólogo Rick (811, 1172), escolha a opção "Você pode dar uma olhada nessa túnica, por favor?" e irá adquirir o item "Túnica de Escamas de Dragão Brilhante".'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '682, 1064', 'item_required' => null, 'instruction' => 'Então para finalizar fale com o Lutador Muca (682, 1064) e selecione "Você não pega resfriado andando por aí sem camisa?" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tarefa de Comida',
                        'history_title' => 'Caixa de Comida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => '"Derrote Filhotes de Dragão Velho para obter cinco .'],
                            ['step_number' => 2, 'npc_name' => 'Soldado Ganancioso Oxton', 'coordinates' => '447, 547', 'item_required' => 'Segurando sopa', 'instruction' => 'Depois fale com o NPC Soldado Ganancioso Oxton (447, 547) selecionando ""Aqui estão os Ossos de Filhotes de Dragão que você pediu"" para entrar no status [Segurando sopa] - dura 15 minutos e o jogador será incapaz de atacar ou usar skills.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '607, 560', 'item_required' => null, 'instruction' => 'Vá até (607, 560) para adquirir e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'É Tão Bom Ser Falso',
                        'history_title' => 'É Tão Bom Ser Falso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '812, 1151', 'item_required' => null, 'instruction' => 'Vá até a Lojista Rayona (812, 1151) e compre o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '464, 722', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (464, 722) para encontrar um Antigo Ladrão. Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Soco de Gratidão',
                        'history_title' => 'Soco de Gratidão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lutador Muca', 'coordinates' => '682, 1064', 'item_required' => null, 'instruction' => 'Vá até Lutador Muca (682, 1064) e clique na opção \'\'Pra que serve praticar...\'\''],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '733, 1129', 'item_required' => null, 'instruction' => 'Em seguida vá ate Soldado Mágico Barriet (733, 1129) e clique na segunda opção \'\'O que acha dos golpes do Muca?\'\''],
                        ],
                    ],
                    [
                        'item_title' => 'Não É Uma Máquina de Vendas',
                        'history_title' => 'Não É Uma Máquina de Refrigerantes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '518, 410', 'item_required' => 'Talvez Haja Esperança', 'instruction' => 'Vá até o Transformador (518, 410) e clique na opção "Bate o pé no aparelho" para entrar no status [Talvez Haja Esperança].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Acumule 3 vezes o status e depois selecione "Acerte o aparelho com um chute rotatório" para completar a trívia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '470, 610', 'item_required' => null, 'instruction' => 'Use o item no mob "Filhote de Dragão Velho" (470,610) para receber o buff "Capturando Almas" acumule o buff até 10.'],
                            ['step_number' => 3, 'npc_name' => 'Aventureiro Hermann', 'coordinates' => '444, 544', 'item_required' => null, 'instruction' => 'Volte até o NPC Aventureiro Hermann (444,544) e escolha a opção "Oh cara, o dragão está realmente me seguindo!" Irá aparecer o mob derrote-o para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Transmigração',
                        'history_title' => 'Transmigração',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote "Caixa de Jóias Sem Valor" (X:558, Y:954) para obter Rubi Amaldiçoado.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Arqueólogo Rick (X:811,Y:1172) e escolha a opção "Olha esse Rubi" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Super-homem',
                        'history_title' => 'Super-homem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Barriet', 'coordinates' => '791, 1130', 'item_required' => 'Treino de pernas', 'instruction' => 'Vá até o NPC Barriet (791, 1130) e escolha a opção "Eu quero ter a capacidade de matar uma vaca com um soco", você irá receber um buff [Treino de pernas].'],
                            ['step_number' => 2, 'npc_name' => 'Barriet', 'coordinates' => '633, 900', 'item_required' => null, 'instruction' => 'Vá até o Altar da Serenidade (633, 900). Retorne ao NPC Barriet (791, 1130) e escolha a opção "Eu treinei minhas pernas!" Ele irá invocar um monstro, mate-o'],
                        ],
                    ],
                    [
                        'item_title' => 'Suspiros no Vento',
                        'history_title' => 'Suspiros no Vento',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '500, 1125', 'item_required' => null, 'instruction' => 'Derrote "Iaque do Cerrado" (500, 1125) para adquirir "Costela de iaque". Junte 10x.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '800, 100', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (800, 100) e use as carnes para adquirir "Costela de Iaque deliciosa"x10.'],
                            ['step_number' => 3, 'npc_name' => 'Inspetor Cliff', 'coordinates' => '795, 1159', 'item_required' => null, 'instruction' => 'Em seguida vá até o NPC Inspetor Cliff (795, 1159) e selecione a opção "Cheire, é tão perfumado!" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ataque Amargo',
                        'history_title' => 'Ataque Amargo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos falar com Lilia, escolhendo a opção "Precisa de ajuda?". Obtemos o buff "Uma mão amiga".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '812, 1150', 'item_required' => null, 'instruction' => 'Vamos falar com Rayona (812, 1150). Selecionamos a opção "Preciso de um antídoto!" e obteremos o Antídoto do Lótus Amarelo.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Levamos o antídoto para Lilia e selecionamos a opção "Trouxe um antídoto".'],
                        ],
                    ],
                    [
                        'item_title' => 'Carvão é Melhor',
                        'history_title' => 'Carvão é Melhor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com Oxton e selecionamos "Ouvi dizer que você descobriu uma maneira de cozinhar cogumelos verdes".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '806, 83', 'item_required' => null, 'instruction' => 'Ele nos entregará os Hongos Verdes. Vamos para (806, 83) e usamos o cogumelo. Obteremos Carvão.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Agora é hora de voltar para Oxton, falamos com ele e escolhemos "Como se come isso?".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Pantano Sombrio',
                'slug' => 'saphael-pantano-sombrio',
                'description' => 'Mapa de Pantano Sombrio na região de Saphael.',
                'sort_order' => 24,
                'trivias' => [
                    [
                        'item_title' => 'Um Amigo em Perigo',
                        'history_title' => 'Um Amigo em Perigo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Líder da Equipe Comercial Bartley', 'coordinates' => '130, 831', 'item_required' => null, 'instruction' => 'Fale com o NPC Líder da Equipe Comercial Bartley (130, 831) e selecione "Suprimentos do transporte de resgate" para receber Suprimentos de Emergência.'],
                            ['step_number' => 2, 'npc_name' => 'Sobrevivente Arnold', 'coordinates' => '423, 807', 'item_required' => null, 'instruction' => 'Vá até ao NPC Sobrevivente Arnold (423, 807) para lhe entregar os suprimentos. Selecione a opção "Por favor, aceite esses suprimentos".'],
                        ],
                    ],
                    [
                        'item_title' => 'Negócio Engenhoso',
                        'history_title' => 'Negócio Engenhoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ecologista Ferola', 'coordinates' => '144, 423', 'item_required' => null, 'instruction' => 'Fale com a NPC Ecologista Ferola (144, 423) e selecione a opção "Por Favor, empreste-me uma garrafa vazia"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '139, 1157', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (139, 1157) para dar clique direito na garrafa. Irá adquirir "Água da fonte da juventude".'],
                            ['step_number' => 3, 'npc_name' => 'Líder da Equipe Comercial Bartley', 'coordinates' => '130, 831', 'item_required' => null, 'instruction' => 'Vá até o NPC Líder da Equipe Comercial Bartley (130, 831) e selecione a opção "Esta é a Água da Fonte da Juventude do Pântano Sombrio".'],
                        ],
                    ],
                    [
                        'item_title' => 'Quero comer gelatina',
                        'history_title' => 'Quero comer gelatina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Pedaços de Geleia Deliciosos', 'instruction' => 'Derrote "Jelly-Coleho do Pantanal" até obter o item "Pedaços de Geleia Deliciosos" -'],
                            ['step_number' => 2, 'npc_name' => 'Líder da Equipe Comercial Bartley', 'coordinates' => '130, 831', 'item_required' => null, 'instruction' => 'Vá até ao NPC Líder da Equipe Comercial Bartley (130, 831) e selecione "Doar um delicioso cubinho de gelatina" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você me faz chorar',
                        'history_title' => 'Ele Choro por sua causa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ajudante Hess', 'coordinates' => '632, 169', 'item_required' => 'Lágrimas do espírito da água', 'instruction' => 'Fale com o NPC Ajudante Hess (632, 169) e selecione "Peça desculpa ao espírito d\'água" para adquirir o item "Lágrimas do espírito da água".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '490, 412', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (490, 412) e dê clique direito no item.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'O monstro "Espírito d\'Água Gigante" irá aparecer, derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Último Desejo',
                        'history_title' => 'Último Desejo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Emblema de Columbus', 'instruction' => 'Vá em 487, 1070 e ataque ao redor da área até adquirir o item "Emblema de Columbus" (é dropado em torno desse local em um baú).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '421, 807', 'item_required' => 'Boneca Encharcada', 'instruction' => 'Depois fale com a Sobrevivente Carol (421, 807) e selecione "Gosta disso?" para obter o item "Boneca Encharcada".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '495, 1039', 'item_required' => null, 'instruction' => 'Para finalizar e completar a trívia, fale com o Marinheiro Justo Rooney (495, 1039) e escolhe a opção "Veja só!".'],
                        ],
                    ],
                    [
                        'item_title' => 'Visão Embaçada',
                        'history_title' => 'Beleza Nevoenta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Viajante', 'coordinates' => '648, 177', 'item_required' => null, 'instruction' => 'Vá até o NPC Viajante (648, 177) e selecione a opção "Olá, viajante." para adquirir o Guia Turístico do Pantano Sombrio.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '200, 220', 'item_required' => null, 'instruction' => 'Em seguida vá até a localização (200, 220) para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Beba Mais Água',
                        'history_title' => 'Beba Mais Água',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Companheiro da Equipe comercial Ava', 'coordinates' => '123, 830', 'item_required' => null, 'instruction' => 'Vá até Companheiro da Equipe comercial Ava (123,830) e clique na opção \'\'Entregue o jogo sobre a oportunidade comercial\'\' para obter o balde.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois vá nas coordenadas 248, 623 e use o balde. Irá obter o balde pela metade.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até as coordenadas 120, 934 e use o balde novamente.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '123, 830', 'item_required' => null, 'instruction' => 'Adquirindo o balde cheio, vá Companheiro da Equipe comercial Ava (123,830) e clique em \'\'Estou de volta com o balde\'\'.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mesmo Assustado',
                        'history_title' => 'Mesmo Assustado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '542, 1078', 'item_required' => null, 'instruction' => 'Compre no lojista o ítem "Disfarce Aterrorizante", em seguida vá até a localização (542, 1078) e use o ítem.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote o Huey para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Justiça no Espírito',
                        'history_title' => 'Justiça no Espírito',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '280, 1100', 'item_required' => null, 'instruction' => 'Vá até o túmulo (280, 1100) para receber o status "Justiça dos mortos vivos".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Você terá 1h para derrotar: Espírito do Colombo, Astrólogo do Colombo ou Marinheiro do Colombo. Você deverá acumular o status "Justiça no Espírito 50x para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Venha Se Aliviar do Calor no Reino Espiritual',
                        'history_title' => 'Venha Se Aliviar do Calor no Reino Espiritual',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Hendrick', 'coordinates' => '645, 155', 'item_required' => null, 'instruction' => 'Vá até o NPC Hendrick (645, 155) e escolha a opção "Experiência de viagem de verão" para obter "Lista de Locais Espirituais".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '204, 214', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (204,214) e use o item para obter o buff "Avistando Fantasmas".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '526, 1079', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (526,1079) para receber o buff "Ouvindo o Fantasma".'],
                            ['step_number' => 4, 'npc_name' => 'Hendrick', 'coordinates' => '645, 155', 'item_required' => null, 'instruction' => 'Volte até o NPC Hendrick (645, 155) e escolha a opção "Você se sente frio depois da viagem!" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Lendas são apenas Lendas',
                        'history_title' => 'Lendas são apenas Lendas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferola', 'coordinates' => '144, 423', 'item_required' => null, 'instruction' => 'Vá até a NPC Ferola (144, 423) e escolha a opção "Turnê do pacote da experiência da Água da Fonte da Juventude" para receber Garrafa de Experimento Vazia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '149, 1156', 'item_required' => null, 'instruction' => 'Vá até (149, 1156) e use o item para obter "Garrafa Pequena de Água da Fonte da Juventude".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Irá aparecer um mob use a garrafa nele para derrotar o mob e receber o buff "Nunca foi Bebida".'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '144, 423', 'item_required' => null, 'instruction' => 'Volte até Ferola (144, 423) e escolha a opção "Eu tenho a Água da Juventude, mas..." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pensamentos Incontroláveis',
                        'history_title' => 'Pensamentos Incontroláveis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '489, 1119', 'item_required' => null, 'instruction' => 'Vá até (489, 1119) e derrote para obter "Retrato de Família Encharcado".'],
                            ['step_number' => 2, 'npc_name' => 'Carol', 'coordinates' => '422, 808', 'item_required' => null, 'instruction' => 'Vá até o NPC Carol (422, 808) e escolha a opção "Oh, não chore mais." para completar a Trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Olhos de Aranha',
                        'history_title' => 'Olhos de Aranha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '107, 33', 'item_required' => null, 'instruction' => 'Vá até (107, 33) e fale com "Ossos espalhados", escolha a opção "Você acabou de dizer alguma coisa?" para receber Carta Amarelada.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Companheira da Equipe Comercial Ava (X:123,Y:831) e escolha a opção "Uma carta para você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Salvador de Negócios',
                        'history_title' => 'Equipe Comercial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '645, 155', 'item_required' => 'Câmera de Vídeo', 'instruction' => 'Converse com Hendrick (645, 155)e selecione a opção "E o seu plano é....?" para adquirir [Câmera de Vídeo].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '630, 229', 'item_required' => 'Câmera de Vídeo', 'instruction' => 'Use nas coordenadas (630, 229) para adquirir [Câmera de Vídeo].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '61, 59', 'item_required' => 'Câmera de Vídeo', 'instruction' => 'Use nas coordenadas (61, 59) para adquirir [Câmera de Vídeo].'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '518, 1071', 'item_required' => 'Câmera de vídeo', 'instruction' => 'Use nas coordenadas (518, 1071) para adquirir [Câmera de vídeo].'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até Hendrick e selecione "Segui suas instruções mas...." para concluir a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'As Máquinas são Versáteis!',
                        'history_title' => 'As Máquinas são Versáteis!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '629, 168', 'item_required' => null, 'instruction' => 'Vamos até Moson e ao falar com ele selecionamos a opção "Os mechas são oniscientes?". Agora vamos até Hess (629, 168).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com o NPC e escolhemos "Os mechas sabem de tudo, então você é solteiro?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Por que você está gritando??',
                        'history_title' => 'Por que você está gritando??',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com Heidi e escolhemos a opção "O que você está fazendo?". Vamos acumular um buff, então faremos isso 5 vezes.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois escolhemos "Estou tranquilo. O que você está fazendo?".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Bosque de Gaia',
                'slug' => 'saphael-bosque-de-gaia',
                'description' => 'Mapa de Bosque de Gaia na região de Saphael.',
                'sort_order' => 25,
                'trivias' => [
                    [
                        'item_title' => 'Batalha Clássica',
                        'history_title' => 'Batalha Clássica',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Paladino Gerham', 'coordinates' => '570, 120', 'item_required' => 'Ruína de Monumento Antigo', 'instruction' => 'Fale com o NPC Paladino Gerham (570, 120) e selecione a opção "Eu quero assistir a competitivos esportes antigos" para receber o item "Ruína de Monumento Antigo".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '674, 281', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (674, 281) e dê clique direito para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Onde Está a Deusa?',
                        'history_title' => 'Onde Está a Deusa?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oficial da Defesa Karen', 'coordinates' => '203, 243', 'item_required' => null, 'instruction' => 'Fale com o NPC Oficial da Defesa Karen (203, 243) e selecione a opção "Por favor, empreste-me um machado que ainda não foi usado" para receber "Machado Enferrujado".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '259, 707', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (259,707) e dê clique direito no machado para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sonolência Repentina',
                        'history_title' => 'Sonolência Repentina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado da Defesa Miluan', 'coordinates' => '231, 185', 'item_required' => 'Sou um Guarda de Patrulha', 'instruction' => 'Fale com o NPC Soldado da Defesa Miluan (231, 185) e selecione "Eu posso ajudá-lo a patrulhar" para receber o estado [Sou um Guarda de Patrulha] (dura 5min)'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '1100, 1053', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (1100, 1053) e (803, 823) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Nativo de Gaia',
                        'history_title' => 'Minha nacionalidade é Gaiya',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Profeta do Senado Borg', 'coordinates' => '564, 130', 'item_required' => 'Energia de Gaia', 'instruction' => 'Fale com o NPC Profeta do Senado Borg (564, 130) e selecione "Eu quero sentir a energia de Gaea" para receber o estado [Energia de Gaia] (dura 5min) e o item [Pedra da manifestação maligna].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '837, 826', 'item_required' => null, 'instruction' => 'Prossiga para as coordenadas (837, 826) e dê clique direito no item.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Poder maligno', 'instruction' => '[Poder maligno] irá aparecer - mate-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gosto de Frango',
                        'history_title' => 'Sabor de Frango',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Carne de Inseto Suculenta', 'instruction' => 'Derrote o monstro Minhoca de Gaia até dropar o item "Carne de Inseto Suculenta".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '229, 181', 'item_required' => null, 'instruction' => 'Depois fale com Chefe do bosque Beltran (229, 181) e selecione "Você já comeu insetos antes?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Desejo do Guerreiro',
                        'history_title' => 'Desejo do Guerreiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Adaga Velha', 'instruction' => 'Vá até a localização 1115, 1055 e ataque ao redor da área até adquirir o item "Adaga Velha" (é dropado em torno desse local em uma planta espinhosa).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '834, 825', 'item_required' => 'Luvas de Guerreiro', 'instruction' => 'Em seguida fale com Profeta do Senado Borg (834, 825) e selecione "Você sabe como avaliar uma adaga?" para obter o item "Luvas de Guerreiro".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois vá nas coordenadas 675, 300, clique com o botão direito neste item para invocar o Sota e derrote para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Teste de Amor',
                        'history_title' => 'Teste de Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sábio Nia', 'coordinates' => '148, 226', 'item_required' => null, 'instruction' => 'Fale com NPC Sábio Nia (148, 226) e selecione "Que cheiro bom é esse?" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => 'Intendente Tarsa', 'coordinates' => '202, 146', 'item_required' => 'A Desculpa do Intendente', 'instruction' => 'Fale com o NPC Intendente Tarsa (202, 146) e selecione "Quer sentir o sabor do trabalho de Vinia?" para adquirir o status [A Desculpa do Intendente]'],
                            ['step_number' => 3, 'npc_name' => 'Botânica Ella', 'coordinates' => '171, 156', 'item_required' => 'A Bondade das Irmãs', 'instruction' => 'Fale com o NPC Botânica Ella (171, 156) e selecione "Quer sentir o sabor do trabalho de Vinia?" para adquirir o status [A Bondade das Irmãs]'],
                            ['step_number' => 4, 'npc_name' => 'Caçador de Demônios Milo', 'coordinates' => '245, 209', 'item_required' => 'A determinação para sacrificar', 'instruction' => 'Fale com o NPC Caçador de Demônios Milo (245, 209) e selecione "Quer sentir o sabor do trabalho de Vinia?" para adquirir o status [A determinação para sacrificar]'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => '148, 226', 'item_required' => null, 'instruction' => 'Voltei para o Sábio Nia (148, 226) e selecione "O que as outras pessoas acharam dos biscoitos" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dever de Inspeção',
                        'history_title' => 'Inspeção de Rotina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Intendente Tarsa', 'coordinates' => '202, 146', 'item_required' => null, 'instruction' => 'Fale com Intendente Tarsa (202, 146) e selecione "Por que você está franzindo a testa?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '232, 187', 'item_required' => 'Tenda dos Membros da Patrulha Checada', 'instruction' => 'Vá nas coordenadas (232, 187) para obter o status [Tenda dos Membros da Patrulha Checada].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '119, 290', 'item_required' => 'Sala de Armazenagem da Torre Noroeste Checada', 'instruction' => 'Vá nas coordenadas (119, 290) para obter o status [Sala de Armazenagem da Torre Noroeste Checada].'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '161, 151', 'item_required' => 'Jardim de Ella Checado', 'instruction' => 'Por fim, vá nas coordenadas (161, 151) para obter o status [Jardim de Ella Checado].'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Tarsa e selecione ""Avise ao superior que a patrulha foi concluída!"" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Treino Religioso',
                        'history_title' => 'Treino Religioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Clérigo Alphat', 'coordinates' => '304, 647', 'item_required' => 'Flores Cheirosas', 'instruction' => 'Fale com o NPC Clérigo Alphat (304, 647) e selecione em "Não é perigoso andar só por aqui?" para entrar no status [Flores Cheirosas] - dura 2 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '331, 799', 'item_required' => null, 'instruction' => 'Vá até o Altar Eterno (331, 799) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mensageiro do Kung Fu',
                        'history_title' => 'Mensageiro Kung Fu',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mestre do Chi Oriental Lin', 'coordinates' => '993, 991', 'item_required' => 'Poder de Lin', 'instruction' => 'Fale com o NPC Mestre do Chi Oriental Lin (993, 991) e selecione em "Eu posso representar você e desafiar outra escola!" para entrar no status [Poder de Lin] - dura 15 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Gladiador com Espada de Pedra', 'instruction' => 'Procure pelo monstro «Gladiador com Espada de Pedra» (perto das coordenadas 1120, 1104) e derrote-o usando a skill "Kameowhameowha" obtida pelo status para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Segredo da Cozinha Deliciosa',
                        'history_title' => 'O Segredo da Cozinha Deliciosa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Nia', 'coordinates' => '148, 226', 'item_required' => null, 'instruction' => 'Fale com o NPC Nia (148, 226) e selecione a opção "Você quer cozinhar de novo?" para receber Tesouras Grandes.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '961, 769', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (961, 769) para obter Água da Fonte de Cheiro Estranho.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Tesouras Grandes', 'instruction' => 'Use o item "Tesouras Grandes" no mob "Flor Milenar Maligna" para obter o buff "Boca de Flor Gigante", acumule o buff x3.'],
                            ['step_number' => 4, 'npc_name' => 'Nia', 'coordinates' => '148, 226', 'item_required' => null, 'instruction' => 'Volta até o NPC Nia (148, 226) e selecione a opção "Eu trouxe de volta a boca sangrenta" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Que Romance Você Está Lendo?',
                        'history_title' => 'Que Romance Você Está Lendo?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Alphat', 'coordinates' => '300, 653', 'item_required' => null, 'instruction' => 'Vá até o NPC Alphat (300, 653) e selecione a opção "Tire o seu romance" para obter o item Livro com Lacre Mágico.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '408, 643', 'item_required' => null, 'instruction' => 'Use o item nas coordenadas (408, 643) para aparecer o NPC Humanoide Transluzente. Selecione a opção "Um livro caiu no lago" para receber "Livro sem lacre".'],
                            ['step_number' => 3, 'npc_name' => 'Alphat', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte no NPC Alphat e escolha a opção "Desculpe, o romance caiu no lago." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Sussurros no Vento',
                        'history_title' => 'Sussurros no Vento',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Paladino Gerham', 'coordinates' => '570, 120', 'item_required' => null, 'instruction' => 'Fale com o NPC Paladino Gerham (570, 120) e selecione a opção "BOOO!" para obter Miçanga da Memória.'],
                            ['step_number' => 2, 'npc_name' => 'Gerham', 'coordinates' => '721, 234', 'item_required' => null, 'instruction' => 'Use o item em frente ao NPC Gerham para ser teletransportado até (721, 234) e receber o buff "A aparição de imagens antigas".'],
                            ['step_number' => 3, 'npc_name' => 'Paladino Gerham', 'coordinates' => '570, 120', 'item_required' => null, 'instruction' => 'Volte até o NPC Paladino Gerham (570, 120) e escolha a opção "Você parece ter experimentado distorção de tempo e espaço" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Feijões Mágicos',
                        'history_title' => 'Feijões Mágicos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '661, 57', 'item_required' => null, 'instruction' => 'Vá até (661, 57) até aparecer no chat gritar "Uma trepadeira apareceu de repente".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Irá aparecer "Vinhas Dançantes" mate-a e irá aparecer no chat gritar "PUF! A trepadeira cresceu ainda mais!"'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Mate-a novamente para parecer Gigante Irritadiço.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Mate Gigante Irritadiço para receber Bolsa de Feijões Mágicos Fedidos.'],
                            ['step_number' => 5, 'npc_name' => 'Ella', 'coordinates' => '167, 157', 'item_required' => null, 'instruction' => 'Vá até o NPC Ella (167, 157) e escolha a opção "Este saco de feijão mágico é para você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Inseto Trapaceiro',
                        'history_title' => 'Inseto Trapaceiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Nos dirigimos até Randall e ao falar com ele escolhemos "Olha! Há vermes aqui!". Obteremos o buff "Mentiroso".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Precisamos acumulá-lo 3 vezes, então repetimos o processo 3 vezes.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, selecionamos "Espere! Aqui sim há vermes!" e derrotamos o verme que aparece.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sopa de Peixe da Deusa',
                        'history_title' => 'Sopa de Peixe da Deusa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos até onde Beltrán está, interagimos com ele e escolhemos a opção "Qual é a melhor comida da região?".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '303, 694', 'item_required' => null, 'instruction' => 'Ele nos dará uma isca deliciosa, que usamos em (303, 694). Obtenderemos "A Deusa do Peixe". Voltamos para Beltrán e escolhemos "Ajude-me a fazer o melhor prato".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Agora teremos "Sopa de peixe da deusa" na mochila, usamos o objeto.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Deserto do Vento Abrasador',
                'slug' => 'saphael-deserto-do-vento-abrasador',
                'description' => 'Mapa de Deserto do Vento Abrasador na região de Saphael.',
                'sort_order' => 26,
                'trivias' => [
                    [
                        'item_title' => 'Como Chuva no Deserto',
                        'history_title' => 'Como Chuva no Deserto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Investigador Perito Benson', 'coordinates' => '580, 162', 'item_required' => 'Garrafa de Água de Benson', 'instruction' => 'Fale com o NPC Investigador Perito Benson (580, 162) e selecione a opção "Fonte de água preciosa" para adquirir o item "Garrafa de Água de Benson".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '591, 150', 'item_required' => 'Água Potável Preciosa', 'instruction' => 'Vá até as coordenadas (591, 150) para receber o item "Água Potável Preciosa".'],
                            ['step_number' => 3, 'npc_name' => 'Capataz Abbohan', 'coordinates' => '81, 451', 'item_required' => null, 'instruction' => 'Vá até o NPC Capataz Abbohan(81, 451) e selecione a opção "Um pedido de um velho amigo" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Miragem',
                        'history_title' => 'Miragem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Consultora Científica Mina', 'coordinates' => '623, 174', 'item_required' => 'Localizador de Visões', 'instruction' => 'Fale com a NPC Consultora Científica Mina (623, 174) e selecione a opção "Eu ouvi que você sabe alguns pontos secretos de interesse" para adquirir o item "Localizador de Visões".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '223, 379', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (223, 379) e dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sem desperdiçar comida',
                        'history_title' => 'Sem desperdiçar comida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fantasma Vagante', 'coordinates' => '643, 435', 'item_required' => null, 'instruction' => 'Fale com o NPC Fantasma Vagante (643, 435) e selecione "Sobre a comida refinada" para começar a trívia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Mate Dragão Pilar de Pedra e Filhote de Dragão Rugidor até conseguir acumular 10 buffs "Fúria da Comida"'],
                            ['step_number' => 3, 'npc_name' => 'Fantasma Vagante', 'coordinates' => '643, 435', 'item_required' => null, 'instruction' => 'Em seguida vá até ao NPC Fantasma Vagante (643, 435) e selecione "Você queimou todos os dragões do deserto com seu fogo furioso" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Escavador Mutante Ladrão Terrível',
                        'history_title' => 'Os Ladrões Loucos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '857, 182', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (857, 182) ou (764, 208) e destrua o pote vermelho.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Bandido do Pier', 'instruction' => '[Bandido do Pier] irão aparecer, derrote-os para obter o item [Pedido de Escavador Mutante]'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '153, 202', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (153, 202) e dê clique direito no item'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Estrategista de Condor', 'instruction' => '[Estrategista de Condor] irá aparecer - derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mau Gosto do Grande Ferreiro',
                        'history_title' => 'Maus Hábitos do Mestre Artesão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Líder da Equipe Protetora Baharo', 'coordinates' => '708, 160', 'item_required' => 'Mapa da Grande Ponte Rachada', 'instruction' => 'Fale com Líder da Equipe Protetora Baharo (708, 160) e selecione "Eu preciso inspecionar a grande ponte?" para adquirir o item "Mapa da Grande Ponte Rachada".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Pergaminho Antigo', 'instruction' => 'Depois vá para as coordenadas 819, 179 e clique com o botão direito sobre ele para obter o item "Pergaminho Antigo".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '882, 258', 'item_required' => null, 'instruction' => 'Em seguida fale com Soldado Otto (882, 258) e clique em "Encontrei isto em uma rachadura na grande ponte".'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '803, 210', 'item_required' => null, 'instruction' => 'Então vá até Raymu (803, 210) e escolha a opção "Ott disse que você deveria dar uma olhada nisso" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bebida Privada do Deserto',
                        'history_title' => 'Bebida Particular na Areia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Fruta de Cacto', 'instruction' => 'Quebre o baú de tesouro vermelho em torno da localização 135, 475 para obter o item "Fruta de Cacto".'],
                            ['step_number' => 2, 'npc_name' => 'Engenheiro de Inspeção Moore', 'coordinates' => '137, 473', 'item_required' => 'Jarro de Vinho Luz Lunar', 'instruction' => 'Fale com o NPC Engenheiro de Inspeção Moore (137, 473), selecione "Você não precisa destas frutas para explorar, não é?" para adquirir o item "Jarro de Vinho Luz Lunar".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '82, 451', 'item_required' => null, 'instruction' => 'Depois fale com Capataz Abbohan (82, 451) e escolha a opção "Essas são as coisas que foram dadas pela pessoa que roubou os suprimentos" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Trabalhador Mensageiro Sprite',
                        'history_title' => 'Trabalhador Mensageiro Sprite',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Líder da Equipe Comercial Arut', 'coordinates' => '564, 165', 'item_required' => null, 'instruction' => 'Fale com NPC Líder da Equipe Comercial Arut (564, 165) e selecione "Talvez, eu possa entregar algumas mercadorias" para obter .'],
                            ['step_number' => 2, 'npc_name' => 'Companheiro da Equipe Comercial Yaji', 'coordinates' => '903, 240', 'item_required' => null, 'instruction' => 'Vá até NPC Companheiro da Equipe Comercial Yaji (903, 240) e clique em "Chego com uma entrega" para obter .'],
                            ['step_number' => 3, 'npc_name' => 'Companheiro da Equipe Comercial Balu', 'coordinates' => '297, 40', 'item_required' => null, 'instruction' => 'Por fim fale com NPC Companheiro da Equipe Comercial Balu (297, 40) e selecione "Chego com uma entrega" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'É Sempre O Dinheiro',
                        'history_title' => 'É Sempre Questão de Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Guerreiros de Bath', 'instruction' => 'Derrote «Guerreiros de Bath» ou «Demônios de Bath» até conseguir 3x'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Defuntos de Bath', 'instruction' => 'Depois derrote «Defuntos de Bath» até obter .'],
                            ['step_number' => 3, 'npc_name' => 'Caçador de Demônios Forlin', 'coordinates' => '663, 121', 'item_required' => null, 'instruction' => 'Vá até Caçador de Demônios Forlin (663, 121) ou a outro NPC Alquimista para iniciar a alquimia, introduzindo a no slot, para obter .'],
                            ['step_number' => 4, 'npc_name' => 'Caçador de Tesouro Secreto Mesiccan', 'coordinates' => '663, 120', 'item_required' => null, 'instruction' => 'Vá até o NPC Caçador de Tesouro Secreto Mesiccan (663, 120) e selecione em "Ajude-me a identificar esta antiguidade" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mais Miragens',
                        'history_title' => 'Mais Miragens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Experiência de Miragem', 'instruction' => 'Ande pelo mapa todo até ativar anúncios no chat Gritar "A cena que surgiu no deserto desaparece à medida que você se aproxima" para obter o status [Experiência de Miragem] - dura 1 hora.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '500, 460', 'item_required' => null, 'instruction' => 'Necessita acumular 3 vezes esse status para poder completar a trívia. (Nota: Algumas das coordenadas que possam ativar esses avisos são: (500, 460), (218, 383), (378, 176), (273, 263), (371, 177), (493, 479)'],
                        ],
                    ],
                    [
                        'item_title' => 'Lutador do Deserto',
                        'history_title' => 'Duelador do Deserto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Guerreiros da Pedra Bath', 'instruction' => 'Derrote «Guerreiros da Pedra Bath» e «Guardas da Pedra Bath» até obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '345, 423', 'item_required' => 'Gladiador de Bath', 'instruction' => 'Vá até as coordenadas (345, 423) e use o item para summonar «Gladiador de Bath».'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Tio Ama Seus Docinhos',
                        'history_title' => 'O Tio Ama Seus Docinhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '605, 175', 'item_required' => null, 'instruction' => 'Vá até (605, 175) e mate "Rebento de Ameixeira Místico" (ele fica aparecendo por essa região) para receber Ameixas Místicas.'],
                            ['step_number' => 2, 'npc_name' => 'Chefe de Cozinha Bruman', 'coordinates' => '65, 530', 'item_required' => null, 'instruction' => 'Vá até o NPC Chefe de Cozinha Bruman (65, 530) seleciona a opção "Eu realmente quero comer os outros grandes pratos do tio!" para receber Pompons de Frutinha Doce.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use Pompons de Frutinha Doce para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Só Pode Ser Visto de Longe',
                        'history_title' => 'Só Pode Ser Visto de Longe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mina', 'coordinates' => '623, 174', 'item_required' => null, 'instruction' => 'Vá até o NPC Mina (623, 174) e selecione a opção "Por que você está triste ultimamente?" para receber o buff "Procurando".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '534, 91', 'item_required' => null, 'instruction' => 'Vá até (534, 91) para receber o buff "Desolar".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '346, 424', 'item_required' => null, 'instruction' => 'Vá até (346,424) para receber o buff "Depressivo".'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '812, 195', 'item_required' => null, 'instruction' => 'Vá até (812,195) para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Outro Eu',
                        'history_title' => 'Outro Eu',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mesiccan', 'coordinates' => '663, 120', 'item_required' => null, 'instruction' => 'Vá até o NPC Mesiccan (663, 120) e selecione a opção "Você encontrou algum tesouro interessante recentemente?" para receber Chave Milenar. Vá até (343, 422)'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use o item para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Salto Voador! Mensageiro de Sprite!',
                        'history_title' => 'Voe! Mensageiro de Sprite!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Phils', 'coordinates' => '865, 173', 'item_required' => null, 'instruction' => 'Vá até o NPC Phils (865, 173) e selecione a opção "Enquanto eu tiver o coração, posso pular a ponte para o outro lado?" para receber o buff "Desafiando os Limites"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '809, 177', 'item_required' => null, 'instruction' => 'Vá até (809, 177) para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro Escondido!',
                        'history_title' => 'Tesouro Escondido!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '324, 323', 'item_required' => null, 'instruction' => 'Temos que falar com Messican, escolhemos a opção "Ouvi dizer que você conhece a localização do tesouro lendário". Agora devemos ir para (324, 323).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conseguimos um saco de areia, devemos levá-lo para Messican e falar com ele, escolhendo a opção "O que é esse tesouro lendário?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Mente Fria',
                        'history_title' => 'Uma Mente Fria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '781, 258', 'item_required' => null, 'instruction' => 'Interagimos com Yaji e escolhemos "Você está ótimo(a)". Agora vamos para (781, 258) e obteremos o estado "Uma mente fria"'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Montanhas Perdidas',
                'slug' => 'saphael-montanhas-perdidas',
                'description' => 'Mapa de Montanhas Perdidas na região de Saphael.',
                'sort_order' => 27,
                'trivias' => [
                    [
                        'item_title' => 'Tarde Demais',
                        'history_title' => 'Tarde Demais',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '662, 712', 'item_required' => null, 'instruction' => 'Selecione a Placa de Rua (662, 712) e clique na opção "Examinar as costas da placa de sinalização cuidadosamente" para adquirir "Mensagem Misteriosa"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '555, 372', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (555, 372). Dê clique direito no item para invocar Baú Despedaçado.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o rapidamente para terminar a trívia (ela vai sumir se você demorar demasiado tempo para a atacar).'],
                        ],
                    ],
                    [
                        'item_title' => 'Dádiva Ancestral',
                        'history_title' => 'Dádiva Ancestral',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '903, 197', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (903,197) e procure pela Baú do Guardião. Ataque-a e pegue o item Presa de Lobo Ancestral.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '835, 760', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (835,760) para falar com o NPC Kumahachi. Selecione a opção "Sobre a recordação do guardião" para completar a Trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Souvenir Falsificado',
                        'history_title' => 'Souvenir Falsificado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Ganancioso', 'coordinates' => '904, 648', 'item_required' => 'Vinho de rabo de iaque Huiy', 'instruction' => 'Fale com o Comerciante Ganancioso (904, 648) e selecione "Comprou \'Especiaria Hu-Yi\' com 5 ouro" para adquirir 3 itens [Vinho de rabo de iaque Huiy], [Vinho de iaque de Huiy] e [Vinho Olho de cerdo língua de urso]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Use os 3 itens.'],
                            ['step_number' => 3, 'npc_name' => 'NPC', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC e selecione "Que gosto estranho!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Criança do Campo',
                        'history_title' => 'Criança do Campo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Criança Peoa', 'coordinates' => '436, 96', 'item_required' => 'Lobos!', 'instruction' => 'Fale com o NPC Criança Peoa (436, 96) e selecione "Olhe! Os lobos estão vindo!" para receber o estado [Lobos!]'],
                            ['step_number' => 2, 'npc_name' => 'Caçador de Demônios Diago', 'coordinates' => '491, 57', 'item_required' => 'Caçador Ingênuo', 'instruction' => 'vá até ao NPC Caçador de Demônios Diago (491, 57) e selecione "Os lobos estão vindo! O que a gente faz?!" para receber o estado [Caçador Ingênuo].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Repita o mesmo processo (falar com Peoa e depois com Diago) até acumular 3 estados iguais'],
                            ['step_number' => 4, 'npc_name' => 'Caçador de Demônios Diago', 'coordinates' => '491, 57', 'item_required' => null, 'instruction' => 'Fale com Caçador de Demônios Diago (491, 57) e selecione "Tenho a certeza de que os lobos estão vindo!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Psicocinese Legendária?!',
                        'history_title' => 'O Psíquico Lendário?!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Adolescente da Montanha Hawkfeather', 'coordinates' => '837, 690', 'item_required' => null, 'instruction' => 'Fale com o NPC Adolescente da Montanha Hawkfeather (837, 690) e selecione "Você já ouviu falar da arte secreta de Tigara?" para obter o buff "Erupção da Energia".'],
                            ['step_number' => 2, 'npc_name' => 'Adolescente da Montanha Tigertrail', 'coordinates' => '870, 752', 'item_required' => null, 'instruction' => 'Fale com o NPC Adolescente da Montanha Tigertrail (870, 752) e selecione "Você já ouviu falar da arte secreta de Tigara?" para obter o buff "Conservação de Energia".'],
                            ['step_number' => 3, 'npc_name' => 'Chefe da Tribo Leão Kumahachi', 'coordinates' => '835, 760', 'item_required' => null, 'instruction' => 'Fale com o NPC Chefe da Tribo Leão Kumahachi (835, 760) e selecione "Você já ouviu falar da arte secreta de Tigara?" para obter o buff "Coesão de Energia".'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '419, 340', 'item_required' => null, 'instruction' => 'Então fale com Ancião da Tribo Leão Dauson (419, 340) e escolha a opção "Eu sinto uma energia por todo o meu corpo" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Antiga Canção do Chá',
                        'history_title' => 'A Antiga Melodia do Chá',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chefe da Tribo Leão Kumahachi', 'coordinates' => '835, 760', 'item_required' => null, 'instruction' => 'Fale com o NPC Chefe da Tribo Leão Kumahachi (835, 760) e selecione "Ouvi você sussurrando alguma coisa. De que se trata?" para obter o buff "Zunindo a Canção do Chá" (dura 10 minutos).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '419, 340', 'item_required' => null, 'instruction' => 'Em seguida vá em Ancião da Tribo Leão Dauson (419, 340) e escolha a opção "Ouça minha canção!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Agenda Oculta',
                        'history_title' => 'Agenda Oculta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Guarda de Tigara Kadora', 'coordinates' => '845, 592', 'item_required' => 'Amigos de batalhas', 'instruction' => 'Fale com Guarda de Tigara Kadora (845, 592) e selecione "Qual seu problema com estranhos?" para receber o status [Amigos de batalhas] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com ele até acumular o status 3 vezes e depois selecione "Não queria te machucar" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Poeta Fica doido',
                        'history_title' => 'O Poeta Fica Viajando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '925, 639', 'item_required' => null, 'instruction' => 'Vá até o Lojista Plum (925, 639) e compre o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '362, 985', 'item_required' => 'Recitando poemas', 'instruction' => 'De seguida, fale com Arledge Xin (362, 985) e selecione "Eu sei um pouco de poesia" para entrar no status [Recitando poemas] - dura 15 min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '256, 1077', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (256, 1077), diante da Torre Fénix para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Enfrentar a Realidade',
                        'history_title' => 'Enfrentar a Realidade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '584, 373', 'item_required' => 'Pontiagudo', 'instruction' => 'Vá até as coordenadas (584, 373) para tocar nos espinhos e obter o buff [Pontiagudo] - dura 15 min. Acumule esse status 10 vezes para completar a trívia. (Nota: Outras áreas espinhosas: (523, 536), (606, 510), (569, 447), (525, 456).'],
                        ],
                    ],
                    [
                        'item_title' => 'O Mundo nos Livros',
                        'history_title' => 'O Mundo nos Livros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '830, 224', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (830, 224) e derrube a caixa de tesouro que está entre as duas tendas para obter o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '759, 628', 'item_required' => null, 'instruction' => 'Depois vá até Aldeã Yafay (759, 628) e selecione "Esses livros… são seus?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Tal de "Skill Suprema"',
                        'history_title' => 'A Tal de "Skill Suprema"',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Hawkfeather', 'coordinates' => '839, 691', 'item_required' => null, 'instruction' => 'Fale com o NPC Hawkfeather (839,691) e selecione a opção "Deixe-me ver sua skill assassina!" para receber o buff "Amor Flexível"'],
                            ['step_number' => 2, 'npc_name' => 'Hawkfeather', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale novamente com o NPC Hawkfeather e selecione a opção "Parece estar enredado em goma de mascar" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Chega o Herói para Salvar o Dia',
                        'history_title' => 'Chega o Herói para Salvar o Dia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tigertrail', 'coordinates' => '873, 755', 'item_required' => null, 'instruction' => 'Fale com o NPC Tigertrail (873, 755) e selecione a opção "Ouvi dizer que há um hooligan na aldeia chamada Barke." para receber o buff "Nascido para Liderar".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '850, 728', 'item_required' => null, 'instruction' => 'Vá até (850, 728) e irá aparecer um mob e você irá receber o buff "Não Chegou Minha Hora" espere o buff acabar para receber o buff "Agora é hora".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Após receber o buff "Agora é hora" mate o para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Quero que Você me Queira',
                        'history_title' => 'Quero que Você me Queira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '393, 262', 'item_required' => 'O Príncipe Prepotente Me Ama', 'instruction' => 'Vá até o Comerciante Ambulante (393, 262) e compre o item "O Príncipe Prepotente Me Ama" e use para receber o buff "Punição Tensa"'],
                            ['step_number' => 2, 'npc_name' => 'Yafay', 'coordinates' => '759, 628', 'item_required' => null, 'instruction' => 'Vá até a NPC Yafay (759, 628) e selecione a opção "Isso é um castigo para você!" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Saphael, o Prodígio',
                        'history_title' => 'Saphael, o Prodígio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Xin', 'coordinates' => '362, 985', 'item_required' => null, 'instruction' => 'Vá até o NPC Xin (362, 985) e selecione a opção "Você quer aprender um com o outro?" para receber 2 buffs Inspirações Esfuziantes e Consideração de 70 segundos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Espere 70 segundos até o buff "Consideração de 70 segundos" acabar e receber o buff "Poema de 70 segundos".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'No NPC Xin selecione a opção "Eu escrevi um poema!" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Captura de Vontade',
                        'history_title' => 'Uma Captura de Vontade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Nos dirigimos até Hwasha e falamos com ele. Escolhemos a opção "Posso pegar emprestada uma vara de pescar?"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '863, 673', 'item_required' => null, 'instruction' => 'Depois "Você pode me emprestar um pouco de isca?" Vamos pescar em (863, 673).'],
                        ],
                    ],
                    [
                        'item_title' => 'Absurdo Completo',
                        'history_title' => 'Absurdo Completo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Interaja com Plum e escolha a opção "Quero falar com os animais", você receberá a Poção de Transformação de Animais.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '490, 58', 'item_required' => null, 'instruction' => 'Em seguida, vá até Diago (490, 58) e escolha "Tenho uma maneira de me comunicar com os animais", ele enviará você para (517, 179).'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Cordilheira Blakatoa',
                'slug' => 'saphael-cordilheira-blakatoa',
                'description' => 'Mapa de Cordilheira Blakatoa na região de Saphael.',
                'sort_order' => 28,
                'trivias' => [
                    [
                        'item_title' => 'Ritual Abominável',
                        'history_title' => 'Ritual Abominável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feiticeiro Eremita Rawasha', 'coordinates' => '81, 148', 'item_required' => 'Livro de Invocações de Alechi', 'instruction' => 'Fale com o NPC Feiticeiro Eremita Rawasha (81, 148) e selecione a opção "Dê-me o Livro de Invocações de Alechi" para receber o item "Livro de Invocações de Alechi".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até às coordenadas (472, 277 - Altar da Chama) e dê clique direito no item para invocar Alucinação do Dragão Alechi.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mão Protetora',
                        'history_title' => 'Mão Protetora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Anel Vórtex Mortal', 'instruction' => 'Vá até as coordenadas 1211, 1030 ou próximo delas e procure um pote vermelho. Destrua o pote para conseguir o item "Anel Vórtex Mortal"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '1188, 1094', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (1188, 1094). Dê clique direito no item que conseguiu para invocar Gullom .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ponto Secreto - Deus Monstro? Certificado que deus monstro...',
                        'history_title' => 'Deus Maligno! Deus Maligno Fracote!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Seguidores Deus do Fogo', 'instruction' => 'Derrote monstros do tipo [Seguidores Deus do Fogo] até obter o item [Oferenda ao Deus do Fogo]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '472, 279', 'item_required' => null, 'instruction' => 'Prossiga para as coordenadas (472, 279) e dê clique direito no item, Diabo da Nuvem de Fogo irá aparecer.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Modo de Cozinhar',
                        'history_title' => 'Modo de Cozinhar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '613, 657', 'item_required' => 'Carne Estranha', 'instruction' => 'Vá até as coordenadas (613, 657) e destrua o pot para obter o item [Carne Estranha]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '545, 739', 'item_required' => 'Espírito Flamejante Alechi', 'instruction' => 'Vá para as coordenadas (545, 739) e dê clique direito no item, [Espírito Flamejante Alechi] irá aparecer'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote-o para obter o item [Carne Estranha Aromática.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Dê clique direito para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pioneiro da Pesquisa Geotérmica',
                        'history_title' => 'Pioneiro da Pesquisa Geotérmica',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lada', 'coordinates' => '917, 531', 'item_required' => 'Cinzel das Águas Termais', 'instruction' => 'Fale com o NPC Lada (917, 531) e selecione "Não requer relaxar um pouco nas fontes termais?" para obter o item "Cinzel das Águas Termais".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois vá até as coordenadas 397, 110, clique com o botão direito no item para adquirir o buff "Escavando a Fonte Termal" (permanece por 5 minutos)'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Repita esse processo acumulando até 5 vezes para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Especialista em Terapia das Pedras Quentes',
                        'history_title' => 'Especialista em Terapia das Pedras Quentes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Pedra Estranha', 'instruction' => 'Ataque o cristal vermelho na localização 995, 436 para obter o item "Pedra Estranha".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois use o item nas coordenadas 896, 366 para adquirir "Pedras Quentes Estranhas".'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '892, 520', 'item_required' => null, 'instruction' => 'Em seguida fale com o NPC Cavaleiro Pretoriano Dianteiro Waraean (892, 520) e selecione "Está com dores?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Alegria de Conquistas',
                        'history_title' => 'Alegria de Conquistas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '899, 542', 'item_required' => null, 'instruction' => 'Vá até o NPC Cavaleiro Pretoriano Dianteiro Kironaya (899, 542) e selecione "O que você tem aí na sacola?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '935, 699', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (935, 699) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mundo Jurássico',
                        'history_title' => 'Mundo Jurássico',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Dragão Veloz Alechi', 'instruction' => 'Derrote «Dragão Veloz Alechi» e «Dragão Garra Caçador» para adquirir o status [Dragão Veloz Capturado!]. Acumule o status 20 vezes.'],
                            ['step_number' => 2, 'npc_name' => 'Isaac', 'coordinates' => '925, 492', 'item_required' => null, 'instruction' => 'Em seguida fale com o NPC Isaac (925, 492), selecionando em "Eu trouxe o dinossauro!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Retocar Fotos',
                        'history_title' => 'Fotos Retocadas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Arqueólogo Annec', 'coordinates' => '949, 491', 'item_required' => null, 'instruction' => 'Fale com NPC Arqueólogo Annec (949, 491) e selecione "Ouvi dizer que você tem uma câmera excelente" para adquirir .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '193, 155', 'item_required' => null, 'instruction' => 'Vá nas coordenadas (193, 155) e use o item para adquirir .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '925, 492', 'item_required' => null, 'instruction' => 'De seguida, fale com Isaac (925, 492) e selecione "Tenho uma foto de Fóssil em Grande Plano muito rara" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Direções Cardinais e Relativas',
                        'history_title' => 'Direções Cardinais e Relativas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mott', 'coordinates' => '950, 414', 'item_required' => null, 'instruction' => 'Fale com o NPC Mott (950, 414) e selecione "Eu vi o seu parceiro!" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '442, 139', 'item_required' => null, 'instruction' => 'Depois fale com Scully (442, 139) e clique em "Eu vi o seu parceiro!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Deveria Procurar Ajuda Profissional',
                        'history_title' => 'Você Deveria Procurar Ajuda Profissional',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '129, 28', 'item_required' => null, 'instruction' => 'Vá até (129, 28) e derrote para receber Atadura Mística.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '185, 130', 'item_required' => null, 'instruction' => 'Use o item em (185, 130) para obter o buff "Passou a atadura na mão esquerda".'],
                            ['step_number' => 3, 'npc_name' => 'Rawasha', 'coordinates' => '81, 153', 'item_required' => null, 'instruction' => 'Vá até o NPC Rawasha (81, 153) e selecione a opção "O dragão mágico Alechi está residindo na minha mão esquerda" 5 vezes para obter o buff x5.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Após ter acumulado o buff 5 vezes, selecione a opção "Remova a bandagem e solte o selo!" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Ainda Está Fresco',
                        'history_title' => 'Ainda Está Fresco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sihato', 'coordinates' => '840, 547', 'item_required' => null, 'instruction' => 'Vá até o NPC Sihato (840, 547) e selecione a opção "Seu ajudante George parece querer renunciar" para receber "Fígado de Porco Fresco".'],
                            ['step_number' => 2, 'npc_name' => 'George', 'coordinates' => '1226, 1079', 'item_required' => null, 'instruction' => 'Vá até o NPC George (1226, 1079) e selecione a opção "Estes fígados ainda são muito frescos" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Dinheiro não compra Amor',
                        'history_title' => 'Dinheiro não compra Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lojista Cota', 'coordinates' => '923, 528', 'item_required' => null, 'instruction' => 'Vá até o NPC Lojista Cota (923, 528) e selecione a opção "Você realmente vende alguma coisa?" 5 vezes.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Após ter acumulado o buff x5, selecione a opção "Mas amigo, você não pode me dar seu coração." para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Fofoca Incurável',
                        'history_title' => 'Fofoca Incurável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Scully', 'coordinates' => '442, 139', 'item_required' => null, 'instruction' => 'Vá até o NPC Scully (442, 139) e selecione a opção "O que você acha do seu parceiro?".'],
                            ['step_number' => 2, 'npc_name' => 'Mott', 'coordinates' => '950, 414', 'item_required' => null, 'instruction' => 'Vá até o NPC Mott (950, 414) e selecione a opção "O que você acha do seu parceiro?".'],
                            ['step_number' => 3, 'npc_name' => 'Scully', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até a NPC Scully e selecione a opção "Admite! Seu parceiro me contou!" para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Como Engenheiro',
                        'history_title' => 'Como Engenheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '984, 507', 'item_required' => null, 'instruction' => 'Nós nos dirigimos a Anik e falamos com ele, selecionamos a opção "O que acontece com essa ferramenta letal?" Agora vamos até Tabamoore (984, 507),'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'falamos com ele e escolhemos "São essas as suas ferramentas?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Na Realidade estou quente!',
                        'history_title' => 'Na Realidade estou quente!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '915, 531', 'item_required' => null, 'instruction' => 'Falamos com Sihato, na opção "Você não está quente ao lado do magma?" Vamos até Cota (915, 531) e selecionamos a opção "Preciso de uma bebida refrescante"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Pegamos as Bebidas Refrescantes, voltamos para Sihato e ao falar com ele escolhemos "Você realmente quer manter a calma?".'],
                        ],
                    ],
                ],
            ],
            // ==================== ABERTURA DO TEMPO ====================
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Baía Encharcada de Sangue',
                'slug' => 'abertura-do-tempo-ba-a-encharcada-de-sangue',
                'description' => 'Mapa de Baía Encharcada de Sangue na região de Abertura do Tempo.',
                'sort_order' => 29,
                'trivias' => [
                    [
                        'item_title' => 'Novo e Melhorado',
                        'history_title' => 'Novo e Melhorado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Era', 'coordinates' => '246, 405', 'item_required' => null, 'instruction' => 'Fale com Era (246, 405) e selecione "Eu vou te dar 10 ouros pela receita bizarra" para receber o Item Receita Bizarra.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Mate os Insetos Mutantes e os Artrópodes Sangrentos (próximos a 474, 266) até obter 20x Carne de Inseto Suculenta (dropável dos mobs citados).'],
                            ['step_number' => 3, 'npc_name' => 'Ancião da Ilhota Marcus', 'coordinates' => '250, 409', 'item_required' => null, 'instruction' => 'Fale com o Ancião da Ilhota Marcus (250, 409) e selecione a opção "O Delicioso Hambúrguer de Siri é tão bom assim?" para completar a trívia. Observação: É aconselhável usar amuleto de drop para dropar o item, já que demorei muito tempo para conseguir dropar os 20.'],
                        ],
                    ],
                    [
                        'item_title' => 'Oportunista',
                        'history_title' => 'Oportunista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Adami', 'coordinates' => '692, 397', 'item_required' => null, 'instruction' => 'Fale com Adami (692, 397) e selecione "Me disfarce de soldade inseto." para receber o status "Disfarce de Soldado Inseto" por cinco minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até 389, 218 sem remover o status para chamar o Líder Mercenário Clauza na localização por 10 segundos e selecionar "Por que você está aqui?" para completar a trívia. Observação: Para pegar o status pedido na quest é necessário ter completado as quests do mapa. Seja rápido, o NPC aparecerá por somente 10 segundos, caso não consiga falar com ele, terá de reiniciar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Diga ao chefe que não há imagens',
                        'history_title' => 'Diga ao chefe que não há imagens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Olho de Siri', 'coordinates' => '392, 212', 'item_required' => 'Pá Olho de Siri', 'instruction' => 'Fale com o NPC Olho de Siri (392, 212) e selecione "Por que você parece tão empolgado?" para adquirir o item «Pá Olho de Siri».'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '626, 482', 'item_required' => 'Varinha Mágica de Monitoramento', 'instruction' => 'Prossiga para as coordenadas (626,482) e dê clique direito no item para obter o item «Varinha Mágica de Monitoramento».'],
                            ['step_number' => 3, 'npc_name' => 'Olho de Siri', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC Olho de Siri e selecione "Aqui está o globo mágico." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Chá Calmante de Ervas',
                        'history_title' => 'Chá Calmante de Ervas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marcus', 'coordinates' => '250, 411', 'item_required' => 'Água Fervente', 'instruction' => 'Fale com o NPC Marcus (250,411) e selecione "Por favor, me dê um pouco d\'água" para adquirir o item «Água Fervente».'],
                            ['step_number' => 2, 'npc_name' => 'Era', 'coordinates' => '246, 405', 'item_required' => 'Alecrim', 'instruction' => 'Fale com o NPC Era (246, 405)e selecione "Sobre o alecrim" para adquirir o item «Alecrim».'],
                            ['step_number' => 3, 'npc_name' => 'Vicenzo', 'coordinates' => '387, 211', 'item_required' => 'Lavanda', 'instruction' => 'Fale com o NPC Vicenzo (387, 211) e selecione "Sobre a lavanda" para adquirir o item «Lavanda»'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '291, 147', 'item_required' => 'Chá Calmante', 'instruction' => 'Depois de conseguir os 3 itens, vá até Ando (291, 147) para fazer o item «Chá Calmante» (arraste a Água Fervente para o slot da alquimia).'],
                            ['step_number' => 5, 'npc_name' => 'Atelienne', 'coordinates' => '257, 408', 'item_required' => null, 'instruction' => 'Fale com o NPC Atelienne (257, 408) e selecione "Ultimamente, tenho pesadelos o tempo todo" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A guerra começou',
                        'history_title' => 'Acenda o Farol de Guerra',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ando', 'coordinates' => '292, 150', 'item_required' => 'Madeira', 'instruction' => 'Fale com o NPC Ando (292, 150) e selecione "O que você acha da ocupação dos Insetos no porto vital?" para adquirir o item "Madeira".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '389, 198', 'item_required' => null, 'instruction' => 'Vá até (389, 198) e dê clique direito no item para adquirir "Madeira Queimada" - dê clique direito no item para obter o buff "Queimando o Farol" (dura 10 min).'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '409, 165', 'item_required' => null, 'instruction' => 'Declare guerra na tribo dos insetos em (409, 165) para entrar no estado "Declare Guerra à tribo de Insetos no Posto do Sul" e (651, 510) para entrar no estado "Declare Guerra à Tribo de Insetos no Posto do Norte" (ambos duram 5 min).'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Corra novamente até Ando e selecione "Quero mostrar pra esses Insetos que estamos falando sério!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Novo e Melhorado',
                        'history_title' => 'Hamburguer de Siri Mais Delicioso Ainda',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião da Ilhota Marcus', 'coordinates' => '248, 408', 'item_required' => null, 'instruction' => 'Fale com Ancião da Ilhota Marcus (248, 408) e selecione "Você não se cansa de comer Hambúrgueres de Siri Deliciosos?" para adquirir os itens "Hambúrguer de Siri Delicioso" e "Receita: Hambúrguer de Siri Brilhante".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Mate alguns "Tropa Escoteira do Inseto" para conseguir 10 itens "Trigo da Baía Azul de Alta Qualidade" para fazer alquimia com a receita.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Hambúrguer de Siri Brilhante', 'instruction' => 'Vá até ao NPC Alquimista (Marcus) para fazer o item "Hambúrguer de Siri Brilhante" com a receita.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte até Marcus e selecione "Você quer provar esse novo Hambúrguer de Siri Delicioso melhorado?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Memórias das Cinzas',
                        'history_title' => 'Memórias das Cinzas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '612, 518', 'item_required' => null, 'instruction' => 'Destrua um vaso vermelho nas coordenadas (612, 518) para obter .'],
                            ['step_number' => 2, 'npc_name' => 'Astróloga Kiriala', 'coordinates' => '292, 145', 'item_required' => null, 'instruction' => 'Vá até NPC Astróloga Kiriala (292, 145) e selecione "O espírito dos moradores falecidos" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esqueci que ele voava...',
                        'history_title' => 'Esqueci que ele voava...',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote o mob "Inseto Mutante" até adquirir "Líquido Super Pegajoso".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '472, 275', 'item_required' => null, 'instruction' => 'Em seguida vá até as coordenadas (472, 275) e use o ítem, vai invocar o mob e receber um status "Descobri um segredo".'],
                            ['step_number' => 3, 'npc_name' => 'Olho de Siri', 'coordinates' => '389, 216', 'item_required' => null, 'instruction' => 'Vá até ao NPC Olho de Siri (389, 216) e selecione a opção "Descobri um segredo" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pare com isso',
                        'history_title' => 'Pare',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante de Armas Stony', 'coordinates' => '621, 531', 'item_required' => null, 'instruction' => 'Vá até Comerciante de Armas Stony (621, 531) e selecione a opção "Deixe-me experimentar o inseticida que você falou!" para adquirir "Inseticida".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '618, 540', 'item_required' => null, 'instruction' => 'Em seguida vá até as coordenadas (618, 540) e use o item no 3x. Derrote os monstros que irão aparecer para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Se não consegue proteger, destrua!',
                        'history_title' => 'Se não consegue proteger, destrua!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião da Ilhota Marcus', 'coordinates' => '250, 410', 'item_required' => null, 'instruction' => 'Vá até Ancião da Ilhota Marcus (250, 410) e selecione a opção "Fique sabendo que há escavadores mutantes de novo" para adquirir "bomba à prova d\'água".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '115, 312', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (115, 312) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Brilha, Brilha, Estrelinha....',
                        'history_title' => 'Brilha, Brilha, Estrelinha....',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Astróloga Kiriala', 'coordinates' => '294, 144', 'item_required' => null, 'instruction' => 'Vá até Astróloga Kiriala (294, 144) e selecione a opção "O que os astrólogos fazem geralmente?" Para adquirir o status "contando estrelas"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida selecione as opções "18", "25", "36" para acumular o status "sentindo tontura" 3x e por último selecione "Quantas? Não consigo contar!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma vaga existência',
                        'history_title' => 'Uma vaga existência',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '387, 213', 'item_required' => null, 'instruction' => 'Falamos com o Monitor de Sapos e escolhemos "As pessoas realmente não têm notado você?", então teremos que falar com Vicenzo (387, 213), Gibelle (388, 219) e Amilcar (388, 215), escolhendo a opção "Você já reparou no Crabye?".'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, voltamos a falar com o Monitor de Sapos e escolhemos "Ninguém realmente tem notado você".'],
                        ],
                    ],
                    [
                        'item_title' => 'Em Chamas',
                        'history_title' => 'Em Chamas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '630, 489', 'item_required' => null, 'instruction' => 'Vamos falar com Amilcar e escolher a quinta opção. Ele nos dará um objeto. Depois, iremos para (630, 489) e usaremos o objeto.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Floresta Lágrima de Sprite',
                'slug' => 'abertura-do-tempo-floresta-l-grima-de-sprite',
                'description' => 'Mapa de Floresta Lágrima de Sprite na região de Abertura do Tempo.',
                'sort_order' => 30,
                'trivias' => [
                    [
                        'item_title' => 'Aprendendo Uma Língua Nova',
                        'history_title' => 'Aprendendo Uma Língua Nova',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Estranha Língua Treant', 'instruction' => 'Derrote o Homem-Árvore Velha Amaldiçoada (localizações: 239, 303 | 237, 305 | 269, 228 | 225, 153) para receber o status [Estranha Língua Treant] - dura 5 minutos.'],
                            ['step_number' => 2, 'npc_name' => 'Escoteira Culta Shannon', 'coordinates' => '131, 578', 'item_required' => null, 'instruction' => 'Fale com a NPC Escoteira Culta Shannon (131, 578) e escolha a opção "Sobre os sussurros do Sprite ao vento" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Coroa do Rei Defunto',
                        'history_title' => 'A Coroa do Rei Defunto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Bata no pote na coordenada 452, 631 até dropar o item Coroa Suja de Sangue.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até 455, 626 e use o item para invocar Bufão Ensanguentado, mate-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Águas Termais do Crocodilo',
                        'history_title' => 'Águas Termais do Crocodilo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Crocodilo Sanguinário até obter o item .'],
                            ['step_number' => 2, 'npc_name' => 'Astróloga Becca', 'coordinates' => '394, 452', 'item_required' => null, 'instruction' => 'Fale com o NPC Astróloga Becca (394, 452) e selecione "Por favor, me dê uma Poção de Transformar em um Réptil" para adquirir o item .'],
                            ['step_number' => 3, 'npc_name' => 'Fanático de Guerra Romi', 'coordinates' => '277, 384', 'item_required' => null, 'instruction' => 'Depois de obter ambos os itens, vá até ao NPC Fanático de Guerra Romi (277, 384) para fazer o item (coloque a Tintura no slot de alquimia).'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '377, 138', 'item_required' => 'oi', 'instruction' => 'Dê clique direito na poção para se transformar numa crocodilo fêmea (Vai receber o status de transformação por 1h) - vá até o Crocodilo Banho de Sol (377, 138) e selecione "Diga «oi» para o crocodilo" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'É errado estar certo demais',
                        'history_title' => 'Nem tão certo assim',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Armstrong', 'coordinates' => '380, 443', 'item_required' => null, 'instruction' => 'Fale com o NPC Armstrong (380, 443) e selecione "Vim buscar suas encomendas para a Coronel Jessica" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => 'Roberto', 'coordinates' => '379, 481', 'item_required' => null, 'instruction' => 'Fale com Roberto (379, 481) e selecione a mesma opção para adquirir .'],
                            ['step_number' => 3, 'npc_name' => 'Shannon', 'coordinates' => '128, 575', 'item_required' => null, 'instruction' => 'Fale com Shannon (128, 575) e selecione a mesma opção para adquirir o item .'],
                            ['step_number' => 4, 'npc_name' => 'Tenente Real Jessica', 'coordinates' => '392, 443', 'item_required' => null, 'instruction' => 'Depois de receber os 3 itens, fale com o NPC Tenente Real Jessica (392, 443) e selecione "Todas as encomendas foram coletadas" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Que Linda Raflésia',
                        'history_title' => 'Que Linda Raflésia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Rei Ninfo Carnívoro', 'instruction' => 'Derrote «Rei Ninfo Carnívoro» até conseguir o item .'],
                            ['step_number' => 2, 'npc_name' => 'Fergus', 'coordinates' => '427, 164', 'item_required' => 'Mini Rei Ninfo Carnívoro', 'instruction' => 'Fale com o NPC Fergus (427, 164) e selecione "Tome, aqui está a Flor do Rei" para invocar «Mini Rei Ninfo Carnívoro». Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só Ilusão',
                        'history_title' => 'É tudo uma ilusão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Arquimago Árvore Sábia Ilusória', 'instruction' => 'Derrote «Arquimago Árvore Sábia Ilusória» até acumular 10 vezes o status [Ilusão Assustadora] - dura 5 min.'],
                            ['step_number' => 2, 'npc_name' => 'Astróloga Becca', 'coordinates' => '394, 452', 'item_required' => null, 'instruction' => 'Fale com Astróloga Becca (394, 452) e selecione "Tem algo estranho comigo. Você pode dar uma olhada em mim, por favor?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coleção de Aventuras',
                        'history_title' => 'Coleção de Aventuras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jody', 'coordinates' => '288, 334', 'item_required' => null, 'instruction' => 'Vá até Jody (288, 334) e selecione "Como está o grande final do seu livro?" para receber o status "Solicitação de Materiais".'],
                            ['step_number' => 2, 'npc_name' => 'Jessica', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Jessica e selecione a opção "Jody me Pediu para te visitar." para adquirir "rascunho genuino"'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '328, 475', 'item_required' => null, 'instruction' => 'E então vá até Oda (328, 475) e selecione "Jody me pediu para te visitar" para adquirir "rascunho sem pontos principais".'],
                            ['step_number' => 4, 'npc_name' => 'Lucie', 'coordinates' => '385, 445', 'item_required' => null, 'instruction' => 'Fale com Lucie (385, 445) e selecione a opção "Jody me pediu para te visitar" para adquirir "rascunho épico".'],
                            ['step_number' => 5, 'npc_name' => null, 'coordinates' => '391, 445', 'item_required' => null, 'instruction' => 'Retorne até Jody (391, 445) e selecione a opção "Já visitei todos" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Batidinhas',
                        'history_title' => 'Batidinhas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '236, 341', 'item_required' => 'Relógio de bolso intacto', 'instruction' => 'Vá até as coordenadas (236, 341) e derrote para adquirir o item [Relógio de bolso intacto].'],
                            ['step_number' => 2, 'npc_name' => 'Ifu', 'coordinates' => '392, 447', 'item_required' => null, 'instruction' => 'Vá até o NPC Ifu (392, 447) e selecione a opção "Encontrei isto na barriga do crocodilo" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Perdeu a Graça',
                        'history_title' => 'Perdeu a Graça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Rapé Louco', 'instruction' => 'Derrote os monstros para adquirir o ítem [Rapé Louco] x10.'],
                            ['step_number' => 2, 'npc_name' => 'Adami', 'coordinates' => '428, 156', 'item_required' => null, 'instruction' => 'Depois vá até o NPC Adami (428, 156) e selecione a opção "Esfarele o Rapé Louco nele."'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Após isso aparecerá o mob , derrote-o para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Síndrome de Princesa',
                        'history_title' => 'Síndrome de Princesa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Magnata Roberto', 'coordinates' => '379, 480', 'item_required' => 'Bolinho de Arroz Maravilhoso', 'instruction' => 'Vá até o NPC Magnata Roberto (379, 480) e selecione a opção "A sua filha saiu correndo para brincar de novo?" para obter o ítem [Bolinho de Arroz Maravilhoso].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o mob e utilize o item em um para adquirir Pantera Rúnica (Aliado).'],
                            ['step_number' => 3, 'npc_name' => 'Senhora Perdida Jadora', 'coordinates' => '427, 162', 'item_required' => null, 'instruction' => 'Leve o mob com cuidado até o NPC Senhora Perdida Jadora (427, 162) e selecione a opção "Quer um animalzinho legal?" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Consciência Pesada?',
                        'history_title' => 'Consciência Pesada?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Bolsa de Aura Maléfica', 'instruction' => 'Vá até as cordenadas 137, 489 e derrote os monstros para adquirir os itens [Bolsa de Aura Maléfica] x1 e o item [Folha Grande da Árvore Sábia] x5.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Bolsa de Aura Maléfica', 'instruction' => 'Depois vá até as cordenadas 304,692 e use [Bolsa de Aura Maléfica] para obter o status (Soldado Disfarçado de Árvore Sábia Perversa).'],
                            ['step_number' => 3, 'npc_name' => 'Sobrevivente de Ursuva', 'coordinates' => '321, 680', 'item_required' => null, 'instruction' => 'Em seguinda vá até o NPC Sobrevivente de Ursuva (321, 680) e selecione \'\'Assuste\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'É só lixo',
                        'history_title' => 'É só lixo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '403, 138', 'item_required' => null, 'instruction' => 'Falamos com Homi na opção "Sobre os tesouros". Vamos para (403, 138)'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com o Quadro de Avisos da Intemperie.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ele nos dará um bônus e uma habilidade, usamos essa habilidade e obtemos um Baú do tesouro aparentemente valioso Voltamos para Homi, falamos com ele e escolhemos "Oh, isso é um tesouro para você".'],
                        ],
                    ],
                    [
                        'item_title' => 'As lendas não são rivais para mim.',
                        'history_title' => 'As lendas não são rivais para mim.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '392, 450', 'item_required' => null, 'instruction' => 'Falamos com Shannon e escolhemos "Dizem que você é quase imune aos ataques dos monstros?", ele nos dará um bônus. Agora iremos para (392, 450) sem receber nenhum golpe para obter o bônus "Maior que a lenda". Voltamos para Shannon e ao falar com ele escolhemos "Eu ganhei!".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Deserto de Kaslow',
                'slug' => 'abertura-do-tempo-deserto-de-kaslow',
                'description' => 'Mapa de Deserto de Kaslow na região de Abertura do Tempo.',
                'sort_order' => 31,
                'trivias' => [
                    [
                        'item_title' => 'Quem Jogou a Dinamite?',
                        'history_title' => 'Quem Jogou a Dinamite?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '522, 438', 'item_required' => 'Soldados Homem-Besta Canhoneiro', 'instruction' => 'Derrote os «Soldados Homem-Besta Canhoneiro» nas coordenadas (522,438) até dropar o item'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '787, 286', 'item_required' => null, 'instruction' => 'Vá até (787, 286) e use o item para invocar Deusa do Lago, mate-a para terminar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Volte A Dormir',
                        'history_title' => 'Volte A Dormir',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '555, 685', 'item_required' => null, 'instruction' => 'Bata nos potes próximos as coordendas (555, 685) ou em Ruínas da Tribo Goblin até receber 5x .'],
                            ['step_number' => 2, 'npc_name' => 'Goblin Ancião Popy', 'coordinates' => '557, 704', 'item_required' => null, 'instruction' => 'Fale com NPC Goblin Ancião Popy (557, 704)e selecione a opção "Quer saber mais sobre o Fragmento de Boneco Guerreiro?" para receber o item .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '516, 709', 'item_required' => null, 'instruction' => 'Vá até (516, 709) e use o item para invocar Guerreiro Cadáver e então completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Me chame de Irmã',
                        'history_title' => 'Me chame de Irmã',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Barqueiro Rebelde Modesto', 'coordinates' => '117, 438', 'item_required' => null, 'instruction' => 'Fale com o NPC Barqueiro Rebelde Modesto (117, 438) e selecione "Sobre Daisy" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => 'Refugiada Perdida Daisy', 'coordinates' => '246, 519', 'item_required' => null, 'instruction' => 'Vá até Refugiada Perdida Daisy (246, 519) e selecione "Aqui está o convite para jantar" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Filho Filial',
                        'history_title' => 'Choque de Gerações',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mordomo Tomas', 'coordinates' => '801, 741', 'item_required' => null, 'instruction' => 'Fale com o NPC Mordomo Tomas (801, 741) e selecione "Ajude-me a experimentar essa sopa de galinha" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Família Desaparecida! Por favor, ajude!',
                        'history_title' => 'Ajude na Busca pela Família Desaparecida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '807, 720', 'item_required' => null, 'instruction' => 'Destrua 3 caixas do tesouro vermelhas perto da localização (807, 720) para conseguir os itens , e .'],
                            ['step_number' => 2, 'npc_name' => 'Mordomo Tomas', 'coordinates' => '801, 741', 'item_required' => null, 'instruction' => 'Fale com Mordomo Tomas (801, 741) e selecione "Você sabe de quem são essas coisas?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cartucho de Artilharia, Muito Cuidado',
                        'history_title' => 'Manuseie o Cartucho de Artilharia Com Cuidado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Soldado Homem-Besta Artilheiro', 'instruction' => 'Derrote vários «Soldado Homem-Besta Artilheiro», «Soldado Homem-Besta Canhoeneiro» ou «Soldado Homem-Besta Artilheiro do Purgatório» até conseguir 5x .'],
                            ['step_number' => 2, 'npc_name' => 'Fanático de Guerra Brutus', 'coordinates' => '737, 460', 'item_required' => null, 'instruction' => 'Fale com Fanático de Guerra Brutus (737, 460) e selecione "Esses Cartuchos de Artilharia são para você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Conexão Diferente',
                        'history_title' => 'Uma Conexão Diferente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Barqueiro Rebelde Sinval', 'coordinates' => '230, 626', 'item_required' => 'Fantasma da Infância', 'instruction' => 'Fale com Barqueiro Rebelde Sinval (230, 626) na opção "Me fale sobre a sua infância infeliz." para obter o status [Fantasma da Infância].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '855, 416', 'item_required' => 'A dança esquisita do duende', 'instruction' => 'Depois, fale com Barqueiro Rebelde Bóris (855,416) e selecione a opção "O que aconteceu com seu irmãozinho?" para obter o status [A dança esquisita do duende].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '557, 707', 'item_required' => 'Suspeita', 'instruction' => 'De seguida, vá até Goblin Ancião Popy (557, 707) e clique na opção "Que dança é essa?" para obter o status [Suspeita].'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '552, 707', 'item_required' => null, 'instruction' => 'Por fim, fale com Duende Guerreiro Nativo Guli (552, 707) na opção "Dance para ele" para completar a trívia. Nota: Todos os buffs têm uma duração de 10 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Confabulador',
                        'history_title' => 'Confabulador',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '500, 700', 'item_required' => 'Pá Durável', 'instruction' => 'Vá até as coordenadas (500, 700) e procure um jarro vermelho, destrua-o para adquirir o ítem [Pá Durável].'],
                            ['step_number' => 2, 'npc_name' => 'Menina Esperta Yuli', 'coordinates' => '244, 517', 'item_required' => 'Sororidade', 'instruction' => 'Vá até o NPC Menina Esperta Yuli (244, 517) e clique na opção "Me diga se você precisa de ajuda!" para obter o status [Sororidade].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '263, 510', 'item_required' => null, 'instruction' => 'Em seguida vá até as coordenadas (263, 510) e use a pá para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Nascido do Amor',
                        'history_title' => 'Nascido do Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante de Armaduras Tardemir', 'coordinates' => '745, 466', 'item_required' => 'Semente Preciosa', 'instruction' => 'Vá até o NPC Comerciante de Armaduras Tardemir (745,466) e selecione a opção \'\'Já notei que você e Elsy estão apaixonados um pelo outro!\'\' para obter o item [Semente Preciosa].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '800, 405', 'item_required' => 'Flor do Amor', 'instruction' => 'Em seguida vá até as cordenadas (800,405) e use o item após isso irá aparecer uma flor no chão clique nela e selecione a opção \'\'Colha\'\' para adquirir o item [Flor do Amor].'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '744, 469', 'item_required' => null, 'instruction' => 'Depois vá até Comerciante de Armas Elsy (744, 469) e selecione a opção \'\'Está é a flor de Tardemir.\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Churrasco é Uma Delícia',
                        'history_title' => 'Churrasco é Uma Delícia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Coxa Ave de Fogo', 'instruction' => 'Mate o mob até obter o item [Coxa Ave de Fogo]. Dica: Pegue várias Coxas ave de fogo.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '360, 370', 'item_required' => 'Coxa Crocante e Suculenta de Ave do Fogo', 'instruction' => 'Vá até as coordenadas (360, 370) e use o item até obter [Coxa Crocante e Suculenta de Ave do Fogo] em seguida use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Entretenimento Restante',
                        'history_title' => 'O Entretenimento Restante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Capitão de Guarda do Corredor Hoppe', 'coordinates' => '177, 663', 'item_required' => 'Baqueta do Hopp', 'instruction' => 'Vá até o NPC Capitão de Guarda do Corredor Hoppe (177,663) e selecione a opção \'\'Não é um tédio ficar aqui só?\'\' para obter o item [Baqueta do Hopp].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '232, 692', 'item_required' => 'Baqueta do Hopp', 'instruction' => 'Em seguida vá até as cordenadas (232,692) e use o item [Baqueta do Hopp] para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Um especialista.',
                        'history_title' => 'Um especialista.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '471, 505', 'item_required' => null, 'instruction' => 'Vamos falar com Jideli e escolher a opção "Você não sente calor ao lado de uma casa em chamas?". Receberemos um bônus e devemos ir para (471, 505), esperar alguns segundos até que a conquista seja concluída.'],
                        ],
                    ],
                    [
                        'item_title' => 'Militar Relaxado',
                        'history_title' => 'Militar Relaxado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '844, 407', 'item_required' => null, 'instruction' => 'Falamos com Frantik e escolhemos a opção "Você pode ser ouvido falando tão alto?". Perguntamos ao Guarda Rebelde (844, 407), escolhendo "Na verdade, você não consegue ouvir o que ele está dizendo". Em seguida, conversamos novamente com Frantik, escolhendo a opção "Diga a verdade".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Península da Aflição',
                'slug' => 'abertura-do-tempo-pen-nsula-da-afli-o',
                'description' => 'Mapa de Península da Aflição na região de Abertura do Tempo.',
                'sort_order' => 32,
                'trivias' => [
                    [
                        'item_title' => 'O Cogumelo Venenoso',
                        'history_title' => 'O Cogumelo Venenoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Bata nos cogumelos (próximos a 744, 500) até receber , e .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '813, 432', 'item_required' => 'Sonolência', 'instruction' => 'Vá até (813, 432) e use os itens para receber três debuffs. Depois de ativá-los, ande pela área (perto da fumaça) até receber o status [Sonolência] por 10 segundos e completar a trívia. (Nota: chance de drop baixo, recomendo uso de amuleto se tiver pressa).'],
                        ],
                    ],
                    [
                        'item_title' => 'Atos São Mais Fortes Que Mentiras',
                        'history_title' => 'Atos São Mais Fortes Que Mentiras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '291, 599', 'item_required' => null, 'instruction' => 'Vá até o Comerciante Ambulante (291, 599), e compre o item (custa 50g)'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '599, 877', 'item_required' => 'Perfume do Envelhecimento', 'instruction' => 'Siga as coordenadas descritas (599, 877) e use o item para invocar Deusa do Lago. Irá adquirir o status [Perfume do Envelhecimento] por 5 minutos.'],
                            ['step_number' => 3, 'npc_name' => 'Soldado do Posto Avançado Adami', 'coordinates' => '465, 727', 'item_required' => null, 'instruction' => 'Fale com o Soldado do Posto Avançado Adami (465, 727) e selecionar a opção "Você sabe de algo sobre a Primavera de Juventude nas lendas?" para completar a quest.'],
                        ],
                    ],
                    [
                        'item_title' => 'Qual o Problema?',
                        'history_title' => 'Membro Honorário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Local Kela', 'coordinates' => '697, 294', 'item_required' => null, 'instruction' => 'Fale com o NPC Local Kela (697, 294) e selecione "Quero me juntar ao "grupo de expedição Ilya" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '684, 712', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (684,712) e dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Fãs nos Bastidores',
                        'history_title' => 'Ajudante dos Bastidores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Feiticeiro-Lagarto', 'instruction' => 'Derrote «Feiticeiro-Lagarto» até conseguir dropar o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '633, 757', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (633,757) e use o item para completar a trívia. (Nota:chance de drop baixo, recomendo uso de amuleto se tiver pressa).'],
                        ],
                    ],
                    [
                        'item_title' => 'Nova Técnica de Forja de Espada',
                        'history_title' => 'Nova Tecnologia de Forjamento de Espada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferreiro Charles', 'coordinates' => '728, 242', 'item_required' => 'Desejo de Armas Primorosas', 'instruction' => 'Fale com o NPC Ferreiro Charles (728, 242) e selecione "Me desculpe, você tem alguma arma ou equipamento requintados?" para entrar no status [Desejo de Armas Primorosas] - dura 30 segundos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Espada Fantasma Lilás', 'instruction' => 'Selecione esta opção 10 vezes para acumular esse status e de seguida, selecione a opção "Estou desesperado por armas e equipamentos requintados!" para adquirir o item e entrar no status [Espada Fantasma Lilás] - dura 1 min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '727, 238', 'item_required' => null, 'instruction' => 'Clique no Boneco de treinamento (727, 238) e selecione "(Teste a espada)" para completar a trívia. (Nota: Perderá um pouco do seu HP e MP).'],
                        ],
                    ],
                    [
                        'item_title' => 'Único Jeito de Lidar com Zumbis',
                        'history_title' => '101 Maneiras de Acabar com Zumbis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tenente Real Tato', 'coordinates' => '406, 799', 'item_required' => null, 'instruction' => 'Fale com Tenente Real Tato (406, 799) e selecione "Ouvi falar que você tem uma maneira especial de lidar com Zumbis" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '385, 362', 'item_required' => null, 'instruction' => 'Vá até a localização (385, 362), dê clique direito no item para fazer aparecer "Ressurreição Eterna - Vampiro Mágico", "Ressurreição - Vampiro Mágico" e "Outra Ressurreição - Vampiro Mágico". Derrote os três para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Doutrina de um Cavaleiro',
                        'history_title' => 'A Doutrina de um Cavaleiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chefe Profeta Ancião Merlin', 'coordinates' => '632, 264', 'item_required' => 'Consulta com os Cavaleiros', 'instruction' => 'Vá até Chefe Profeta Ancião Merlin (632, 264) e selecione "Por que eles não punem os encrenqueiros no acampamento?" para obter o status [Consulta com os Cavaleiros] - dura 10 min.'],
                            ['step_number' => 2, 'npc_name' => 'Cavaleiro da Chama Branca Cahan', 'coordinates' => '705, 673', 'item_required' => 'A Dedicação de um Cavaleiro', 'instruction' => 'Fale com Cavaleiro da Chama Branca Cahan (705, 673), Cavaleiro da Chama Branca Alez (715, 335) e Amazona da Chama Branca Fuleyla (727, 276) e selecione em "Me fale sobre os arruaceiros que estão incomodando" para obter os status [A Dedicação de um Cavaleiro], [A Determinação de um Cavaleiro] e [A Piedade de um Cavaleiro] - duram 10 min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'De seguida, retorne a Merlin e selecione "Perguntei aos Cavaleiros o que eles acham" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só Ele Consegue',
                        'history_title' => 'Só Ele Consegue',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Veneno de Escorpião Covarde', 'instruction' => 'Deixe que o mob te bata para obter o status [Veneno de Escorpião Covarde].'],
                            ['step_number' => 2, 'npc_name' => 'Pesquisador de Venenos Bibo', 'coordinates' => '426, 779', 'item_required' => null, 'instruction' => 'Em seguida vá até o NPC Pesquisador de Venenos Bibo (426, 779) e clique na opção "Ajude! Por favor, me ajude a me curar do veneno!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esqueça seu Amor ao longo da Costa',
                        'history_title' => 'Esqueça seu Amor ao longo da Costa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '232, 365', 'item_required' => null, 'instruction' => 'Vá até as cordenadas (232, 365) para obter o starus (Curiosidade Estimulada). Em seguida vá até as cordenadas (221,387) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Controle Perfeito de Temperatura',
                        'history_title' => 'Controle Perfeito de Temperatura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '258, 188', 'item_required' => 'Cristal Térmico', 'instruction' => 'Vá até as cordenadas (258,188) e derrote os Monstros para adquirir o item [Cristal Térmico].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida use o item até obter os três status (Chama Pequena), (Chama Média) e (Chama Grande) para completar a trívia. (Uma dica, tente juntar por volta de uns x5 a x10 itens já que vai ser nescessário mais de 1 item para obter os três status.)'],
                        ],
                    ],
                    [
                        'item_title' => 'Salão de Beleza da Península',
                        'history_title' => 'Salão de Beleza da Península',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Culolo', 'coordinates' => '736, 318', 'item_required' => 'Uma Apresentação Imperdível', 'instruction' => 'Vá até o NPC Culolo e clique na opção "Como você passa o tempo livre?" para obter o status [Uma Apresentação Imperdível]. Em seguida vá até as coordenadas (736, 318) para completar a trívia. Atenção: Só pode ser completada Quinta-Feira.'],
                        ],
                    ],
                    [
                        'item_title' => 'Observe',
                        'history_title' => 'Observe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '716, 236', 'item_required' => null, 'instruction' => 'Conversamos com Jenny e escolhemos "Caçador de demônios, por que você se esconde na cidade?", o que nos dará um aumento de estatísticas. Em seguida, vamos até Ilan (716, 236), conversamos com ela e selecionamos "Você tem algum item interessante?". Agora temos um Imitador da Besta no peito, o levamos até (693, 320) e usamos o objeto.'],
                        ],
                    ],
                    [
                        'item_title' => 'Club de fans dos cavaleiros da chama branca',
                        'history_title' => 'Club de fans dos cavaleiros da chama branca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '716, 236', 'item_required' => null, 'instruction' => 'Vamos até onde está Alez, conversamos com ele e escolhemos "Alguém quer o seu autógrafo", o que nos dará um objeto. Em seguida, levamos esse objeto até Ilan (716, 236), conversamos com ela e escolhemos "Tenho a sua foto favorita do Alez autografada".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Montanha das Geleiras',
                'slug' => 'abertura-do-tempo-montanha-das-geleiras',
                'description' => 'Mapa de Montanha das Geleiras na região de Abertura do Tempo.',
                'sort_order' => 33,
                'trivias' => [
                    [
                        'item_title' => 'Problemas do Homem-Lagarto',
                        'history_title' => 'Problemas do Homem-Lagarto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Jelly-Coelho Cristal Vítreo', 'instruction' => 'Derrote «Jelly-Coelho Cristal Vítreo» (próximos às coordenadas 484, 316) até dropar o item , use-o para receber o status [Disfarce de Homem-Lagarto] - dura 5 minutos.'],
                            ['step_number' => 2, 'npc_name' => 'Capitão da Milícia de Granton Minton', 'coordinates' => '351, 573', 'item_required' => null, 'instruction' => 'Fale com NPC Capitão da Milícia de Granton Minton (351, 573) e selecione a opção "Clima bom, não é?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Silêncio Vale Ouro',
                        'history_title' => 'O Silêncio Vale Ouro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Milícia de Granton Andy Hanks', 'coordinates' => '418, 610', 'item_required' => null, 'instruction' => 'Fale com NPC Milícia de Granton Andy Hanks (418, 610) e selecione cinco vezes na oção "Por que a sua irmã é tão importante para você?"'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'E depois selecione a opção "Você está disposto a proteger a sua irmã para sempre?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Sonho Mais Simples',
                        'history_title' => 'O Sonho Mais Simples',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menino', 'coordinates' => '387, 491', 'item_required' => null, 'instruction' => 'Fale com o NPC Menino (387, 491) e selecione "Deixe-me ajudar a realizar o seu sonho" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '298, 650', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (298,650) e dê clique direito no item. Depois de 3 textos Discovery aparecerem na tela completa assim a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não Brinque com o Fogo',
                        'history_title' => 'Não Brinque com o Fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marinheiro Leeward', 'coordinates' => '580, 256', 'item_required' => null, 'instruction' => 'Fale com o NPC Marinheiro Leeward (580, 256) e selecione "Dizem que o pássaro Kakate gosta de fogos de artifício?" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '605, 212', 'item_required' => null, 'instruction' => 'Vá até (605,212) e dê clique direito no item para completar a trívia. (Nota: Para chegar até o Marinheiro Leeward, fale com Capitão Adônis e (751, 472) e selecione "Quero ir para Ilha Kakat")'],
                        ],
                    ],
                    [
                        'item_title' => 'Peixe Grelhado Delicioso',
                        'history_title' => 'Peixe Grelhado Delicioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pescador Diligente Rodney', 'coordinates' => '262, 352', 'item_required' => null, 'instruction' => 'Fale com Pescador Diligente Rodney (262, 352) e selecione "Onde eu posso pegar um peixe roliço?" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '380, 325', 'item_required' => null, 'instruction' => 'Use-o em (380, 325) para obter o item (pegue vários destes).'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '608, 535', 'item_required' => null, 'instruction' => 'Vá até (608, 535) para grelhar até obter o item .'],
                            ['step_number' => 4, 'npc_name' => 'Chefe da Vila Xiapuna', 'coordinates' => '540, 591', 'item_required' => null, 'instruction' => 'Fale com NPC Chefe da Vila Xiapuna (540, 591) e selecione "Você gosta de peixe grelhado?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Batalha de Tanques',
                        'history_title' => 'Guerra de Tanques',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lunka', 'coordinates' => '589, 510', 'item_required' => null, 'instruction' => 'Fale com Lunka (589, 510) e selecione "Eu quero um brinquedo novo em folha!" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '597, 495', 'item_required' => null, 'instruction' => 'Use o brinquedo no local (597, 495) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Companheiro de Sempre',
                        'history_title' => 'Companheiro de Sempre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aventureiro da Resistência Ian', 'coordinates' => '478, 104', 'item_required' => null, 'instruction' => 'Fale com NPC Aventureiro da Resistência Ian (478, 104) e selecione em "Seus parceiros estão vivos?" para obter .'],
                            ['step_number' => 2, 'npc_name' => 'Pilha de Esqueletos que encontrar', 'coordinates' => '417, 204', 'item_required' => 'A decisão de sacrificar', 'instruction' => 'Fale com a Pilha de Esqueletos que encontrar, nas coordenadas (417, 204) e (393, 144) selecionando na opção "Use a bolsa para coletar os corpos com cuidado" para obter o status [A decisão de sacrificar] e [Culpa] - dura 10 min.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne a Ian e clique em "Estes são corpos dos nossos amigos" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Falácia do Mundo Paralelo',
                        'history_title' => 'Falácia do Mundo Paralelo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Assistente Ters', 'coordinates' => '173, 962', 'item_required' => 'Será que não to lembrando direito?', 'instruction' => 'Vá até o NPC Assistente Ters (173, 962) e clique na opção "Por que você está trabalhando para Lucas agora?" para obter o status [Será que não to lembrando direito?].'],
                            ['step_number' => 2, 'npc_name' => 'Conservador Ecológico da Água bolai', 'coordinates' => '212, 1025', 'item_required' => 'Parece que Falei algo Errado', 'instruction' => 'Vá até o NPC Conservador Ecológico da Água bolai (212, 1025) e clique na opção "Você se lembra do seu Assistente?" para obter o status [Parece que Falei algo Errado].'],
                            ['step_number' => 3, 'npc_name' => 'Diretor do Laboratório Lucas', 'coordinates' => '176, 1028', 'item_required' => 'Removedor de Memória', 'instruction' => 'Em seguida, vá até o NPC Diretor do Laboratório Lucas (176, 1028) e clique na opção "E se algo acontecer?!" para obter o item [Removedor de Memória]. Logo após vá até as coordenadas (173, 1006) e use o item obtido para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não fui eu quem fez isso',
                        'history_title' => 'Não fui eu quem fez isso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Milícia de Granton Lana Hanks', 'coordinates' => '375, 574', 'item_required' => null, 'instruction' => 'Vá até o NPC Milícia de Granton Lana Hanks (375, 574) e clique na opção para obter o item'],
                            ['step_number' => 2, 'npc_name' => 'Capitão da Milícia de Granton Miton', 'coordinates' => '351, 572', 'item_required' => null, 'instruction' => 'Em seguida, vá até o NPC Capitão da Milícia de Granton Miton (351,572) 3 clique na opção <Lana pediu que eu te entregue isso: para obter o status (Minton Perdido de Amor).'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '753, 507', 'item_required' => null, 'instruction' => 'Depois disso, vá até as coordeadas (753,507) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ousar Sonhar e Ser uma Estrela',
                        'history_title' => 'Ousar Sonhar e Ser uma Estrela',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Cartão de Produtor', 'instruction' => 'Derrote o mob até obter o item [Cartão de Produtor].'],
                            ['step_number' => 2, 'npc_name' => 'Soldado Mecha ABK49', 'coordinates' => '158, 1018', 'item_required' => null, 'instruction' => 'Logo após vá até o NPC Soldado Mecha ABK49 (158, 1018) e clique na opção "Gostaria de se tornar um ídolo" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tratamento para a Preguiça',
                        'history_title' => 'Tratamento para a Preguiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Doutor Monto', 'coordinates' => '588, 548', 'item_required' => 'Qual remédio você vende?', 'instruction' => 'Vá até o NPC Doutor Monto (588, 548) e clique na opção "Você pode ajudar alguém super preguiçoso?". Para adquirir o status [Qual remédio você vende?].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Frasco de remédio amarelo', 'instruction' => 'Use a skill 1 no baú até conseguir [Frasco de remédio amarelo], [Frasco de remédio Verde] e [Frasco de remédio Vermelho].'],
                            ['step_number' => 3, 'npc_name' => 'Pescador Preguiçoso Alan', 'coordinates' => '456, 571', 'item_required' => null, 'instruction' => 'Vá até o NPC Pescador Preguiçoso Alan (456, 571) e selecione a opção "Tenho misturas deliciosas por aqui!" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma irmã é um tesouro.',
                        'history_title' => 'Uma irmã é um tesouro.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com Andy Hanks, selecionamos a opção "Uma irmã é um tesouro", ele nos dará um bônus que precisamos acumular 5 vezes, então repetimos o processo. Uma vez alcançado, escolhemos a opção "Você realmente acha que ter uma irmã é tão ruim?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Amor Forte',
                        'history_title' => 'Amor Forte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '408, 457', 'item_required' => null, 'instruction' => 'Falamos com Lilu e selecionamos a opção "Você acha que seu marido ainda se lembra de você?", ela nos dará um bônus e agora falamos com Sharp (408, 457), escolhendo a opção "Você se lembra da sua esposa?".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Platô dos Sonhos',
                'slug' => 'abertura-do-tempo-plat-dos-sonhos',
                'description' => 'Mapa de Platô dos Sonhos na região de Abertura do Tempo.',
                'sort_order' => 34,
                'trivias' => [
                    [
                        'item_title' => 'Descanse em Paz',
                        'history_title' => 'Descanse em Paz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '149, 607', 'item_required' => null, 'instruction' => 'Bata nos totens (próximos a 493, 405 ou no Vilarejo de Hok) até dropar o item . Vá até o Memorial do Mártir (149, 607) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lei da Selva',
                        'history_title' => 'Lei da Selva',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '329, 292', 'item_required' => 'Rei Gavião Ancião', 'instruction' => 'Bata nos potes (próximos a 305, 282 ou Montanha de Falcon) até dropar 20x . Vá até as coordenadas citadas (329, 292) para invocar «Rei Gavião Ancião» Griffin, mate-o para completar a trívia. (Observação: É necessário subir na pedra pra que ele apareça.)'],
                        ],
                    ],
                    [
                        'item_title' => 'Só um Alarme Falso',
                        'history_title' => 'Só um Alarme Falso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '376, 117', 'item_required' => 'Ovo de Pássaro Gigante', 'instruction' => 'Vá até (376,117) e derrote o «Ovo de Pássaro Gigante». O monstro «Simples e comum» Coruja da Montanha Nevada irá aparecer, derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bênção da Senhora do Lago',
                        'history_title' => 'Bênção da Senhora do Lago',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Wakin', 'coordinates' => '750, 675', 'item_required' => null, 'instruction' => 'Fale com o NPC Wakin e selecione "Soube que tem uma Deusa do Lago aqui" para adquirir o item . Vá até ao local (750, 675) e dê clique direito na moeda para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Existem Aqueles que São Mais Habilidosos (antes como: O que você pensa, você mostra)',
                        'history_title' => 'Existem Aqueles que São Mais Habilidosos (antes como: O que você pensa, você mostra)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dougy', 'coordinates' => '93, 94', 'item_required' => 'Estoque Secreto do Bandido Robu', 'instruction' => 'Fale com o NPC Dougy e selecione "Soube que você tem uma técnica especial de dissimulação" para entrar no estado "Disfarce Furtivo" (dura 5min). Vá até a localização (93, 94), dê clique direito no e selecione "..." para conseguir o item "Estoque Secreto do Bandido Robu". Fale com Dougy e selecione "Esse é o estoque secreto de que você falava?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não brinque com as mulheres',
                        'history_title' => 'Não brinque com as mulheres',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lily', 'coordinates' => null, 'item_required' => 'Transformado em tartaruga', 'instruction' => 'Fale com o NPC Lily e selecione "Hahaha! Veja só..." para receber o status [Transformado em tartaruga] - dura 7 segundos. Espere até se transformar numa tartaruga par completar a trívia. (Observação: Você ficará com o estado «Poder da tartaruga» depois de se transformar)'],
                        ],
                    ],
                    [
                        'item_title' => 'Desenhista de Sonhos',
                        'history_title' => 'Desenhista de Sonhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Peter', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Peter e selecione em "Com o que você está se estressando?" para adquirir . Depois fale com NPC John e selecione "Este é o pedido do Peter" para adquirir . Por fim, fale com NPC Fin e selecione em "Esse é o ovo de águia que você queria" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Acertou em Cheio',
                        'history_title' => 'Acertou em Cheio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'John', 'coordinates' => '461, 340', 'item_required' => 'Dardos do Felissan', 'instruction' => 'Vá até o NPC John e clique na opção "Como você treina no arco e flecha?" para obter o item [Dardos do Felissan]. Vá até as coordenadas (461, 340) e use o item para completar a trívia. Dica: Vá até as casinhas que tem na NPC Lia para se aproximar das coordenadas.'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmãos Lutando por Amor',
                        'history_title' => 'Irmãos Lutando por Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Peter', 'coordinates' => '410, 352', 'item_required' => 'Chave de Graham', 'instruction' => 'Vá até o NPC Peter (410, 352) e clique na opção \'\'Sobre Graham Trovão\'\' para obter o item [Chave de Graham]. Em seguida, vá até o NPC Baú de Graham (408,397) e clique na opção \'\'Abra\'\' para obter o item [Os Poemas Estragados]. Logo após, volte ao NPC Peter e clique na opção \'\'Pegadinha Feita\'\' para receber o status (Peter conseguiu). Vá até o NPC Graham (410, 394) e clique na opção \'\'Fala mais sobre Peter Trovão\'\' para obter o item [Chave de Peter]. Em seguida vá até o NPC Baú de Peter (407, 350) e clique na opção \'\'Abra\'\' para obter o item [Equipamento Fitness Quebrado]. Depois disso, volte ao NPC Graham e clique na opção \'\'Pegadinha Feita!\'\' para obter o status (Graham Conseguiu) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Varredor',
                        'history_title' => 'Varredor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dulo', 'coordinates' => '231, 611', 'item_required' => 'Vassoura da Tia Dulo', 'instruction' => 'Vá até o NPC Dulo (231, 611) e clique na opção \'\'Sua vassoura é assim tão forte?\'\' para obter o item [Vassoura da Tia Dulo]. Em seguida equipe o item obtido, e derrote os monstros e que ficam pela cidade para completar a trívia. (Observação: os mobs só aparecem das 21:00 às 00:00)'],
                        ],
                    ],
                    [
                        'item_title' => 'Bandidos também merecem uma alimentação saudável!',
                        'history_title' => 'Bandidos também merecem uma alimentação saudável!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bonnie', 'coordinates' => '186, 120', 'item_required' => 'Chifre Fortes', 'instruction' => 'Derrote o mob para obter o item [Chifre Fortes] x5 e derrote o mob para obter o item [Águas Ferventes] x5. Em seguida vá até o NPC Bonnie (186, 120) e clique na opção "Você gosta do seu chefe, não é?" para obter o item [Processando Chifre de Veado Nato] x5. Vá até o alquimista para produzir [Chifre de Veado Nato] x5. Volte até o NPC Bonnie e clique na opção "Aqui estão as galhadas de que precisa" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Leitura na cama',
                        'history_title' => 'Leitura na cama',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com Fielder e ele nos entregará a "A história de Feld". Usamos o objeto e esperamos até que a conquista seja completada.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pés esquedos e direitos',
                        'history_title' => 'Pés esquedos e direitos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Procure pelos Cavaleiros da Chama Branca que estão marchando dentro de Óptima, ao se aproximar, um deles irá lhe conceder um estado, siga-os e mantenha-se próximo até acumular o buff 20 vezes.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Bacia de Vapor',
                'slug' => 'abertura-do-tempo-bacia-de-vapor',
                'description' => 'Mapa de Bacia de Vapor na região de Abertura do Tempo.',
                'sort_order' => 35,
                'trivias' => [
                    [
                        'item_title' => 'Equipamento Perdido',
                        'history_title' => 'Equipamento Perdido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jace', 'coordinates' => '954, 128', 'item_required' => 'Enfeitando', 'instruction' => 'Fale com o NPC Jace e selecione "Você parece precisar de um pouco de ajuda" para adquirir o item . Vá até (954, 128) e use o item para que apareçam «Enfeitando» Pântano Aprisionador. Derrote-os até dropar 5x . Retorne a Jace e selecione "Encontrei este equipamento nas minas" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gloriosas Lembranças do Passado',
                        'history_title' => 'Gloriosas Lembranças do Passado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Patricia', 'coordinates' => '1047, 1108', 'item_required' => 'Passado de Jilidas', 'instruction' => 'Fale com NPC Patricia e selecione "Você como os robôs de Julidas são feitos?" para entrar no status [Passado de Jilidas] - dura 5 min. Vá as coordenadas (1047, 1108), (1024, 1108), (1024, 1058) e (1047, 1058) para entrar nos status [Sombra do Jiladas 1], [Sombra do Jiladas Ciborgue 11], [A Sombra do Jiladas Ciborgue 5] e [Sombra do Jiladas Ciborgue 17] - duram 5 min. Depois fale com NPC Jiladas e selecione "Deu muito trabalho para você fazer esses robôs" para completar a trívia. (Nota: Para chegar a Assistente Patricia, fale com o NPC Geary e selecione "Me leve para a Oficina de Jiladas".)'],
                        ],
                    ],
                    [
                        'item_title' => 'Cupido Fumegante',
                        'history_title' => 'Cupido Fumegante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Antony', 'coordinates' => '231, 611', 'item_required' => null, 'instruction' => 'Fale com NPC Antony e selecione "Então você é um doutor do amor?" para obter . Depois fale com NPC Resha e selecione "Preciso das Instruções de Mecha Personalizado" para obter . Depois vá até as coordenadas (231, 611) e fale com o NPC Soldado Mecha Personalizado, selecionando em "Comece a trabalhar, agora!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Reciclagem Sempre dá Errado',
                        'history_title' => 'Reciclagem Sempre dá Errado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Terry', 'coordinates' => '194, 531', 'item_required' => 'Manual de Montagem de Robô', 'instruction' => 'Vá até o NPC Terry e clique na opção "Descobriu algo que seja útil?" para obter o item [Manual de Montagem de Robô]. Vá até as coordenadas (194, 531) e destrua o baú para obter [Núcleo do Robô]. Em seguida vá até as coordenadas (250, 548) e destrua o baú para obter [Torso do Robô]. Logo após vá até o alquimista para usar o item obtido com o NPC Terry para sintetizar o item [Robô DIY]. Use o item para invocar um robô e derrote-o para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Chega de Mergulho',
                        'history_title' => 'Chega de Mergulho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Geary', 'coordinates' => '822, 699', 'item_required' => null, 'instruction' => 'Vá até o NPC Geary (822, 699) e clique a opção \'\'Me leve para a Oficina de Jiladas\'\' para ser teletransportado. Em seguida, fale com o NPC Zimmo (897, 938) e clique na opção \'\'Estou pronto para ir para o Bacia do Vapor\'\'. Repita esse processo x5 para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Faz-Tudo de Robô',
                        'history_title' => 'Faz-Tudo de Robô',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dorothy', 'coordinates' => null, 'item_required' => 'Teste de Soldado Mecha XVII', 'instruction' => 'Vá até o NPC Dorothy e selecione a opção "Como anda o seu progresso?" para obter o status [Teste de Soldado Mecha XVII]. Em seguida, vá até o NPC Resha e clique na opção "Por favor, me ajude a proteger os Soldados Mecha" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Solidão Absoluta',
                        'history_title' => 'Solidão Absoluta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Soldado Mecha', 'coordinates' => '235, 569', 'item_required' => null, 'instruction' => 'Vá até o NPC Soldado Mecha (235, 569) e clique na opção \'\'O robô se balança e agita. Parece ter algo a dizer\'\' para obter o status (Robô imediato). Em seguida, vá até o NPC M5566 (623, 541) e clique na opção \'\'Por que você está aqui?\'\' para obter o status (Soldado Mecha Solitário) e ande até (628, 544) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Todos vocês são inuteis',
                        'history_title' => 'Todos vocês são inuteis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Saermon', 'coordinates' => '263, 601', 'item_required' => null, 'instruction' => 'Fale com Saermon, escolhemos a primeira opção e teremos que ir para (263, 601), (268, 573) e (302, 552). Voltamos para Saermon e selecionamos a segunda opção.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não brinque com as crianças.',
                        'history_title' => 'Não brinque com as crianças.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '897, 599', 'item_required' => null, 'instruction' => 'Iremos até onde Ledicia está, conversamos com ela e selecionamos "Você já falou comigo", em seguida escolhemos "Muito bem, vou te dar um doce". Agora vamos falar com Avery (897, 599) e escolhemos "Sinto muito por ter feito sua filha chorar".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Vale Brilhante',
                'slug' => 'abertura-do-tempo-vale-brilhante',
                'description' => 'Mapa de Vale Brilhante na região de Abertura do Tempo.',
                'sort_order' => 36,
                'trivias' => [
                    [
                        'item_title' => 'Apreciação pela Vida',
                        'history_title' => 'Apreciação pela Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Kuishi', 'coordinates' => '440, 478', 'item_required' => 'Transparente como água', 'instruction' => 'Fale com NPC Kuishi e selecione em "Posso tomar da água dessa fonte?" para obter . Vá até as coordenadas (440, 478) e use o item para obter . Retorne a Kuishi, use o item para entrar no status [Transparente como água] - dura 10 min - e fale com o NPC, selecionando em "A água mineral é muito boa e fria" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sino do Despertar',
                        'history_title' => 'Sino do Despertar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Saalu', 'coordinates' => '314, 731', 'item_required' => 'Dor de Cabeça Brava', 'instruction' => 'Fale com o NPC Saalu e selecione em "Para que serve esse martelo?" para obter . Vá até as coordenadas (314, 731) e use o item para entrar no status [Dor de Cabeça Brava] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Companheiro dos Solteiros',
                        'history_title' => 'Companheiro dos Solteiros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Thorkin', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com NPC Thorkin e selecione em "Você descobriu alguma novidade?" para obter . Vá até NPC Jennifer e selecione "Como você vai se livrar dessa caveira estranha?" para obter . De seguida, vá até Kawala e selecione em "Veja, encontrei um novo amigo para você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Espada do Memorial',
                        'history_title' => 'Espada do Memorial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Raum', 'coordinates' => '800, 575', 'item_required' => 'Espada Enferrujada do Comandante da Brigada de Grayd', 'instruction' => 'Vá até o NPC Raum e clique na opção "Você cultua o Líder Eterno?" para obter o item [Espada Enferrujada do Comandante da Brigada de Grayd]. Vá até as coordenadas (800, 575) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Essa não é a sua filha',
                        'history_title' => 'Essa não é a sua filha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião Amnéstico', 'coordinates' => '380, 841', 'item_required' => 'Onde está a Sua Filha?', 'instruction' => 'Vá até o NPC Ancião Amnéstico (380, 841) e clique na opção \'\'Me deixe ajudar a encontrar a sua filha!\'\' para obter o status [Onde está a Sua Filha?]. Logo após, vá até o NPC Dake (425, 847) e clique na opção \'\'Você é a filha do homem com amnésia?\'\' para obter o status [Resposta de Dake]. Em seguida, vá até o NPC Elly (408, 820) e clique na opção \'\'Você é filha do homem com amnésia?\'\' para obter o status [Resposta de Elly]. Depois disso, vá até o NPC Magula (396, 855) e clique na opção \'\'Você é filha do homem com amnésia?\'\' para obter status [Resposta de Magula] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Viu mesmo ou achou que viu?',
                        'history_title' => 'Viu mesmo ou achou que viu?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '313, 730', 'item_required' => 'Viu mesmo ou acho que viu?', 'instruction' => 'Vá até o Sino de Diamante de Gray (313, 730) para receber o status [Viu mesmo ou acho que viu?] se afaste um pouco do local e retorne de novo para obter o status novamente. Acumule 3x para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Treine Mais',
                        'history_title' => 'Treine Mais',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Schneider', 'coordinates' => '489, 434', 'item_required' => 'Você passou Mesmo por um treino Rigoroso?', 'instruction' => 'Vá até o NPC Schneider (489, 434) e clique na opção \'\'Você está treinando mesmo?\'\' irá aparecer um monstro derrote-o para obter o status [Você passou Mesmo por um treino Rigoroso?]. Retorne ao NPC Schneider e clique na opção \'\' Você realmente da tropa de elite?\'\' irão aparecer mais x10 monstro e derrote-os para adquirir o status [Fácil de Derrotar] acumule x10 para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Apenas pule',
                        'history_title' => 'Apenas pule',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '452, 517', 'item_required' => null, 'instruction' => 'Vamos conversar com Kuishi e selecionar a última opção, o que nos dará um impulso. Em seguida, iremos para a localização (452, 517).'],
                        ],
                    ],
                    [
                        'item_title' => 'Não o vejo.',
                        'history_title' => 'Não o vejo.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '413, 821', 'item_required' => null, 'instruction' => 'Encontraremos Thorkin e falaremos com ele, escolhendo a terceira opção. Receberemos outro impulso e agora devemos ir até Elly (413, 821) e selecionar a segunda opção. Agora teremos obtido um objeto que devemos entregar a Thorkin, conversar com ele e escolher a quarta opção.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Ondualção Portuária',
                'slug' => 'abertura-do-tempo-ondual-o-portu-ria',
                'description' => 'Mapa de Ondualção Portuária na região de Abertura do Tempo.',
                'sort_order' => 37,
                'trivias' => [
                    [
                        'item_title' => 'Escultura de Areia Mágica',
                        'history_title' => 'Escultura de Areia Mágica',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '334, 722', 'item_required' => 'Admirando a Escultura de Areia', 'instruction' => 'Vá até as coordenadas (334, 722) para obter os status [Admirando a Escultura de Areia] e depois vá nas seguintes coordenadas: (343, 728) para adquirir o status [Admirando a Primeira Escultura de Areia], (342, 737) para adquirir o status [Admirando a Segunda Escultura de Areia], (345, 752) para adquirir o status [Admirando a Terceira Escultura de Areia] e por fim (341, 761) para adquirir o status [Admirando a Quarta Escultura de Areia] para completar a trívia. (Nota: Todos os status duram 10 minutos.)'],
                        ],
                    ],
                    [
                        'item_title' => 'Visita ao Ninho do Vampiro',
                        'history_title' => 'Visita ao Ninho do Vampiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '499, 1073', 'item_required' => null, 'instruction' => 'Vá até o Penhasco dos Morcegos, nas coordenadas (499, 1073) e destrua um cristal vermelho para obter um . Vá até as coordenadas (477, 1046) e use o item para invocar Sanguessuga. Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Paquera a Motor',
                        'history_title' => 'Paquera a Motor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Wendy', 'coordinates' => null, 'item_required' => 'O Pedido de Wendy', 'instruction' => 'Fale com NPC Wendy e selecione em "Algo te incomoda?" para entrar no status [O Pedido de Wendy] - dura 30 minutos. Vá até as NPCs Emma Blake e Nell e selecione em "Wendy pediu sua ajuda" para obter e . Retorne a Wendy e selecione em "Elas me deram isso" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Semeando a Discórdia',
                        'history_title' => 'Semeando a Discórdia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aurier', 'coordinates' => null, 'item_required' => 'Resposta de Aurier', 'instruction' => 'Vá até o NPC Aurier e clique na opção "Quem é mais forte, você ou Geoje?" para obter o status [Resposta de Aurier]. Em seguida vá até o NPC Digato e clique na opção "Quem é mais forte, você ou Aurier?" para obter o status [Resposta de Digato]. Depois disso, vá até o NPC Geoje e clique na opção "Quem é mais forte, você ou Digato?" para obter o status [Resposta de Geoje] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Transtornado',
                        'history_title' => 'Transtornado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Grien', 'coordinates' => '199, 983', 'item_required' => null, 'instruction' => 'Vá até o NPC Grien (199, 983) e clique na opção \'\'qual é a forma original da Escultura do Gigante de Areia na Ondulação Portuária?\'\' para obter o item (Lentes Mágicas). Logo após, vá até as cordenadas (339,744) e use o item (Lentes Mágicas) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A vida ainda é Bela',
                        'history_title' => 'A vida ainda é Bela',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '306, 651', 'item_required' => 'Como tem Passado no Mar', 'instruction' => 'Vá até as coordenadas (306, 651) para encontrar o mob ao se aproximar dele você receberá os status [Como tem Passado no Mar] x6. Em seguida, você será teletransportado para uma ponte e também receberá um item chamado [Sopa Sprite Calorosa] use o item obtido para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Carteira de Motorista comprada com uma coxa de frango',
                        'history_title' => 'Carteira de Motorista comprada com uma coxa de frango',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '232, 887', 'item_required' => null, 'instruction' => 'Ande pelas proximidades da cordenada (232, 887) até aparecer um Discovery e logo após isso você receberá um item chamado (Pé de Galinha). Em seguida use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Conquistador Cósmico',
                        'history_title' => 'Conquistador Cósmico',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '231, 234', 'item_required' => null, 'instruction' => 'Falamos com Oleanda e selecionamos a primeira opção. Recebemos um objeto, que usaremos na localização (231, 234). Agora temos um plano que levaremos de volta para Oleanda, falando com ele e escolhendo a segunda opção.'],
                        ],
                    ],
                    [
                        'item_title' => '¡CORRE!',
                        'history_title' => '¡CORRE!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos até Sam Blake e falamos com ele, escolhendo a primeira opção. Iremos receber um bônus ao fazer isso, que deve ser acumulado 5 vezes para nos transformarmos. Em seguida, falamos novamente com ele e escolhemos a segunda opção.'],
                        ],
                    ],
                ],
            ],
            // ==================== DIMENSÃO ALTERNATIVA ====================
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Praia Roda de Ferro',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-praia-roda-de-ferro',
                'description' => 'Mapa de Dimensão alternativa - Praia Roda de Ferro na região de Dimensão Alternativa.',
                'sort_order' => 38,
                'trivias' => [
                    [
                        'item_title' => 'A Luz da Esperança',
                        'history_title' => 'A Luz da Esperança',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Borsda', 'coordinates' => '60, 247', 'item_required' => 'Missão de Suprimentos', 'instruction' => 'Fale com o NPC Borsda e selecione "Você parece estar com pressa" para adquirir o item . Use o item nas coordenadas (60, 247) para receber o status [Missão de Suprimentos] - dura 10 min. Vá até Cyloter e selecione "Eu trouxe os suprimentos" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro Mais Precioso (antes como: O tesouro mais precioso)',
                        'history_title' => 'Tesouro Mais Precioso (antes como: O tesouro mais precioso)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Hayden', 'coordinates' => '310, 259', 'item_required' => 'Encantado', 'instruction' => 'Fale com o NPC Hayden e selecione "Você sabe onde está o tesouro?" para adquirir o item . Use a chave na localização (310, 259) para invocar o «Encantado» Baú Misterioso - derrote-o para conseguir o item . Fale com Hayden novamente e selecione "Este é o seu bem precioso?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gênio das Pegadinhas',
                        'history_title' => 'Gênio das Pegadinhas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Julieta', 'coordinates' => null, 'item_required' => 'Dados do Experimento: Soldado Esforçado', 'instruction' => 'Fale com a NPC Julieta e selecione em "Você inventou algo legal?" para obter . Vá até NPC Bristol, NPC Dada e NPC Browney e selecione "Use o disjuntor nele" em cada um para obter os status: [Dados do Experimento: Soldado Esforçado], [Dados do Experimento: Marinheiro Bondoso] e [Dados do Experimento: Líder da Equipe de Resgate de Sangue Frio] - todos duram 10 minutos. Retorne a NPC Julieta e selecione em "Estes são os dados dos testes" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você ta Blefando',
                        'history_title' => 'Você ta Blefando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Wozhors', 'coordinates' => null, 'item_required' => 'Sou um caçador de fragmentos', 'instruction' => 'Vá até o NPC Wozhors e clique na opção "No que você está pensando?" para obter o status [Sou um caçador de fragmentos]. Logo após, vá até o NPC Dallas sem ser atingido por mobs e clique na opção "Olha, sou seu amigo!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Teste de Crença',
                        'history_title' => 'Teste de Crença',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cytoler', 'coordinates' => '474, 134', 'item_required' => 'Quão Firme é a sua crença?', 'instruction' => 'Vá até o NPC Cytoler (474, 134) e clique na opção \'\' Você não vai embora mesmo?\'\' para obter o status [Quão Firme é a sua crença?]. Em seguida, clique na opção \'\'Você não vai embora nunca?\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Último Desejo',
                        'history_title' => 'O Último Desejo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Poção com um Bilhete', 'instruction' => 'Derrote o mob ou para obter o item [Poção com um Bilhete] (dropa numa caixa) use esse item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Curativo no Coração',
                        'history_title' => 'Curativo no Coração',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bristol', 'coordinates' => '60, 254', 'item_required' => 'Meu Machucado', 'instruction' => 'Vá até o NPC Bristol (60, 254) e clique na opção \'\'Também fui ferido\'\' para obter o status [Meu Machucado]. Depois disso, vá até o NPC Browney (471, 124) e clique na opção \'\'Meu coração está machucado\'\' para obter o status [Essa é uma imagem com verdade] e o item (O Coração Enfaixado). Em seguida use o item obtido para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cavalo Galopante',
                        'history_title' => 'Cavalo Galopante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '458, 125', 'item_required' => null, 'instruction' => 'Falar com Vendedor de montarias Qandill e receberá um buff "um lote de bons cavalos" caminhe até o farol nas coordenadas: (458,125) para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Este Valor?',
                        'history_title' => 'Este Valor?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Chaves de prata', 'instruction' => 'Falar com o magnata Exilado e obter a chave dele. Em seguida, siga até o deserto ressonante, localizado nas coordenadas (53 ,61) use o item "Chaves de prata" na caixinha. Após pegar o item, retorne ao magnata Exilado e selecione a opção disponível "Estás a falar deste acessório" para concluir a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Montanha Mina de Vapor',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-montanha-mina-de-vapor',
                'description' => 'Mapa de Dimensão alternativa - Montanha Mina de Vapor na região de Dimensão Alternativa.',
                'sort_order' => 39,
                'trivias' => [
                    [
                        'item_title' => 'Tributo do Altar das Trevas',
                        'history_title' => 'Tributo do Altar das Trevas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lilu', 'coordinates' => '375, 420', 'item_required' => null, 'instruction' => 'Fale com o NPC Lilu e selecione "Como você prova sua fé no Rei Sprite?" para obter o item . Use o item na localização (375, 420) para invocar o monstro Sombra das Trevas - derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Dente Doce de Jessie',
                        'history_title' => 'O Dente Doce de Jessie',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jessie', 'coordinates' => null, 'item_required' => 'Alimente o Dente Doce', 'instruction' => 'Compre 5x e 5x do NPC Kremi. Vá até Jessie e selecione "Eu tenho uma sobremesa deliciosa aqui" para adquirir o status [Alimente o Dente Doce] - dura 10 min. Acumule o buff 5 vezes. De seguida selecione "Quer comer mais sobremesas?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Raiva! Raiva!',
                        'history_title' => 'Raiva! Raiva!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Saermon', 'coordinates' => null, 'item_required' => 'Duende Minerador do Pesadelo', 'instruction' => 'Derrote «Duende Minerador do Pesadelo» até dropar o item . Depois fale com o NPC Saermon e selecione "Tenho Calça de Duende aqui" para obter o status [Saermon Radiante] - dura 1 0 minutos. Depois fale com a NPC Meri e selecione em "Eu dei essas calças para ele" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Onde você comprou?',
                        'history_title' => 'Onde você comprou?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Buru', 'coordinates' => '410, 165', 'item_required' => 'Front Inimigo', 'instruction' => 'Vá até o NPC Buru e clique na opção "Por que este lugar é tão caótico?" para obter o status [Front Inimigo]. Logo após, vá até as coordenadas (410, 165) para obter o item [Fórmula de Espada]. Em seguida, retorne ao NPC Buru (535, 602) e clique na opção "Aqui está a fórmula obtida com os Artesãos dele" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amor da Minha Vida',
                        'history_title' => 'Amor da Minha Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Saermon', 'coordinates' => '565, 257', 'item_required' => null, 'instruction' => 'Vá até o NPC Saermon (565, 257) e clique na opção \'\'Quais são seus planos de presente?\'\' para obter o item (Uma Caixa de Presente Contendo as Calças de Saermon). Em seguida, vá até o NPC Meri (560,257) e clique na opção \'\'Este é o presente de casamento de Saermon para você\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Nunca vi isso',
                        'history_title' => 'Nunca vi isso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Kremi', 'coordinates' => '187, 301', 'item_required' => 'Restos de Almoço', 'instruction' => 'Derrote o mob para obter o ítem [Restos de Almoço]. Vá até as coordenadas (187, 301) e use o item para obter [Comida coberta de Óleo de Motor]. Vá até as coordenadas (197, 312) e use o item obtido para receber o item [Rocha Desconhecida]. Logo após isso, vá até o NPC Kremi (423, 289) e clique na opção "Esta é a pedra que achei perto da mina. Me parece fora do comum" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Poder Reciclado',
                        'history_title' => 'Poder Reciclado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'O Soldado mecha arruinado', 'coordinates' => '627, 133', 'item_required' => 'Em Posse do Núcleo de Energia', 'instruction' => 'Vá até o NPC O Soldado mecha arruinado (627, 133) e clica na opção \'\'Remover o Núcleo de Energia\'\' para obter o status [Em Posse do Núcleo de Energia] Em seguida, vá até as coordenadas (325, 107) e fale com o NPC Soldado Mecha Energizado e clique a opção \'\'Instalar o Núcleo de Energia\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Moral Para Inspirar',
                        'history_title' => 'Moral Para Inspirar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Aujae unica opção e usar skill para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Apertado',
                        'history_title' => 'Apertado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Buru "Muito apertado? O que está acontecendo", Tesara e Jessie na opção "O que você acha do ambiente acampamento? em seguida falar com Bannam na opção "Eu coletei os sentimentos de todos em relação ao ambiente do acampamento" para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Cordilheira Vermelha',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-cordilheira-vermelha',
                'description' => 'Mapa de Dimensão alternativa - Cordilheira Vermelha na região de Dimensão Alternativa.',
                'sort_order' => 40,
                'trivias' => [
                    [
                        'item_title' => 'Cada Vez Mais Bonito',
                        'history_title' => 'Cada Vez Mais Bonito',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Moa', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Moa e selecione "Você já juntou o suficiente lá?" para obter o item . Fale com Gauss e selecione "Eu tenho um belo espelho brilhante aqui" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Seus Próprios Pensamentos',
                        'history_title' => 'Seus Próprios Pensamentos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Waymond', 'coordinates' => null, 'item_required' => 'Transpirar Alegria', 'instruction' => 'Fale com o NPC Waymond e selecione "Eddy não parece estar muito bem" para receber o item . Fale com NPC Sian e selecione "Você pode me ajudar a encher este kit de primeiros socorros?" para obter o item . Volte até Waymond e selecione "Eu trouxe de volta o kit de primeiros socorros" para receber o status [Transpirar Alegria] - dura 10 min. Fale com Eddy e selecione "Parece que você não está se sentindo bem enquanto come isso" para adquirir o item . Fale com Mimi e selecione "Você tem mais marmitas aí?" para adquirir o item . Volte até Eddy e selecione "Este é o almoço preparado por Mimi" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tudo tem uma fraqueza',
                        'history_title' => 'Tudo tem uma fraqueza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sajil', 'coordinates' => null, 'item_required' => 'Relatório da Cordilheira Vermelha', 'instruction' => 'Fale com NPC Sajil e selecione em "Você tem algo a dizer para Miranda?" para obter o status [Relatório da Cordilheira Vermelha] - dura 5 min. Depois fale com a NPC Miranda e selecione em "Alguém quer passar uma mensagem para você" para obter o status [Extremamente Irritado] - dura 5 min. Por fim, vá até NPC Sian e selecione em "Você vai conseguir que Miranda te escute?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Flasback de Quase Morte',
                        'history_title' => 'Flasback de Quase Morte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Entregando Marmita', 'instruction' => 'Fale com o NPC Pesquisador do Instituto de Pesquisas Mimi e selecione "Tem outra marmita por ai?" para obter o status [Entregando Marmita], vá até o Agente de Inteligência Waymond e selecione "Essa é a marmita de Mimi" para obter o item Marmita de Mimi, clique com o botão direito no item para usá-lo e completar a trívia. Deve ser completada no horário 11h - 18h'],
                        ],
                    ],
                    [
                        'item_title' => 'Você não é Bonitão',
                        'history_title' => 'Você não é Bonitão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Com o Espelho de Gauss', 'instruction' => 'Fale com o NPC Logista Gauss selecione "Um amigo está muito triste. Quero acalmá-lo com seu espelho. Vou comprar um espelho com você por 1 ouro." para obter o status [Com o Espelho de Gauss], vá até o Assistente do Agente de Inteligência Eddy e selecione "Desista! Se olhe no espelho." para completar a trívia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Me dê Cobertura'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmão, Somos Camaradas',
                        'history_title' => 'Irmão, Somos Camaradas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Explorador Moa', 'coordinates' => null, 'item_required' => 'Disfarce de Duende', 'instruction' => 'Fale com o NPC Explorador Moa e selecione "Por favor, me empreste seu disfarce. Quero ir a um lugar mais fresco para viver uma aventura." para obter o status [Disfarce de Duende], vá até o Caçador de Demônios Metatro e selecione "Obrigado pela ter misericórdia." para completar a trívia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Me dê Cobertura'],
                        ],
                    ],
                    [
                        'item_title' => 'Não somos irmãos, somos camaradas.',
                        'history_title' => 'Não somos irmãos, somos camaradas.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Explorador Moa', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o Explorador Moa e selecione "Empresta-me sua fantasia, por favor? Vou para um lugar mais fresco em busca de aventuras." para receber um bônus. Aproxime-se do Caçador de Demônios Metatro para obter outro bônus. Fale com Metatro e selecione "Obrigado por sua compreensão".'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmaos Separados há muitos anos',
                        'history_title' => 'Irmaos Separados há muitos anos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Cain na opção "Há algo que você não consegue deixar de lado recentemente?", Depois andar ate a Mansão praga vermelha ate ganhar os buffs "Procurando na área da granja, direita e esqueda", depois volta no Cain na opção "Não encontrei nenhuma pista" para ganhar o buff "Pergunte por perto" depois falar com Mary Velsa na opção "Você encontrou algum relogio de bolso recentemente? e depois voltar no Cain na opção "Encontrei o seu relogio de pulso nas proximidades" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Segredo de Beleza',
                        'history_title' => 'Segredo de Beleza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Tsuki Natsuya "Como posso ajuda-la?", Depois ir ate Mimi "Você tem alguma receita de beleza para cuidados com a pele?", Matar Esporos da Praga ate pegar o status de "Liquido viscoso", voltar a falar com o Tsuki Natsuya ultima opção para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta Sprite',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-sprite',
                'description' => 'Mapa de Dimensão alternativa - Floresta Sprite na região de Dimensão Alternativa.',
                'sort_order' => 41,
                'trivias' => [
                    [
                        'item_title' => 'Sou eu, a Leoa',
                        'history_title' => 'Sou eu, a Leoa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '512, 700', 'item_required' => 'Pele de Leoa', 'instruction' => 'Derrote para adquirir o item [Pele de Leoa]. (Pode demorar bastante para dropar) Em seguida, use o item e siga até as proximidades das coordenadas (512, 700) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ainda com Fome',
                        'history_title' => 'Ainda com Fome',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Anthorra', 'coordinates' => '304, 138', 'item_required' => 'Fatias Generosas de Carne de Urso', 'instruction' => 'Derrote o Monstro x3 para obter o status [Fatias Generosas de Carne de Urso]. Logo após, derrote o Monstro (304, 138) para obter o status [Cogumelo da Floresta Sprite]. Depois disso, vá até o NPC Anthorra (470, 705) e clique na oopção \'\'Você ainda não está completo, não é? Me dá uma mordida!\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coração de Zindel',
                        'history_title' => 'Coração de Zindel',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Zindel', 'coordinates' => null, 'item_required' => 'Cristal Mágico de Zindel', 'instruction' => 'Vá até o NPC Zindel e clique na opção "Noll se interessa bastante por cristais mágicos. Poderia dar umas amostras para ele?" para obter o status [Cristal Mágico de Zindel]. Em seguida vá até o NPC Nynor e clique na opção [Trouxe o coração de Zindel] para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Banho Quente',
                        'history_title' => 'Banho Quente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chara', 'coordinates' => '219, 479', 'item_required' => 'Água Recém-Aquecida', 'instruction' => 'Vá até o NPC Chara (219, 479) e clique na opção \'\'Noll está indo tomar um banho! Me dê um balde de água quente. Vou já buscar!\'\' para obter o status [Água Recém-Aquecida] Em seguida, vá até o NPC Nynor (318,698) e clique na opção \'\'Tome um banho logo! Está água vai esfriar já, já!\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Desgraça cai do céu',
                        'history_title' => 'A Desgraça cai do céu',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '489, 181', 'item_required' => null, 'instruction' => 'Falar com Sakuzo na opção "o quê! Um coco congelado?vou dar uma olhada.", depois vá ate (489,181) e usar o item, depois volta no Sakuzo na opção "Eu trouxe um coco congelado" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Entrar ou Apanhar',
                        'history_title' => 'Entrar ou Apanhar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar Com Hasara na opção "Se não quiser se juntar, o que fazer?" depois na opção "Quem quer se juntar a religião" mate o boss para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta da Praga',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-da-praga',
                'description' => 'Mapa de Dimensão alternativa - Floresta da Praga na região de Dimensão Alternativa.',
                'sort_order' => 42,
                'trivias' => [
                    [
                        'item_title' => 'Aldeão Chocado',
                        'history_title' => 'Aldeão Chocado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '172, 54', 'item_required' => 'Eletrocutado', 'instruction' => 'Vá até as proximidades das coordenadas (172, 54) para obter o status [Eletrocutado] e após o [Coração Continua Batendo]. Logo após, ande nas proximidades das coordenadas (535, 401) para completar a trívia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Tendência Imperdível'],
                        ],
                    ],
                    [
                        'item_title' => 'Hidratante',
                        'history_title' => 'Hidratante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Emena', 'coordinates' => '264, 748', 'item_required' => 'Super Essência de Planta Espessa', 'instruction' => 'Vá até as coordenadas (264, 748) e procura por uma árvore com algum detalhe em roxo (parecendo estar parasitada) mate ela para adquirir o item [Super Essência de Planta Espessa]. Em seguida vá até o NPC Emena e clique na opção "Esse é um hidratante típico local. Espero que sua pele esteja melhor agora" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Posso ser um cara mau',
                        'history_title' => 'Posso ser um cara mau',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '639, 142', 'item_required' => 'Desculpe pelas Convicções em minhas Crenças', 'instruction' => 'Derrote os Monstro (639, 142) para obter o status [Desculpe pelas Convicções em minhas Crenças] acumule esse status x20 depois derrote (754,214) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Charada da Chama azul',
                        'history_title' => 'Charada da Chama azul',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chara', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Chara, na opção "Por que o fogo do acampamento é azul?" para entrar no status "Biólogo" que dura 30 minutos. Com o status ativo, mate monstro Kitsune de Marfim para aparecer na sua bag o item . Retorne ao NPC Chara e selecione a opção "Isso é pelo de raposa?" para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Dança com Raposas',
                        'history_title' => 'Dança com Raposas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Sela de Doma de Montaria', 'instruction' => 'Fale com Reynard na opção "Me disseram que você queria ir dar um passeio" para obter o item "Sela de Doma de Montaria". Vá ate o monstro Kitsune de Marfim e utilize o item nela para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gigante em Avanço',
                        'history_title' => 'Gigante em Avanço',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Aendello na opção "Como fiquei tão grande?" para entrar no status "Poder absorvente". Derrote 5x o monstro Rei Odin de Cristal Formado do tempo para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Poder do Tempo',
                        'history_title' => 'Poder do Tempo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Nynor "Como posso lhe ajudar?" para entrar no status "Matador Gigante" que dura 60 minutos. Mate o monstro Rei Odin de Cristal Formado do Tempo para obter o item . Retorne ao NPC e selecione "Esse é o cristal?" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Um povo escandalizado',
                        'history_title' => 'Um povo escandalizado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '171, 54', 'item_required' => null, 'instruction' => 'Ve a las coordenadas (171, 54) para recibir dos buffs, y para activar un grito. Después ve a (535, 401) para completar la trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Entrar ou Apanhar',
                        'history_title' => 'Entrar ou Apanhar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ancião Luxien', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com HaoHao na opção "Deixe comigo, eu vou infiltrar" depois ir Ate o NPC Ancião Luxien para falar com a opção"O que acontece com aqueles que violam a doutrina" e voltar pro Hao Hao na opção "Eu descobri algumas pistas sobre areligião Carso" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ensinamento Secreto',
                        'history_title' => 'Ensinamento Secreto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com o Sanzen na opção "Estou aqui para ajudar a procurar", falar com Sokyo "Tente estender a mão amiga "e dps voltar pro Sanzen "Encontrei a pessoa" para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Planícies de Kaslow',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-plan-cies-de-kaslow',
                'description' => 'Mapa de Dimensão alternativa - Planícies de Kaslow na região de Dimensão Alternativa.',
                'sort_order' => 43,
                'trivias' => [
                    [
                        'item_title' => 'Poste da Coruja',
                        'history_title' => 'Poste da Coruja',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chara', 'coordinates' => '62, 385', 'item_required' => 'Armadilha para Pássaros Casiera', 'instruction' => 'Vá até o NPC Chara (62, 385) e clique na opção "Soube que você bolou uma maneira de evitar a emboscada" para obter o item [Armadilha para Pássaros Casiera]. Logo após use o item no monstro para obter o status [O guia Definitivo para Pegar Passarinho]. Depois retorne ao NPC Chara e clique na opção "Entendi" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Carteira',
                        'history_title' => 'Carteira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Koe', 'coordinates' => '566, 415', 'item_required' => null, 'instruction' => 'Derrote o Monstro (566, 415) para obter o item x5. Em seguida, vá até o NPC Koe (51, 395) e clique na opção \'\'Sua Carta\'\' para compeltar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Seja Sutil',
                        'history_title' => 'Seja Sutil',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Darlace', 'coordinates' => '804, 659', 'item_required' => 'Você não consegue me ver!', 'instruction' => 'Vá até o NPC Darlace e clique na opção "Estou pronto para ajudar você a obter informações!" para obter o status [Você não consegue me ver!]. Logo após, vá até as proximidades das coordenadas (804, 659) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pesquisador de Árvore Sábia',
                        'history_title' => 'Pesquisador de Árvore Sábia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aendello', 'coordinates' => '31, 383', 'item_required' => null, 'instruction' => 'Vá até o NPC Aendello (31, 383) e cique na opção \'\'Por uqe Árvores sábias voam?\'\' para obter o item (Escaneador Mágico). Em seguida, vá até a coordenadas (157, 297) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O lobo e o Grou',
                        'history_title' => 'O lobo e o Grou',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá ate o Seguidor Moribundo de Carso e selecione a opção "Aproxime-se e verifique seus ferimentos" irá aparecer alguns monstros, mate-os para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Formação dos Veados de Fogo',
                        'history_title' => 'Formação dos Veados de Fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Vash', 'coordinates' => '632, 591', 'item_required' => null, 'instruction' => 'Fale com Vash e selecione a opção "Como vou implementar esse plano? " para obter o item . Vá ate o mob Caribu de Cristal e utilize o item nele para captura-lo. Retorne ao NPC e clique na opção "Te peguei, Caribu" para obter o item . Vá ate as coordenadas (632,591) ira aparecer um veado, use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Deixe Eu Entrar!',
                        'history_title' => 'Deixe Eu Entrar!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '433, 327', 'item_required' => null, 'instruction' => 'Vá até a coordenada (433,327) e aguarde no local até acumular 30x o status "Deixe eu entrar" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pesquisador do Altar Sprite',
                        'history_title' => 'Pesquisador do Altar Sprite',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Nikko na opção "Você parece preocupado. Você precisa de ajuda?". Mate os mob que aparecer para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Anime-se',
                        'history_title' => 'Anime-se',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Zindel na opção"Como ajudar a aliviar o medo em seu coração", mate uns "Veado Especialmente Bonitos" e colete "chifres grandes", vá ate 252,652. voltar e falar com o zindel na opção"Prove e veja o ingrediente do seu sonho" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma pessoa perdida',
                        'history_title' => 'Uma pessoa perdida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Pisa "Confuso! O que devo fazer?", ir ate 553,398. matar o mob que nasce quando usa o item para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Bosque de Gaia',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-bosque-de-gaia',
                'description' => 'Mapa de Dimensão alternativa - Bosque de Gaia na região de Dimensão Alternativa.',
                'sort_order' => 44,
                'trivias' => [
                    [
                        'item_title' => 'Apanhador de Água-Viva',
                        'history_title' => 'Apanhador de Água-Viva',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Akon', 'coordinates' => '208, 237', 'item_required' => 'Captura Água-Viva', 'instruction' => 'Apanhador de Água-Viva Vá até o NPC Akon (208, 237) e clique na opção \'\'Ouvi dizer que você pode consertar a barreira\'\' para obter o item (Rede de Água-Viva). Logo após, ultilize o item obtido no Monstro (582, 592) para obter o status [Captura Água-Viva]. Agora, retorne ao NPC Akon e clique na opção \'\'Entendi\'\' para completar a trívia.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Cadê minha Bola?'],
                        ],
                    ],
                    [
                        'item_title' => 'Presença da Deusa',
                        'history_title' => 'Presença da Deusa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cirrus', 'coordinates' => '144, 232', 'item_required' => 'Seguidor de Gaia', 'instruction' => 'Vá até o NPC Cirrus (144, 232) e clique na opção \'\'Estou pronto para ir ao Lago da Deusa\'\' para obter o status [Seguidor de Gaia]. Depois disso, vá até a coordenada (283, 688) para obter o status [Jelly... Jelly-Coelho?]. Em seguida, retorne ao NPC Cirrus e clique na opção \'\'Não é uma deusa!\'\' para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre da Patrulha',
                        'history_title' => 'Mestre da Patrulha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Adara', 'coordinates' => '203, 148', 'item_required' => 'Saindo para Patrulhar', 'instruction' => 'Vá até o NPC Adara (203,148) e clque na opção \'\'Soube que precisa de ajuda para patrulhar\'\' para obter o status [Saindo para Patrulhar]. Logo após, vá até as coordenadas (426, 214), (685,428), (874, 589) e (886, 792) nessa ordem para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre do Pulo',
                        'history_title' => 'Mestre do Pulo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '683, 207', 'item_required' => null, 'instruction' => 'Vá até próximo Praça Arruinada (683,207) irá começar acumular 20x o status "Correndo na direção contraria". Vá ate a coordenada (683,215) para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Soco Esplêndido',
                        'history_title' => 'Soco Esplêndido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Puppy', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Puppy e selecione "Como eu faço o Jelly- Coelho Ermos parecerem bonitos?" para obter o item . Utilize o item em Jelly-Coelho dos Ermos para entrar no status "Maquiagem Incrível" que dura 30 minutos. Retorne ao NPC Puppy e selecione "Eles são todos fofos de novo" para completar a trivia. Obs: Se você usar algum tipo de teleporte irá perder o status, precisa ir andando (skill de casal, pedra teleporte, cristal de alma )'],
                        ],
                    ],
                    [
                        'item_title' => 'Consultor',
                        'history_title' => 'Consultor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '653, 50', 'item_required' => null, 'instruction' => 'Fale com Punally na opção "Onde você vai montar o posto avançado?" para obter o item . Vá até a coordenada (653, 50) e use o item para completar a trivia'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Material de Construção Estranho'],
                        ],
                    ],
                    [
                        'item_title' => 'Rotina de Brocom',
                        'history_title' => 'Rotina de Brocom',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Lida na opção"Você está enfrentando algum problema?", ir ate o Quill na opção"Você encontrou algum problema?", vá matar o Manny 322,144 e coletar o item, voltar no Lida e ir na ultima opção "Entregue a bolsa de dinheiro recuperada para Lida" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sotina de Siscom',
                        'history_title' => 'Sotina de Siscom',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Quill segunda opção "Você se aproxima de Quill, que segura um bolsa de dinheiro com uma expressão preucupada ", Falar com Rau, voltar no Quill ultima opção"Entregue o Colar para Quill" para completar a trivia..'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta Luz da Lua',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-luz-da-lua',
                'description' => 'Mapa de Dimensão alternativa - Floresta Luz da Lua na região de Dimensão Alternativa.',
                'sort_order' => 45,
                'trivias' => [
                    [
                        'item_title' => 'Masculino ou Feminino?',
                        'history_title' => 'Masculino ou Feminino?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Profeta Barbama', 'coordinates' => null, 'item_required' => 'Esta é a Pessoa', 'instruction' => 'Fale com o NPC Profeta Barbama e selecione "Oque você quer com Barbama?" para obter o status [Esta é a Pessoa], depois selecione a opção "Este Barbama não é Barbama" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Jovem mas Ambicioso',
                        'history_title' => 'Jovem mas Ambicioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Raposa Demônio Filhote Hamak', 'coordinates' => '389, 186', 'item_required' => 'Acompanhe Hamak', 'instruction' => 'Fale com o NPC Raposa Demônio Filhote Hamak e selecione "Você está a postos para me acompanhar até o Vilarejo Abandonado da Raposa Demônio?" para obter o status [Acompanhe Hamak], vá com ele derrotar Raposa Demonio Filhote em (389,186) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só existe uma verdade',
                        'history_title' => 'Só existe uma verdade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Raposa Demônio Filhote Silas', 'coordinates' => '684, 127', 'item_required' => 'Onde está o Ladrão?', 'instruction' => 'Fale com o NPC Raposa Demônio Filhote Silas e selecione "O ladrão é...?" para obter o status [Onde está o Ladrão?] e o item Agulha Anestésica, encontre o Ladrão de Carso em (684,127) e use nele a Agulha Anestésica para obter o status [A verdade é Revelada], leve o Ladrão Capturado até Silas e selecione "Você é um ótimo detetive!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Portão de Ilya Alternativa',
                        'history_title' => 'Portão de Ilya Alternativa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mago da Academia de Magia Noll', 'coordinates' => null, 'item_required' => 'Onde está...?', 'instruction' => 'Fale com o NPC Mago da Academia de Magia Noll e selecione "Vamos! Estou pronto!" para obter o status [Onde está...?] e ser teletrasportado para o Portão de Ilya Alternativa e ande para retornar a Noll e selecione "Fui mandado de volta para casa mesmo antes de passar pela porta" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Chef Premium',
                        'history_title' => 'Chef Premium',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lulu', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Lulu e selecione a opção "Nao sou uma má pessoa" para entrar no status "Super Assistente do Chef Premium". Derrote os mobs , e para dropar os itens , e . Retorne ao NPC Lulu e selecione a opção "Ingredientes " para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esperança para Curar a Infecção',
                        'history_title' => 'Esperança para Curar a Infecção',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Archie', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Archie e selecione "Você sabe de algum jeito para curar uma infecção?" para adquirir . Vá ate mob Mago Raposa Demônio Infectado e use o item nele para receber o status "Capturando Raposas" que dura 10 minutos. Retorne ao NPC e selecione a opção "Entendi" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Somi Adormecido',
                        'history_title' => 'Somi Adormecido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Somi', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Somi e selecione 5x a opção "Levante-se! Pare de dormir!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Fim do Mundo',
                        'history_title' => 'O Fim do Mundo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lego', 'coordinates' => '518, 36', 'item_required' => null, 'instruction' => 'Fale com Lego e selecione a opção "Como verificou esses portais?" para adquirir o item . Vá ate a coordenadas (518,36) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os crueis falam pouco',
                        'history_title' => 'Os crueis falam pouco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Matar Bubba e falar com Mignet na opção "Diga a Mignet que você já expulsou Bubba"Para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Vilao morre jovem',
                        'history_title' => 'Vilao morre jovem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Omni primeira opção"Você perguntou a ele como se torna um herói como ele?", Vai entrar em uma duggeon, falar com o Omni "Preparando-se para a batalha" e vai passando pelo labirinto rapido e mata o mob do fim, Depois retorna ao NPC e fala com na ultima opção "Sair deste lugar" para completar a trivia. OBS: Para atravessar o lado é preciso andar cliclando no mapa com o mouse.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta Antiga',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-antiga',
                'description' => 'Mapa de Dimensão alternativa - Floresta Antiga na região de Dimensão Alternativa.',
                'sort_order' => 46,
                'trivias' => [
                    [
                        'item_title' => 'Mercenário',
                        'history_title' => 'Mercenário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Neegy', 'coordinates' => null, 'item_required' => 'Abra seus Olhos', 'instruction' => 'Vá até o NPC Neegy e clique na opção "Vamos competir um pouquinho" para obter o status [Abra seus Olhos]. Em seguida, no mesmo NPC clique na opção "Eu vi cinco" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ataque Fingido',
                        'history_title' => 'Ataque Fingido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Zindel', 'coordinates' => '300, 167', 'item_required' => null, 'instruction' => 'Vá até o NPC Zindel (300, 167) e clique na opção \'\' Vou ajuda-lo a distraí-los\'\' para obter o item (Foguetinhos Barulhentos). Logo após, use o item nas coordenadas (142,143) paracompletar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Desmonte Primeiro',
                        'history_title' => 'Desmonte Primeiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Observador Homem-Besta', 'coordinates' => '220, 303', 'item_required' => 'Canhão de Armstrong', 'instruction' => 'Vá até o NPC Observador Homem-Besta e clique na opção "Como podemos impedi-los?" para obter o item [Canhão de Armstrong]. Vá até as coordenadas (220, 303), use o item para se transformar e utilize a skill 1 para derrotar o monstro para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Montanhista',
                        'history_title' => 'Montanhista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Rogge', 'coordinates' => '395, 888', 'item_required' => null, 'instruction' => 'Vá até o NPC Rogge (395,888) e clique na opção \'\'Deixe isso comigo\'\' para obter o item (Câmara). Em seguida, vá até as coordenadas (547,630) e use o item obtido para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre de Surfe',
                        'history_title' => 'Mestre de Surfe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '667, 532', 'item_required' => null, 'instruction' => 'Vá ate as coordenadas (667,532) e fique parado para adquirir o status "ondas rebeldes" 10x para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esperto como uma Criança',
                        'history_title' => 'Esperto como uma Criança',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro Experiente', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Fazendeiro Experiente e clique na opção "Por que as larvas de abelha selvagens são maiores que as minhocas de abelha selvagem?" para obter os itens e . Vá ate os mobs Larvas de Abelha Selvagem e utilize o , depois vá ate os mobs Abelhas Sanguinárias e utilize o para entrar nos status "Sangue de Larva e Sangue Imago" que duram 10 minutos cada. Volte ao NPC e selecione "Essa é a uma amostra de sangue" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Voltar para casa para plantar',
                        'history_title' => 'Voltar para casa para plantar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro Experiente', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Fazendeiro Experiente e selecione "Ouvi dizer que quer cultivar algo nesses campos" ´para obter o item . Utilize o item no Cogumelo dos Ermos. Volte ao NPC Fazendeiro Experiente e selecione "Eu trouxe o peixe que você queria" para complementar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Ambientalista',
                        'history_title' => 'Ambientalista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '392, 516', 'item_required' => null, 'instruction' => 'Vá até a coordenada (392,516) irá ter um Jelly Coelho Gigante. Mate-o para completar a trivia. Obs: O jelly possui um respawn um pouco alto, troque de canal se necessário.'],
                        ],
                    ],
                    [
                        'item_title' => 'Aldeião com faca',
                        'history_title' => 'Aldeião com faca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Balu primeira opção"O que aconteceu?", Falar com Nicole, Ann e Fene nas opções "Pergunte sobre este caso de assasinato". depois falar com o Balu denovo e escolher a opção "O verdadeiro assassino é o criado Fene" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Viciado em Gatos',
                        'history_title' => 'Viciado em Gatos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Kyent primeira opção"Qual é o problema que ele está enfrentando", ir no local 555, 186 use o item no e volte no Kyent para escolher a ultima opção"Entregue o saco com o gato para Kyent" para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Vale dos Cavaleiros',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-vale-dos-cavaleiros',
                'description' => 'Mapa de Dimensão alternativa - Vale dos Cavaleiros na região de Dimensão Alternativa.',
                'sort_order' => 47,
                'trivias' => [
                    [
                        'item_title' => 'Contos Agricolas do Vale dos Cavaleiros',
                        'history_title' => 'Contos Agricolas do Vale dos Cavaleiros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Cahan selecionando a opção "Você precisa de ajuda?" para obter o item . Vá ate a coordenada (479.269) lá você ira encontrar a planta Brotinho, utilize o item nele 5x para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pechinchas Maiores',
                        'history_title' => 'Pechinchas Maiores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Brandr', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Brandr e selecione a opção "Fiquei sabendo que você vende armas mais baratas que que o Barak?" para entrar no status "Pechinchas", que dura 5 minutos. Fale com NPC Barak na opção "Brandr disse que suas armas são vendidas por 2.000 de ouros". Retorne ao npc Brandr e selecione a opção "Barak disse que suas armas são vendidas por 200 ouros". Retorne ao Barak e selecione "Brandr disse que suas armas são vendidas por 20 de ouros" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Terra, Gelo e Fogo',
                        'history_title' => 'Terra, Gelo e Fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Fuleyla selecionando a opção "Sobre a Terra da fonte termal" para entrar no status "Exploração das terras Míticas" que dura 30 minutos . Vá até a coordenada (290,313 ) para entrar no status "Terapêutica> irá aparecer um discovery no gritar, aguarde o status sair para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'O Cheiro está Otimo',
                        'history_title' => 'O Cheiro está Otimo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Jim na opção "Você precisa de comida?" para entrar no status "Por orgulho" que dura 30 minutos. Fale com o NPC Lilia na opção "Por favor me dê comida" para obter o item . Retorne a Jim e selecione a opção "Tome a lancheira" para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Fonte de Vitalidade',
                        'history_title' => 'Fonte de Vitalidade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Gump e comprar o item , e falar com o Leiz "Entregue a bebida refrescante" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Inimigo Infiltrado',
                        'history_title' => 'Inimigo Infiltrado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Paiter primeira opção"Você já disse que pode ajudar", ir nas coordenadas do buff (431.345),(488.409)(359.442)e voltar pra falar com o Paifer "Ja foram realizadas buscas cuidadosas em três lugares" para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Baía de Auris',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-ba-a-de-auris',
                'description' => 'Mapa de Dimensão alternativa - Baía de Auris na região de Dimensão Alternativa.',
                'sort_order' => 48,
                'trivias' => [
                    [
                        'item_title' => 'Coragem Holandesa',
                        'history_title' => 'Coragem Holandesa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lyon', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Lyon e selecione "Você quer aprimorar sua força de combate?" para obter . Em seguida derrote Seguidor Furioso de Carso e Seguidor Belisco de Carso ate dropar 10x Caco de Cristal. Retorne ao NPC Lyon, selecione a opção de alquimia e arraste a formula para sintetizar . Por ultimo selecione no mesmo NPC a opção "Isso vai reforçar sua capacidade de combate" para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'O Ciclo da Vida',
                        'history_title' => 'O Ciclo da Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ryan', 'coordinates' => '334, 939', 'item_required' => null, 'instruction' => 'Fale com Ryan e selecione "Não posso levar meu filho a estátua" para receber o buff "Padrinho" que dura 30 minutos. Vá ate a coordenada (334, 939) em frente a estátua para completar a trívia (lado direito).'],
                        ],
                    ],
                    [
                        'item_title' => 'Literatura Intrigante',
                        'history_title' => 'Literatura Intrigante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Monica', 'coordinates' => '227, 196', 'item_required' => null, 'instruction' => 'Fale com Monica e selecione "Você gosta de poesia?" para obter o item . Vá até a coordenada (227, 196) e use o item para receber o status "Maravilha do Pântano". Retorne a Monica e selecione a opção "Vou tirar uma foto sua" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Livro em Branco',
                        'history_title' => 'Livro em Branco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Eugenie selecione a opção "Por que você está fazendo corpo mole?" para acumular o status "Lembrete de envio" 5x. Depois de acumular o status, selecione a opção "E quanto ao novo livro de Quill?" para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Aparição Espiritual',
                        'history_title' => 'Aparição Espiritual',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '145, 141', 'item_required' => null, 'instruction' => 'Falar com G Jins primeira opção"Fale que está disposto a ajudar", ir ate (145,141). depois voltar no G Jins na opção "Diga que você ja registrou" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Emissario da Justiça',
                        'history_title' => 'Emissario da Justiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Juen primeira opção "Precisa de ajuda?" ir falar com Jon, Won e Lin na opção "Apresente seus documentos para X", ir ate o Fuul "Apresente seus documentos para Full e prenda-o" e voltar no Juen "Entregue os membros da organização e informações relacionadas para Juen" para completar a trivia..'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Ruínas Polares Antigas',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-ru-nas-polares-antigas',
                'description' => 'Mapa de Dimensão alternativa - Ruínas Polares Antigas na região de Dimensão Alternativa.',
                'sort_order' => 49,
                'trivias' => [
                    [
                        'item_title' => 'Lenda Undergraund',
                        'history_title' => 'Lenda Undergraund',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aerias', 'coordinates' => '143, 346', 'item_required' => null, 'instruction' => 'Fale com Aerias na opção "Fiquei sabendo que sua amiga está doente?" para entrar no Status "Totalmente Determinado" que dura 30 minutos. Vá até a coordenada (143, 346) onde você irá encontrar varias florzinhas, ataque-as e receberá na bag o item . Retorne ao NPC Aerias e selecione a opção "Trouxe a Florzinha amarela" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amizade é feitiçaria',
                        'history_title' => 'Amizade é feitiçaria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Troyal na opção "Posso ser seu amigo?" para entrar no status "Hipnose" mudará sua barra de skil e não conseguirá se mover, utilize a primeira skill 10x para obter o status "Vontade Forte" (ambos os status duram 5 minutos). Depois de acumular o status 10x, selecione a opção "Isso é uma bela pegadinha" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O que foi que eu vi?',
                        'history_title' => 'O que foi que eu vi?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o Cristal Flutuante Giga e selecione a opção "O que pode fazer com seu poder" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sprite Ganancioso',
                        'history_title' => 'Sprite Ganancioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '525, 428', 'item_required' => null, 'instruction' => 'Fale com Scrooge selecionando a opção "Você tem bastante tesouro" para entrar no status "Miseravel" que dura 30 minutos, bata nos baús ao redor do npc para obter na bag . Vá até a coordenada (525, 428) onde tem uma fonte, na frente dela use a moeda para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre do Cristal do Amor',
                        'history_title' => 'Mestre do Cristal do Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ir ate o Mob Coelho Geleia Veloz mate-os, colete e coma o 5 vezes para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre Sem Amor',
                        'history_title' => 'Mestre Sem Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ir ate o Mob Coelho Geleia Veloz mate-os e colete x5 vezespara ir falar com Maso 5x na opção "Você entregou o cristal misterioso para Moso" para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            // ==================== TORMENTUM ====================
            [
                'city' => 'Tormentum',
                'name' => 'Vale dos Espíritos',
                'slug' => 'tormentum-vale-dos-esp-ritos',
                'description' => 'Mapa de Vale dos Espíritos na região de Tormentum.',
                'sort_order' => 50,
                'trivias' => [
                    [
                        'item_title' => 'Maldição de Má Sorte',
                        'history_title' => 'A Espiral da Miséria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Espírito Anônimo', 'coordinates' => '853, 582', 'item_required' => 'A Espiral da Miséria', 'instruction' => 'Fale com o NPC Espírito Anônimo (853, 582)e selecione a opção "Ajude o fantasma com seus últimos desejos" para receber o buff [A Espiral da Miséria] - dura 5 minutos.'],
                            ['step_number' => 2, 'npc_name' => 'Jody', 'coordinates' => '782, 347', 'item_required' => null, 'instruction' => 'Fale com Jody (782, 347)e selecione a opção "Me ajude a expulsar este Fantasma" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Estátua Viva',
                        'history_title' => 'Estátua Viva',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Paladino das Ruínas', 'instruction' => 'Bata no baú (próximo a 298, 154) para invocar «Paladino das Ruínas». Derrote-o para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Me Deixa Ver, Vou me Comportar',
                        'history_title' => 'Me Deixa Ver, Vou me Comportar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mulher', 'coordinates' => '734, 283', 'item_required' => 'Sorriso Insuportável', 'instruction' => 'Fale com a NPC Mulher (734, 283) e selecione "Deixe-me ler seus textos." para entrar no status [Sorriso Insuportável] - dura 2 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida selecione "Que trabalhos maravilhosos!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amor dos Telhados',
                        'history_title' => 'Amor dos Telhados',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Barqueira Heralia', 'coordinates' => '286, 470', 'item_required' => null, 'instruction' => 'Fale com a NPC Barqueira Heralia (286, 470) e selecione "Deixe-me ajudá-lo a expressar o que você pensa!" para adquirir o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '293, 445', 'item_required' => null, 'instruction' => 'Prossiga para as coordenadas (293, 445) e dê clique direito no item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bem à Mão',
                        'history_title' => 'Dentro da Visão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sprite Guardião Jody', 'coordinates' => '786, 341', 'item_required' => null, 'instruction' => 'Fale com Sprite Guardião Jody (786, 341) e selecione "Você encontrou uma adaga recentemente?" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => 'Mercador de Armas Frank', 'coordinates' => '802, 368', 'item_required' => null, 'instruction' => 'Vá até Mercador de Armas Frank (802, 368) e selecione "Você está procurando uma adaga?" para completar a trívia. (Certifique-se que antes tem Biscoitos de Mel Mágicos na mochila ou o sprite não vai falar)'],
                        ],
                    ],
                    [
                        'item_title' => 'Saia do caminho',
                        'history_title' => 'Deixe de Brincadeiras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '882, 339', 'item_required' => 'Senho de Biggy é Despedaçado', 'instruction' => 'Mate os 4 goblins da "Equipe de Expedição Goblin": Primogênito para obter o status [Senho de Biggy é Despedaçado], Martelo para obter o status [Senho de Hammy é Despedaçado], Justin para obter o status [Senho de Neily é Despedaçado] e Irmãos Latedores para obter [Senho de Woofy é Despedaçado] - todos os buffs duram 10 minutos. Podem ser encontrados nas coordenadas (882, 339) ao longo da ponte para a Vinha de Sahan. Irá completar a trívia ao juntar os 4 buffs.'],
                        ],
                    ],
                    [
                        'item_title' => 'Saudades de Casa',
                        'history_title' => 'Saudades de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sean', 'coordinates' => '764, 359', 'item_required' => null, 'instruction' => 'Fale com o NPC Sean(764, 359) e selecione a opção "A vida aqui é dura?" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => 'Dimitri', 'coordinates' => '723, 380', 'item_required' => null, 'instruction' => 'Depois vá até o NPC Dimitri (723, 380) e selecione "Esse é o relatório que Sean me deu" para obter o item'],
                            ['step_number' => 3, 'npc_name' => 'Aiden', 'coordinates' => '749, 280', 'item_required' => null, 'instruction' => 'E por ultimo vá até o NPC Aiden (749, 280) e selecione a opção "Este é das duas cidades" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Devia ficar quieta',
                        'history_title' => 'Você deveria ficar quieta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Atlanta', 'coordinates' => '716, 349', 'item_required' => 'Fofoca sem fim', 'instruction' => 'Fale com a NPC Atlanta (716, 349) na opção "Mais fofoca?" para obter o status [Fofoca sem fim]. Acumule 5 vezes o status.'],
                            ['step_number' => 2, 'npc_name' => 'Jarred', 'coordinates' => '794, 380', 'item_required' => null, 'instruction' => 'Fale com o NPC Jarred (794, 380) na opção "Atlanta Tagarela" para receber .'],
                            ['step_number' => 3, 'npc_name' => 'Atlanta', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte no NPC Atlanta e clique na opção "Toma, pode comer".'],
                        ],
                    ],
                    [
                        'item_title' => 'Clube Noturno Animado',
                        'history_title' => 'Clube Noturno Animado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Travesso', 'coordinates' => '816, 524', 'item_required' => null, 'instruction' => 'Fale com o NPC Travesso (816, 524) e selecione a opção "Quero me juntar a você" (Aparece após às 00:00)'],
                        ],
                    ],
                    [
                        'item_title' => 'Supermestre do Disfarce',
                        'history_title' => 'Supermestre do Disfarce',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '699, 371', 'item_required' => null, 'instruction' => 'A Flor está usando um poder de se transformar. Você deve encontrar os 3 locais que ela se escondeu para completar a trívia. Ela aparece em forma de Totem (699, 371) , depois de cristal amarelo (770, 379) ou (850, 320) e depois de vinha (832, 356) ou (796, 380). Ela sempre aparecerá na cidade central do mapa em locais aleatórios'],
                        ],
                    ],
                    [
                        'item_title' => 'Quem jogou o Remo',
                        'history_title' => 'Quem jogou o Remo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Gondoleiro Adus', 'coordinates' => '208, 431', 'item_required' => null, 'instruction' => 'Fale com o NPC Gondoleiro Adus (208, 431) na opção "Me dá um remo de madeira" para receber o item'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até as coordenadas 230, 422 e use o item para o monstro Deusa do Lago aparecer, mate ela'],
                        ],
                    ],
                    [
                        'item_title' => 'A vida é preciosa',
                        'history_title' => 'A vida é preciosa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com Dargon e escolhemos "Por que você coleciona tantas pétalas?", Ele nos dará um debuff. Ao lado de dargon há um baú, depois de quebrá-lo, obteremos um balde de água. Vamos para 653, 595) e usamos o objeto para finalizar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'É molho. Coloquei um pouco de molho.',
                        'history_title' => 'É molho. Coloquei um pouco de molho.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '286, 471', 'item_required' => null, 'instruction' => 'Vamos ao Shen Artigos Gerais e compramos o Molho Misterioso. Vamos até Heralia (286, 471) e conversamos com ela, escolhemos a opção "Quer colocar molho no prato?". Ele nos dará a Sopa de Peixe Melhorada, levaremos para Jarred (794, 381). Ao falar com ele, escolhemos "Experimente a sopa grossa novamente" para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Platô Nebuloso',
                'slug' => 'tormentum-plat-nebuloso',
                'description' => 'Mapa de Platô Nebuloso na região de Tormentum.',
                'sort_order' => 51,
                'trivias' => [
                    [
                        'item_title' => 'Responsabilidade do Homem de Palha',
                        'history_title' => 'Responsabilidade do Homem de Palha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mina', 'coordinates' => '256, 181', 'item_required' => 'As Bençãos da Eterna Mãe', 'instruction' => 'Fale com Mina (256, 181) e selecione a opção "Quem está cuidando destes campos?" para receber o status [As Bençãos da Eterna Mãe] - dura 5 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '399, 173', 'item_required' => null, 'instruction' => 'Vá até (399, 173) para invocar Espantalho e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dança Bizarra do Gorila',
                        'history_title' => 'Dança Bizarra do Macaco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Macaco Zangado Preto', 'instruction' => 'Mate «Macaco Zangado Preto» (próximo a 395, 458) para receber o status [Perfume do Macaco Negro] - dura 10 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Macaco Vermelho Zangado', 'instruction' => 'Depois mate o «Macaco Vermelho Zangado» (próximo a 395, 458) para receber o status [Perfume do Macaco Vermelho] por 10 minutos.'],
                            ['step_number' => 3, 'npc_name' => 'Releno', 'coordinates' => '668, 581', 'item_required' => null, 'instruction' => 'Fale com NPC Releno (668, 581)e selecione a opção "Ouvi dizer que você está estudando as danças dos Gorilas?" (ainda com ambos os status) para receber o item .'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '285, 544', 'item_required' => null, 'instruction' => 'Vá até a coordenada descrita (285, 544) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tigres Voadores',
                        'history_title' => 'Tigres Voadores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pesquisador de Foguetes Oberth', 'coordinates' => '527, 346', 'item_required' => null, 'instruction' => 'Vá até o NPC Pesquisador de Foguetes Oberth (527, 346) e selecione "Eu também quero lançar um foguete!" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '105, 242', 'item_required' => null, 'instruction' => 'Vá nas coordenadas (105, 242) e use o item para Tigre Fêmea do Nevoeiro aparecer e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Voz Celestial',
                        'history_title' => 'Voz Celestial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Músico Rima', 'coordinates' => '436, 305', 'item_required' => null, 'instruction' => 'Fale com Músico Rima (436, 305) e selecione "Será que eu poderia ouvir a sua última composição?" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '428, 292', 'item_required' => 'Tortura Sônica', 'instruction' => 'Vá até as coordenadas (428, 292) e use o item para entrar no status [Tortura Sônica] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sabor da Cidade Natal',
                        'history_title' => 'Sabor de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Tigres Machos do Nevoeiro', 'instruction' => 'Derrote «Tigres Machos do Nevoeiro» e «Tigres Fêmeas do Nevoeiro» para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '120, 348', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (120, 348) e use o item para receber .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '710, 556', 'item_required' => null, 'instruction' => 'Fale com Capitão Explorador de Elsaland Merlot (710, 556) e selecione "Você quer algo para comer?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pássaros iguais voam juntos',
                        'history_title' => 'Pássaros iguais voam juntos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Duende Herói', 'instruction' => 'Derrote monstros «Duende Herói» para obter o buff [Parece Familiar] - dura 5 min. Acumule 5 vezes o buff.'],
                            ['step_number' => 2, 'npc_name' => 'Bruxa da Terra Infértil Dove', 'coordinates' => '712, 408', 'item_required' => null, 'instruction' => 'Fale com o NPC Bruxa da Terra Infértil Dove (712, 408) e selecione "Esses Goblins são parentes seus?" para terminar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Fãs Leais',
                        'history_title' => 'Fãs Leais',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mira', 'coordinates' => '602, 620', 'item_required' => null, 'instruction' => 'Fale om o NPC Mira (602, 620) e selecione a opção "Porque você está tão ligado na Angelica?" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => 'Angelica', 'coordinates' => '874, 713', 'item_required' => null, 'instruction' => 'Vá até ao NPC Angelica (874, 713) e selecione a opção "Alguém enviou estes suprimentos para você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Espere apenas 10 segundos',
                        'history_title' => 'Espere apenas 10 segundos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Eremita Angelica', 'coordinates' => '875, 715', 'item_required' => null, 'instruction' => 'Vá até o NPC Eremita Angelica (875,715) e clique na opção "Estou pronto!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Testador de Feitiçaria',
                        'history_title' => 'Testador de Feitiçaria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Releno', 'coordinates' => '670, 580', 'item_required' => 'Experimento Vodu', 'instruction' => 'Vá até o NPC Releno (670,580) e clique na opção "Fiquei sabendo que você está procurando alguém para testar sua nova feitiçaria" para obter o buff [Experimento Vodu]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Procure o mob use a skill que você irá obter para mata-lo até acumular o buff 5 vezes para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Me Leve Daqui',
                        'history_title' => 'Me Leve Daqui',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Janeve', 'coordinates' => '275, 185', 'item_required' => 'Correr atrás é difícil hoje em dia', 'instruction' => 'Fale com Janeve (275,185) e clique na opção "Você tem um amorzinho?" para receber o buff [Correr atrás é difícil hoje em dia]'],
                            ['step_number' => 2, 'npc_name' => 'Dirk', 'coordinates' => '100, 670', 'item_required' => null, 'instruction' => 'Vá até o NPC Dirk (100,670) e clique na opção para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Flecha no Joelho',
                        'history_title' => 'Uma Flecha no Joelho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Richter Simons', 'coordinates' => '885, 345', 'item_required' => 'Flecha Removida do Joelho', 'instruction' => 'Vá até o NPC Richter Simons (885,345) e clique na opção "Fique sabendo que você era bem bom até levar Uma Flecha no Joelho?" para adquirir o item [Flecha Removida do Joelho]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '841, 573', 'item_required' => 'Flecha de Impacto no Joelho', 'instruction' => 'Vá até as cordenadas (841,573) e use o item, irá aparecer um mob mate-o. Ele irá dropar [Flecha de Impacto no Joelho]'],
                            ['step_number' => 3, 'npc_name' => 'Richter', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC Richter e clique na opção "Eu vinguei você" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Um sorriso assustador',
                        'history_title' => 'um sorriso assustador',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos até Dove falar com ela, escolhemos "Por que você não para de sorrir para mim?", ganhamos um buff ao fazer isso. Devemos acumulá-lo 5 vezes, então repetimos o processo; Uma vez feito, escolhemos a opção "O que você quer fazer?".'],
                        ],
                    ],
                    [
                        'item_title' => 'O sentimento de harmonia',
                        'history_title' => 'o sentimento de harmonia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '963, 688', 'item_required' => null, 'instruction' => 'Conversamos com Myra e escolhemos a opção "Angélica tem algum método de treinamento especial?", agora temos o buff do Método de Treinamento Secreto. Nós vamos para (963, 688). Teremos um novo buff e uma habilidade, que devemos usar 5 vezes.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Banco de Areia Dourado',
                'slug' => 'tormentum-banco-de-areia-dourado',
                'description' => 'Mapa de Banco de Areia Dourado na região de Tormentum.',
                'sort_order' => 52,
                'trivias' => [
                    [
                        'item_title' => 'Pássaro Solar',
                        'history_title' => 'Pássaro Solar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Criador de Pássaros Adelaide', 'coordinates' => '120, 423', 'item_required' => null, 'instruction' => 'Fale com o NPC Criador de Pássaros Adelaide (120, 423), e selecione a opção "Ouvi dizer que você pode tentar montar um Pássaro Solar por 5 Ouros aqui" para receber'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '139, 454', 'item_required' => 'Domar Pássaro Solar Irritado', 'instruction' => 'Em seguida, vá até as coordenadas (139, 454) e clique com o botão direito no item para receber o status [Domar Pássaro Solar Irritado] por 2 minutos.'],
                            ['step_number' => 3, 'npc_name' => 'Emily', 'coordinates' => '434, 321', 'item_required' => null, 'instruction' => 'Corra até o NPC Emily (434, 321) dentro de 2 minutos e selecione a opção "Como você está se sentindo hoje, linda senhora?" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Poço de Dinheiro',
                        'history_title' => 'Poço de Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fonte dos Desejos Clea', 'coordinates' => '434, 301', 'item_required' => null, 'instruction' => 'Fale com Fonte dos Desejos Clea (434, 301) e selecione "Eu Farei um desejo por 5 ouro" para completar a trivia. (Para conversar com o NPC é necessário estar com o status "Domar Pássaro Solar Irritado".)'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmã Tomate',
                        'history_title' => 'Irmã Tomate',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '441, 276', 'item_required' => null, 'instruction' => 'Vá até (441,276) e destrua "Caixa de colheita" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '539, 615', 'item_required' => null, 'instruction' => 'Vá ate a Professora Tiffany (539,615) e selecione "Crianças, voces querem ver como seu professor se trasnforma" para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Já chegamos ao Mar Aberto?',
                        'history_title' => 'Já chegamos ao Mar Aberto?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '570, 585', 'item_required' => null, 'instruction' => 'Vá até (570,585) e destrua "Caixa Bonus" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => 'Pescador Kennis', 'coordinates' => '855, 184', 'item_required' => null, 'instruction' => 'Vá até Pescador Kennis (855,184) e selecione "Eu quero participar do beneficio do rei poquer" para ser teletransportado.'],
                            ['step_number' => 3, 'npc_name' => 'Rei do Póquer Godjin', 'coordinates' => '978, 189', 'item_required' => null, 'instruction' => 'Fale com Rei do Póquer Godjin (978, 189) e selecione "Já chegamos ao Mar Aberto?" Para completar a Trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Abraço da Agulha',
                        'history_title' => 'Abraço da Agulha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Besta do Oásis', 'instruction' => 'Mate alguns «Besta do Oásis» e/ou «Besta da Areia Amarela» para obter o buff [Ai] - dura 30 segundos, acumule 5x.'],
                            ['step_number' => 2, 'npc_name' => 'Luna', 'coordinates' => '533, 569', 'item_required' => null, 'instruction' => 'Vá até à NPC Luna (533, 569)e selecione "Estou morrendo de dor..." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mais tempo em mãos, melhor',
                        'history_title' => 'Melhora com a Idade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tylen', 'coordinates' => '494, 353', 'item_required' => null, 'instruction' => 'Fale com o NPC Tylen (494, 353) e selecione "Você sabe de algum lugar divertido por aqui perto?" para obter o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Dê clique direito no livro para receber o item .'],
                            ['step_number' => 3, 'npc_name' => 'Nina', 'coordinates' => '434, 328', 'item_required' => null, 'instruction' => 'Vá até a NPC Nina (434, 328) e selecione "É você nessa foto?" para receber o item .'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => '833, 220', 'item_required' => null, 'instruction' => 'Vá até à localização (833, 220) e dê clique direito no item para invocar Woba. Derrote-o para obter o item .'],
                            ['step_number' => 5, 'npc_name' => 'Luigi', 'coordinates' => '436, 284', 'item_required' => null, 'instruction' => 'Fale com o NPC Luigi (436, 284) e selecione "Esse vinho é seu?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Expresso de Tendências',
                        'history_title' => 'Expresso de Tendências',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Samantha', 'coordinates' => '337, 715', 'item_required' => null, 'instruction' => 'Fale com o NPC Samantha (337, 715) e selecione a opção "Me dê os espetinhos de Beira-Mar do Banco de Areia Dourado" para receber o item e o estado que dura 5 min.'],
                            ['step_number' => 2, 'npc_name' => 'Chiki', 'coordinates' => '318, 165', 'item_required' => null, 'instruction' => 'Vá até ao NPC Chiki (318, 165) e selecione a opção "Trouxe Espetinhos! Eles estão quentinhos!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pegue o Cachorro Preto',
                        'history_title' => 'Pegue o Cachorro Preto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Faustino', 'coordinates' => '570, 590', 'item_required' => 'Removedor de Pelo Misterioso', 'instruction' => 'Vá até o NPC Faustino (570,590) e clique na opção "Você já tem a nova fórmula?" para adquirir o item [Removedor de Pelo Misterioso]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '459, 619', 'item_required' => null, 'instruction' => 'Vá até as cordenadas (459,619) use o item no mob "Cachorro Preto" que irá aparecer quando você andar pelas redondezas. Após isso você irá adquirir o item [Pelo do Cachorro Preto'],
                            ['step_number' => 3, 'npc_name' => 'Faustino', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC Faustino e selecione a opção "Tome o pelo de cachorro" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ta com fome ou não?',
                        'history_title' => 'Ta com fome ou não?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Comida para Dois Passáros', 'instruction' => 'Derrote o mob "Ladrão do Deserto" até obter o item [Comida para Dois Passáros]'],
                            ['step_number' => 2, 'npc_name' => 'Aken', 'coordinates' => '120, 450', 'item_required' => null, 'instruction' => 'Vá até o NPC Aken (120,450) e clique na opção "A economia está péssima. Poupe dinheiro" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você é Especial',
                        'history_title' => 'Você é Especial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Manu', 'coordinates' => '825, 475', 'item_required' => null, 'instruction' => 'Vá até o NPC Manu (825,475) e clique na opção "Não vou fazer nada para você!" para adquirir o status "coragem para recusar" 5 vezes completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Acorde! Você não tem pretendentes',
                        'history_title' => 'Acorde! Você não tem pretendentes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Anita', 'coordinates' => '435, 330', 'item_required' => 'Só existe uma verdade', 'instruction' => 'Vá até a NPC Anita (435,330) e clique na opção "Você era bem popular mesmo quando jovem?" para obter o buff [Só existe uma verdade]'],
                            ['step_number' => 2, 'npc_name' => 'Tylen', 'coordinates' => '495, 355', 'item_required' => null, 'instruction' => 'Vá até o NPC Tylen (495,355) e clique na opção "A Anita gosta de se exibir?" para adquirir "Foto da Anita jovem".'],
                            ['step_number' => 3, 'npc_name' => 'Luigi', 'coordinates' => '435, 285', 'item_required' => 'Diário do Luigi', 'instruction' => 'Em seguida vá até o NPC Luigi (435,285) e selecione a opção "Anita já teve muitos pretendentes?" para adquirir [Diário do Luigi].'],
                            ['step_number' => 4, 'npc_name' => 'Anita', 'coordinates' => '435, 330', 'item_required' => null, 'instruction' => 'Volter ao NPC Anita(435,330) e clique na opção "Pare de sonhar" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Entre Dimensões',
                        'history_title' => 'Entre Dimensões',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '460, 306', 'item_required' => 'Recompensa de Sidingh', 'instruction' => 'Compramo o item "Recompensa de Sidingh" do proprietário do armazém Kuan (460, 306). Falamos com Clea e escolhemos "Quero trocar isso por outro desejo".'],
                        ],
                    ],
                    [
                        'item_title' => 'Grande fantasia é a melhor',
                        'history_title' => 'Grande fantasia é a melhor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '313, 163', 'item_required' => null, 'instruction' => 'Vamos até onde está Ming e falamos com ele, escolhemos "Ouvi dizer que eles têm jogos divertidos aqui?", Ele nos dará o Grand Fantasy Trial Edition. Levamos o objeto para Chiki (313, 163) e Manu (824, 474); com ambos, escolhemos a opção "Aqui está um jogo divertido". Voltamos a Ming e ao falar com ele escolhemos "Eu promovi com sucesso a Grande Fantasia".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Aldeia Aura Ilusória',
                'slug' => 'tormentum-aldeia-aura-ilus-ria',
                'description' => 'Mapa de Aldeia Aura Ilusória na região de Tormentum.',
                'sort_order' => 53,
                'trivias' => [
                    [
                        'item_title' => 'Se Eu Pudesse Voltar para o Passado',
                        'history_title' => 'Se Eu Pudesse Voltar para o Passado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '310, 434', 'item_required' => 'Estranhos Relógios Invertidos', 'instruction' => 'Vá até (310, 434) para receber o status [Estranhos Relógios Invertidos] por 2 minutos.'],
                            ['step_number' => 2, 'npc_name' => 'Delfim', 'coordinates' => '327, 426', 'item_required' => null, 'instruction' => 'Fale com Delfim (327, 426) e selecione a opção "Você não acha que os relógios são estranhos?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Culto',
                        'history_title' => 'Culto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até 861, 529 (próximo a um altar) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ataque do Dragão Gigante',
                        'history_title' => 'Ataque do Dragão Gigante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Perry', 'coordinates' => '722, 443', 'item_required' => null, 'instruction' => 'Vá até Perry (722, 443)e clique em "Me passe a poção misteriosa, por favor" para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '536, 649', 'item_required' => null, 'instruction' => 'Depois vá até Mascote de Chichirame (536, 649) e clique na opção "Deu de comer ao mascote, em segredo" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Economia de Troca',
                        'history_title' => 'Economia de Troca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '407, 109', 'item_required' => null, 'instruction' => 'Derrube o baú Lixeira de Reciclagem nas coordenadas (407, 109) para obter .'],
                            ['step_number' => 2, 'npc_name' => 'Geng', 'coordinates' => '364, 98', 'item_required' => null, 'instruction' => 'Vá até Geng (364, 98) e selecione em "Trocando sapatos por livros com o vovô" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sargento por um dia',
                        'history_title' => 'Oficial Por Um Dia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '262, 284', 'item_required' => 'Pare de Brincar!', 'instruction' => 'Fale com os 3 soldados preguiçosos Soldado Preguiçoso (262, 284), Soldado Preguiçoso (276, 280), Soldado Preguiçoso (276, 280) e selecione "Pare de brincar!" para receber o buff [Pare de Brincar!] do que estava roubando peixes, "É assim que se segura uma espada?" para receber o buff [É assim que se segura uma espada?] do da espada e "Novos recrutas, atenção!" para receber o buff [Novos recrutas] do soldado desleixado (todos os buffs duram 5 min).'],
                            ['step_number' => 2, 'npc_name' => 'Zala', 'coordinates' => '272, 267', 'item_required' => null, 'instruction' => 'Vá até a NPC Zala (272, 267) e selecione "Você! Como o recruta conseguiu trazer isto para cá dentro?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ativista dos Direitos dos Roedores',
                        'history_title' => 'Proteção dos Direitos dos Coelhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pesquisador Jelly-Coelho', 'coordinates' => '332, 398', 'item_required' => 'Ativista dos Direitos Roedores', 'instruction' => 'Fale com o NPC Pesquisador Jelly-Coelho (332, 398), e selecione "Em que posso ajudar?" para receber o buff [Ativista dos Direitos Roedores] e [Palavra-chave: Noite].'],
                            ['step_number' => 2, 'npc_name' => 'Delfim', 'coordinates' => '327, 425', 'item_required' => null, 'instruction' => 'Fale com Delfim (327, 425) e selecione "Você está sabendo como os Jelly-Coelhos estão se comportando ultimamente?" para receber o buff "Palavra-chave: Dor de dente". Fale com Mumu (371, 425) e selecione "Abra a boca e diga "Ahhh!"" para receber o buff "Palavra-chave: Trabalho interno".'],
                            ['step_number' => 3, 'npc_name' => 'Nandi', 'coordinates' => '611, 389', 'item_required' => null, 'instruction' => 'Vá até Nandi (611, 389) e selecione "É você que tem roubado os lanches de meia-noite dos coelhos?" para completar a trívia. (Cada buff dura 10min)'],
                        ],
                    ],
                    [
                        'item_title' => 'A Dignidade do Mestre',
                        'history_title' => 'A Dignidade do Mestre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Vinny', 'coordinates' => '313, 172', 'item_required' => null, 'instruction' => 'Vá até o NPC Vinny (313, 172) e compre o item , vá até as coordenadas (X:684, Y:177) e use o item para ganhar o estado "Monstro Derrotado" - dura 2 min.'],
                            ['step_number' => 2, 'npc_name' => 'Linda', 'coordinates' => '670, 176', 'item_required' => null, 'instruction' => 'Depois vá até ao NPC Linda (670, 176) e selecione a opção "Zhen acredita em meu poder?" para obter o estado "Mestre Ansioso"'],
                            ['step_number' => 3, 'npc_name' => 'Zen', 'coordinates' => '672, 175', 'item_required' => null, 'instruction' => 'E por ultimo vá até ao NPC Zen (672, 175) e selecione a opção "O que você acha do seu mestre?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uivando na Noite Escura',
                        'history_title' => 'Uivando na Noite Escura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chichirame', 'coordinates' => null, 'item_required' => 'pergaminho de rancor vencido', 'instruction' => 'Vá até o NPC Chichirame e selecione a opção "Você sabe o que está acontecendo com o chororô aqui?" para obter [pergaminho de rancor vencido].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '443, 619', 'item_required' => null, 'instruction' => 'Em seguida vá até as coordenadas (443, 619) e use o item. Aparecerá o Fantasma e você deverá derrotá-lo para concluir a quest. Nota: Essa trívia só pode ser completada no horário: 22hrs até 06hrs (horário do servidor).'],
                        ],
                    ],
                    [
                        'item_title' => 'E o terceiro episódio?',
                        'history_title' => 'E o terceiro episódio?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Hélio', 'coordinates' => '481, 189', 'item_required' => 'Caderno da Inspiração', 'instruction' => 'Vá até o NPC Hélio (481, 189) e clique na opção "Que tal o terceiro episódio" para obter o item [Caderno da Inspiração].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '357, 417', 'item_required' => 'Ajudante do Escritor', 'instruction' => 'Vá até as cordenadas (357,417) e use o item para obter o buff [Ajudante do Escritor]'],
                            ['step_number' => 3, 'npc_name' => 'Hélio', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Volte ao NPC Hélio e clique na opção "Trouxe um caderno que pode te inspirar!" 3 vezes. Em seguida clique na opção "Então você quer escrever o terceiro episódio?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coelho de Sobremesa',
                        'history_title' => 'Coelho de Sobremesa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pesqisador Jelly-Coelho', 'coordinates' => '330, 400', 'item_required' => 'Pá de sobremesa', 'instruction' => 'Vá até o NPC Pesqisador Jelly-Coelho (330,400) e clique na opção "O que vpcê está pesquisando?" para obter o item [Pá de sobremesa].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida use o item 2 vezes nos jelly-coelhos próximo à este NPC. Em seguida no mesmo NPC selecione a opção "O que você está estudando?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pedra da Levitação',
                        'history_title' => 'Pedra da Levitação',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pesquisador de Pedra Flutuante', 'coordinates' => '379, 399', 'item_required' => 'Pequena Pedra de Levitação', 'instruction' => 'Vá até o NPC Pesquisador de Pedra Flutuante (379, 399) e selecione a opção "Posso pegar a sua Pedra de Levitação emprestado?" para adquirir o item [Pequena Pedra de Levitação].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '355, 418', 'item_required' => null, 'instruction' => 'Em seguida vá até as coordenadas (355, 418) e use o item para ser teletransportado a três locais e ao fim terminar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mas eu me recuso',
                        'history_title' => 'Mas eu me recuso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '186, 242', 'item_required' => null, 'instruction' => 'Conversamos com Montalbán e escolhemos "Que segredos ele parece saber sobre a Guarda Pretoriana?", obteremos os testes de mutação e teremos que falar com Sabino (186, 242), na opção "A mutação está relacionada a a Guarda Pretoriana?". Nós vencemos os inimigos para terminar.'],
                        ],
                    ],
                    [
                        'item_title' => 'O cheiro das Mentiras',
                        'history_title' => 'O cheiro das Mentiras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos a Zamora e falamos com ele, escolhemos "Você é realmente bom em liderar as tropas?", Ele nos dará um buff que devemos acumular 5 vezes, para isso, repetiremos o processo até fazê-lo. Finalmente, ao falar com ele, escolhemos "O ar está cheio de cheiro de mentira".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Passagem da Chama de Fogo Congelante',
                'slug' => 'tormentum-passagem-da-chama-de-fogo-congelante',
                'description' => 'Mapa de Passagem da Chama de Fogo Congelante na região de Tormentum.',
                'sort_order' => 54,
                'trivias' => [
                    [
                        'item_title' => 'Banquete com Churrasco Mongol',
                        'history_title' => 'Banquete com Churrasco Mongol',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Assassinos de Stolak (próximos a 375, 250) até que você receba Pedaço Estranho de Carne.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'O Doce Cheiro de Churrasco', 'instruction' => 'Vá até 338, 282 e use o item para receber o status [O Doce Cheiro de Churrasco] por 10 minutos.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até 172, 239 para invocar Residente Faminto, mate-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mais Minério',
                        'history_title' => 'Mais Minério',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Obtenha 250x Minério da Meia Noite (obtido através de coleta no "Minerar" do seu Sprite, leilão e via troca).'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '61, 262', 'item_required' => 'Defensores do Minério', 'instruction' => 'Vá até (61, 262) - mantendo os minérios dentro da mochila normal, não da mochila sprite - para invocar os «Defensores do Minério». Derrote-os para receber o status Desprezível Ladrão de Minério por 10 minutos.'],
                            ['step_number' => 3, 'npc_name' => 'Okin', 'coordinates' => '81, 306', 'item_required' => null, 'instruction' => 'Fale com Okin (81, 306) e selecione a opção "Houveram muitos roubos de obsidiana recentemente?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Grande Engano',
                        'history_title' => 'Grande Engano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '663, 216', 'item_required' => 'Veja Bertha', 'instruction' => 'Derrote Matador de Stolak nas coordenadas (663, 216) para obter o status [Veja Bertha] - dura 30 min.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '624, 284', 'item_required' => null, 'instruction' => 'Acumule 30x o buff e depois fale com Franco-Atirador de Stolak Chan (624, 284), selecionando em "Eu te ajudei a se livrar das moscas" para adquirir .'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '596, 300', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (596, 300) para usar o item e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Também Não Quero Te Ver',
                        'history_title' => 'Também Não Quero Te Ver',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '345, 540', 'item_required' => null, 'instruction' => 'Derrote Estranha caixa de madeira nas coordenadas (345, 540) para obter .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '373, 505', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (373, 505) para usar o item, fazer aparecer um Homem tomando banho e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Armado até os Dentes',
                        'history_title' => 'Totalmente Armado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Wendy', 'coordinates' => '322, 574', 'item_required' => null, 'instruction' => 'Fale com o NPC Wendy (322,574) em \'\'Devo ter atenção com algo nessas fontes termais?\'\' para obter \'\'Toalha de Banho Limpa\'\'.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '364, 599', 'item_required' => null, 'instruction' => 'Fale com o NPC Fornecedor de Armaduras de Expedição Aliaga (364,599) em \'\'Quero ir para fontes de águas termais\'\' para obter \'\'Banheira de Cipreste Primorosa\'\'.'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Mate o Jelly-Coelho de Água Termal até dropar o item \'\'Água da Fonte Limpa\'\' use o item em X:338 Y:607 para adquirir o status \'\'Purificação\'\' - dura 5 min.'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Depois vá em X:332 Y:611 para adquirir o status \'\'Quase Lá\'\' - dura 1 min e "Restauração da Fonte Termal".'],
                            ['step_number' => 5, 'npc_name' => 'Marcia', 'coordinates' => '346, 607', 'item_required' => null, 'instruction' => 'Fale com o NPC Marcia (346,607) e vá em \'\'Estou aqui para curti as Fontes Termais dos Sprites\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Trabalho Duro',
                        'history_title' => 'O Gosto do Trabalho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '116, 236', 'item_required' => 'Almoço Fracionado', 'instruction' => 'Fale com o NPC Fornecedor de Armas de Expedição Xavier (116, 236) e selecione "O que os Mineiros costumam comer aqui?" para receber o item "Almoço Fracionado".'],
                            ['step_number' => 2, 'npc_name' => 'Fagundes', 'coordinates' => '145, 246', 'item_required' => 'Saleiro Rústico', 'instruction' => 'Fale com o NPC Fagundes (145, 246) e selecione "O que você costuma pôr em seu lanche?" para receber o item "Saleiro Rústico".'],
                            ['step_number' => 3, 'npc_name' => 'Morador de Obsidiana Morubal', 'coordinates' => '163, 244', 'item_required' => 'Molho Superpicante', 'instruction' => 'Fale com o NPC Morador de Obsidiana Morubal (163, 244) e selecione "Que tipo de molho você acha que eu deveria pôr em meu Almoço Fracionado?" para receber o item "Molho Superpicante".'],
                            ['step_number' => 4, 'npc_name' => 'Okin', 'coordinates' => '82, 306', 'item_required' => null, 'instruction' => 'Fale com o NPC Okin (82, 306) e selecione "Você está com fome?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Febre de Jelly-Besta',
                        'history_title' => 'Febre de Jelly-Besta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Agogo', 'coordinates' => '485, 638', 'item_required' => null, 'instruction' => 'Fale com o NPC Agogo (485, 638) e selecione a opção "Não compreendo porque é tão obcecado com Jelly Monstros" para obter'],
                            ['step_number' => 2, 'npc_name' => 'Ariel', 'coordinates' => '396, 355', 'item_required' => null, 'instruction' => 'Vá até ao NPC Ariel (396, 355) e selecione "Eu tenho um Boneco costurado à mão de Jelly Monstro aqui." para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Caminhada dos Fãs!',
                        'history_title' => 'Caminhada dos Fãs!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ícaro', 'coordinates' => '466, 268', 'item_required' => 'Que fedor!', 'instruction' => 'Vá até o NPC Ícaro (466,268) e clique na opção "Alguém lhe disse que você cheira mal?" para adquirir o status [Que fedor!]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '325, 434', 'item_required' => 'Eu trouxe Água!', 'instruction' => 'Vá até as coordenadas (325, 434) e derrote Monstro de Fonte Termal para adquirir o status [Eu trouxe Água!]'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Retorne ao Ícaro e selecione a opção "Que seja, me dê um banho!" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lado da Estrada',
                        'history_title' => 'Lado da Estrada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Picareta', 'instruction' => 'Derrote o monstro "Escavador de Cristal" até adquirir o item [Picareta]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '172, 709', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (172, 709) e use o item para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Novas Maneiras de Fazer Dinheiro',
                        'history_title' => 'Novas Maneiras de Fazer Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fagundes', 'coordinates' => '145, 243', 'item_required' => 'Ovos Frescos', 'instruction' => 'Vá até o NPC Fagundes (145, 243) e selecione a opção "Eu soube que há um novo jeito de fazer dinheiro." para adquirir o item [Ovos Frescos]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '308, 362', 'item_required' => 'ovos cozidos', 'instruction' => 'Vá até as coordenadas (308, 362) para adquirir o status [ovos cozidos] e proteja o ovo dos mobs por 60segundos, ao final do tempo você concluirá a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Inconstância',
                        'history_title' => 'Inconstância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marcia', 'coordinates' => '348, 605', 'item_required' => 'Pequena Colher d\'Água', 'instruction' => 'Vá até a NPC Marcia (348, 605) e selecione a opção "Fique sabendo de um novo método de fonte termal para adquirir [Pequena Colher d\'Água]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '525, 586', 'item_required' => 'Pequena Colher d\'Água Cheia', 'instruction' => 'Vá para as coordenadas (525, 586) e use o item para obter [Pequena Colher d\'Água Cheia]'],
                            ['step_number' => 3, 'npc_name' => null, 'coordinates' => '350, 608', 'item_required' => 'Tente um novo método de Água Termal', 'instruction' => 'Em seguida vá até as coordenadas (350, 608) e clique no balde de madeira na opção "Encha com a água fria colhida" para receber o status [Tente um novo método de Água Termal]'],
                            ['step_number' => 4, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Água da Fonte Limpa', 'instruction' => 'Após isso derrote o mob para adquirir o item [Água da Fonte Limpa]'],
                            ['step_number' => 5, 'npc_name' => 'Wendy', 'coordinates' => '322, 574', 'item_required' => 'Água da Fonte Limpa', 'instruction' => 'Utilize o [Água da Fonte Limpa] e fale com o NPC Wendy (322,574) na opção "Devo ter atenção com algo nessas fontes termais?" para obter [Toalha de Banho Limpa]'],
                            ['step_number' => 6, 'npc_name' => 'Aliaga', 'coordinates' => '364, 603', 'item_required' => 'Banheira de Cipreste Primorosa', 'instruction' => 'Vá até o NPC Aliaga (364, 603) e selecione a opção "Quero ir para fontes termais" para obter [Banheira de Cipreste Primorosa]'],
                            ['step_number' => 7, 'npc_name' => null, 'coordinates' => '348, 593', 'item_required' => 'Totalmente Refrescante', 'instruction' => 'Vá até as fontes termais (348, 593) e (330, 615) perto da Marcia. Retorne a Marcia e selecione a opção "Estou aqui para curtir as fontes termais dos Sprites!" para receber o status [Totalmente Refrescante]'],
                            ['step_number' => 8, 'npc_name' => null, 'coordinates' => '349, 608', 'item_required' => null, 'instruction' => 'Por fim vá até o Balde de madeira (349, 608) e selecione a opção "Pegue a água gelada e despeje sobre si" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Panela de fogo',
                        'history_title' => 'Panela de fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '346, 608', 'item_required' => null, 'instruction' => 'Conversamos com Kagi, escolhendo a opção "Está muito frio aqui" ao fazê-lo. Teremos que ir ao Marcia (346, 608) e ao falar com ele escolher "Por acaso aqui não tem panela quente, não é?". Ele fornecerá o que há de mais moderno em panelas quentes. Voltamos a falar com o Kagie escolhemos "Vamos comer uma panela quente".'],
                        ],
                    ],
                    [
                        'item_title' => 'Introdução Ninja',
                        'history_title' => 'Introdução Ninja',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com Falco e escolhemos a opção "Eu também quero ser ninja", aparecerá um manequim de treinamento próximo que devemos derrotar. Recebemos um buff e conversamos com Falco novamente, escolhendo "Estou pronto para me tornar um ninja".'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Península Relíquia',
                'slug' => 'tormentum-pen-nsula-rel-quia',
                'description' => 'Mapa de Península Relíquia na região de Tormentum.',
                'sort_order' => 55,
                'trivias' => [
                    [
                        'item_title' => 'Isso não é brincadeira',
                        'history_title' => 'Não É Brinquedo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Quebre os baús vermelhos (próximos a 652, 600) até receber o item Chave de Canhão Pirata.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida vá até 462, 561 e dê um clique direito na chave para invocar Piratas de Ferro, derrote-os para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Magia do Minério Estranha',
                        'history_title' => 'Magia do Minério Estranha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Golem Fera', 'instruction' => 'Colete 5x de «Golem Fera» (próximos a 287, 121) e 5x de «Golem Espinhudo Místico» (próximos a 260, 231).'],
                            ['step_number' => 2, 'npc_name' => 'Cientista Maluco', 'coordinates' => '616, 566', 'item_required' => null, 'instruction' => 'Fale com Cientista Maluco (616, 566) e selecione "Você quer mesmo a Rocha Mágica de Fera e a Pedra Pontiaguda Mágica?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Se eu crescer',
                        'history_title' => 'Enquanto Eu Crescer',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bonescar', 'coordinates' => '125, 360', 'item_required' => 'Monstro de pedra pontiagudo falso', 'instruction' => 'Vá até Bonescar (125, 360) e selecione "Você quer se tornar atirador de elite?" para aparecer um «Monstro de pedra pontiagudo falso». Derrote-o dentro de 10 segundos para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Como Gritar',
                        'history_title' => 'Como Gritar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Monstro de Pedra Pontiagudo para obter .'],
                            ['step_number' => 2, 'npc_name' => 'Frey', 'coordinates' => '320, 270', 'item_required' => null, 'instruction' => 'Fale com Frey (320, 270)selecionando "Você já viu essa pedra pontuda?" para aparecer um . Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os Bastidores do Trono',
                        'history_title' => 'A História por Trás do Trono',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '515, 673', 'item_required' => null, 'instruction' => 'Vá até a localização (515, 673) quebre o baú para obter o item .'],
                            ['step_number' => 2, 'npc_name' => 'Felicia', 'coordinates' => '526, 694', 'item_required' => 'Pedido do Gerente', 'instruction' => 'Fale com o NPC Felicia (526, 694) e clique em \'\'Você sabe de quem é esse aqui?\'\' para obter o status [Pedido do Gerente] - dura 5 min.'],
                            ['step_number' => 3, 'npc_name' => 'Berko', 'coordinates' => '503, 641', 'item_required' => null, 'instruction' => 'Fale com o NPC Berko (503, 641) e clique em \'\'Você teria ferramentas para consertar um brinquedo quebrado?\'\' para obter o item .'],
                            ['step_number' => 4, 'npc_name' => 'Aken', 'coordinates' => '598, 615', 'item_required' => null, 'instruction' => 'Fale com o NPC Aken (598, 615) clique em \'\'Você pode me ajudar a costurar essa boneca?\'\' para obter o item .'],
                            ['step_number' => 5, 'npc_name' => 'Kazu', 'coordinates' => '531, 634', 'item_required' => null, 'instruction' => 'Fale com o NPC Kazu (531, 634) e clique em \'\'Essa deve ser sua coleção.\'\' para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'O prestígio',
                        'history_title' => 'Exibição de Primeira Classe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Matador Disfarçado', 'instruction' => 'Mate os monstros «Matador Disfarçado» até dropar o item .'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '415, 291', 'item_required' => 'Fantasma Assassino', 'instruction' => 'Vá para Balo (415, 291) e selecione a opção "O que significa esse pedaço de papel?" para obter . Use o item em (466, 392) vai aparecer o monstro «Fantasma Assassino». Derrote-o para dropar o item .'],
                            ['step_number' => 3, 'npc_name' => 'Gardel', 'coordinates' => '504, 375', 'item_required' => null, 'instruction' => 'Fale com o Gardel (504, 375) em \'\'Você sabe muita coisa sobre vinhos?\'\' para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Isso não funciona',
                        'history_title' => 'Isso não funciona',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Vladmir', 'coordinates' => '485, 570', 'item_required' => 'O Disfarce de Yusheng', 'instruction' => 'Fale com o NPC Vladmir (485, 570) e selecione a opção "Como você vai conseguir as informações" para obter status [O Disfarce de Yusheng] - dura 10 minutos.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '528, 629', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (528, 629) e aguarde uns segundos para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Disfarce de Sábio Coelho',
                        'history_title' => 'Disfarce de Sábio Coelho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ronaldo', 'coordinates' => '630, 130', 'item_required' => 'Máscara Jelly-Coelho', 'instruction' => 'Derrote até obter o item [Máscara Jelly-Coelho]. Em seguida use o item e fale com o NPC Ronaldo (630,130) e clique na opção "Mexa com ele" algumas vezes (cerca de umas 4/5 vezes) até você ser empurrado e aparecer que completou a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ninguém disse que você podia assustar o jabuti!',
                        'history_title' => 'Ninguém disse que você podia assustar o jabuti!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Atalho', 'coordinates' => '365, 525', 'item_required' => 'Vamos assustar eles', 'instruction' => 'Vá até o NPC Atalho para Beira Mar (365,525) em seguida clique na primeira opção "Eu quero ir para Beira-Mar", depois disso você será teletransportado e receberá o buff [Vamos assustar eles].'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, volte ao mesmo NPC e clique na opção para completar a trívia. Nota: Você tem que ter cumprido a quest Nv.88 Viela de Atalho para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não Lata',
                        'history_title' => 'Não Lata',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Juarez', 'coordinates' => '133, 496', 'item_required' => 'Tesouro do General', 'instruction' => 'Vá até o NPC Juarez (133, 496) em seguida seleciona a opção "Ouvi dizer que você tem uma arma especial contra lobisomens e criminosos?" para obter o item [Tesouro do General]'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => '106, 508', 'item_required' => 'Tesouro do General', 'instruction' => 'Em seguida vá até as cordenadas (106,508) e use o item para obter o status [Tesouro do General], após isso derrote os mobs até obter 3x [Saque do Lobo Uivante]. Em seguda, fale novamente com o mesmo NPC e clique na opção "Como você pode usar seu tesouro para combater ainda mais fácil?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Rezar é fácil quando você é o padre',
                        'history_title' => 'Rezar é fácil quando você é o padre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Zilnan', 'coordinates' => '198, 654', 'item_required' => null, 'instruction' => 'Vá até o NPC Zilnan (198, 654) e clique na opção "O Sábio passa muito tempo dando sermões?", em seguida no mesmo NPC clique na opção "Oh meu deus, o que é isso?" para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Eu não sou humano',
                        'history_title' => 'Eu não sou humano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrotamos o Clone Mecânico, até obter 5 Núcleos de Transformação. Falamos com o cientista maluco e escolhemos a opção "Por favor, transforme-me".'],
                        ],
                    ],
                    [
                        'item_title' => 'Jovens',
                        'history_title' => 'Jovens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '504, 374', 'item_required' => null, 'instruction' => 'Compramos um "Chá especial superior de Kalnis" na loja do Raul, depois vamos para o npc Gardel(504, 374); fale com ele e escolha "Quero convidar você para beber algo", obteremos uma habilidade, ao usá-la ele nos dará um buff , devemos acumulá-lo 5 vezes, então o usaremos até alcançá-lo.'],
                        ],
                    ],
                ],
            ],
            // ==================== ILHA SPRITE ====================
            [
                'city' => 'Ilha Sprite',
                'name' => 'Ilha Sprite',
                'slug' => 'ilha-sprite-ilha-sprite',
                'description' => 'Mapa de Ilha Sprite na região de Ilha Sprite.',
                'sort_order' => 56,
                'trivias' => [
                    [
                        'item_title' => 'Caçador de Caçador Ilegal',
                        'history_title' => 'Enfermeira do Rancho Tysen (349, 318)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tysen', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Tysen e selecione "Ajude a expulsar os caçadores ilegais" para receber o status "Disfarce de Touro". Caminhe pela area do rancho da Ilha até aparecer no chat gritar a frase "Maldito Caçador! Não saia correndo, se tiver coragem!" então derrote "Caçador Ilegal Bonru" para concluir a trívia. Nota: Só pode ser concluída Quarta .'],
                        ],
                    ],
                    [
                        'item_title' => 'Som do Berrante',
                        'history_title' => 'Chefe da Guarda da Ilha Bazo (280, 254) Guarda da Ilha Uno (318, 236) Guarda da Ilha Teliou (327, 281) Guarda da Ilha Duou (258, 237)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bazo', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Bazo e selecione a opção "Por favor, patrulhe a ilha por mim!" para receber o status "Oficial de Inspeção da Patrulha". Fale com os Guardas da Ilha: Uno, Teliou, Duou na ordem e selecione "Como estão as coisas aqui na ilha" para receber o status de cada um. Por fim volte até Bazo e selecione "Entregue os resultados" para completar a trívia. Nota: Esta trívia só pode ser completada na Segunda .'],
                        ],
                    ],
                    [
                        'item_title' => 'Passeio na Fazenda',
                        'history_title' => 'Sprite dos Cogumelos Ayaa (341, 285)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '375, 272', 'item_required' => 'Poção de Cogumelo Embusteiro', 'instruction' => 'Vá até a Ayaa e selecione a opção "Que tal relaxar um pouco no campo?" para receber o item "Poção de Cogumelo Embusteiro". Use o item nas coordenadas (375, 272) para concluir a trívia. Nota: Esta trívia só pode ser feita na Terça.'],
                        ],
                    ],
                    [
                        'item_title' => 'Noite no Museu de Modelos',
                        'history_title' => 'Sprite Mordomo Juninho (280, 264)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Juninho', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o Juninho e clique na opção "Entre no museu Modelo Sprite" para ser teleportado ao museu. Fale com Sprite Estranho Aka e selecione a opção "Você consegue me ver?" para adquirir o status "Quem é Kar". Fale com Sprite estranho Ayn e selecione a opção "Você consegue me ver?" Para conseguir o status "Quem é Yin?" Fale com o Sprite Estranho Alea e selecione a opção "Você consegue me ver?" para conseguir o status "Quem é La?". Fale com o Sprite Estranho Adoa e selecione "Você consegue me ver?" para receber o status "Quem é Tao?" Por fim fale com Administrador da casa Modelo Florinha e selecione a opção "Quem mais está aqui?" para concluir a trívia. Nota: Só pode ser completa na Quinta .'],
                        ],
                    ],
                    [
                        'item_title' => 'Carniceira Aquática',
                        'history_title' => 'Pescador Esperto Oppen (268, 193)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oppen', 'coordinates' => '280, 200', 'item_required' => null, 'instruction' => 'Vá até Oppen e selecione a opção "Quem teria feito uma barbaridade desses?" em seguida compre uma vara de pesca com o npc Clink Clink. Vá para as coordenadas (280, 200) e inicie a pesca manual ou automática. Consiga Madeira Flutuante x20 e Pedra Redonda x20. Volte ao Oppen e selecione "Acabei de ajudar na limpeza das peixarias!" para completar a trívia. Nota: Trívia só pode ser completa na Sexta .'],
                        ],
                    ],
                    [
                        'item_title' => 'Sprite da Luz Dourada',
                        'history_title' => 'Brilhante Ursula (190, 169) Sprite Interface Peixaria (269, 191) Sprite Interface Rancho (342, 324) Sprite Interface Pedreira/Mineração (222, 267) Sprite Mordomo Juninho (281, 265)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ursula', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Ursula e selecione a opção "Quer ficar rico num piscar de olhos?". Fale com o Sprite da interface de peixaria e selecione "Colete material de peixaria" para receber "Alimentação Leve". Fale com o Sprite da interface do rancho e selecione a opção "Colete o material diário do rancho" para adquirir "Alimentação de Animal Leve". Vá até o Sprite da Pedreira da ilha e selecione "Colete o material de minério diariamente" para adquirir "Folhado de Creme de Mordida Pequena". Fale com o Sprite Mordomo Juninho e selecione "Colete material de conserto diário" para adquirir "Marreta de reparo do Trabalhador". Por fim vá até Ursula e selecione "Tudo pronto!" para concluir a trívia. Nota: Esta trívia só pode ser completada no sábado . Você deve ter colocado sprites nos altares para poder acessar a interface deles.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro na Ilha',
                        'history_title' => 'Arqueólogo Benji (220, 283)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Benji', 'coordinates' => '192, 288', 'item_required' => null, 'instruction' => 'Vá até Benji e selecione "O tesouro lendário" para adquirir "Detector Geológico" e "Pesquisador de Mineração". Use o "Detector Geológico" nas coordenadas (192, 288) para adquirir "Relatório Geológico da Pedreira" e o "Pesquisador de Mineração" nas coordenadas (235, 331) para invocar Monstro da Terra Minhoca da Mina de Cristal para adquirir "Mineral Misteriosos". Retorne ao Benji e selecione "Aqui estão os resultados da busca" para completar a trívia. Nota: Trívia pode ser completada apenas no domingo .'],
                        ],
                    ],
                ],
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
