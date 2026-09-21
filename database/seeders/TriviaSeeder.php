<?php

namespace Database\Seeders;

use App\Models\Zone;
use App\Models\Trivia;
use App\Models\TriviaStep;
use App\Models\User;
use App\Models\Guide;
use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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

            [
                'city' => 'Ilya',
                'name' => 'Monte Shell',
                'slug' => 'monte-shell',
                'description' => 'Mapa de Monte Shell na região de Ilya.',
                'sort_order' => 6,
                'trivias' => [
                    [
                        'item_title' => 'Porco Matsuzaka Delicioso',
                        'history_title' => 'Porco Matsuzaka Delicioso',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Soldado do Forte Yuri', 'coords' => '368, 440', 'item' => null, 'inst' => 'Fale com o Soldado do Forte Yuri (368, 440) e selecione "Eu estou com fome." para receber Corda de Porco Matsuzaka'],
                            ['step' => 2, 'npc' => null, 'coords' => '242, 492', 'item' => null, 'inst' => 'Vá até as Coordenadas indicadas (242, 492) e use o item para obter um status: Porco Caminhante por 5 minutos.'],
                            ['step' => 3, 'npc' => null, 'coords' => '335, 470', 'item' => null, 'inst' => 'Leve-o até à Fogueira do Campo (335, 470)'],
                        ],
                    ],
                    [
                        'item_title' => 'Até a Próxima Reencarnação!',
                        'history_title' => 'Até a Próxima Reencarnação',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Vá até os Porcos-Espinhos e mate vários até dropar "Relíquia do Filho de Ali".'],
                            ['step' => 2, 'npc' => 'Dono do Estaleiro Ali', 'coords' => '220, 200', 'item' => null, 'inst' => 'Fale com Dono do Estaleiro Ali (220, 200) e selecione "Saudade do seu Filho."'],
                        ],
                    ],
                    [
                        'item_title' => 'Arrependimento do Yuri',
                        'history_title' => 'A Vingança e Yoli',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Soldado do Forte Yuri', 'coords' => '368, 440', 'item' => null, 'inst' => 'Vá até Soldado do Forte Yuri (368, 440) e selecione "É verdade que você caiu no chão quando estava fora da aldeia." para receber Geleia Ardentemente Quente.'],
                            ['step' => 2, 'npc' => null, 'coords' => '313, 489', 'item' => null, 'inst' => 'Vá até as coordenadas indicadas (313, 489) e use o item para invocar Rei dos Jelly-Coelhos safados. Basta derrotá-lo.'],
                        ],
                    ],
                    [
                        'item_title' => 'Incrível Tecnologia Goblin',
                        'history_title' => 'Incrível Tecnologia Goblin',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Alquimista Blair', 'coords' => '382, 469', 'item' => null, 'inst' => 'Fale com Alquimista Blair (382, 469) e selecione "Disseram que você tem uma pedra do som especial?" para receber Pedra de Ressonância do Goblin Imbatível.'],
                            ['step' => 2, 'npc' => null, 'coords' => '377, 466', 'item' => null, 'inst' => 'Vá até as coordenadas (377, 466) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Hmmm, Hambúrguer de Siri!',
                        'history_title' => 'Hmmm, Hambúrguer de Siri!',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Sprite Iyetta', 'coords' => '397, 466', 'item' => null, 'inst' => 'Fale com Sprite Iyetta (397, 466) e selecione "O que aconteceu com seu rosto?" para adquirir Receita de Hambúrguer de Siri Secreta.'],
                            ['step' => 2, 'npc' => null, 'coords' => '351, 437', 'item' => null, 'inst' => 'Fale com Comerciante Ambulante (351, 437) e compre o item Casquinha de Siri Crocante (requer 750 de Reputação com a Conselho dos Antigos de Ilya)'],
                            ['step' => 3, 'npc' => 'Alquimista Blair', 'coords' => '382, 469', 'item' => null, 'inst' => 'Vá até o Alquimista (382, 469) e use a Receita para conseguir Hambúrguer de Siri Supremo.'],
                            ['step' => 4, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Volte novamente até Iyetta e selecione "Esse é o Hambúrguer de Siri Supremo que você queria?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Guardião dos Navios Naufragados',
                        'history_title' => 'O Anjo da Guarda do Estaleiro',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Blady', 'coords' => '248, 194', 'item' => null, 'inst' => 'Fale com Reparador das Embarcações Blady (248, 194) e escolha "Eu vou ajudá-lo a se livrar dos Jelly-Coelhos" para receber 3x Bolsa Cheirosa.'],
                            ['step' => 2, 'npc' => null, 'coords' => '229, 191', 'item' => null, 'inst' => 'Vá até a localização (229, 191) e use a Bolsa Cheirosa correspondente a essa localização para adquirir Pó Amarelo Restante.'],
                            ['step' => 3, 'npc' => null, 'coords' => '258, 180', 'item' => null, 'inst' => 'Vá até a segunda localização (258, 180) e use a Bolsa Cheirosa correspondente a essa localização para adquirir Pó Roxo Restante.'],
                            ['step' => 4, 'npc' => null, 'coords' => '292, 219', 'item' => null, 'inst' => 'Vá até a última localização (292, 219) e use a Bolsa Cheirosa correspondente a essa localização para adquirir Pó Vermelho Restante.'],
                            ['step' => 5, 'npc' => 'Blady', 'coords' => null, 'item' => null, 'inst' => 'Fale novamente com Blady e selecione "Todos os Jelly-Coelhos foram afugentados!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Gotas do Paraíso',
                        'history_title' => 'Gotas do Paraíso',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Dono do Estaleiro Ali', 'coords' => '220, 200', 'item' => null, 'inst' => 'Fale com Dono do Estaleiro Ali (220, 200) e selecione "Dizem que todos os funcionários estão felizes com o trabalho" para obter Um grande balde de água gelada.'],
                            ['step' => 2, 'npc' => null, 'coords' => '273, 196', 'item' => null, 'inst' => 'Vá até o local indicado (273, 196) e use o item.'],
                            ['step' => 3, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Retorne a Ali e selecione "Seus funcionários parecem adorar água fria."'],
                        ],
                    ],
                    [
                        'item_title' => 'A Lenda de Cora',
                        'history_title' => 'A Lenda de Cora',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '336, 467', 'item' => null, 'inst' => 'Vá até o Mago-bruxo Ifu (336, 467) e selecione "Ouvi dizer que a Cora já foi a rainha da Cocada Preta" para receber um status.'],
                            ['step' => 2, 'npc' => null, 'coords' => '342, 456', 'item' => null, 'inst' => 'Em seguida, fale com Treinador Bishop (342,456) e selecione "Cora era mesmo tão forte?" para receber um segundo status.'],
                            ['step' => 3, 'npc' => null, 'coords' => '375, 490', 'item' => null, 'inst' => 'Procure por Líder da Equipe do Forte Candice (375,490) e selecione "Cora era mesmo tão forte?" para receber mais um status.'],
                            ['step' => 4, 'npc' => null, 'coords' => '340, 478', 'item' => null, 'inst' => 'Por fim, vá até Comerciante de Armas Cora (340, 478) e selecione "Todo mundo diz como você é forte!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Não Alimentar',
                        'history_title' => 'Não Alimentar',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '370, 439', 'item' => null, 'inst' => 'Vá até Lobo Dócil (370, 439) e selecione a opção "Acariciar o Lobo" 5x.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Importância da Localização',
                        'history_title' => 'A Importância da Localização',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '380, 418', 'item' => null, 'inst' => 'Derrote Jelly-Coelhos Malcriados (380, 418) até obter Resíduo de Jelly-Coelho.'],
                            ['step' => 2, 'npc' => null, 'coords' => '311, 166', 'item' => null, 'inst' => 'Derrote Jelly-Coelhos Mágicos (311, 166) até obter Pele de Jelly-Coelho.'],
                            ['step' => 3, 'npc' => 'Borono', 'coords' => '379, 447', 'item' => null, 'inst' => 'Vá até Comerciante de Armas Borono (379, 447) e selecione "Já é o suficiente?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Segredo Comercial',
                        'history_title' => 'Segredo Comercial',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Comerciante Suspeito', 'coords' => '341, 441', 'item' => null, 'inst' => 'Vá até as coordenadas (341, 441) e fale com o NPC Comerciante Suspeito (341, 441) e selecione na opção "O que você está fazendo aqui?" para adquirir um status'],
                            ['step' => 2, 'npc' => null, 'coords' => '274, 206', 'item' => null, 'inst' => 'Visite os estaleiros navais de Ali (274, 206), (275, 257), (254, 247) e (254, 214). Retorne ao NPC e selecione a opção "Isto é o que você quer." para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os cachorros são giros',
                        'history_title' => 'Os cachorros são giros',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '346, 445', 'item' => 'Mingau de aveia', 'inst' => 'Vá até o Comerciante Ambulante (346, 445) e compre o item [Mingau de aveia]. Vá até as coordenadas (44, 541) e use o mingau para completar a trívia.'],
                        ],
                    ],
                ],
            ],

            [
                'city' => 'Ilya',
                'name' => 'Floresta Luz da Lua',
                'slug' => 'floresta-luz-da-lua',
                'description' => 'Mapa de Floresta Luz da Lua na região de Ilya.',
                'sort_order' => 7,
                'trivias' => [
                    [
                        'item_title' => 'Cartas na Mesa',
                        'history_title' => 'Resolvendo Situações',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Aldeã Ker', 'coords' => null, 'item' => null, 'inst' => 'Fale com Ker e escolha "Sobre o namoro do Colby" para adquirir Poção de Metamorfose.'],
                            ['step' => 2, 'npc' => 'Aldeã Ker', 'coords' => '410, 261', 'item' => null, 'inst' => 'Vá até o Aldeão Colby (410, 261) e use o item que recebeu de Ker. Selecione a opção "Ker tem algo a lhe dizer."'],
                        ],
                    ],
                    [
                        'item_title' => 'Peixe Rosa',
                        'history_title' => 'Peixe Rosa',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Aldeã Ker', 'coords' => '429, 236', 'item' => null, 'inst' => 'Fale com Aldeã Ker (429,236) e selecione "Ajude-me a pegar um peixe rosa." para receber Rede de Pesca Fofinha.'],
                            ['step' => 2, 'npc' => null, 'coords' => '162, 120', 'item' => null, 'inst' => 'Vá até as Coordenadas (162, 120) e use o item para receber Carpa Branca.'],
                            ['step' => 3, 'npc' => 'Aldeão Colby', 'coords' => '429, 236', 'item' => null, 'inst' => 'Vá até o Aldeão Colby (429, 236) e selecione "Pense em um modo de transformar o peixe rosa" para receber "Carpa Ornamental Rosa."'],
                            ['step' => 4, 'npc' => 'Aldeã Ker', 'coords' => null, 'item' => null, 'inst' => 'Retorne até Ker e selecione "Este é o peixe rosa que você queria."'],
                        ],
                    ],
                    [
                        'item_title' => 'Autocultivo',
                        'history_title' => 'Autocultivo',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Monge Acético', 'coords' => '158, 119', 'item' => null, 'inst' => 'Fale com o Monge Acético (158, 119) e selecione "Eu também quero tentar meditar embaixo da cachoeira para receber dois status.'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Aguarde o final do status de 5 minutos chamado Acético.'],
                            ['step' => 3, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Retorne ao Monge e selecione "Eu quero compartilhar meus pensamentos da meditação."'],
                        ],
                    ],
                    [
                        'item_title' => 'Exuberância',
                        'history_title' => 'Exuberância',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '492, 433', 'item' => null, 'inst' => 'Vá até Colhedor de Cogumelos Fanny (492, 433) e selecione "Você pode me dar um pouco daqueles molhos deliciosos?" para receber Molho Caseiro para Churrasco.'],
                            ['step' => 2, 'npc' => null, 'coords' => '564, 182', 'item' => null, 'inst' => 'Depois, fale com Colhedor de Cogumelos Watt (564, 182) e selecione "Você pode me dar um cogumelo fresquinho?" para receber Cogumelos Frescos.'],
                            ['step' => 3, 'npc' => null, 'coords' => '308, 344', 'item' => null, 'inst' => 'Fale com Colhedor de Cogumelos Lane (308, 344) e selecione "Você sabe como assar um cogumelo delicioso?" para receber um item.'],
                            ['step' => 4, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Use o item Espetinhos de Cogumelos Assados com Paixão que você recebeu de Lane.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dignidade Inquestionável do Capitão',
                        'history_title' => 'A Dignidade do Capitão Não Pode ser Questionada',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '516, 248', 'item' => null, 'inst' => 'Vá até o Comerciante Ambulante (516, 248) e compre o item Salada de Cogumelo Silvestre (requer 2000 de Reputação com a Conselho dos Antigos de Ilya)'],
                            ['step' => 2, 'npc' => null, 'coords' => '250, 450', 'item' => null, 'inst' => 'Fale com Capitão da Fortaleza Joe (250, 450) e selecione "Eu quero comer uma salada de cogumelo silvestre."'],
                        ],
                    ],
                    [
                        'item_title' => 'Batalha dos Sonhos do Homem',
                        'history_title' => 'Um duelo dos sonhos entre homens homens',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Monge Acético', 'coords' => '158, 119', 'item' => null, 'inst' => 'Fale com o Monge Acético (158, 119) e selecione "Porque você treina tanto?"'],
                            ['step' => 2, 'npc' => 'Monge Acético', 'coords' => null, 'item' => null, 'inst' => 'Aguarde o &lt;Combativo&gt; Monge Acético spawnar e derrote-o.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coisas Não Descobertas da Magia',
                        'history_title' => 'Coisas Não Descobertas da Magia',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Feiticeira Elina', 'coords' => '472, 253', 'item' => null, 'inst' => 'Fale com Feiticeira Elina (472, 253) e selecione "Como a pesquisa de Magia está indo?" para receber um status.'],
                            ['step' => 2, 'npc' => null, 'coords' => '471, 289', 'item' => null, 'inst' => 'Vá até (471, 289) para receber um novo status chamado: A verdade sobre o acidente.'],
                            ['step' => 3, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Retorne até Elina e selecione "Notícias sobre a situação dos fogos de artíficio."'],
                        ],
                    ],
                    [
                        'item_title' => 'Falha',
                        'history_title' => 'Falha',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Guarda de Ilya', 'coords' => '514, 554', 'item' => null, 'inst' => 'Fale com Guarda de Ilya (514, 554) e selecione "O que você está pensando?" para receber Laço.'],
                            ['step' => 2, 'npc' => null, 'coords' => '338, 282', 'item' => null, 'inst' => 'Use o item num Lobo da Floresta (338, 282) para receber o status: Lobo Capturado.'],
                            ['step' => 3, 'npc' => null, 'coords' => '539, 414', 'item' => null, 'inst' => 'Vá até o Caçador Moro (539, 414) e selecione "Alguém quer te dar esse lobo."'],
                        ],
                    ],
                    [
                        'item_title' => 'A Porta É Ali',
                        'history_title' => 'A Porta Está Ali',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '494, 262', 'item' => null, 'inst' => 'Fale com Lenhador Deve (494,262) e selecione "Você parece um pouco irritado." para adquirir Carta de Protesto.'],
                            ['step' => 2, 'npc' => null, 'coords' => '462, 270', 'item' => null, 'inst' => 'Fale com Capataz Swafer (462, 270) e selecione "Você parece um pouco irritado." para adquirir Carta de Protesto.'],
                            ['step' => 3, 'npc' => 'Aldeão Colby', 'coords' => '413, 262', 'item' => null, 'inst' => 'Fale com Aldeão Colby (413, 262) e selecione "Você parece um pouco irritado." para adquirir Carta de Protesto.'],
                            ['step' => 4, 'npc' => 'Xiapuna', 'coords' => '456, 226', 'item' => null, 'inst' => 'Vá até Chefe da Vila Xiapuna (456, 226) e selecione "Vários habitants do vilarejo não estão felizes com você."'],
                        ],
                    ],
                    [
                        'item_title' => 'Parecença Inquietante',
                        'history_title' => 'Semelhança Inquietante',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Ancião Bania', 'coords' => '259, 209', 'item' => null, 'inst' => 'Fale com Ancião Bania (259,209) e selecione "O que você está pensando?" para receber um status que dura 30 minutos.'],
                            ['step' => 2, 'npc' => 'Sprite Demis', 'coords' => '248, 95', 'item' => null, 'inst' => 'Vá até Sprite Demis (248,95) e selecione "Você e Dartagnan são irmãos?"'],
                        ],
                    ],
                    [
                        'item_title' => 'A Vanishing Delicacy',
                        'history_title' => 'A Vanishing Delicacy',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => null, 'item' => 'Cogumelos ameaçados de extinção', 'inst' => 'Derrote os cogumelos que ficam próximos as arvores até obter o item [Cogumelos ameaçados de extinção].'],
                            ['step' => 2, 'npc' => null, 'coords' => '560, 189', 'item' => null, 'inst' => 'Vá até as coordenadas o NPC Watt (560, 189) e selecione a opção "O Sabor Escondido" para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A aparência é importante',
                        'history_title' => 'A aparência é importante',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => null, 'item' => 'Que Aberração', 'inst' => 'Derrote os cogumelos que ficam próximos as arvores até acumular o status [Que Aberração] x5 (Pode demorar até acumular)'],
                            ['step' => 2, 'npc' => 'Guarda de Ilya', 'coords' => '540, 534', 'item' => null, 'inst' => 'Vá até o Guarda de Ilya (540, 534) e clique na opção "Algo estranho parece estar a crescer nos degraus." para concluir a trívia'],
                        ],
                    ],
                ],
            ],

            [
                'city' => 'Ilya',
                'name' => 'Floresta Antiga',
                'slug' => 'floresta-antiga',
                'description' => 'Mapa de Floresta Antiga na região de Ilya.',
                'sort_order' => 8,
                'trivias' => [
                    [
                        'item_title' => 'Cobaia Pela Primeira Vez',
                        'history_title' => 'Rato de Laboratório',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Ajudante Tim', 'coords' => '364, 891', 'item' => null, 'inst' => 'Fale com Ajudante Tim (364, 891) e selecione a opção "Tente o experimento Poção No. 1"'],
                        ],
                    ],
                    [
                        'item_title' => 'Cabra Macho',
                        'history_title' => 'Cabra Macho',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Yuma', 'coords' => '410, 800', 'item' => null, 'inst' => 'Fale com Loja de Material Médico Yuma (410, 800) e selecione "Dê-me um jarro de Mel Fresco." para adquirir o item.'],
                            ['step' => 2, 'npc' => null, 'coords' => '390, 483', 'item' => null, 'inst' => 'Vá até o local indicado (390, 483) e use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sem Fôlego',
                        'history_title' => 'Sem Fôlego',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Carteiro Post', 'coords' => null, 'item' => 'Carta de Bolai', 'inst' => 'Fala com o NPC Carteiro Post e selecione "Deixe-me ajudar a entregar a carta!" para receber o item «Carta de Bolai»'],
                            ['step' => 2, 'npc' => 'NPC Bolai', 'coords' => null, 'item' => null, 'inst' => 'Vá até ao NPC Bolai e selecione "Estou aqui para entregar a carta pelo Boster".'],
                        ],
                    ],
                    [
                        'item_title' => 'Não bata na minha Mãe!',
                        'history_title' => 'Não machuque minha mãe!',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => null, 'item' => 'Mamãe Urso Mel', 'inst' => 'Mate mobs do tipo «Mamãe Urso Mel» até conseguir o item «Pata de Urso» ( Observação as vezes pode demorar cair) .'],
                            ['step' => 2, 'npc' => 'Yuma', 'coords' => null, 'item' => 'Ursinho', 'inst' => 'Vá até o NPC Yuma e selecione "Eu tenho Pata de Urso para você" para aparecer «Ursinho» e mate-o.'],
                        ],
                    ],
                    [
                        'item_title' => 'L-l-l-l-l-lenhador',
                        'history_title' => 'Lenhadooores',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Ters', 'coords' => null, 'item' => null, 'inst' => 'Fale com o NPC Ters e selecione "Como você dá ordens ao seu assistente?" para receber o buff "Mandando no Lenhador" - dura 10 min.'],
                            ['step' => 2, 'npc' => 'Ajudante Tim', 'coords' => null, 'item' => null, 'inst' => 'Vá até o NPC Tim e selecione "O lenhador cortou umas boas árvores para mim" para receber o buff "O Lenhador sendo Mandado" - dura 5 min.'],
                            ['step' => 3, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Acumule o Buff "O Lenhador sendo Mandado" 4x.'],
                        ],
                    ],
                    [
                        'item_title' => 'Evitar Incêndio',
                        'history_title' => 'Prevenção de Incendio',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Angelo', 'coords' => null, 'item' => null, 'inst' => 'Fale com o NPC Angelo e selecione "Quero contribuir em prol da segurança da Floresta Antiga" para adquirir 3 itens: "Detetor de Umidade", "Anemômetro" e "Detector de Temperatura".'],
                            ['step' => 2, 'npc' => null, 'coords' => '184, 888', 'item' => null, 'inst' => 'Vá até as três localizações (184, 888), (545, 527) e (283, 448) - cada item tem uma localização específica - e dê clique direito em cada item para adquirir "Relatório de Umidade", "Relatório do Vento" e "Relatório de Temperatura".'],
                            ['step' => 3, 'npc' => 'NPC Bolai', 'coords' => null, 'item' => null, 'inst' => 'Depois de conseguir os 3 relatórios, vá até ao NPC Bolai e selecione "Trouxe os relatórios da Floresta Antiga".'],
                        ],
                    ],
                    [
                        'item_title' => 'Por favor, me dê madeira',
                        'history_title' => 'Por favor, me dê madeira',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '473, 614', 'item' => null, 'inst' => 'Vá até as coodenadas (473, 614) e derrube a plantinha para adquirir "Peças de Madeira".'],
                            ['step' => 2, 'npc' => 'Ajudante Tim', 'coords' => null, 'item' => null, 'inst' => 'Fale com o NPC Tim e selecione "Você derrubou algo?".'],
                        ],
                    ],
                    [
                        'item_title' => 'Abelha-Rainha',
                        'history_title' => 'Abelha Rainha',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '209, 620', 'item' => 'Feromônios da Rainha', 'inst' => '"Ande pelas coordenadas (209, 620) até entrar no status [Feromônios da Rainha].'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Aguarde um pouco no lugar, derrotando as Abelhas Vampiras da Floresta que surjam até o status terminar.'],
                        ],
                    ],
                    [
                        'item_title' => 'Promotor de Mergulho',
                        'history_title' => 'Promotor de Mergulho',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Ters', 'coords' => null, 'item' => null, 'inst' => 'Fale com o NPC Ters e selecione "Ouvi dizer que você está promovendo mergulhos" para adquirir &lt;Aparelho de Respiração Subaquática Anti Pressão&gt;.'],
                            ['step' => 2, 'npc' => null, 'coords' => '542, 670', 'item' => 'Pernas Macias', 'inst' => 'Use o aparelho nas coordenadas (542, 670) para entrar no status [Pernas Macias] e ser teleportado.'],
                        ],
                    ],
                    [
                        'item_title' => 'Produto da Natureza',
                        'history_title' => 'Produto da Natureza',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Derrote Homem-Árvore Velhos e Homem-Árvore Guerreiros até conseguir 10 &lt;Mel Ultra-Natural&gt;.'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => 'Nada mal', 'inst' => 'Use os 10 Mels nos Papai Urso Mel para entrar no status [Nada mal] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Quando as Galinhas atacam',
                        'history_title' => 'Quando as Galinhas atacam',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Yuma', 'coords' => '411, 802', 'item' => null, 'inst' => 'Vá até Yuma (411, 802) e selecione "Quando as galinhas atacam"'],
                        ],
                    ],
                    [
                        'item_title' => 'Mostre sua verdadeira forma!',
                        'history_title' => 'Mostre sua verdadeira forma',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Ajudante Tim', 'coords' => '364, 889', 'item' => null, 'inst' => 'Vá até o NPC Tim (364, 889) e selecione "Me dê um Soro Revelador"'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ladrão Ligeiro',
                        'history_title' => 'Ladrão Ligeiro',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Carteiro Post', 'coords' => null, 'item' => null, 'inst' => 'Fale com o Carteiro Post e selecione "Você precisa fazer xixi?" para spawnar o Ladrão Ligeiro.'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Derrote-o para obter Carta Cheia de Digitais.'],
                            ['step' => 3, 'npc' => 'Carteiro Post', 'coords' => null, 'item' => null, 'inst' => 'Fale com Post novamente e selecione "Pegue a carta de volta!"'],
                        ],
                    ],
                    [
                        'item_title' => 'Cogumelos Elásticos',
                        'history_title' => 'Cogumelos Elásticos',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '228, 865', 'item' => null, 'inst' => 'Vá até o local de um portal no mapa, onde haverão alguns cogumelos gigantes (228, 865).'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'É necessário estar bem no meio, você será teleportado para outro local.'],
                        ],
                    ],
                    [
                        'item_title' => 'Equilíbrio Nutricional',
                        'history_title' => 'Equilíbrio Nutricional',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Merrill', 'coords' => '469, 624', 'item' => null, 'inst' => 'Vá o NPC &lt;Aldeão&gt; Merrill (469, 624) e clique na primeira opção \'\'O que estar Olhando?"'],
                            ['step' => 2, 'npc' => 'Sayla', 'coords' => '548, 670', 'item' => null, 'inst' => 'Você irá receber um BUFF de "Minha Carne" durante 10 Minutos, vá falar com a Aldeã Sayla (548,670)!'],
                            ['step' => 3, 'npc' => 'Sayla', 'coords' => null, 'item' => null, 'inst' => 'Clique em Sayla e clique na primeira opção para receber o BUFF "O meu tipo" por 10minutos, depois disso clique na segunda opção "Ela acha que você é o tipo de garoto dela" para ta concluindo a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Fanático por Ursos',
                        'history_title' => 'Fanático por Ursos',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Bernard', 'coords' => '370, 535', 'item' => null, 'inst' => 'Fale com o NPC &lt;Fanático por Ursos&gt; Bernard (370, 535) e clique na primeira opção "Quero me tornar um urso."'],
                            ['step' => 2, 'npc' => 'Bernard', 'coords' => '333, 412', 'item' => null, 'inst' => 'Você irá ter o disfarce do urso durante 10 minutos, vá para (333,412) para brincar com eles! após obter o status (Companheiro do urso), volte ao NPC Bernard e clique na segunda opção "Urso Adorável" para ta concluindo a trívia.'],
                        ],
                    ],
                ],
            ],

            [
                'city' => 'Ilya',
                'name' => 'Pântano Negro',
                'slug' => 'p-ntano-negro',
                'description' => 'Mapa de Pântano Negro na região de Ilya.',
                'sort_order' => 9,
                'trivias' => [
                    [
                        'item_title' => 'Comedor de Ossos',
                        'history_title' => 'Comedor de Ossos',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Dama Misteriosa', 'coords' => '43, 407', 'item' => null, 'inst' => 'Ataque a Dama Misteriosa (43, 407) para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Deleite Gastronômico',
                        'history_title' => 'Deleite Gastronômico',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '92, 791', 'item' => null, 'inst' => 'Ataque o &lt;Perfumado&gt; Cogumelo Misterioso (92, 791) para obter Cogumelo Perfumado.'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Dê clique direito no item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Descanse em Paz',
                        'history_title' => 'Descanse em Paz',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Yedoda', 'coords' => '207, 341', 'item' => 'Osso Branco', 'inst' => 'Fale com o NPC Yedoda (207, 341) e selecione "Quem pode me ajudar?" para adquirir o item «Osso Branco».'],
                            ['step' => 2, 'npc' => null, 'coords' => '70, 339', 'item' => null, 'inst' => 'Siga até a área (70,339) e dê clique direito no item.'],
                        ],
                    ],
                    [
                        'item_title' => 'Carne das Trevas',
                        'history_title' => 'Carne das Trevas',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => '378, 475', 'item' => 'Carne de Siri Preto', 'inst' => 'Mate Siri Lama Negra Mutante (378, 475) para adquirir o item «Carne de Siri Preto».'],
                            ['step' => 2, 'npc' => 'Soldado Mike', 'coords' => null, 'item' => null, 'inst' => 'Fale com o NPC Soldado do Forte Mike e selecione "É gostosa essa carne de Siri Lama Negra Mutante?"'],
                        ],
                    ],
                    [
                        'item_title' => 'Rapsódia da Lua',
                        'history_title' => 'Rapsódia da Luz da Lua',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Cientista Oz', 'coords' => null, 'item' => null, 'inst' => 'Fale com o NPC Cientista Oz e selecione "Soube que você está fazendo um teste" para adquirir o item &lt;Sangue Invocador de Vampiro&gt;'],
                            ['step' => 2, 'npc' => null, 'coords' => '411, 219', 'item' => null, 'inst' => 'Vá até (411, 219) e dê clique direito para invocar um "Sanguessuga".'],
                            ['step' => 3, 'npc' => null, 'coords' => null, 'item' => 'Vampiro semi-humano', 'inst' => 'Mate-o para receber o buff [Vampiro semi-humano] - você vai se transformar e o buff irá durar uma hora.'],
                            ['step' => 4, 'npc' => 'Cientista Oz', 'coords' => null, 'item' => null, 'inst' => 'Volte ao NPC Oz e selecione "Ajude-me a voltar a ser o que eu era antes! Que dor!".'],
                        ],
                    ],
                    [
                        'item_title' => 'Lobisomem com Costas Coçando',
                        'history_title' => 'Lobisomem com Cócegas',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Jema', 'coords' => '511, 488', 'item' => null, 'inst' => 'Fale com o NPC Amazona Templária Jema (511, 488) e selecione "Soube que tem um lobisomem que gosta de receber carinho de outras pessoas"'],
                            ['step' => 2, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => '"Lobisomem com Cócegas" irá aparecer do seu lado e te seguirá.'],
                            ['step' => 3, 'npc' => null, 'coords' => '237, 672', 'item' => null, 'inst' => 'Mate "Árvore Sábia" (237, 672) para obter o item &lt;Coçador de Costas&gt;.'],
                            ['step' => 4, 'npc' => 'Jema', 'coords' => null, 'item' => null, 'inst' => 'Fale com o NPC Jema e selecione "A magia está no "Pó Anti-coceira"" para obter o item &lt;Na Real - Pó Anticoceira&gt;.'],
                            ['step' => 5, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Use o item.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Teste do Maluco pela Ciência',
                        'history_title' => 'O Teste do Maluco pela Ciência',
                        'steps' => [
                            ['step' => 1, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Derrote Gigantes Parafuso-Solto e Gigantes Pele-Costurada até obter 3 &lt;Algodão macio&gt;.'],
                            ['step' => 2, 'npc' => 'Cientista Oz', 'coords' => null, 'item' => null, 'inst' => 'Vá até o NPC Cientista Oz e clique em "Me disseram que você está realizando pesquisas incríveis" para obter &lt;Poção de Transformação Incrível&gt;.'],
                            ['step' => 3, 'npc' => null, 'coords' => null, 'item' => null, 'inst' => 'Use a poção.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os Vampiros Não Prestam',
                        'history_title' => 'Vampiros São de Nada',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Cientista Oz', 'coords' => null, 'item' => 'Noite Eterna', 'inst' => 'Fale com NPC Cientista Oz e selecione "Parece que tem algo estranho acontecendo aqui" para entrar no status [Noite Eterna] que dura 10 minutos.'],
                            ['step' => 2, 'npc' => null, 'coords' => '562, 207', 'item' => null, 'inst' => 'Vá até as coordenadas (562, 207) para fazer aparecer os Totens de Sacrifício e o Fantasma de Racod.'],
                        ],
                    ],
                ],
            ],

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
                'description' => 'Continente congelado de Elsaland coberto por gelo milenar e ruínas místicas.',
                'sort_order' => 12,
                'trivias' => [
                    [
                        'item_title' => 'Flor do Gelo Eterno',
                        'history_title' => 'Flor do Gelo Eterno',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Pesquisador Ártico', 'coords' => '120, 180', 'item' => 'Saco Térmico', 'inst' => 'Pegue o Saco Térmico com o Pesquisador Ártico.'],
                            ['step' => 2, 'npc' => 'Gelo Cristalino', 'coords' => '135, 195', 'item' => 'Flor Congelada', 'inst' => 'Colha a Flor Congelada sem quebrá-la.'],
                        ]
                    ]
                ]
            ],

            // ==================== SAPHAEL ====================
            [
                'city' => 'Saphael',
                'name' => 'Terras Centrais',
                'slug' => 'terras-centrais',
                'description' => 'Coração do mundo de Saphael onde os caminhos dos três grandes reinos se cruzam.',
                'sort_order' => 13,
                'trivias' => [
                    [
                        'item_title' => 'O Mensageiro dos Três Reinos',
                        'history_title' => 'O Mensageiro dos Três Reinos',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Embaixador de Saphael', 'coords' => '500, 500', 'item' => 'Carta de Aliança', 'inst' => 'Fale com o Embaixador no centro do mapa e receba a Carta de Aliança.'],
                            ['step' => 2, 'npc' => 'Portal da Cidade', 'coords' => '510, 510', 'item' => null, 'inst' => 'Entregue a carta no Portal para registrar sua conquista no arquivo.'],
                        ]
                    ]
                ]
            ],

            // ==================== ABERTURA DO TEMPO ====================
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Kaslow Antiga',
                'slug' => 'kaslow-antiga',
                'description' => 'Versão histórica no passado da cidade de Kaslow acessada através das fendas temporais.',
                'sort_order' => 14,
                'trivias' => [
                    [
                        'item_title' => 'Memórias do Passado',
                        'history_title' => 'Memórias do Passado',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Cronista Temporal', 'coords' => '300, 250', 'item' => null, 'inst' => 'Fale com o Cronista Temporal para entender o fluxo do tempo.'],
                            ['step' => 2, 'npc' => 'Relíquia Antiga', 'coords' => '315, 265', 'item' => 'Relógio de Bolso Ancestral', 'inst' => 'Encontre o Relógio de Bolso Ancestral enterrado nas ruínas.'],
                        ]
                    ]
                ]
            ],

            // ==================== DIMENSÃO ALTERNATIVA ====================
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Kaslow Alternativa',
                'slug' => 'kaslow-alternativa',
                'description' => 'Realidade paralela e sombria onde os eventos de Kaslow tomaram um rumo diferente.',
                'sort_order' => 15,
                'trivias' => [
                    [
                        'item_title' => 'Espelho Sombrio',
                        'history_title' => 'Espelho Sombrio',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Viajante Dimensional', 'coords' => '400, 600', 'item' => null, 'inst' => 'Fale com o Viajante Dimensional sobre a distorção no espaço.'],
                            ['step' => 2, 'npc' => 'Fenda Espacial', 'coords' => '415, 615', 'item' => 'Essência da Dimensão', 'inst' => 'Selo a Fenda Espacial usando a Essência da Dimensão.'],
                        ]
                    ]
                ]
            ],

            // ==================== TORMENTUM ====================
            [
                'city' => 'Tormentum',
                'name' => 'Abismo do Tormento',
                'slug' => 'abismo-do-tormento',
                'description' => 'Região obscura e desafiadora dominada pelas forças do abismo.',
                'sort_order' => 16,
                'trivias' => [
                    [
                        'item_title' => 'Superando o Tormento',
                        'history_title' => 'Superando o Tormento',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Sacerdote da Luz', 'coords' => '220, 780', 'item' => 'Vela Benta', 'inst' => 'Receba a Vela Benta com o Sacerdote da Luz em (220, 780).'],
                            ['step' => 2, 'npc' => 'Altar da Penumbra', 'coords' => '235, 795', 'item' => null, 'inst' => 'Purifique o Altar da Penumbra para ganhar a conquista.'],
                        ]
                    ]
                ]
            ],

            // ==================== ILHA SPRITE ====================
            [
                'city' => 'Ilha Sprite',
                'name' => 'Santuário dos Sprites',
                'slug' => 'santuario-dos-sprites',
                'description' => 'Ilha sagrada ancestral considerada a verdadeira pátria original de todos os Sprites.',
                'sort_order' => 17,
                'trivias' => [
                    [
                        'item_title' => 'Benção Ancestral Sprite',
                        'history_title' => 'Benção Ancestral Sprite',
                        'steps' => [
                            ['step' => 1, 'npc' => 'Rei Sprite Ancestral', 'coords' => '500, 200', 'item' => null, 'inst' => 'Fale com o Rei Sprite Ancestral no trono sagrado da ilha.'],
                            ['step' => 2, 'npc' => 'Árvore Mãe', 'coords' => '520, 215', 'item' => 'Fruta Celestial', 'inst' => 'Ofereça a Fruta Celestial à Árvore Mãe para completar a história de ilha.'],
                        ]
                    ]
                ]
            ]
        ];

        foreach ($zonesData as $zData) {
            $trivias = $zData['trivias'];
            unset($zData['trivias']);

            $zone = Zone::create($zData);

            $tIndex = 1;
            foreach ($trivias as $tData) {
                $steps = $tData['steps'];
                unset($tData['steps']);

                $tData['zone_id'] = $zone->id;
                $tData['sort_order'] = $tIndex++;
                $tData['points'] = 2;

                $trivia = Trivia::create($tData);

                foreach ($steps as $sData) {
                    TriviaStep::create([
                        'trivia_id' => $trivia->id,
                        'step_number' => $sData['step'],
                        'npc_name' => $sData['npc'],
                        'coordinates' => $sData['coords'],
                        'item_required' => $sData['item'],
                        'instruction' => $sData['inst'],
                    ]);
                }
            }
        }

        // Demo Guide by Rafael G C Santos
        $demoTrivia = Trivia::first();
        Guide::create([
            'user_id' => $user->id,
            'trivia_id' => $demoTrivia->id,
            'title' => 'Guia Completo de Trívias de Grand Fantasia (Compilação Oficial)',
            'slug' => Str::slug('Guia Completo de Trívias de Grand Fantasia Compilacao Oficial'),
            'content' => "Olá aventureiros de Saphael!\n\nEste guia contém a compilação completa das trívias de **Kaslow, Ilya (Monte Shell, Floresta Luz da Lua, Floresta Antiga, Pântano Negro...), Jale, Elsaland, Saphael, Abertura do Tempo, Dimensão Alternativa, Tormentum e Ilha Sprite**.\n\nDicas gerais:\n1. Cada página de trívia preenchida contabiliza **2 pontos** no arquivo do personagem.\n2. Verifique sempre o horário do servidor para NPCs temporários (como o Mestre Mackerel na Baía Azul).\n3. Use a barra de busca e os filtros por Cidade e Mapa para encontrar o que precisa em segundos!",
            'is_approved' => true,
            'views_count' => 540,
        ]);

        Comment::create([
            'user_id' => $user->id,
            'trivia_id' => $demoTrivia->id,
            'content' => 'Compilação de trívias de Ilya, Monte Shell, Floresta Luz da Lua, Floresta Antiga e Pântano Negro atualizada por Rafael G C Santos!',
        ]);
    }
}
