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
                'slug' => 'kaslow-ba-a-azul',
                'description' => 'Mapa de Baía Azul na região de Kaslow.',
                'sort_order' => 1,
                'trivias' => [
                    [
                        'item_title' => 'Peixe Seco Delicioso',
                        'history_title' => 'Peixe Seco Delicioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Mágia Básica',
                        'history_title' => 'Mágica 101',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Bocas Famintas',
                        'history_title' => 'Bocas Famintas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Protetor Ecológico',
                        'history_title' => 'Enfermagem Ecológica',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Você Já Coletou',
                        'history_title' => 'Já Grelhado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Bebê Bobo e Curioso',
                        'history_title' => 'Bebê Bobo Curioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Administrar Multi-Personagem',
                        'history_title' => 'Administrar Multi-Personagem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Siris no Balde',
                        'history_title' => 'Carangueijos no Balde',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Desejo de Nadar',
                        'history_title' => 'Desejo de Nadar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Me Engane Duas Vezes',
                        'history_title' => 'Me Engane Duas Vezes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Crafty Rabbit Warren',
                        'history_title' => 'Crafty Rabbit Warren',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Escalada Alta',
                        'history_title' => 'Escalada Alta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Não Conte com Isto',
                        'history_title' => 'Não Conte com Isto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Patrulheiro do Território',
                        'history_title' => 'Patrulheiro do Território',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Frescor Enfim',
                        'history_title' => 'Frescor Enfim',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Esse Arco está Envenenado',
                        'history_title' => 'Esse Arco está Envenenado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Goblins são fracos',
                        'history_title' => 'Duendes são Fracos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Só estou de passagem',
                        'history_title' => 'Só estou de passagem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Senhora da Guerra',
                        'history_title' => 'Senhora da Guerra',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Quando um Homem Precisa Ir',
                        'history_title' => 'Quando um Homem Deve Partir',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Amor Vence Tudo',
                        'history_title' => 'Amor Omnia Vincit',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Poesia e distância',
                        'history_title' => 'Poesia e Distância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Super Pesticida',
                        'history_title' => 'Super Pesticida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Pedido Sem Precedentes',
                        'history_title' => 'Pedido Sem Precedentes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Arrogância',
                        'history_title' => 'Arrogância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Lágrimas do Oceano',
                        'history_title' => 'Lágrimas do Oceano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Homem de Meia Idade Quer Um Amor',
                        'history_title' => 'O amor está por todo o lado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Fada da Luz Lunar',
                        'history_title' => 'Fada da Luz Lunar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Lendária Fada da Floresta',
                        'history_title' => 'A Lendária Fada da Floresta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Peixe Peixinho',
                        'history_title' => 'Peixe Peixinho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Como Caçar',
                        'history_title' => 'Como Caçar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Coelhos Bailarinos',
                        'history_title' => 'Coelho Dançante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Saudades de Casa',
                        'history_title' => 'Saudades de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Espada da Raposa Demoníaca',
                        'history_title' => 'Espada da Raposa Demoníaca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Amo Jelly-Coelhos',
                        'history_title' => 'Amo Jelly-Coelhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Hortênsia Faminta',
                        'history_title' => 'Hortênsia Faminta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Para Você',
                        'history_title' => 'For You',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Loved by Nature',
                        'history_title' => 'Adorado pela Natureza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Amigo Gorila',
                        'history_title' => 'Amigo Gorila',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Nunca Viu Alguém do Mal?',
                        'history_title' => 'Nunca Viu Alguém do Mal?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Joelhos Saudáveis',
                        'history_title' => 'Joelhos Saudáveis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Velho e o Meteoro',
                        'history_title' => 'O Velho e o Meteoro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sonhar Acordado',
                        'history_title' => 'Sonhando Acordado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Carne Dura',
                        'history_title' => 'Carne Dura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Vez Cavalaria, Sempre Cavalaria',
                        'history_title' => 'Cavalaria Pela Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Perfurar',
                        'history_title' => 'Perfurar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Arma de Destruição Mínima',
                        'history_title' => 'Arma de Destruição Mínima',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Armas de Meteoro',
                        'history_title' => 'Armas de Meteoro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Bife ao Molho Barbecue Delicioso',
                        'history_title' => 'Bife Delicioso ao Molho Barbecue',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Apenas Ossos Normais',
                        'history_title' => 'Apenas Ossos Normais',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Nunca Ocupado Demais para Manutenção',
                        'history_title' => 'Nunca Ocupado Demais para Manutenção',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Segredo do Xamã',
                        'history_title' => 'O Segredo do Xamã',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Pombinhos',
                        'history_title' => 'Pombinhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Esta é a Luz',
                        'history_title' => 'Esta é a Luz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Guilda Vingadora',
                        'history_title' => 'Guilda Vingadora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Não me Assusta',
                        'history_title' => 'Terra dos Sem Medo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'BebaAté Encher',
                        'history_title' => 'Melhore Essa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Prevalecer',
                        'history_title' => 'Protesto Inválido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Chama Azul',
                        'history_title' => 'Chama Azul',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Feliz Agricultura',
                        'history_title' => 'Feliz Agricultura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Recurso de Água',
                        'history_title' => 'Bêbado Inverterado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Desejo dos Mortos',
                        'history_title' => 'Desejo dos Mortos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Linguagem das Flores Sempre vai Amar Você',
                        'history_title' => 'A Linguagem das Flores Sempre vai Amar Você',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'É só uma Minhoca.',
                        'history_title' => 'É só uma Minhoca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Lenda do Lobisomem',
                        'history_title' => 'Lenda do Lobisomem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Buraco sem Fundo',
                        'history_title' => 'Buraco sem Fundo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Flor do Milagre',
                        'history_title' => 'Flor do Milagre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Memória Persiste',
                        'history_title' => 'A Memória Persiste',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Até a Próxima Reencarnação!',
                        'history_title' => 'Até a Próxima Reencarnação',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Arrependimento do Yuri',
                        'history_title' => 'A Vingança e Yoli',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Incrível Tecnologia Goblin',
                        'history_title' => 'Incrível Tecnologia Goblin',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Hmmm, Hambúrguer de Siri!',
                        'history_title' => 'Hmmm, Hambúrguer de Siri!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Guardião dos Navios Naufragados',
                        'history_title' => 'O Anjo da Guarda do Estaleiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Gotas do Paraíso',
                        'history_title' => 'Gotas do Paraíso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Lenda de Cora',
                        'history_title' => 'A Lenda de Cora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Não Alimentar',
                        'history_title' => 'Não Alimentar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Importância da Localização',
                        'history_title' => 'A Importância da Localização',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Segredo Comercial',
                        'history_title' => 'Segredo Comercial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Os cachorros são giros',
                        'history_title' => 'Os cachorros são giros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Peixe Rosa',
                        'history_title' => 'Peixe Rosa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Autocultivo',
                        'history_title' => 'Autocultivo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Exuberância',
                        'history_title' => 'Exuberância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Dignidade Inquestionável do Capitão',
                        'history_title' => 'A Dignidade do Capitão Não Pode ser Questionada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Batalha dos Sonhos do Homem',
                        'history_title' => 'Um duelo dos sonhos entre homens homens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Coisas Não Descobertas da Magia',
                        'history_title' => 'Coisas Não Descobertas da Magia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Falha',
                        'history_title' => 'Falha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Porta É Ali',
                        'history_title' => 'A Porta Está Ali',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Parecença Inquietante',
                        'history_title' => 'Semelhança Inquietante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Vanishing Delicacy',
                        'history_title' => 'A Vanishing Delicacy',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A aparência é importante',
                        'history_title' => 'A aparência é importante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Cabra Macho',
                        'history_title' => 'Cabra Macho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sem Fôlego',
                        'history_title' => 'Sem Fôlego',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Não bata na minha Mãe!',
                        'history_title' => 'Não machuque minha mãe!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'L-l-l-l-l-lenhador',
                        'history_title' => 'Lenhadooores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Evitar Incêndio',
                        'history_title' => 'Prevenção de Incendio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Por favor, me dê madeira',
                        'history_title' => 'Por favor, me dê madeira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Abelha-Rainha',
                        'history_title' => 'Abelha Rainha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Promotor de Mergulho',
                        'history_title' => 'Promotor de Mergulho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Produto da Natureza',
                        'history_title' => 'Produto da Natureza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Quando as Galinhas atacam',
                        'history_title' => 'Quando as Galinhas atacam',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Mostre sua verdadeira forma!',
                        'history_title' => 'Mostre sua verdadeira forma',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Ladrão Ligeiro',
                        'history_title' => 'Ladrão Ligeiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Cogumelos Elásticos',
                        'history_title' => 'Cogumelos Elásticos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Equilíbrio Nutricional',
                        'history_title' => 'Equilíbrio Nutricional',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Fanático por Ursos',
                        'history_title' => 'Fanático por Ursos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Deleite Gastronômico',
                        'history_title' => 'Deleite Gastronômico',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Descanse em Paz',
                        'history_title' => 'Descanse em Paz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Carne das Trevas',
                        'history_title' => 'Carne das Trevas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Rapsódia da Lua',
                        'history_title' => 'Rapsódia da Luz da Lua',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Lobisomem com Costas Coçando',
                        'history_title' => 'Lobisomem com Cócegas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Teste do Maluco pela Ciência',
                        'history_title' => 'O Teste do Maluco pela Ciência',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Os Vampiros Não Prestam',
                        'history_title' => 'Vampiros São de Nada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Salvação',
                        'history_title' => 'Salvação',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Todo O Siri Tem O Seu Dia',
                        'history_title' => 'Todo Siri Tem O Seu Dia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Levante!',
                        'history_title' => 'Salto Voador',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Tenho um Queixo Lindo',
                        'history_title' => 'Tenho um queixo lindo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sobre Homens e Fantasmas',
                        'history_title' => 'Sobre Homens e Fantasmas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Você gosta de Enfileirar?',
                        'history_title' => 'Você gosta de Enfileirar?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Faça Restaurativos!',
                        'history_title' => 'Faça Restaurativos!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Feitiço do Componente de Alta Tecnologia',
                        'history_title' => 'Feitiço do Componente de Alta Tecnologia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Ilya',
                'name' => 'Península Recife de Osso',
                'slug' => 'ilya-pen-nsula-recife-de-osso',
                'description' => 'Mapa de Península Recife de Osso na região de Ilya.',
                'sort_order' => 10,
                'trivias' => [
                    [
                        'item_title' => 'Ligeirinho',
                        'history_title' => 'Ligeirinho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Revelação do Passado',
                        'history_title' => 'Revelação do Passado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Maldição do Pirata Fantasmagórico',
                        'history_title' => 'Maldição do Pirata Fantasmagórico',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Preocupação',
                        'history_title' => 'Preocupação',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Amor não tem Gênero',
                        'history_title' => 'Menino ou Menina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Início do Sonho',
                        'history_title' => 'O Começo de Um Sonho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Vento Barulhento',
                        'history_title' => 'Vento Barulhento',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sussurro da Mãe',
                        'history_title' => 'Sussurro Materno',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Torne-se Capitão',
                        'history_title' => 'Torne-se Capitão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Pinça por Pinça',
                        'history_title' => 'Pinça por Pinça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sentindo sua falta do Outro Lado do Oceano',
                        'history_title' => 'Sentindo sua falta do Outro Lado do Oceano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Montando um Estande',
                        'history_title' => 'Montando um Estande',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sul Flutuante',
                        'history_title' => 'Sul Flutuante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Pequena Sereia',
                        'history_title' => 'Pequena Sereia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Fôlego d&#39;Água',
                        'history_title' => 'Fôlego d&#39;Água',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Não Conte aos Outros',
                        'history_title' => 'Não Conte aos Outros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                'sort_order' => 11,
                'trivias' => [
                    [
                        'item_title' => 'Mau Olhado',
                        'history_title' => 'Mau Olhado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Encontro Alegre',
                        'history_title' => 'Encontro Alegre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Mantendo o Nível',
                        'history_title' => 'Mantenha a Dianteira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro Secreto do Marinheiro',
                        'history_title' => 'O Tesouro Secreto do Navegante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Luz Oriental',
                        'history_title' => 'Luz Oriental',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Ainda tenho fome',
                        'history_title' => 'Ainda tenho fome',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Oops!',
                        'history_title' => 'Ops!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Isso é pedra',
                        'history_title' => 'Isso sim é Rock!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Hora de Montar',
                        'history_title' => 'Hora do Passeio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Melhor Isca',
                        'history_title' => 'A Melhor Isca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Negócios de Contrabando',
                        'history_title' => 'Negócios de Contrabando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Antigo Parceiro',
                        'history_title' => 'Antigo Parceiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Montanha Mina de Vapor',
                'slug' => 'jale-montanha-mina-de-vapor',
                'description' => 'Mapa de Montanha Mina de Vapor na região de Jale.',
                'sort_order' => 12,
                'trivias' => [
                    [
                        'item_title' => 'A Natureza Contra-Ataca',
                        'history_title' => 'A Natureza Contra-Ataca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Testemunha Ocular',
                        'history_title' => 'Nunca Visto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Querida, O Robo Espichou',
                        'history_title' => 'O Robô Vai Ficar Maior',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Especialista em Despesas',
                        'history_title' => 'Especialista em Despesas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Despertar da pessoa com Excremento',
                        'history_title' => 'A Tarefa do Cocô',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Iguaria Perdida',
                        'history_title' => 'Muita Saudades',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Grande Sujo',
                        'history_title' => 'O Grande Sujo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Exploração da Mina',
                        'history_title' => 'Exploração da Mina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Mantenha-se Hidratado',
                        'history_title' => 'Mantenha-se Hidratado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Aroma Único',
                        'history_title' => 'Aroma Único',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Alerta de Fumaça',
                        'history_title' => 'Alerta de Fumaça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Quente! Quente!',
                        'history_title' => 'Quente! Quente!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Cordilheira Vermelha',
                'slug' => 'jale-cordilheira-vermelha',
                'description' => 'Mapa de Cordilheira Vermelha na região de Jale.',
                'sort_order' => 13,
                'trivias' => [
                    [
                        'item_title' => 'Vida de Inseto',
                        'history_title' => 'A Vida de Inseto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Águas Termais Energéticas',
                        'history_title' => 'Águas Termais Energéticas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Romance Engarrafado',
                        'history_title' => 'Romance Engarrafado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sempre Jantar Fora',
                        'history_title' => 'Sempre Jantar Fora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'É Mais Facil Invocar um Espirito Maligno do que um Bom',
                        'history_title' => 'Verdadeiro Crente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Quero Ser o Rei da Geologia',
                        'history_title' => 'Eu quero ser um mestre Geólogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Procure pelo Ovo Frito',
                        'history_title' => 'Procure pelo Ovo Frito',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Aspirante a Marinheiro',
                        'history_title' => 'Pseudo-Marinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Animal de Estimação Perdido',
                        'history_title' => 'Mascote Perdida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Troca com um Interno',
                        'history_title' => 'Comércio Interno',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Picando',
                        'history_title' => 'Picando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Beleza Incomparável',
                        'history_title' => 'Beleza Incomparável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Vamos Deixar que Profissionais lidem com Isso',
                        'history_title' => 'Vamos Deixar que Profissionais lidem com Isso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Vista do Olho de Pássaro',
                        'history_title' => 'Vista do Olho de Pássaro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Visão do Futuro',
                        'history_title' => 'Visão do Futuro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Jogo Acabou?',
                        'history_title' => 'O Jogo Acabou?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Ilha do Sul',
                'slug' => 'jale-ilha-do-sul',
                'description' => 'Mapa de Ilha do Sul na região de Jale.',
                'sort_order' => 14,
                'trivias' => [
                    [
                        'item_title' => 'João Honesto',
                        'history_title' => 'João Honesto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Regresso Antes de Voltar',
                        'history_title' => 'Regresso Antes de Voltar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Coração do Oceano',
                        'history_title' => 'Coração do Oceano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Onde está o amor?',
                        'history_title' => 'Onde está o amor?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Presente do Coração',
                        'history_title' => 'Presente do Coração',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A coisa que você não sabe',
                        'history_title' => 'Algo que você não sabe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sabe-Tudo',
                        'history_title' => 'Sabe-Tudo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Visão de Tirar o Fôlego',
                        'history_title' => 'É solitário Aqui em Cima',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Como Ficar Feliz',
                        'history_title' => 'Como Ser Feliz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Ser Bonita é a Justiça',
                        'history_title' => 'Ser Bonita é a Justiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Eu escolho ficar em silêncio',
                        'history_title' => 'Eu escolho ficar em silêncio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A floresta e as árvores',
                        'history_title' => 'A floresta e as árvores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Você nunca está ocupado demais para ter preguiça',
                        'history_title' => 'Você nunca está ocupado demais para ter preguiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'É a Vida',
                        'history_title' => 'É a Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sem Inimigos no Shoping!',
                        'history_title' => 'Sem Inimigos no Shoping!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Minha Lenda',
                        'history_title' => 'Minha Lenda',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Jale',
                'name' => 'Ilha Angoya',
                'slug' => 'jale-ilha-angoya',
                'description' => 'Mapa de Ilha Angoya na região de Jale.',
                'sort_order' => 15,
                'trivias' => [
                    [
                        'item_title' => 'Virando o Copo',
                        'history_title' => 'Virando o Copo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Adeus, meu Amor',
                        'history_title' => 'Adeus, meu Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Tempestade Perfeita',
                        'history_title' => 'Tempestade Perfeita',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Golpe de Sorte',
                        'history_title' => 'Golpe de Sorte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Magnata dos Transportes',
                        'history_title' => 'Magnata dos Transportes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Também Quero ser um Mestre Mergulhador',
                        'history_title' => 'Também Quero ser um Mestre do Mergulho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Nascimento de um Novo Jogo de Lavagem de Dinheiro',
                        'history_title' => 'O Nascimento de um Novo Jogo de Lavagem de Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Envolver-se',
                        'history_title' => 'Envolver-se',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Dragão Construtor Naval',
                        'history_title' => 'Drake, o Carpinteiro Naval',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A Vida é uma Aposta',
                        'history_title' => 'A Vida é Imprevisível',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Cego Roubado', 'instruction' => 'Fale com o NPC Akai na opção &quot;Aposto 1G&quot; para obter o status [Cego Roubado] ou [Eu Ganhei]. Se obter o status [Cego Roubado], aposte novamente. Se obter o status [Eu Ganhei], completa a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Eu simplesmente AMO Suco de Coco!',
                        'history_title' => 'Eu simplesmente AMO Suco de Coco!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Mão Amiga',
                        'history_title' => 'Mão Amiga',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Adega Privada',
                        'history_title' => 'Adega Privada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Grande Vazio',
                        'history_title' => 'Grande Vazio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Escolha entre Amor e Carreira',
                        'history_title' => 'Escolha entre Amor e Carreira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Nem Um a Menos!',
                        'history_title' => 'Nem Um a Menos!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                'sort_order' => 16,
                'trivias' => [
                    [
                        'item_title' => 'Te disse para não ver',
                        'history_title' => 'Te disse para não ver',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Perseguição',
                        'history_title' => 'Perseguição',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Jantar Solidário',
                        'history_title' => 'Jantar Solidário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Me Bata! Tolo!',
                        'history_title' => 'Me Bata! Tolo!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O Gosto do Sofrimento',
                        'history_title' => 'O Gosto da Dificuldade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Donzela do Vale Apaixonada',
                        'history_title' => 'A Mente de Uma garota do Vale',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Ancião Teimoso',
                        'history_title' => 'Ancião Teimoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Incrivelmente Enorme',
                        'history_title' => 'Incrivelmente Enorme',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Um Pouco do Seu Próprio Remédio',
                        'history_title' => 'Um Pouco do Seu Próprio Remédio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Maníaco da Caça',
                        'history_title' => 'Maníaco de Caça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Às Vezes você precisa ir em frente',
                        'history_title' => 'Às Vezes você precisa ir em frente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Seu nome',
                        'history_title' => 'Seu nome',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Todos Porcos Cairão',
                        'history_title' => 'Todos Porcos Cairão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sr. Depressão',
                        'history_title' => 'Sr. Depressão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Quer levar uma surra?',
                        'history_title' => 'Quer levar uma surra?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Relação Perfeita',
                        'history_title' => 'Relação Perfeita',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Montanhas Eternas',
                'slug' => 'elsaland-montanhas-eternas',
                'description' => 'Mapa de Montanhas Eternas na região de Elsaland.',
                'sort_order' => 17,
                'trivias' => [
                    [
                        'item_title' => 'Que a Luz Esteja com Você',
                        'history_title' => 'Que a Luz Esteja com Você',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Faz bem para a saúde',
                        'history_title' => 'Faz bem para a saúde',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Por que um novo pai?',
                        'history_title' => 'Por que substituir um Pai?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Ovos de Galinha ou de Aço',
                        'history_title' => 'Ovos de Galinha ou de Aço',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Cadê a Experiência?',
                        'history_title' => 'Onde é o Treinamento?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Nascido para Elegância',
                        'history_title' => 'A Natureza da Beleza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Tim-Tim',
                        'history_title' => 'Saúde',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Pesar da Espada da Herança',
                        'history_title' => 'Pesar da Espada da Herança',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Coma Assim e Fique Bem',
                        'history_title' => 'Coma Assim e Fique Bem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Cuidado com os Radares',
                        'history_title' => 'Cuidado com os Radares',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Você Subiu na Árvore Errada',
                        'history_title' => 'Você Subiu na Árvore Errada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Chá Oolong Inflamável',
                        'history_title' => 'Chá Oolong Inflamável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Poupando Dinheiro',
                        'history_title' => 'Poupando Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Fronteira do Esquecimento',
                'slug' => 'elsaland-fronteira-do-esquecimento',
                'description' => 'Mapa de Fronteira do Esquecimento na região de Elsaland.',
                'sort_order' => 18,
                'trivias' => [
                    [
                        'item_title' => 'Não roubei o urso',
                        'history_title' => 'Não roubei o urso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'A volta dos Mortos-Vivos',
                        'history_title' => 'A volta dos Mortos-Vivos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => '(item sem o nome &quot;Trívia - &quot;)',
                        'history_title' => 'Se for grande, é pássaro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Tolo Esquisito',
                        'history_title' => 'Ele não entende mesmo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Oportunidade Comercial Mortal',
                        'history_title' => 'Oportunidade Comercial Mortal',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Infância Mecânica',
                        'history_title' => 'Infância Mecha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Doce Amizade',
                        'history_title' => 'Uma Doce Amizade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Descansar é muito importante',
                        'history_title' => 'Descansar é muito importante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Mensagem de Morte',
                        'history_title' => 'Mensagem de Morte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Você é Fã Nº1',
                        'history_title' => 'Você é Fã Nº1',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Namorada Selvagem',
                        'history_title' => 'Namorada Selvagem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Ordinário e Entediante',
                        'history_title' => 'Ordinário e Entediante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Duelo de Cartão',
                        'history_title' => 'Duelo de Cartão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Floresta do Inverno',
                'slug' => 'elsaland-floresta-do-inverno',
                'description' => 'Mapa de Floresta do Inverno na região de Elsaland.',
                'sort_order' => 19,
                'trivias' => [
                    [
                        'item_title' => 'De Quem É Este Machado?',
                        'history_title' => 'De Quem É Este Machado?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Dor de Barriga',
                        'history_title' => 'Dor de Barriga',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Muitos Desastres',
                        'history_title' => 'Muitos Desastres',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Força Clandestina',
                        'history_title' => 'Força Clandestina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Amor Descomplicado',
                        'history_title' => 'Sentimentos Simples',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'O mesmo gosto',
                        'history_title' => 'O Delicioso Sabor que Não Muda',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Humor Antigo',
                        'history_title' => 'Humor Antigo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Assassino de Dragão',
                        'history_title' => 'Assassino de Dragão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Amante do Karaokê',
                        'history_title' => 'Amante do Karaokê',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Tristeza das Memórias',
                        'history_title' => 'Tristeza das Memórias',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Arbustos Barulhentos',
                        'history_title' => 'Arbustos Barulhentos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Magia de Estouro',
                        'history_title' => 'Magia de Estouro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Arte é Explosão',
                        'history_title' => 'Arte é Explosão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Ruínas Polares Antigas',
                'slug' => 'elsaland-ru-nas-polares-antigas',
                'description' => 'Mapa de Ruínas Polares Antigas na região de Elsaland.',
                'sort_order' => 20,
                'trivias' => [
                    [
                        'item_title' => 'Contra-Ataque dos Gigantes',
                        'history_title' => 'Contra-Ataque dos Gigantes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Purificador de Ar',
                        'history_title' => 'Renovador de Ar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Respeite os Deuses',
                        'history_title' => 'Respeite os Deuses',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Devo estar imaginando coisas',
                        'history_title' => 'Devo estar imaginando coisas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Poder do Artefato',
                        'history_title' => 'O Poder do Artefato Ancião',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Por isso sou turista',
                        'history_title' => 'Apenas diga que é um turista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Gosto Local',
                        'history_title' => 'Gosto Local',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Especialista da Neve',
                        'history_title' => 'Especialista da Neve',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Colocando Lentes de Contato pela Primeira Vez',
                        'history_title' => 'Colocando Lentes de Contato pela Primeira Vez',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Conto do Velho Soldado',
                        'history_title' => 'Conto do Velho Soldado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Que Nome Bacana',
                        'history_title' => 'Que Nome Bacana',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Você Pode Beber Magma Uma Vez na Vida',
                        'history_title' => 'Você Pode Beber Magma Uma Vez na Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Rito de Passagem Antigo',
                        'history_title' => 'Rito de Passagem Antigo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Elsaland',
                'name' => 'Baía de Auris',
                'slug' => 'elsaland-ba-a-de-auris',
                'description' => 'Mapa de Baía de Auris na região de Elsaland.',
                'sort_order' => 21,
                'trivias' => [
                    [
                        'item_title' => 'Longe da Vista',
                        'history_title' => 'Longe da Vista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Dê-me Poderes Mágicos',
                        'history_title' => 'Dê-me Poderes Mágicos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Coração Jovem',
                        'history_title' => 'Coração Jovem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Artesão Legendário',
                        'history_title' => 'Artesão Legendário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Ver é crer',
                        'history_title' => 'Veja você mesmo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Vá Fundo',
                        'history_title' => 'Espírito Experimental',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Combinação!',
                        'history_title' => 'Combinação!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Caçador de Luz',
                        'history_title' => 'Caçador de Luz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Pastor em Pele de Cordeiro',
                        'history_title' => 'Pastor em Pele de Cordeiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Violando a Lei',
                        'history_title' => 'Violando a Lei',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Sprite e Navio de Guerra',
                        'history_title' => 'Sprite e Navio de Guerra',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Bênção do Poderoso Rei do Mar',
                        'history_title' => 'Bênção do Poderoso Rei do Mar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
                        ],
                    ],
                    [
                        'item_title' => 'Muito Distante',
                        'history_title' => 'Muito Distante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => null],
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
                'sort_order' => 22,
                'trivias' => [
                    [
                        'item_title' => 'Vamos Dançar!',
                        'history_title' => 'Vamos Dançar!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com a Dançarina Ricci e selecione a opção &quot;Me dê o pandeiro que faz as pessoas dançarem!&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cenoura Para Cima!',
                        'history_title' => 'Cenoura Para Cima!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o Comerciante Ambulante/Lojista e compre o item &quot;Pá Universal&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Ligeireza',
                        'history_title' => 'Ligeireza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Caixa Forte Trancada', 'instruction' => 'Passeie em redor do Campo Pirata Noturno até encontrar uma caixa vermelha do tesouro - acerte a caixa para receber o item «Caixa Forte Trancada».'],
                        ],
                    ],
                    [
                        'item_title' => 'Guarda sem sentido',
                        'history_title' => 'Guarda sem sentido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '870, 411', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (870,411) e derrote os guardas que rodeiam o Baú Antigo. Fale com ele e selecione a opção &quot;Você está protegendo alguma coisa?&quot; - mate o mob que aparece para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tour da Pradaria',
                        'history_title' => 'Tour da Pradaria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '393, 274', 'item_required' => 'Tour do Pássaro Solar', 'instruction' => 'Fale com Ancião da Pradaria e selecione &quot;Eu gostaria de alugar um pássaro solar. Aqui está 20 em ouro&quot; para entrar no status [Tour do Pássaro Solar] - dura 15 min. Vá pela seguinte ordem, às coordenadas (393, 274), (546, 181) e (641, 235) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Posto Preguiçoso',
                        'history_title' => 'O Posto Preguiçoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Reiley', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Reiley e selecione &quot;Como assim?&quot; para obter o item &quot;Formas de Registo Climático&quot;. Vá até o NPC Rice e selecione &quot;Você quer ganhar dinheiro ficando deitado?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bardo da Ilha de Três Pontas',
                        'history_title' => 'Bardo da Ilha de Três Pontas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferma', 'coordinates' => '792, 195', 'item_required' => null, 'instruction' => 'Fale com o NPC Ferma e selecione &quot;Os dias melancólicos ficaram no passado&quot; para obter o item &quot;Gaita de Fermat&quot;. Vá até ao local (792, 195) e dê clique direito no item para receber o buff &quot;Anotações Alegres&quot; - dura 5 min. Volte ao NPC Reiley e selecione &quot;Você ouviu a música que vem das montanhas?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lâmpada Insensível',
                        'history_title' => 'Lâmpada Insensível',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tato', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com NPC Tato e selecione &quot;Por que está olhando para o Capitão da Guarda?&quot; para adquirir &lt;Ordem Militar&gt;. Fale com Stiffany na opção &quot;Esta é uma carta sua para o Tenente&quot; para adquirir &lt;Ordem Militar Carimbada&gt;. Va até as coordenadas ( 71, 242) para usar o item. Após o usar retorne a Tato clicando na opção &lt;Cumpri as ordens do Capitão da Guarda&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Reparador',
                        'history_title' => 'O Reparador',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Trunan', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Alce da Pradaria para obter 1x &lt;Galhada Dura&gt; e derrote Aranhas Cristal para obter 5x &lt;Recipiente de Veneno da Aranha de Cristal&gt;. Fale com Trunan e selecione &quot;Você pode fazer uma Panaceia para mim?&quot; para adquirir &lt;Panaceia&gt;. Vá até o NPC Anson e clique em &quot;Não precisa procurar. Já tenho a Panaceia aqui.&quot; para completara trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Justiça Será Feita',
                        'history_title' => 'A Justiça Será Feita',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marinheiro Ferido Ato', 'coordinates' => '824, 300', 'item_required' => 'Pirata Ganancioso', 'instruction' => 'Fale com Marinheiro Ferido Ato e selecione &quot;Posso ajudar você a capturar um pirata?&quot; para adquirir &lt;Falso Baú do Tesouro&gt;. Vá nas coordenadas (824, 300) e use o item para fazer aparecer um «Pirata Ganancioso». Derrote-o para entrar no status [Pirata capturado] - dura 10 min. Retorne ao NPC Ato nas coordenadas (820, 368).'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Nunca Vai Me Entender!',
                        'history_title' => 'Você Nunca Vai Me Entender!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ricci', 'coordinates' => '140, 226', 'item_required' => null, 'instruction' => 'Fale com a NPC Ricci (140, 226) e selecione a opção &quot;Você parece um pouco desconfortável&quot; para receber o buff &quot;Preocupação&quot;. Vá até o NPC Reiley (789, 363) e selecione a opção &quot;Você recebeu os itens enviados por Ricci?&quot; para receber o item &quot;Recipiente Vazio Limpo&quot;. Volte no NPC Ricci e selecione a opção &quot;Ele é muito chato&quot; para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Disse Tudo',
                        'history_title' => 'Disse Tudo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Feather', 'coordinates' => '1478, 572', 'item_required' => null, 'instruction' => 'Fale com o NPC Feather (1478, 572) e selecione a opção &quot;Pena, por que você tem penas?&quot; para obter &quot;Penas Leves&quot;. Vá até (85, 147) e use o item para receber o buff &quot;Estou saindo devagar agora&quot;. Volte no NPC Feather e selecione a opção &quot;Eu estou vindo com o vento, você vai com o vento&quot; para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Não desista!',
                        'history_title' => 'Não desista!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Anxi', 'coordinates' => '1737, 354', 'item_required' => null, 'instruction' => 'Vá até (1737, 354) até aparece a mensagem no Discover &quot;Jovem, Não seja idiota&quot; e receber o buff por 30 segundos. Antes do buff acabar vá para (1736, 385) e irá aparecer o NPC AnxiFale com o NPC Anxi e selecione a opção &quot;Professor, eu só quero ver o mar...&quot; para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Tomando Coragem',
                        'history_title' => 'Tomando Coragem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ross', 'coordinates' => '73, 246', 'item_required' => null, 'instruction' => 'Derrote &quot;Vanguarda Pirata Noturno&quot; ou &quot;Guarda Pirata Noturno&quot; para obter o item &quot;Conjunto de Ferramentas e Pregos&quot; e &quot;Tábuas de Madeira de Alta Qualidade&quot;. Vá até o NPC Ross (73, 246) e selecione a opção &quot;Ajude-me a martelar um prego em uma placa de madeira&quot; e &quot;Me ajude a tirar as unhas do quadro.&quot; para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Enjoo',
                        'history_title' => 'Enjoo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '138, 266', 'item_required' => null, 'instruction' => 'Nos dirigimos a falar com Ross e escolhemos a opção &quot;Você não está realmente tonto?&quot;, faremos esse processo duas vezes. Agora vamos até Moss (138, 266) e compramos Medicamentos para Enjoo. Voltamos para Ross, falamos com ele e escolhemos &quot;Eu tenho um remédio para o enjoo&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esta não é a minha carne',
                        'history_title' => 'Esta não é a minha carne',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '163, 220', 'item_required' => null, 'instruction' => 'Falamos com Chardika na opção &quot;Você quer comer algo?&quot;. Agora vamos até Smater (163, 220), falamos com ele e ele nos dará Carne de Salmão. Agora só precisamos voltar para Chardika, falar com ele e escolher &quot;Eu trouxe carne para você!&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Baía Azul',
                'name' => 'Montanha dos Leões Gêmeos',
                'slug' => 'ba-a-azul-montanha-dos-le-es-g-meos',
                'description' => 'Mapa de Montanha dos Leões Gêmeos na região de Baía Azul.',
                'sort_order' => 23,
                'trivias' => [
                    [
                        'item_title' => 'Fragrância no Ar',
                        'history_title' => 'Fragrância no Ar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o lojista e compre o item &quot;Espeto Cru de Porco&quot; e vá até às coordenadas 450, 535 - próximo ao NPC mecha de Jale. Use o item aí para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Piada triste',
                        'history_title' => 'Piada triste',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Noraba', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Noraba e selecione a opção &quot;Porque não tem mais &quot;ninguém&quot; aqui&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Sinto Muita Saudade',
                        'history_title' => 'Sinto Muita Saudade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sayi', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá derrotando potes vermelhos (Jarras de Cerâmica) até obter o item &quot;Anotações Desgastadas&quot; - acumule 4 deles primeiro. Fale com o NPC Sayi e selecione &quot;Estas notas parecem ter sido escritas por você&quot; irá obter o buff &quot;Questionamento Repetido&quot; - dura 5 min. Acumule o buff 4 vezes e selecione a opção &quot;E você está me contando a verdade?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Entrando no Acampamento Errado',
                        'history_title' => 'Entrando no Acampamento Errado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '935, 365', 'item_required' => 'Trevo da Sorte', 'instruction' => 'Vá até ao Comerciante Ambulante e compre «Trevo da Sorte» por 1g. De seguida, siga até às coordenadas (935,365) para invocar &quot;Pessoa Retumbante&quot; com o Trevo da Sorte. Derrote-os para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Despedida',
                        'history_title' => 'A Despedida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chase', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Chase e selecione &quot;Sinto um clima pesado por aqui&quot; para obter o item &quot;Ossos da Besta Demônio&quot;. Vá até à Pedra da Alma Antiga Fera e selecione a opção &quot;Tome, pegue estes ossos&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Registro Superior',
                        'history_title' => 'Registro Superior',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com a Placa de Rua e selecione a opção &quot;Leia com atenção as letras miúdas das placas no caminho&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Libertação do Super Poder',
                        'history_title' => 'A Libertação do Super Poder',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Antony', 'coordinates' => null, 'item_required' => 'A libertação do super poder', 'instruction' => 'Fale com o NPC Antony e escolha a opção &quot;&quot;Você inventou algo legal nos últimos tempos?&quot;&quot; para obter o status [A libertação do super poder] - dura 5min. Após ter o status, fale com o NPC Pulitzer e escolha a opção &quot;&quot;WalaWalaWala!&quot;&quot;. De seguida fale com Jalien e selecione a opção &quot;&quot;WalaWalaWala!&quot;&quot; Finalmente volte ao Antony e escolha a opção &quot;&quot;Olhe o que você fez.&quot;&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cajado Maravilhoso',
                        'history_title' => 'Cajado Maravilhoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '667, 675', 'item_required' => 'Tubarão Gigante', 'instruction' => 'Vá até ao lojista e compre &lt;Vara de Pescar Superliga&gt;. Vá nas coordenadas (667, 675) e use o item para invocar um «Tubarão Gigante» que o atacará. Derrote-o para obter &lt;Carne de Tubarão&gt; e vá para as coordenadas (451, 522). Use a carne para obter &lt;Carne de Tubarão Grelhada&gt; e vá até Jalien, selecionando a opção &quot;Ouvi dizer que você não tem comido bem nos últimos tempos. Tenho um pouco de carne de tubarão para você&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lampejo na Panela',
                        'history_title' => 'Lampejo na Panela',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '970, 784', 'item_required' => 'Chamas do Ódio', 'instruction' => 'Derrote «Chamas do Ódio» até obter &lt;Âmago Espírito do Fogo Intenso&gt;, depois vá até as coordenadas (970, 784) e e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Costa Bonita, Mar Vasto',
                        'history_title' => 'Costa Bonita, Mar Vasto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dudley', 'coordinates' => '1233, 357', 'item_required' => null, 'instruction' => 'Vá até o NPC Dudley e selecione&quot;Certo, me entregue a foto&quot; para adquirir &lt;Foto do Falecido Filho de Dudley&gt;. Vá até (1233, 357) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você está cansado?',
                        'history_title' => 'Você está cansado?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Et', 'coordinates' => '452, 549', 'item_required' => null, 'instruction' => 'Fale com o NPC Et (452,549) e compre &quot;Fórmula de Tartaruga Selvagem da Montanha dos Leões Gêmeos&quot;. Derrote &quot;Tartaruga Dente-Afiado&quot; ou &quot;Besta Tartaruga Pata-de-Aço&quot; para obter &quot; Fragmentos de Casco de Tartaruga&quot; x5. Vá até o NPC Chase(885, 422) e faça o no alquimista. Vá até o NPC Pulitzer (460, 524) e selecione a opção &quot;Você está cansado?&quot; para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Quanto Mais Clara a Luz, Mais Escuras as Sombras',
                        'history_title' => 'Quanto Mais Clara a Luz, Mais Escuras as Sombras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Antony', 'coordinates' => '460, 517', 'item_required' => null, 'instruction' => 'Fale com o NPC Antony (460, 517) &quot;Você viu pessoas na Cidade Nombardi?&quot; para receber o buff &quot;O Sexto Fantasma?&quot;Vá até (156, 467) para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Bis?',
                        'history_title' => 'Bis?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '1140, 240', 'item_required' => null, 'instruction' => 'Derrote &lt;Defensor Homem-Tubarão&gt;(1140,240) até dropar &quot;Pérola Mágica&quot;. Use a &quot;Pérola Mágica&quot; em (1119, 162) e irá aparecer o mob &lt;Lorelai&gt;, derrote para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Curto e Grosso',
                        'history_title' => 'Curto e Grosso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jalien', 'coordinates' => '457, 576', 'item_required' => null, 'instruction' => 'Fale com &quot;Baú de Tesouro de Brilho Dourado&quot; (457, 576) e selecione a opção &quot;Seja uma pessoa honrada&quot; para receber o buff &quot;Curto e Grosso&quot;. Vá até o NPC Jalien (441, 534) e selecione a opção &quot;Eu peguei um baú do tesouro.&quot; para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Você o fez chorar!',
                        'history_title' => 'Você o fez chorar!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos conversar com Dudley e selecionar, na ordem, as opções &quot;Você está triste?&quot;, &quot;Você está realmente triste?&quot; e por último &quot;Você está realmente triste?&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Unifique!',
                        'history_title' => 'Unifique!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => '1000,470', 'instruction' => 'Vá até as coordenadas [1000,470] e fale com o NPC &lt;Equipe Associação Pedra Ferro&gt; e clique na primeira opção &quot;Qual é a bela paisagem por aqui?&quot; &gt;Para obter o item &lt;Câmera&gt; e, em seguida vá até as coordenadas [1025,653] &gt;Use o item nessas coordenadas para obter o status [Paisagem quente] &gt;Retorne ao NPC &lt;Equipe Associação Pedra Ferro&gt; e clique na segunda opção &quot;Esta é a beleza que você está falando&quot; para completar a trívia.'],
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
                'sort_order' => 24,
                'trivias' => [
                    [
                        'item_title' => 'Que Nojo!',
                        'history_title' => 'Que Nojo!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Investigador Gode', 'coordinates' => '786, 1106', 'item_required' => null, 'instruction' => 'Fale com o NPC Investigador Gode (786, 1106) e selecione a opção &quot;Eu quero ajudar com o experimento&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Preço Absurdo',
                        'history_title' => 'Preço Absurdo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '445, 981', 'item_required' => null, 'instruction' => 'Vá até as coordendas (445, 981), onde irá encontrar &lt;Empoeirado&gt; Baú de Livros. Ataque-o para dropar o item &quot;Manual de Luta da Flor de Ameixa&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Nem Tudo o Que é Colorido é Gostoso',
                        'history_title' => 'Nem Tudo o Que é Colorido é Gostoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Cogumelos Verdes', 'instruction' => 'Derrote o grande cogumelo verde (localização: 777,572) para obter o item «Cogumelos Verdes».'],
                        ],
                    ],
                    [
                        'item_title' => 'Ouse tentar',
                        'history_title' => 'Que tal tentar?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '433, 551', 'item_required' => 'Bisque de cogumelos verdes', 'instruction' => 'Fale com a NPC Sargento Feiticeira Wanessa (433, 551) e selecione &quot;Experimente esta bisque de cogumelos verdes&quot; para adquirir o item «Bisque de cogumelos verdes»'],
                        ],
                    ],
                    [
                        'item_title' => 'Lembranças da Cidade Natal',
                        'history_title' => 'Lembranças de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Inspetor Cliff', 'coordinates' => '790, 1163', 'item_required' => null, 'instruction' => 'Fala com o NPC Inspetor Cliff (790, 1163), selecione &quot;Com o que você está se estressando?&quot; e irá obter o item &quot;Carta Anônima&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Herdeira dos Dragões',
                        'history_title' => 'O Sucessor do Dragão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '812, 1151', 'item_required' => null, 'instruction' => 'Fale com a NPC Lojista Rayona (812, 1151), selecione &quot;Você encontrou alguma coisa interessante ultimamente?&quot; e irá receber o item &quot;Túnca de Escamas de Dragão Áspera&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tarefa de Comida',
                        'history_title' => 'Caixa de Comida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => '&quot;Derrote Filhotes de Dragão Velho para obter cinco &lt;Osso de Filhote de Dragão&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'É Tão Bom Ser Falso',
                        'history_title' => 'É Tão Bom Ser Falso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '812, 1151', 'item_required' => null, 'instruction' => 'Vá até a Lojista Rayona (812, 1151) e compre o item &lt;Réplica de Antiguidade&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Soco de Gratidão',
                        'history_title' => 'Soco de Gratidão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '682, 1064', 'item_required' => null, 'instruction' => 'Vá até Lutador Muca (682, 1064) e clique na opção &#39;&#39;Pra que serve praticar...&#39;&#39;'],
                        ],
                    ],
                    [
                        'item_title' => 'Não É Uma Máquina de Vendas',
                        'history_title' => 'Não É Uma Máquina de Refrigerantes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '518, 410', 'item_required' => 'Talvez Haja Esperança', 'instruction' => 'Vá até o Transformador (518, 410) e clique na opção &quot;Bate o pé no aparelho&quot; para entrar no status [Talvez Haja Esperança].'],
                        ],
                    ],
                    [
                        'item_title' => 'Transmigração',
                        'history_title' => 'Transmigração',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote &quot;Caixa de Jóias Sem Valor&quot; (X:558, Y:954) para obter Rubi Amaldiçoado.'],
                        ],
                    ],
                    [
                        'item_title' => 'Super-homem',
                        'history_title' => 'Super-homem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Barriet', 'coordinates' => '791, 1130', 'item_required' => 'Treino de pernas', 'instruction' => 'Vá até o NPC Barriet (791, 1130) e escolha a opção &quot;Eu quero ter a capacidade de matar uma vaca com um soco&quot;, você irá receber um buff [Treino de pernas].'],
                        ],
                    ],
                    [
                        'item_title' => 'Suspiros no Vento',
                        'history_title' => 'Suspiros no Vento',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '500, 1125', 'item_required' => null, 'instruction' => 'Derrote &quot;Iaque do Cerrado&quot; (500, 1125) para adquirir &quot;Costela de iaque&quot;. Junte 10x.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ataque Amargo',
                        'history_title' => 'Ataque Amargo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos falar com Lilia, escolhendo a opção &quot;Precisa de ajuda?&quot;. Obtemos o buff &quot;Uma mão amiga&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Carvão é Melhor',
                        'history_title' => 'Carvão é Melhor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com Oxton e selecionamos &quot;Ouvi dizer que você descobriu uma maneira de cozinhar cogumelos verdes&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Pantano Sombrio',
                'slug' => 'saphael-pantano-sombrio',
                'description' => 'Mapa de Pantano Sombrio na região de Saphael.',
                'sort_order' => 25,
                'trivias' => [
                    [
                        'item_title' => 'Um Amigo em Perigo',
                        'history_title' => 'Um Amigo em Perigo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '130, 831', 'item_required' => null, 'instruction' => 'Fale com o NPC Líder da Equipe Comercial Bartley (130, 831) e selecione &quot;Suprimentos do transporte de resgate&quot; para receber Suprimentos de Emergência.'],
                        ],
                    ],
                    [
                        'item_title' => 'Negócio Engenhoso',
                        'history_title' => 'Negócio Engenhoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ecologista Ferola', 'coordinates' => '144, 423', 'item_required' => null, 'instruction' => 'Fale com a NPC Ecologista Ferola (144, 423) e selecione a opção &quot;Por Favor, empreste-me uma garrafa vazia&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Quero comer gelatina',
                        'history_title' => 'Quero comer gelatina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote &quot;Jelly-Coleho do Pantanal&quot; até obter o item &quot;Pedaços de Geleia Deliciosos&quot; -'],
                        ],
                    ],
                    [
                        'item_title' => 'Você me faz chorar',
                        'history_title' => 'Ele Choro por sua causa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ajudante Hess', 'coordinates' => '632, 169', 'item_required' => null, 'instruction' => 'Fale com o NPC Ajudante Hess (632, 169) e selecione &quot;Peça desculpa ao espírito d&#39;água&quot; para adquirir o item &quot;Lágrimas do espírito da água&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Último Desejo',
                        'history_title' => 'Último Desejo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá em 487, 1070 e ataque ao redor da área até adquirir o item &quot;Emblema de Columbus&quot; (é dropado em torno desse local em um baú).'],
                        ],
                    ],
                    [
                        'item_title' => 'Visão Embaçada',
                        'history_title' => 'Beleza Nevoenta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Viajante', 'coordinates' => '648, 177', 'item_required' => null, 'instruction' => 'Vá até o NPC Viajante (648, 177) e selecione a opção &quot;Olá, viajante.&quot; para adquirir o Guia Turístico do Pantano Sombrio.'],
                        ],
                    ],
                    [
                        'item_title' => 'Beba Mais Água',
                        'history_title' => 'Beba Mais Água',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '123, 830', 'item_required' => null, 'instruction' => 'Vá até Companheiro da Equipe comercial Ava (123,830) e clique na opção &#39;&#39;Entregue o jogo sobre a oportunidade comercial&#39;&#39; para obter o balde.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mesmo Assustado',
                        'history_title' => 'Mesmo Assustado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '542, 1078', 'item_required' => null, 'instruction' => 'Compre no lojista o ítem &quot;Disfarce Aterrorizante&quot;, em seguida vá até a localização (542, 1078) e use o ítem.'],
                        ],
                    ],
                    [
                        'item_title' => 'Justiça no Espírito',
                        'history_title' => 'Justiça no Espírito',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '280, 1100', 'item_required' => null, 'instruction' => 'Vá até o túmulo (280, 1100) para receber o status &quot;Justiça dos mortos vivos&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Venha Se Aliviar do Calor no Reino Espiritual',
                        'history_title' => 'Venha Se Aliviar do Calor no Reino Espiritual',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Hendrick', 'coordinates' => '645, 155', 'item_required' => null, 'instruction' => 'Vá até o NPC Hendrick (645, 155) e escolha a opção &quot;Experiência de viagem de verão&quot; para obter &quot;Lista de Locais Espirituais&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lendas são apenas Lendas',
                        'history_title' => 'Lendas são apenas Lendas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferola', 'coordinates' => '144, 423', 'item_required' => null, 'instruction' => 'Vá até a NPC Ferola (144, 423) e escolha a opção &quot;Turnê do pacote da experiência da Água da Fonte da Juventude&quot; para receber Garrafa de Experimento Vazia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pensamentos Incontroláveis',
                        'history_title' => 'Pensamentos Incontroláveis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '489, 1119', 'item_required' => null, 'instruction' => 'Vá até (489, 1119) e derrote &lt;Mala Encharcada&gt; para obter &quot;Retrato de Família Encharcado&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Olhos de Aranha',
                        'history_title' => 'Olhos de Aranha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '107, 33', 'item_required' => null, 'instruction' => 'Vá até (107, 33) e fale com &quot;Ossos espalhados&quot;, escolha a opção &quot;Você acabou de dizer alguma coisa?&quot; para receber Carta Amarelada.'],
                        ],
                    ],
                    [
                        'item_title' => 'Salvador de Negócios',
                        'history_title' => 'Equipe Comercial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '645, 155', 'item_required' => 'Câmera de Vídeo', 'instruction' => 'Converse com Hendrick (645, 155)e selecione a opção &quot;E o seu plano é....?&quot; para adquirir [Câmera de Vídeo].'],
                        ],
                    ],
                    [
                        'item_title' => 'As Máquinas são Versáteis!',
                        'history_title' => 'As Máquinas são Versáteis!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '629, 168', 'item_required' => null, 'instruction' => 'Vamos até Moson e ao falar com ele selecionamos a opção &quot;Os mechas são oniscientes?&quot;. Agora vamos até Hess (629, 168).'],
                        ],
                    ],
                    [
                        'item_title' => 'Por que você está gritando??',
                        'history_title' => 'Por que você está gritando??',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com Heidi e escolhemos a opção &quot;O que você está fazendo?&quot;. Vamos acumular um buff, então faremos isso 5 vezes.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Bosque de Gaia',
                'slug' => 'saphael-bosque-de-gaia',
                'description' => 'Mapa de Bosque de Gaia na região de Saphael.',
                'sort_order' => 26,
                'trivias' => [
                    [
                        'item_title' => 'Batalha Clássica',
                        'history_title' => 'Batalha Clássica',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Paladino Gerham', 'coordinates' => '570, 120', 'item_required' => null, 'instruction' => 'Fale com o NPC Paladino Gerham (570, 120) e selecione a opção &quot;Eu quero assistir a competitivos esportes antigos&quot; para receber o item &quot;Ruína de Monumento Antigo&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Onde Está a Deusa?',
                        'history_title' => 'Onde Está a Deusa?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oficial da Defesa Karen', 'coordinates' => '203, 243', 'item_required' => null, 'instruction' => 'Fale com o NPC Oficial da Defesa Karen (203, 243) e selecione a opção &quot;Por favor, empreste-me um machado que ainda não foi usado&quot; para receber &quot;Machado Enferrujado&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sonolência Repentina',
                        'history_title' => 'Sonolência Repentina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '231, 185', 'item_required' => 'Sou um Guarda de Patrulha', 'instruction' => 'Fale com o NPC Soldado da Defesa Miluan (231, 185) e selecione &quot;Eu posso ajudá-lo a patrulhar&quot; para receber o estado [Sou um Guarda de Patrulha] (dura 5min)'],
                        ],
                    ],
                    [
                        'item_title' => 'Nativo de Gaia',
                        'history_title' => 'Minha nacionalidade é Gaiya',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '564, 130', 'item_required' => 'Energia de Gaia', 'instruction' => 'Fale com o NPC Profeta do Senado Borg (564, 130) e selecione &quot;Eu quero sentir a energia de Gaea&quot; para receber o estado [Energia de Gaia] (dura 5min) e o item [Pedra da manifestação maligna].'],
                        ],
                    ],
                    [
                        'item_title' => 'Gosto de Frango',
                        'history_title' => 'Sabor de Frango',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote o monstro Minhoca de Gaia até dropar o item &quot;Carne de Inseto Suculenta&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Desejo do Guerreiro',
                        'history_title' => 'Desejo do Guerreiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até a localização 1115, 1055 e ataque ao redor da área até adquirir o item &quot;Adaga Velha&quot; (é dropado em torno desse local em uma planta espinhosa).'],
                        ],
                    ],
                    [
                        'item_title' => 'Teste de Amor',
                        'history_title' => 'Teste de Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '148, 226', 'item_required' => null, 'instruction' => 'Fale com NPC Sábio Nia (148, 226) e selecione &quot;Que cheiro bom é esse?&quot; para obter o item &lt;Pacote de biscoitos de Gaia&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dever de Inspeção',
                        'history_title' => 'Inspeção de Rotina',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '202, 146', 'item_required' => null, 'instruction' => 'Fale com Intendente Tarsa (202, 146) e selecione &quot;Por que você está franzindo a testa?&quot; para obter &lt;Lista de Inspeção&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Treino Religioso',
                        'history_title' => 'Treino Religioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '304, 647', 'item_required' => 'Flores Cheirosas', 'instruction' => 'Fale com o NPC Clérigo Alphat (304, 647) e selecione em &quot;Não é perigoso andar só por aqui?&quot; para entrar no status [Flores Cheirosas] - dura 2 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mensageiro do Kung Fu',
                        'history_title' => 'Mensageiro Kung Fu',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '993, 991', 'item_required' => 'Poder de Lin', 'instruction' => 'Fale com o NPC Mestre do Chi Oriental Lin (993, 991) e selecione em &quot;Eu posso representar você e desafiar outra escola!&quot; para entrar no status [Poder de Lin] - dura 15 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Segredo da Cozinha Deliciosa',
                        'history_title' => 'O Segredo da Cozinha Deliciosa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Nia', 'coordinates' => '148, 226', 'item_required' => null, 'instruction' => 'Fale com o NPC Nia (148, 226) e selecione a opção &quot;Você quer cozinhar de novo?&quot; para receber Tesouras Grandes.'],
                        ],
                    ],
                    [
                        'item_title' => 'Que Romance Você Está Lendo?',
                        'history_title' => 'Que Romance Você Está Lendo?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Alphat', 'coordinates' => '300, 653', 'item_required' => null, 'instruction' => 'Vá até o NPC Alphat (300, 653) e selecione a opção &quot;Tire o seu romance&quot; para obter o item Livro com Lacre Mágico.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sussurros no Vento',
                        'history_title' => 'Sussurros no Vento',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Paladino Gerham', 'coordinates' => '570, 120', 'item_required' => null, 'instruction' => 'Fale com o NPC Paladino Gerham (570, 120) e selecione a opção &quot;BOOO!&quot; para obter Miçanga da Memória.'],
                        ],
                    ],
                    [
                        'item_title' => 'Feijões Mágicos',
                        'history_title' => 'Feijões Mágicos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '661, 57', 'item_required' => null, 'instruction' => 'Vá até (661, 57) até aparecer no chat gritar &quot;Uma trepadeira apareceu de repente&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Inseto Trapaceiro',
                        'history_title' => 'Inseto Trapaceiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Nos dirigimos até Randall e ao falar com ele escolhemos &quot;Olha! Há vermes aqui!&quot;. Obteremos o buff &quot;Mentiroso&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sopa de Peixe da Deusa',
                        'history_title' => 'Sopa de Peixe da Deusa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos até onde Beltrán está, interagimos com ele e escolhemos a opção &quot;Qual é a melhor comida da região?&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Deserto do Vento Abrasador',
                'slug' => 'saphael-deserto-do-vento-abrasador',
                'description' => 'Mapa de Deserto do Vento Abrasador na região de Saphael.',
                'sort_order' => 27,
                'trivias' => [
                    [
                        'item_title' => 'Como Chuva no Deserto',
                        'history_title' => 'Como Chuva no Deserto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '580, 162', 'item_required' => null, 'instruction' => 'Fale com o NPC Investigador Perito Benson (580, 162) e selecione a opção &quot;Fonte de água preciosa&quot; para adquirir o item &quot;Garrafa de Água de Benson&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Miragem',
                        'history_title' => 'Miragem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '623, 174', 'item_required' => null, 'instruction' => 'Fale com a NPC Consultora Científica Mina (623, 174) e selecione a opção &quot;Eu ouvi que você sabe alguns pontos secretos de interesse&quot; para adquirir o item &quot;Localizador de Visões&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sem desperdiçar comida',
                        'history_title' => 'Sem desperdiçar comida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '643, 435', 'item_required' => null, 'instruction' => 'Fale com o NPC Fantasma Vagante (643, 435) e selecione &quot;Sobre a comida refinada&quot; para começar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Escavador Mutante Ladrão Terrível',
                        'history_title' => 'Os Ladrões Loucos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '857, 182', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (857, 182) ou (764, 208) e destrua o pote vermelho.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mau Gosto do Grande Ferreiro',
                        'history_title' => 'Maus Hábitos do Mestre Artesão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '708, 160', 'item_required' => null, 'instruction' => 'Fale com Líder da Equipe Protetora Baharo (708, 160) e selecione &quot;Eu preciso inspecionar a grande ponte?&quot; para adquirir o item &quot;Mapa da Grande Ponte Rachada&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bebida Privada do Deserto',
                        'history_title' => 'Bebida Particular na Areia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Quebre o baú de tesouro vermelho em torno da localização 135, 475 para obter o item &quot;Fruta de Cacto&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Trabalhador Mensageiro Sprite',
                        'history_title' => 'Trabalhador Mensageiro Sprite',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '564, 165', 'item_required' => null, 'instruction' => 'Fale com NPC Líder da Equipe Comercial Arut (564, 165) e selecione &quot;Talvez, eu possa entregar algumas mercadorias&quot; para obter &lt;Cartão de nome temporário&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'É Sempre O Dinheiro',
                        'history_title' => 'É Sempre Questão de Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Guerreiros de Bath', 'instruction' => 'Derrote «Guerreiros de Bath» ou «Demônios de Bath» até conseguir 3x &lt;Fragmento de Metal&gt;'],
                        ],
                    ],
                    [
                        'item_title' => 'Mais Miragens',
                        'history_title' => 'Mais Miragens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Experiência de Miragem', 'instruction' => 'Ande pelo mapa todo até ativar anúncios no chat Gritar &quot;A cena que surgiu no deserto desaparece à medida que você se aproxima&quot; para obter o status [Experiência de Miragem] - dura 1 hora.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lutador do Deserto',
                        'history_title' => 'Duelador do Deserto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Guerreiros da Pedra Bath', 'instruction' => 'Derrote «Guerreiros da Pedra Bath» e «Guardas da Pedra Bath» até obter &lt;Placa Gravada&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Tio Ama Seus Docinhos',
                        'history_title' => 'O Tio Ama Seus Docinhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '605, 175', 'item_required' => null, 'instruction' => 'Vá até (605, 175) e mate &quot;Rebento de Ameixeira Místico&quot; (ele fica aparecendo por essa região) para receber Ameixas Místicas.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só Pode Ser Visto de Longe',
                        'history_title' => 'Só Pode Ser Visto de Longe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mina', 'coordinates' => '623, 174', 'item_required' => null, 'instruction' => 'Vá até o NPC Mina (623, 174) e selecione a opção &quot;Por que você está triste ultimamente?&quot; para receber o buff &quot;Procurando&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Outro Eu',
                        'history_title' => 'Outro Eu',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Mesiccan', 'coordinates' => '663, 120', 'item_required' => null, 'instruction' => 'Vá até o NPC Mesiccan (663, 120) e selecione a opção &quot;Você encontrou algum tesouro interessante recentemente?&quot; para receber Chave Milenar. Vá até (343, 422)'],
                        ],
                    ],
                    [
                        'item_title' => 'Salto Voador! Mensageiro de Sprite!',
                        'history_title' => 'Voe! Mensageiro de Sprite!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Phils', 'coordinates' => '865, 173', 'item_required' => null, 'instruction' => 'Vá até o NPC Phils (865, 173) e selecione a opção &quot;Enquanto eu tiver o coração, posso pular a ponte para o outro lado?&quot; para receber o buff &quot;Desafiando os Limites&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro Escondido!',
                        'history_title' => 'Tesouro Escondido!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '324, 323', 'item_required' => null, 'instruction' => 'Temos que falar com Messican, escolhemos a opção &quot;Ouvi dizer que você conhece a localização do tesouro lendário&quot;. Agora devemos ir para (324, 323).'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Mente Fria',
                        'history_title' => 'Uma Mente Fria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '781, 258', 'item_required' => null, 'instruction' => 'Interagimos com Yaji e escolhemos &quot;Você está ótimo(a)&quot;. Agora vamos para (781, 258) e obteremos o estado &quot;Uma mente fria&quot;'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Montanhas Perdidas',
                'slug' => 'saphael-montanhas-perdidas',
                'description' => 'Mapa de Montanhas Perdidas na região de Saphael.',
                'sort_order' => 28,
                'trivias' => [
                    [
                        'item_title' => 'Tarde Demais',
                        'history_title' => 'Tarde Demais',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '662, 712', 'item_required' => null, 'instruction' => 'Selecione a Placa de Rua (662, 712) e clique na opção &quot;Examinar as costas da placa de sinalização cuidadosamente&quot; para adquirir &quot;Mensagem Misteriosa&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Dádiva Ancestral',
                        'history_title' => 'Dádiva Ancestral',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '903, 197', 'item_required' => null, 'instruction' => 'Vá até às coordenadas (903,197) e procure pela &lt;Relíquia Inicial&gt; Baú do Guardião. Ataque-a e pegue o item Presa de Lobo Ancestral.'],
                        ],
                    ],
                    [
                        'item_title' => 'Souvenir Falsificado',
                        'history_title' => 'Souvenir Falsificado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Comerciante Ganancioso', 'coordinates' => '904, 648', 'item_required' => 'Vinho de rabo de iaque Huiy', 'instruction' => 'Fale com o Comerciante Ganancioso (904, 648) e selecione &quot;Comprou &#39;Especiaria Hu-Yi&#39; com 5 ouro&quot; para adquirir 3 itens [Vinho de rabo de iaque Huiy], [Vinho de iaque de Huiy] e [Vinho Olho de cerdo língua de urso]'],
                        ],
                    ],
                    [
                        'item_title' => 'Criança do Campo',
                        'history_title' => 'Criança do Campo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '436, 96', 'item_required' => 'Lobos!', 'instruction' => 'Fale com o NPC Criança Peoa (436, 96) e selecione &quot;Olhe! Os lobos estão vindo!&quot; para receber o estado [Lobos!]'],
                        ],
                    ],
                    [
                        'item_title' => 'Psicocinese Legendária?!',
                        'history_title' => 'O Psíquico Lendário?!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '837, 690', 'item_required' => null, 'instruction' => 'Fale com o NPC Adolescente da Montanha Hawkfeather (837, 690) e selecione &quot;Você já ouviu falar da arte secreta de Tigara?&quot; para obter o buff &quot;Erupção da Energia&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Antiga Canção do Chá',
                        'history_title' => 'A Antiga Melodia do Chá',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '835, 760', 'item_required' => null, 'instruction' => 'Fale com o NPC Chefe da Tribo Leão Kumahachi (835, 760) e selecione &quot;Ouvi você sussurrando alguma coisa. De que se trata?&quot; para obter o buff &quot;Zunindo a Canção do Chá&quot; (dura 10 minutos).'],
                        ],
                    ],
                    [
                        'item_title' => 'Agenda Oculta',
                        'history_title' => 'Agenda Oculta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '845, 592', 'item_required' => 'Amigos de batalhas', 'instruction' => 'Fale com Guarda de Tigara Kadora (845, 592) e selecione &quot;Qual seu problema com estranhos?&quot; para receber o status [Amigos de batalhas] - dura 10 min.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Poeta Fica doido',
                        'history_title' => 'O Poeta Fica Viajando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '925, 639', 'item_required' => null, 'instruction' => 'Vá até o Lojista Plum (925, 639) e compre o item &lt;Coleção de Poesia do Monte Huyi&gt;.'],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '830, 224', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (830, 224) e derrube a caixa de tesouro que está entre as duas tendas para obter o item &lt;Livro Bizarro&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Tal de &quot;Skill Suprema&quot;',
                        'history_title' => 'A Tal de &quot;Skill Suprema&quot;',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Hawkfeather', 'coordinates' => '839, 691', 'item_required' => null, 'instruction' => 'Fale com o NPC Hawkfeather (839,691) e selecione a opção &quot;Deixe-me ver sua skill assassina!&quot; para receber o buff &quot;Amor Flexível&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Chega o Herói para Salvar o Dia',
                        'history_title' => 'Chega o Herói para Salvar o Dia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tigertrail', 'coordinates' => '873, 755', 'item_required' => null, 'instruction' => 'Fale com o NPC Tigertrail (873, 755) e selecione a opção &quot;Ouvi dizer que há um hooligan na aldeia chamada Barke.&quot; para receber o buff &quot;Nascido para Liderar&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Quero que Você me Queira',
                        'history_title' => 'Quero que Você me Queira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '393, 262', 'item_required' => null, 'instruction' => 'Vá até o Comerciante Ambulante (393, 262) e compre o item &quot;O Príncipe Prepotente Me Ama&quot; e use para receber o buff &quot;Punição Tensa&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Saphael, o Prodígio',
                        'history_title' => 'Saphael, o Prodígio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Xin', 'coordinates' => '362, 985', 'item_required' => null, 'instruction' => 'Vá até o NPC Xin (362, 985) e selecione a opção &quot;Você quer aprender um com o outro?&quot; para receber 2 buffs Inspirações Esfuziantes e Consideração de 70 segundos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Captura de Vontade',
                        'history_title' => 'Uma Captura de Vontade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Nos dirigimos até Hwasha e falamos com ele. Escolhemos a opção &quot;Posso pegar emprestada uma vara de pescar?&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Absurdo Completo',
                        'history_title' => 'Absurdo Completo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Interaja com Plum e escolha a opção &quot;Quero falar com os animais&quot;, você receberá a Poção de Transformação de Animais.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Saphael',
                'name' => 'Cordilheira Blakatoa',
                'slug' => 'saphael-cordilheira-blakatoa',
                'description' => 'Mapa de Cordilheira Blakatoa na região de Saphael.',
                'sort_order' => 29,
                'trivias' => [
                    [
                        'item_title' => 'Ritual Abominável',
                        'history_title' => 'Ritual Abominável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '81, 148', 'item_required' => null, 'instruction' => 'Fale com o NPC Feiticeiro Eremita Rawasha (81, 148) e selecione a opção &quot;Dê-me o Livro de Invocações de Alechi&quot; para receber o item &quot;Livro de Invocações de Alechi&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mão Protetora',
                        'history_title' => 'Mão Protetora',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até as coordenadas 1211, 1030 ou próximo delas e procure um pote vermelho. Destrua o pote para conseguir o item &quot;Anel Vórtex Mortal&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Ponto Secreto - Deus Monstro? Certificado que deus monstro...',
                        'history_title' => 'Deus Maligno! Deus Maligno Fracote!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Seguidores Deus do Fogo', 'instruction' => 'Derrote monstros do tipo [Seguidores Deus do Fogo] até obter o item [Oferenda ao Deus do Fogo]'],
                        ],
                    ],
                    [
                        'item_title' => 'Modo de Cozinhar',
                        'history_title' => 'Modo de Cozinhar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '613, 657', 'item_required' => 'Carne Estranha', 'instruction' => 'Vá até as coordenadas (613, 657) e destrua o pot para obter o item [Carne Estranha]'],
                        ],
                    ],
                    [
                        'item_title' => 'Pioneiro da Pesquisa Geotérmica',
                        'history_title' => 'Pioneiro da Pesquisa Geotérmica',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '917, 531', 'item_required' => null, 'instruction' => 'Fale com o NPC &lt;Maquinista&gt;Lada (917, 531) e selecione &quot;Não requer relaxar um pouco nas fontes termais?&quot; para obter o item &quot;Cinzel das Águas Termais&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Especialista em Terapia das Pedras Quentes',
                        'history_title' => 'Especialista em Terapia das Pedras Quentes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ataque o cristal vermelho na localização 995, 436 para obter o item &quot;Pedra Estranha&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Alegria de Conquistas',
                        'history_title' => 'Alegria de Conquistas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '899, 542', 'item_required' => null, 'instruction' => 'Vá até o NPC Cavaleiro Pretoriano Dianteiro Kironaya (899, 542) e selecione &quot;O que você tem aí na sacola?&quot; para obter &lt;Algodão Doce&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mundo Jurássico',
                        'history_title' => 'Mundo Jurássico',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Dragão Veloz Alechi', 'instruction' => 'Derrote «Dragão Veloz Alechi» e «Dragão Garra Caçador» para adquirir o status [Dragão Veloz Capturado!]. Acumule o status 20 vezes.'],
                        ],
                    ],
                    [
                        'item_title' => 'Retocar Fotos',
                        'history_title' => 'Fotos Retocadas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '949, 491', 'item_required' => null, 'instruction' => 'Fale com NPC Arqueólogo Annec (949, 491) e selecione &quot;Ouvi dizer que você tem uma câmera excelente&quot; para adquirir &lt;Câmera Sofisticada&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Direções Cardinais e Relativas',
                        'history_title' => 'Direções Cardinais e Relativas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '950, 414', 'item_required' => null, 'instruction' => 'Fale com o NPC &lt;Caçador de Demônios&gt; Mott (950, 414) e selecione &quot;Eu vi o seu parceiro!&quot; para obter &lt;Coordenadas de Mott&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Deveria Procurar Ajuda Profissional',
                        'history_title' => 'Você Deveria Procurar Ajuda Profissional',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '129, 28', 'item_required' => null, 'instruction' => 'Vá até (129, 28) e derrote &lt;Cristal Misterioso&gt; para receber Atadura Mística.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ainda Está Fresco',
                        'history_title' => 'Ainda Está Fresco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sihato', 'coordinates' => '840, 547', 'item_required' => null, 'instruction' => 'Vá até o NPC Sihato (840, 547) e selecione a opção &quot;Seu ajudante George parece querer renunciar&quot; para receber &quot;Fígado de Porco Fresco&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dinheiro não compra Amor',
                        'history_title' => 'Dinheiro não compra Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lojista Cota', 'coordinates' => '923, 528', 'item_required' => null, 'instruction' => 'Vá até o NPC Lojista Cota (923, 528) e selecione a opção &quot;Você realmente vende alguma coisa?&quot; 5 vezes.'],
                        ],
                    ],
                    [
                        'item_title' => 'Fofoca Incurável',
                        'history_title' => 'Fofoca Incurável',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Scully', 'coordinates' => '442, 139', 'item_required' => null, 'instruction' => 'Vá até o NPC Scully (442, 139) e selecione a opção &quot;O que você acha do seu parceiro?&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Como Engenheiro',
                        'history_title' => 'Como Engenheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '984, 507', 'item_required' => null, 'instruction' => 'Nós nos dirigimos a Anik e falamos com ele, selecionamos a opção &quot;O que acontece com essa ferramenta letal?&quot; Agora vamos até Tabamoore (984, 507),'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'falamos com ele e escolhemos &quot;São essas as suas ferramentas?&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Na Realidade estou quente!',
                        'history_title' => 'Na Realidade estou quente!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '915, 531', 'item_required' => null, 'instruction' => 'Falamos com Sihato, na opção &quot;Você não está quente ao lado do magma?&quot; Vamos até Cota (915, 531) e selecionamos a opção &quot;Preciso de uma bebida refrescante&quot;'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Pegamos as Bebidas Refrescantes, voltamos para Sihato e ao falar com ele escolhemos &quot;Você realmente quer manter a calma?&quot;.'],
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
                'sort_order' => 30,
                'trivias' => [
                    [
                        'item_title' => 'Novo e Melhorado',
                        'history_title' => 'Novo e Melhorado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Era', 'coordinates' => '246, 405', 'item_required' => null, 'instruction' => 'Fale com Era (246, 405) e selecione &quot;Eu vou te dar 10 ouros pela receita bizarra&quot; para receber o Item Receita Bizarra.'],
                        ],
                    ],
                    [
                        'item_title' => 'Oportunista',
                        'history_title' => 'Oportunista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Adami', 'coordinates' => '692, 397', 'item_required' => null, 'instruction' => 'Fale com Adami (692, 397) e selecione &quot;Me disfarce de soldade inseto.&quot; para receber o status &quot;Disfarce de Soldado Inseto&quot; por cinco minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Diga ao chefe que não há imagens',
                        'history_title' => 'Diga ao chefe que não há imagens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '392, 212', 'item_required' => 'Pá Olho de Siri', 'instruction' => 'Fale com o NPC Olho de Siri (392, 212) e selecione &quot;Por que você parece tão empolgado?&quot; para adquirir o item «Pá Olho de Siri».'],
                        ],
                    ],
                    [
                        'item_title' => 'Chá Calmante de Ervas',
                        'history_title' => 'Chá Calmante de Ervas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marcus', 'coordinates' => '250, 411', 'item_required' => 'Água Fervente', 'instruction' => 'Fale com o NPC Marcus (250,411) e selecione &quot;Por favor, me dê um pouco d&#39;água&quot; para adquirir o item «Água Fervente».'],
                        ],
                    ],
                    [
                        'item_title' => 'A guerra começou',
                        'history_title' => 'Acenda o Farol de Guerra',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ando', 'coordinates' => '292, 150', 'item_required' => null, 'instruction' => 'Fale com o NPC Ando (292, 150) e selecione &quot;O que você acha da ocupação dos Insetos no porto vital?&quot; para adquirir o item &quot;Madeira&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Novo e Melhorado',
                        'history_title' => 'Hamburguer de Siri Mais Delicioso Ainda',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '248, 408', 'item_required' => null, 'instruction' => 'Fale com Ancião da Ilhota Marcus (248, 408) e selecione &quot;Você não se cansa de comer Hambúrgueres de Siri Deliciosos?&quot; para adquirir os itens &quot;Hambúrguer de Siri Delicioso&quot; e &quot;Receita: Hambúrguer de Siri Brilhante&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Memórias das Cinzas',
                        'history_title' => 'Memórias das Cinzas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '612, 518', 'item_required' => null, 'instruction' => 'Destrua um vaso vermelho nas coordenadas (612, 518) para obter &lt;Boneco Completo&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esqueci que ele voava...',
                        'history_title' => 'Esqueci que ele voava...',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote o mob &quot;Inseto Mutante&quot; até adquirir &quot;Líquido Super Pegajoso&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pare com isso',
                        'history_title' => 'Pare',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '621, 531', 'item_required' => null, 'instruction' => 'Vá até Comerciante de Armas Stony (621, 531) e selecione a opção &quot;Deixe-me experimentar o inseticida que você falou!&quot; para adquirir &quot;Inseticida&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Se não consegue proteger, destrua!',
                        'history_title' => 'Se não consegue proteger, destrua!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '250, 410', 'item_required' => null, 'instruction' => 'Vá até Ancião da Ilhota Marcus (250, 410) e selecione a opção &quot;Fique sabendo que há escavadores mutantes de novo&quot; para adquirir &quot;bomba à prova d&#39;água&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Brilha, Brilha, Estrelinha....',
                        'history_title' => 'Brilha, Brilha, Estrelinha....',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '294, 144', 'item_required' => null, 'instruction' => 'Vá até Astróloga Kiriala (294, 144) e selecione a opção &quot;O que os astrólogos fazem geralmente?&quot; Para adquirir o status &quot;contando estrelas&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma vaga existência',
                        'history_title' => 'Uma vaga existência',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '387, 213', 'item_required' => null, 'instruction' => 'Falamos com o Monitor de Sapos e escolhemos &quot;As pessoas realmente não têm notado você?&quot;, então teremos que falar com Vicenzo (387, 213), Gibelle (388, 219) e Amilcar (388, 215), escolhendo a opção &quot;Você já reparou no Crabye?&quot;.'],
                            ['step_number' => 2, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Em seguida, voltamos a falar com o Monitor de Sapos e escolhemos &quot;Ninguém realmente tem notado você&quot;.'],
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
                'sort_order' => 31,
                'trivias' => [
                    [
                        'item_title' => 'Aprendendo Uma Língua Nova',
                        'history_title' => 'Aprendendo Uma Língua Nova',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Estranha Língua Treant', 'instruction' => 'Derrote o &lt;Orador Primitivo&gt; Homem-Árvore Velha Amaldiçoada (localizações: 239, 303 | 237, 305 | 269, 228 | 225, 153) para receber o status [Estranha Língua Treant] - dura 5 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Coroa do Rei Defunto',
                        'history_title' => 'A Coroa do Rei Defunto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Bata no pote na coordenada 452, 631 até dropar o item Coroa Suja de Sangue.'],
                        ],
                    ],
                    [
                        'item_title' => 'Águas Termais do Crocodilo',
                        'history_title' => 'Águas Termais do Crocodilo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Crocodilo Sanguinário até obter o item &lt;Escama de Crocodilo Mãe&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'É errado estar certo demais',
                        'history_title' => 'Nem tão certo assim',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Armstrong', 'coordinates' => '380, 443', 'item_required' => null, 'instruction' => 'Fale com o NPC Armstrong (380, 443) e selecione &quot;Vim buscar suas encomendas para a Coronel Jessica&quot; para adquirir o item &lt;Lancheira de Amor&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Que Linda Raflésia',
                        'history_title' => 'Que Linda Raflésia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Rei Ninfo Carnívoro', 'instruction' => 'Derrote «Rei Ninfo Carnívoro» até conseguir o item &lt;Linda Raflésia&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só Ilusão',
                        'history_title' => 'É tudo uma ilusão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Arquimago Árvore Sábia Ilusória', 'instruction' => 'Derrote «Arquimago Árvore Sábia Ilusória» até acumular 10 vezes o status [Ilusão Assustadora] - dura 5 min.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coleção de Aventuras',
                        'history_title' => 'Coleção de Aventuras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jody', 'coordinates' => '288, 334', 'item_required' => null, 'instruction' => 'Vá até Jody (288, 334) e selecione &quot;Como está o grande final do seu livro?&quot; para receber o status &quot;Solicitação de Materiais&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Batidinhas',
                        'history_title' => 'Batidinhas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '236, 341', 'item_required' => 'Relógio de bolso intacto', 'instruction' => 'Vá até as coordenadas (236, 341) e derrote &lt;Crocodilo Vivido&gt; para adquirir o item [Relógio de bolso intacto].'],
                        ],
                    ],
                    [
                        'item_title' => 'Perdeu a Graça',
                        'history_title' => 'Perdeu a Graça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Rapé Louco', 'instruction' => 'Derrote os monstros &lt;Soldado Vinha Venenosa Furiosa&gt; para adquirir o ítem [Rapé Louco] x10.'],
                        ],
                    ],
                    [
                        'item_title' => 'Síndrome de Princesa',
                        'history_title' => 'Síndrome de Princesa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '379, 480', 'item_required' => 'Bolinho de Arroz Maravilhoso', 'instruction' => 'Vá até o NPC Magnata Roberto (379, 480) e selecione a opção &quot;A sua filha saiu correndo para brincar de novo?&quot; para obter o ítem [Bolinho de Arroz Maravilhoso].'],
                        ],
                    ],
                    [
                        'item_title' => 'Consciência Pesada?',
                        'history_title' => 'Consciência Pesada?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Bolsa de Aura Maléfica', 'instruction' => 'Vá até as cordenadas 137, 489 e derrote os monstros &lt;Soldado Árvore Sábia Perversa&gt; para adquirir os itens [Bolsa de Aura Maléfica] x1 e o item [Folha Grande da Árvore Sábia] x5.'],
                        ],
                    ],
                    [
                        'item_title' => 'É só lixo',
                        'history_title' => 'É só lixo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '403, 138', 'item_required' => null, 'instruction' => 'Falamos com Homi na opção &quot;Sobre os tesouros&quot;. Vamos para (403, 138)'],
                        ],
                    ],
                    [
                        'item_title' => 'As lendas não são rivais para mim.',
                        'history_title' => 'As lendas não são rivais para mim.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '392, 450', 'item_required' => null, 'instruction' => 'Falamos com Shannon e escolhemos &quot;Dizem que você é quase imune aos ataques dos monstros?&quot;, ele nos dará um bônus. Agora iremos para (392, 450) sem receber nenhum golpe para obter o bônus &quot;Maior que a lenda&quot;. Voltamos para Shannon e ao falar com ele escolhemos &quot;Eu ganhei!&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Deserto de Kaslow',
                'slug' => 'abertura-do-tempo-deserto-de-kaslow',
                'description' => 'Mapa de Deserto de Kaslow na região de Abertura do Tempo.',
                'sort_order' => 32,
                'trivias' => [
                    [
                        'item_title' => 'Quem Jogou a Dinamite?',
                        'history_title' => 'Quem Jogou a Dinamite?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '522, 438', 'item_required' => 'Soldados Homem-Besta Canhoneiro', 'instruction' => 'Derrote os «Soldados Homem-Besta Canhoneiro» nas coordenadas (522,438) até dropar o item &lt;Bomba com Rastilho.&gt;'],
                        ],
                    ],
                    [
                        'item_title' => 'Volte A Dormir',
                        'history_title' => 'Volte A Dormir',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '555, 685', 'item_required' => null, 'instruction' => 'Bata nos potes próximos as coordendas (555, 685) ou em Ruínas da Tribo Goblin até receber 5x &lt;Fragmentos de Boneco Guerreiro&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Me chame de Irmã',
                        'history_title' => 'Me chame de Irmã',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '117, 438', 'item_required' => null, 'instruction' => 'Fale com o NPC Barqueiro Rebelde Modesto (117, 438) e selecione &quot;Sobre Daisy&quot; para adquirir o item &lt;Convite para Poção do Pulo&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Filho Filial',
                        'history_title' => 'Choque de Gerações',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '801, 741', 'item_required' => null, 'instruction' => 'Fale com o NPC Mordomo Tomas (801, 741) e selecione &quot;Ajude-me a experimentar essa sopa de galinha&quot; para adquirir o item &lt;Canja de galinha caseira&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Família Desaparecida! Por favor, ajude!',
                        'history_title' => 'Ajude na Busca pela Família Desaparecida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '807, 720', 'item_required' => null, 'instruction' => 'Destrua 3 caixas do tesouro vermelhas perto da localização (807, 720) para conseguir os itens &lt;Foto de Família Feliz&gt;, &lt;Caixa de Brinquedo Quebrada&gt; e &lt;Árvore de Família Quebrada&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cartucho de Artilharia, Muito Cuidado',
                        'history_title' => 'Manuseie o Cartucho de Artilharia Com Cuidado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Soldado Homem-Besta Artilheiro', 'instruction' => 'Derrote vários «Soldado Homem-Besta Artilheiro», «Soldado Homem-Besta Canhoeneiro» ou «Soldado Homem-Besta Artilheiro do Purgatório» até conseguir 5x &lt;Cartucho de Artilharia Grande&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Conexão Diferente',
                        'history_title' => 'Uma Conexão Diferente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '230, 626', 'item_required' => 'Fantasma da Infância', 'instruction' => 'Fale com Barqueiro Rebelde Sinval (230, 626) na opção &quot;Me fale sobre a sua infância infeliz.&quot; para obter o status [Fantasma da Infância].'],
                        ],
                    ],
                    [
                        'item_title' => 'Confabulador',
                        'history_title' => 'Confabulador',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '500, 700', 'item_required' => 'Pá Durável', 'instruction' => 'Vá até as coordenadas (500, 700) e procure um jarro vermelho, destrua-o para adquirir o ítem [Pá Durável].'],
                        ],
                    ],
                    [
                        'item_title' => 'Nascido do Amor',
                        'history_title' => 'Nascido do Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '745, 466', 'item_required' => 'Semente Preciosa', 'instruction' => 'Vá até o NPC Comerciante de Armaduras Tardemir (745,466) e selecione a opção &#39;&#39;Já notei que você e Elsy estão apaixonados um pelo outro!&#39;&#39; para obter o item [Semente Preciosa].'],
                        ],
                    ],
                    [
                        'item_title' => 'Churrasco é Uma Delícia',
                        'history_title' => 'Churrasco é Uma Delícia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Coxa Ave de Fogo', 'instruction' => 'Mate o mob &lt;Pássaro Solar do Deserto&gt; até obter o item [Coxa Ave de Fogo]. Dica: Pegue várias Coxas ave de fogo.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Entretenimento Restante',
                        'history_title' => 'O Entretenimento Restante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '177, 663', 'item_required' => 'Baqueta do Hopp', 'instruction' => 'Vá até o NPC Capitão de Guarda do Corredor Hoppe (177,663) e selecione a opção &#39;&#39;Não é um tédio ficar aqui só?&#39;&#39; para obter o item [Baqueta do Hopp].'],
                        ],
                    ],
                    [
                        'item_title' => 'Um especialista.',
                        'history_title' => 'Um especialista.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '471, 505', 'item_required' => null, 'instruction' => 'Vamos falar com Jideli e escolher a opção &quot;Você não sente calor ao lado de uma casa em chamas?&quot;. Receberemos um bônus e devemos ir para (471, 505), esperar alguns segundos até que a conquista seja concluída.'],
                        ],
                    ],
                    [
                        'item_title' => 'Militar Relaxado',
                        'history_title' => 'Militar Relaxado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '844, 407', 'item_required' => null, 'instruction' => 'Falamos com Frantik e escolhemos a opção &quot;Você pode ser ouvido falando tão alto?&quot;. Perguntamos ao Guarda Rebelde (844, 407), escolhendo &quot;Na verdade, você não consegue ouvir o que ele está dizendo&quot;. Em seguida, conversamos novamente com Frantik, escolhendo a opção &quot;Diga a verdade&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Península da Aflição',
                'slug' => 'abertura-do-tempo-pen-nsula-da-afli-o',
                'description' => 'Mapa de Península da Aflição na região de Abertura do Tempo.',
                'sort_order' => 33,
                'trivias' => [
                    [
                        'item_title' => 'O Cogumelo Venenoso',
                        'history_title' => 'O Cogumelo Venenoso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Bata nos cogumelos (próximos a 744, 500) até receber &lt;Estranho Cogumelo A&gt;, &lt;Estranho Cogumelo B&gt; e &lt;Estranho Cogumelo C&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Atos São Mais Fortes Que Mentiras',
                        'history_title' => 'Atos São Mais Fortes Que Mentiras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '291, 599', 'item_required' => null, 'instruction' => 'Vá até o Comerciante Ambulante (291, 599), e compre o item &lt;Água Benta da Nascente&gt; (custa 50g)'],
                        ],
                    ],
                    [
                        'item_title' => 'Qual o Problema?',
                        'history_title' => 'Membro Honorário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Local Kela', 'coordinates' => '697, 294', 'item_required' => null, 'instruction' => 'Fale com o NPC Local Kela (697, 294) e selecione &quot;Quero me juntar ao &quot;grupo de expedição Ilya&quot; para adquirir o item &lt;Estandarte de Clark&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Fãs nos Bastidores',
                        'history_title' => 'Ajudante dos Bastidores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Feiticeiro-Lagarto', 'instruction' => 'Derrote «Feiticeiro-Lagarto» até conseguir dropar o item &lt;Chifre de Guerra&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Nova Técnica de Forja de Espada',
                        'history_title' => 'Nova Tecnologia de Forjamento de Espada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ferreiro Charles', 'coordinates' => '728, 242', 'item_required' => 'Desejo de Armas Primorosas', 'instruction' => 'Fale com o NPC Ferreiro Charles (728, 242) e selecione &quot;Me desculpe, você tem alguma arma ou equipamento requintados?&quot; para entrar no status [Desejo de Armas Primorosas] - dura 30 segundos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Único Jeito de Lidar com Zumbis',
                        'history_title' => '101 Maneiras de Acabar com Zumbis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '406, 799', 'item_required' => null, 'instruction' => 'Fale com Tenente Real Tato (406, 799) e selecione &quot;Ouvi falar que você tem uma maneira especial de lidar com Zumbis&quot; para obter o item &lt;100 Maneiras de Acabar com Zumbis&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Doutrina de um Cavaleiro',
                        'history_title' => 'A Doutrina de um Cavaleiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '632, 264', 'item_required' => 'Consulta com os Cavaleiros', 'instruction' => 'Vá até Chefe Profeta Ancião Merlin (632, 264) e selecione &quot;Por que eles não punem os encrenqueiros no acampamento?&quot; para obter o status [Consulta com os Cavaleiros] - dura 10 min.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só Ele Consegue',
                        'history_title' => 'Só Ele Consegue',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Veneno de Escorpião Covarde', 'instruction' => 'Deixe que o mob &lt;Escorpião Covarde&gt; te bata para obter o status [Veneno de Escorpião Covarde].'],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '258, 188', 'item_required' => 'Cristal Térmico', 'instruction' => 'Vá até as cordenadas (258,188) e derrote os Monstros &lt;Besta Abrasante Imortal&gt; para adquirir o item [Cristal Térmico].'],
                        ],
                    ],
                    [
                        'item_title' => 'Salão de Beleza da Península',
                        'history_title' => 'Salão de Beleza da Península',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Culolo', 'coordinates' => '736, 318', 'item_required' => 'Uma Apresentação Imperdível', 'instruction' => 'Vá até o NPC Culolo e clique na opção &quot;Como você passa o tempo livre?&quot; para obter o status [Uma Apresentação Imperdível]. Em seguida vá até as coordenadas (736, 318) para completar a trívia. Atenção: Só pode ser completada Quinta-Feira.'],
                        ],
                    ],
                    [
                        'item_title' => 'Observe',
                        'history_title' => 'Observe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '716, 236', 'item_required' => null, 'instruction' => 'Conversamos com Jenny e escolhemos &quot;Caçador de demônios, por que você se esconde na cidade?&quot;, o que nos dará um aumento de estatísticas. Em seguida, vamos até Ilan (716, 236), conversamos com ela e selecionamos &quot;Você tem algum item interessante?&quot;. Agora temos um Imitador da Besta no peito, o levamos até (693, 320) e usamos o objeto.'],
                        ],
                    ],
                    [
                        'item_title' => 'Club de fans dos cavaleiros da chama branca',
                        'history_title' => 'Club de fans dos cavaleiros da chama branca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '716, 236', 'item_required' => null, 'instruction' => 'Vamos até onde está Alez, conversamos com ele e escolhemos &quot;Alguém quer o seu autógrafo&quot;, o que nos dará um objeto. Em seguida, levamos esse objeto até Ilan (716, 236), conversamos com ela e escolhemos &quot;Tenho a sua foto favorita do Alez autografada&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Montanha das Geleiras',
                'slug' => 'abertura-do-tempo-montanha-das-geleiras',
                'description' => 'Mapa de Montanha das Geleiras na região de Abertura do Tempo.',
                'sort_order' => 34,
                'trivias' => [
                    [
                        'item_title' => 'Problemas do Homem-Lagarto',
                        'history_title' => 'Problemas do Homem-Lagarto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Jelly-Coelho Cristal Vítreo', 'instruction' => 'Derrote «Jelly-Coelho Cristal Vítreo» (próximos às coordenadas 484, 316) até dropar o item &lt;Carne de Jelly-Coelho de Vidro&gt;, use-o para receber o status [Disfarce de Homem-Lagarto] - dura 5 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Silêncio Vale Ouro',
                        'history_title' => 'O Silêncio Vale Ouro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '418, 610', 'item_required' => null, 'instruction' => 'Fale com NPC Milícia de Granton Andy Hanks (418, 610) e selecione cinco vezes na oção &quot;Por que a sua irmã é tão importante para você?&quot;'],
                        ],
                    ],
                    [
                        'item_title' => 'O Sonho Mais Simples',
                        'history_title' => 'O Sonho Mais Simples',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Menino', 'coordinates' => '387, 491', 'item_required' => null, 'instruction' => 'Fale com o NPC Menino (387, 491) e selecione &quot;Deixe-me ajudar a realizar o seu sonho&quot; para adquirir o item &lt;Tanquinho do Garotinho&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não Brinque com o Fogo',
                        'history_title' => 'Não Brinque com o Fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Marinheiro Leeward', 'coordinates' => '580, 256', 'item_required' => null, 'instruction' => 'Fale com o NPC Marinheiro Leeward (580, 256) e selecione &quot;Dizem que o pássaro Kakate gosta de fogos de artifício?&quot; para adquirir o item &lt;Fogos de Artifício de Leward&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Peixe Grelhado Delicioso',
                        'history_title' => 'Peixe Grelhado Delicioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '262, 352', 'item_required' => null, 'instruction' => 'Fale com Pescador Diligente Rodney (262, 352) e selecione &quot;Onde eu posso pegar um peixe roliço?&quot; para adquirir o item &lt;Vara de Pescar Diligente&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Batalha de Tanques',
                        'history_title' => 'Guerra de Tanques',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '589, 510', 'item_required' => null, 'instruction' => 'Fale com &lt;Comerciante de Brinquedos&gt; Lunka (589, 510) e selecione &quot;Eu quero um brinquedo novo em folha!&quot; para adquirir o item &lt;Brinquedo: Tanque Destruidor&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Companheiro de Sempre',
                        'history_title' => 'Companheiro de Sempre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '478, 104', 'item_required' => null, 'instruction' => 'Fale com NPC Aventureiro da Resistência Ian (478, 104) e selecione em &quot;Seus parceiros estão vivos?&quot; para obter &lt;Bolsa de Suprimentos Limpa&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Falácia do Mundo Paralelo',
                        'history_title' => 'Falácia do Mundo Paralelo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '173, 962', 'item_required' => 'Será que não to lembrando direito?', 'instruction' => 'Vá até o NPC Assistente Ters (173, 962) e clique na opção &quot;Por que você está trabalhando para Lucas agora?&quot; para obter o status [Será que não to lembrando direito?].'],
                        ],
                    ],
                    [
                        'item_title' => 'Não fui eu quem fez isso',
                        'history_title' => 'Não fui eu quem fez isso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '375, 574', 'item_required' => null, 'instruction' => 'Vá até o NPC Milícia de Granton Lana Hanks (375, 574) e clique na opção &lt;Sobre a Milícia do Capitão Minton&gt; para obter o item &lt;Mensagem de Lana&gt;'],
                        ],
                    ],
                    [
                        'item_title' => 'Ousar Sonhar e Ser uma Estrela',
                        'history_title' => 'Ousar Sonhar e Ser uma Estrela',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Cartão de Produtor', 'instruction' => 'Derrote o mob &lt;Soldado Lagarto Tingido e Cristalizado&gt; até obter o item [Cartão de Produtor].'],
                        ],
                    ],
                    [
                        'item_title' => 'Tratamento para a Preguiça',
                        'history_title' => 'Tratamento para a Preguiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '588, 548', 'item_required' => 'Qual remédio você vende?', 'instruction' => 'Vá até o NPC Doutor Monto (588, 548) e clique na opção &quot;Você pode ajudar alguém super preguiçoso?&quot;. Para adquirir o status [Qual remédio você vende?].'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma irmã é um tesouro.',
                        'history_title' => 'Uma irmã é um tesouro.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com Andy Hanks, selecionamos a opção &quot;Uma irmã é um tesouro&quot;, ele nos dará um bônus que precisamos acumular 5 vezes, então repetimos o processo. Uma vez alcançado, escolhemos a opção &quot;Você realmente acha que ter uma irmã é tão ruim?&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amor Forte',
                        'history_title' => 'Amor Forte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '408, 457', 'item_required' => null, 'instruction' => 'Falamos com Lilu e selecionamos a opção &quot;Você acha que seu marido ainda se lembra de você?&quot;, ela nos dará um bônus e agora falamos com Sharp (408, 457), escolhendo a opção &quot;Você se lembra da sua esposa?&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Platô dos Sonhos',
                'slug' => 'abertura-do-tempo-plat-dos-sonhos',
                'description' => 'Mapa de Platô dos Sonhos na região de Abertura do Tempo.',
                'sort_order' => 35,
                'trivias' => [
                    [
                        'item_title' => 'Descanse em Paz',
                        'history_title' => 'Descanse em Paz',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '149, 607', 'item_required' => null, 'instruction' => 'Bata nos totens (próximos a 493, 405 ou no Vilarejo de Hok) até dropar o item &lt;Flores do Ritual de Sprite&gt;. Vá até o Memorial do Mártir (149, 607) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Lei da Selva',
                        'history_title' => 'Lei da Selva',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '329, 292', 'item_required' => 'Rei Gavião Ancião', 'instruction' => 'Bata nos potes (próximos a 305, 282 ou Montanha de Falcon) até dropar 20x &lt;Pedaço de Carne Sem Cor&gt;. Vá até as coordenadas citadas (329, 292) para invocar «Rei Gavião Ancião» Griffin, mate-o para completar a trívia. (Observação: É necessário subir na pedra pra que ele apareça.)'],
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
                            ['step_number' => 1, 'npc_name' => 'Wakin', 'coordinates' => '750, 675', 'item_required' => null, 'instruction' => 'Fale com o NPC Wakin e selecione &quot;Soube que tem uma Deusa do Lago aqui&quot; para adquirir o item &lt;Moeda dos Desejos&gt;. Vá até ao local (750, 675) e dê clique direito na moeda para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Existem Aqueles que São Mais Habilidosos (antes como: O que você pensa, você mostra)',
                        'history_title' => 'Existem Aqueles que São Mais Habilidosos (antes como: O que você pensa, você mostra)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dougy', 'coordinates' => '93, 94', 'item_required' => null, 'instruction' => 'Fale com o NPC Dougy e selecione &quot;Soube que você tem uma técnica especial de dissimulação&quot; para entrar no estado &quot;Disfarce Furtivo&quot; (dura 5min). Vá até a localização (93, 94), dê clique direito no &lt;Baú do Tesouro dos Bandidos&gt; e selecione &quot;...&quot; para conseguir o item &quot;Estoque Secreto do Bandido Robu&quot;. Fale com Dougy e selecione &quot;Esse é o estoque secreto de que você falava?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não brinque com as mulheres',
                        'history_title' => 'Não brinque com as mulheres',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lily', 'coordinates' => null, 'item_required' => 'Transformado em tartaruga', 'instruction' => 'Fale com o NPC Lily e selecione &quot;Hahaha! Veja só...&quot; para receber o status [Transformado em tartaruga] - dura 7 segundos. Espere até se transformar numa tartaruga par completar a trívia. (Observação: Você ficará com o estado «Poder da tartaruga» depois de se transformar)'],
                        ],
                    ],
                    [
                        'item_title' => 'Desenhista de Sonhos',
                        'history_title' => 'Desenhista de Sonhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Peter', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Peter e selecione em &quot;Com o que você está se estressando?&quot; para adquirir &lt;Ordem de presas&gt;. Depois fale com NPC John e selecione &quot;Este é o pedido do Peter&quot; para adquirir &lt;Uma dezena de Ovos de Águia do Planalto&gt;. Por fim, fale com NPC Fin e selecione em &quot;Esse é o ovo de águia que você queria&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Acertou em Cheio',
                        'history_title' => 'Acertou em Cheio',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'John', 'coordinates' => '461, 340', 'item_required' => 'Dardos do Felissan', 'instruction' => 'Vá até o NPC John e clique na opção &quot;Como você treina no arco e flecha?&quot; para obter o item [Dardos do Felissan]. Vá até as coordenadas (461, 340) e use o item para completar a trívia. Dica: Vá até as casinhas que tem na NPC Lia para se aproximar das coordenadas.'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmãos Lutando por Amor',
                        'history_title' => 'Irmãos Lutando por Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Peter', 'coordinates' => '410, 352', 'item_required' => 'Chave de Graham', 'instruction' => 'Vá até o NPC Peter (410, 352) e clique na opção &#39;&#39;Sobre Graham Trovão&#39;&#39; para obter o item [Chave de Graham]. Em seguida, vá até o NPC Baú de Graham (408,397) e clique na opção &#39;&#39;Abra&#39;&#39; para obter o item [Os Poemas Estragados]. Logo após, volte ao NPC Peter e clique na opção &#39;&#39;Pegadinha Feita&#39;&#39; para receber o status (Peter conseguiu). Vá até o NPC Graham (410, 394) e clique na opção &#39;&#39;Fala mais sobre Peter Trovão&#39;&#39; para obter o item [Chave de Peter]. Em seguida vá até o NPC Baú de Peter (407, 350) e clique na opção &#39;&#39;Abra&#39;&#39; para obter o item [Equipamento Fitness Quebrado]. Depois disso, volte ao NPC Graham e clique na opção &#39;&#39;Pegadinha Feita!&#39;&#39; para obter o status (Graham Conseguiu) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Varredor',
                        'history_title' => 'Varredor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dulo', 'coordinates' => '231, 611', 'item_required' => 'Vassoura da Tia Dulo', 'instruction' => 'Vá até o NPC Dulo (231, 611) e clique na opção &#39;&#39;Sua vassoura é assim tão forte?&#39;&#39; para obter o item [Vassoura da Tia Dulo]. Em seguida equipe o item obtido, e derrote os monstros &lt;Visitante tentando obstruir a patrulha&gt; e &lt;Visitante tentando arruinar a cidade&gt; que ficam pela cidade para completar a trívia. (Observação: os mobs só aparecem das 21:00 às 00:00)'],
                        ],
                    ],
                    [
                        'item_title' => 'Bandidos também merecem uma alimentação saudável!',
                        'history_title' => 'Bandidos também merecem uma alimentação saudável!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bonnie', 'coordinates' => '186, 120', 'item_required' => 'Chifre Fortes', 'instruction' => 'Derrote o mob &lt;Grande Cervo Nato&gt; para obter o item [Chifre Fortes] x5 e derrote o mob &lt;Guardião da Fonte Vividarc&gt; para obter o item [Águas Ferventes] x5. Em seguida vá até o NPC Bonnie (186, 120) e clique na opção &quot;Você gosta do seu chefe, não é?&quot; para obter o item [Processando Chifre de Veado Nato] x5. Vá até o alquimista para produzir [Chifre de Veado Nato] x5. Volte até o NPC Bonnie e clique na opção &quot;Aqui estão as galhadas de que precisa&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Leitura na cama',
                        'history_title' => 'Leitura na cama',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falamos com Fielder e ele nos entregará a &quot;A história de Feld&quot;. Usamos o objeto e esperamos até que a conquista seja completada.'],
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
                'sort_order' => 36,
                'trivias' => [
                    [
                        'item_title' => 'Equipamento Perdido',
                        'history_title' => 'Equipamento Perdido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jace', 'coordinates' => '954, 128', 'item_required' => 'Enfeitando', 'instruction' => 'Fale com o NPC Jace e selecione &quot;Você parece precisar de um pouco de ajuda&quot; para adquirir o item &lt;Kit de Escavação&gt;. Vá até (954, 128) e use o item para que apareçam «Enfeitando» Pântano Aprisionador. Derrote-os até dropar 5x &lt;Equipamento Coberto em Lodo&gt;. Retorne a Jace e selecione &quot;Encontrei este equipamento nas minas&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gloriosas Lembranças do Passado',
                        'history_title' => 'Gloriosas Lembranças do Passado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Patricia', 'coordinates' => '1047, 1108', 'item_required' => 'Passado de Jilidas', 'instruction' => 'Fale com NPC Patricia e selecione &quot;Você como os robôs de Julidas são feitos?&quot; para entrar no status [Passado de Jilidas] - dura 5 min. Vá as coordenadas (1047, 1108), (1024, 1108), (1024, 1058) e (1047, 1058) para entrar nos status [Sombra do Jiladas 1], [Sombra do Jiladas Ciborgue 11], [A Sombra do Jiladas Ciborgue 5] e [Sombra do Jiladas Ciborgue 17] - duram 5 min. Depois fale com NPC Jiladas e selecione &quot;Deu muito trabalho para você fazer esses robôs&quot; para completar a trívia. (Nota: Para chegar a Assistente Patricia, fale com o NPC &lt;Operador de Submarino&gt; Geary e selecione &quot;Me leve para a Oficina de Jiladas&quot;.)'],
                        ],
                    ],
                    [
                        'item_title' => 'Cupido Fumegante',
                        'history_title' => 'Cupido Fumegante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Antony', 'coordinates' => '231, 611', 'item_required' => null, 'instruction' => 'Fale com NPC Antony e selecione &quot;Então você é um doutor do amor?&quot; para obter &lt;Multiferramenta de inspeção&gt;. Depois fale com NPC Resha e selecione &quot;Preciso das Instruções de Mecha Personalizado&quot; para obter &lt;Instruções ddo Soldado Mecha Personalizado&gt;. Depois vá até as coordenadas (231, 611) e fale com o NPC Soldado Mecha Personalizado, selecionando em &quot;Comece a trabalhar, agora!&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Reciclagem Sempre dá Errado',
                        'history_title' => 'Reciclagem Sempre dá Errado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Terry', 'coordinates' => '194, 531', 'item_required' => 'Manual de Montagem de Robô', 'instruction' => 'Vá até o NPC Terry e clique na opção &quot;Descobriu algo que seja útil?&quot; para obter o item [Manual de Montagem de Robô]. Vá até as coordenadas (194, 531) e destrua o baú para obter [Núcleo do Robô]. Em seguida vá até as coordenadas (250, 548) e destrua o baú para obter [Torso do Robô]. Logo após vá até o alquimista &lt;Caçador de demônios Penny&gt; para usar o item obtido com o NPC Terry para sintetizar o item [Robô DIY]. Use o item para invocar um robô e derrote-o para concluir a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Chega de Mergulho',
                        'history_title' => 'Chega de Mergulho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Geary', 'coordinates' => '822, 699', 'item_required' => null, 'instruction' => 'Vá até o NPC Geary (822, 699) e clique a opção &#39;&#39;Me leve para a Oficina de Jiladas&#39;&#39; para ser teletransportado. Em seguida, fale com o NPC Zimmo (897, 938) e clique na opção &#39;&#39;Estou pronto para ir para o Bacia do Vapor&#39;&#39;. Repita esse processo x5 para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Faz-Tudo de Robô',
                        'history_title' => 'Faz-Tudo de Robô',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dorothy', 'coordinates' => null, 'item_required' => 'Teste de Soldado Mecha XVII', 'instruction' => 'Vá até o NPC Dorothy e selecione a opção &quot;Como anda o seu progresso?&quot; para obter o status [Teste de Soldado Mecha XVII]. Em seguida, vá até o NPC Resha e clique na opção &quot;Por favor, me ajude a proteger os Soldados Mecha&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Solidão Absoluta',
                        'history_title' => 'Solidão Absoluta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '235, 569', 'item_required' => null, 'instruction' => 'Vá até o NPC Soldado Mecha (235, 569) e clique na opção &#39;&#39;O robô se balança e agita. Parece ter algo a dizer&#39;&#39; para obter o status (Robô imediato). Em seguida, vá até o NPC M5566 (623, 541) e clique na opção &#39;&#39;Por que você está aqui?&#39;&#39; para obter o status (Soldado Mecha Solitário) e ande até (628, 544) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Todos vocês são inuteis',
                        'history_title' => 'Todos vocês são inuteis',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '263, 601', 'item_required' => null, 'instruction' => 'Fale com Saermon, escolhemos a primeira opção e teremos que ir para (263, 601), (268, 573) e (302, 552). Voltamos para Saermon e selecionamos a segunda opção.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não brinque com as crianças.',
                        'history_title' => 'Não brinque com as crianças.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '897, 599', 'item_required' => null, 'instruction' => 'Iremos até onde Ledicia está, conversamos com ela e selecionamos &quot;Você já falou comigo&quot;, em seguida escolhemos &quot;Muito bem, vou te dar um doce&quot;. Agora vamos falar com Avery (897, 599) e escolhemos &quot;Sinto muito por ter feito sua filha chorar&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Abertura do Tempo',
                'name' => 'Vale Brilhante',
                'slug' => 'abertura-do-tempo-vale-brilhante',
                'description' => 'Mapa de Vale Brilhante na região de Abertura do Tempo.',
                'sort_order' => 37,
                'trivias' => [
                    [
                        'item_title' => 'Apreciação pela Vida',
                        'history_title' => 'Apreciação pela Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Kuishi', 'coordinates' => '440, 478', 'item_required' => 'Transparente como água', 'instruction' => 'Fale com NPC Kuishi e selecione em &quot;Posso tomar da água dessa fonte?&quot; para obter &lt;Garrafa de Água&gt;. Vá até as coordenadas (440, 478) e use o item para obter &lt;Garrafa de Água da Fonte&gt;. Retorne a Kuishi, use o item para entrar no status [Transparente como água] - dura 10 min - e fale com o NPC, selecionando em &quot;A água mineral é muito boa e fria&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sino do Despertar',
                        'history_title' => 'Sino do Despertar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Saalu', 'coordinates' => '314, 731', 'item_required' => 'Dor de Cabeça Brava', 'instruction' => 'Fale com o NPC Saalu e selecione em &quot;Para que serve esse martelo?&quot; para obter &lt;Maço de Diamante&gt;. Vá até as coordenadas (314, 731) e use o item para entrar no status [Dor de Cabeça Brava] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Companheiro dos Solteiros',
                        'history_title' => 'Companheiro dos Solteiros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Thorkin', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com NPC Thorkin e selecione em &quot;Você descobriu alguma novidade?&quot; para obter &lt;Esqueleto barulhento&gt;. Vá até NPC Jennifer e selecione &quot;Como você vai se livrar dessa caveira estranha?&quot; para obter &lt;Boneco do Homem de Grayd que fala&gt;. De seguida, vá até Kawala e selecione em &quot;Veja, encontrei um novo amigo para você&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Espada do Memorial',
                        'history_title' => 'Espada do Memorial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Raum', 'coordinates' => '800, 575', 'item_required' => 'Espada Enferrujada do Comandante da Brigada de Grayd', 'instruction' => 'Vá até o NPC Raum e clique na opção &quot;Você cultua o Líder Eterno?&quot; para obter o item [Espada Enferrujada do Comandante da Brigada de Grayd]. Vá até as coordenadas (800, 575) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Essa não é a sua filha',
                        'history_title' => 'Essa não é a sua filha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Dake', 'coordinates' => '380, 841', 'item_required' => 'Onde está a Sua Filha?', 'instruction' => 'Vá até o NPC Ancião Amnéstico (380, 841) e clique na opção &#39;&#39;Me deixe ajudar a encontrar a sua filha!&#39;&#39; para obter o status [Onde está a Sua Filha?]. Logo após, vá até o NPC Dake (425, 847) e clique na opção &#39;&#39;Você é a filha do homem com amnésia?&#39;&#39; para obter o status [Resposta de Dake]. Em seguida, vá até o NPC Elly (408, 820) e clique na opção &#39;&#39;Você é filha do homem com amnésia?&#39;&#39; para obter o status [Resposta de Elly]. Depois disso, vá até o NPC Magula (396, 855) e clique na opção &#39;&#39;Você é filha do homem com amnésia?&#39;&#39; para obter status [Resposta de Magula] e completar a trívia.'],
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
                            ['step_number' => 1, 'npc_name' => 'Schneider', 'coordinates' => '489, 434', 'item_required' => 'Você passou Mesmo por um treino Rigoroso?', 'instruction' => 'Vá até o NPC Schneider (489, 434) e clique na opção &#39;&#39;Você está treinando mesmo?&#39;&#39; irá aparecer um monstro &lt;Soldado Provocativo de Grayd&gt; derrote-o para obter o status [Você passou Mesmo por um treino Rigoroso?]. Retorne ao NPC Schneider e clique na opção &#39;&#39; Você realmente da tropa de elite?&#39;&#39; irão aparecer mais x10 monstro &lt;Soldado Provocativo de Grayd&gt; e derrote-os para adquirir o status [Fácil de Derrotar] acumule x10 para completar a trívia.'],
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
                'sort_order' => 38,
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '499, 1073', 'item_required' => null, 'instruction' => 'Vá até o Penhasco dos Morcegos, nas coordenadas (499, 1073) e destrua um cristal vermelho para obter um &lt;Sino Assustador&gt;. Vá até as coordenadas (477, 1046) e use o item para invocar &lt;Falta de Sangue Fresco&gt; Sanguessuga. Derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Paquera a Motor',
                        'history_title' => 'Paquera a Motor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Wendy', 'coordinates' => null, 'item_required' => 'O Pedido de Wendy', 'instruction' => 'Fale com NPC Wendy e selecione em &quot;Algo te incomoda?&quot; para entrar no status [O Pedido de Wendy] - dura 30 minutos. Vá até as NPCs Emma Blake e Nell e selecione em &quot;Wendy pediu sua ajuda&quot; para obter &lt;Fita luxuosa e linda&gt; e &lt;100 poses fofas&gt;. Retorne a Wendy e selecione em &quot;Elas me deram isso&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Semeando a Discórdia',
                        'history_title' => 'Semeando a Discórdia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aurier', 'coordinates' => null, 'item_required' => 'Resposta de Aurier', 'instruction' => 'Vá até o NPC Aurier e clique na opção &quot;Quem é mais forte, você ou Geoje?&quot; para obter o status [Resposta de Aurier]. Em seguida vá até o NPC Digato e clique na opção &quot;Quem é mais forte, você ou Aurier?&quot; para obter o status [Resposta de Digato]. Depois disso, vá até o NPC Geoje e clique na opção &quot;Quem é mais forte, você ou Digato?&quot; para obter o status [Resposta de Geoje] e completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Transtornado',
                        'history_title' => 'Transtornado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Grien', 'coordinates' => '199, 983', 'item_required' => null, 'instruction' => 'Vá até o NPC Grien (199, 983) e clique na opção &#39;&#39;qual é a forma original da Escultura do Gigante de Areia na Ondulação Portuária?&#39;&#39; para obter o item (Lentes Mágicas). Logo após, vá até as cordenadas (339,744) e use o item (Lentes Mágicas) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A vida ainda é Bela',
                        'history_title' => 'A vida ainda é Bela',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '306, 651', 'item_required' => 'Como tem Passado no Mar', 'instruction' => 'Vá até as coordenadas (306, 651) para encontrar o mob &lt;Ponto do Mar&gt; ao se aproximar dele você receberá os status [Como tem Passado no Mar] x6. Em seguida, você será teletransportado para uma ponte e também receberá um item chamado [Sopa Sprite Calorosa] use o item obtido para completar a trívia.'],
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
                'sort_order' => 39,
                'trivias' => [
                    [
                        'item_title' => 'A Luz da Esperança',
                        'history_title' => 'A Luz da Esperança',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Borsda', 'coordinates' => '60, 247', 'item_required' => 'Missão de Suprimentos', 'instruction' => 'Fale com o NPC Borsda e selecione &quot;Você parece estar com pressa&quot; para adquirir o item &lt;Suprimentos do Farol&gt;. Use o item nas coordenadas (60, 247) para receber o status [Missão de Suprimentos] - dura 10 min. Vá até Cyloter e selecione &quot;Eu trouxe os suprimentos&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro Mais Precioso (antes como: O tesouro mais precioso)',
                        'history_title' => 'Tesouro Mais Precioso (antes como: O tesouro mais precioso)',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Hayden', 'coordinates' => '310, 259', 'item_required' => 'Encantado', 'instruction' => 'Fale com o NPC Hayden e selecione &quot;Você sabe onde está o tesouro?&quot; para adquirir o item &lt;Chave Enferrujada Misteriosa&gt;. Use a chave na localização (310, 259) para invocar o «Encantado» Baú Misterioso - derrote-o para conseguir o item &lt;Diário Empoeirado&gt;. Fale com Hayden novamente e selecione &quot;Este é o seu bem precioso?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gênio das Pegadinhas',
                        'history_title' => 'Gênio das Pegadinhas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Julieta', 'coordinates' => null, 'item_required' => 'Dados do Experimento: Soldado Esforçado', 'instruction' => 'Fale com a NPC Julieta e selecione em &quot;Você inventou algo legal?&quot; para obter &lt;Disjuntor de Personalidade de Carbono Nº3&gt;. Vá até NPC Bristol, NPC Dada e NPC Browney e selecione &quot;Use o disjuntor nele&quot; em cada um para obter os status: [Dados do Experimento: Soldado Esforçado], [Dados do Experimento: Marinheiro Bondoso] e [Dados do Experimento: Líder da Equipe de Resgate de Sangue Frio] - todos duram 10 minutos. Retorne a NPC Julieta e selecione em &quot;Estes são os dados dos testes&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você ta Blefando',
                        'history_title' => 'Você ta Blefando',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Wozhors', 'coordinates' => null, 'item_required' => 'Sou um caçador de fragmentos', 'instruction' => 'Vá até o NPC Wozhors e clique na opção &quot;No que você está pensando?&quot; para obter o status [Sou um caçador de fragmentos]. Logo após, vá até o NPC Dallas sem ser atingido por mobs e clique na opção &quot;Olha, sou seu amigo!&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Teste de Crença',
                        'history_title' => 'Teste de Crença',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cytoler', 'coordinates' => '474, 134', 'item_required' => 'Quão Firme é a sua crença?', 'instruction' => 'Vá até o NPC Cytoler (474, 134) e clique na opção &#39;&#39; Você não vai embora mesmo?&#39;&#39; para obter o status [Quão Firme é a sua crença?]. Em seguida, clique na opção &#39;&#39;Você não vai embora nunca?&#39;&#39; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Último Desejo',
                        'history_title' => 'O Último Desejo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Poção com um Bilhete', 'instruction' => 'Derrote o mob &lt;Conjurador Sprite Agonizante&gt; ou &lt;Lutador de Sprites Dolorido&gt; para obter o item [Poção com um Bilhete] (dropa numa caixa) use esse item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Curativo no Coração',
                        'history_title' => 'Curativo no Coração',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bristol', 'coordinates' => '60, 254', 'item_required' => 'Meu Machucado', 'instruction' => 'Vá até o NPC Bristol (60, 254) e clique na opção &#39;&#39;Também fui ferido&#39;&#39; para obter o status [Meu Machucado]. Depois disso, vá até o NPC Browney (471, 124) e clique na opção &#39;&#39;Meu coração está machucado&#39;&#39; para obter o status [Essa é uma imagem com verdade] e o item (O Coração Enfaixado). Em seguida use o item obtido para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cavalo Galopante',
                        'history_title' => 'Cavalo Galopante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '458, 125', 'item_required' => null, 'instruction' => 'Falar com Vendedor de montarias Qandill e receberá um buff &quot;um lote de bons cavalos&quot; caminhe até o farol nas coordenadas: (458,125) para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Este Valor?',
                        'history_title' => 'Este Valor?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com o magnata Exilado e obter a chave dele. Em seguida, siga até o deserto ressonante, localizado nas coordenadas (53 ,61) use o item &quot;Chaves de prata&quot; na caixinha. Após pegar o item, retorne ao magnata Exilado e selecione a opção disponível &quot;Estás a falar deste acessório&quot; para concluir a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Montanha Mina de Vapor',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-montanha-mina-de-vapor',
                'description' => 'Mapa de Dimensão alternativa - Montanha Mina de Vapor na região de Dimensão Alternativa.',
                'sort_order' => 40,
                'trivias' => [
                    [
                        'item_title' => 'Tributo do Altar das Trevas',
                        'history_title' => 'Tributo do Altar das Trevas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lilu', 'coordinates' => '375, 420', 'item_required' => null, 'instruction' => 'Fale com o NPC Lilu e selecione &quot;Como você prova sua fé no Rei Sprite?&quot; para obter o item &lt;Tributo das Trevas&gt;. Use o item na localização (375, 420) para invocar o monstro Sombra das Trevas - derrote-o para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Dente Doce de Jessie',
                        'history_title' => 'O Dente Doce de Jessie',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Jessie', 'coordinates' => null, 'item_required' => 'Alimente o Dente Doce', 'instruction' => 'Compre 5x &lt;Doce Superdoce&gt; e 5x &lt;Bolo Superdoce&gt; do NPC Kremi. Vá até Jessie e selecione &quot;Eu tenho uma sobremesa deliciosa aqui&quot; para adquirir o status [Alimente o Dente Doce] - dura 10 min. Acumule o buff 5 vezes. De seguida selecione &quot;Quer comer mais sobremesas?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Raiva! Raiva!',
                        'history_title' => 'Raiva! Raiva!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Saermon', 'coordinates' => null, 'item_required' => 'Duende Minerador do Pesadelo', 'instruction' => 'Derrote «Duende Minerador do Pesadelo» até dropar o item &lt;Calça de Duende&gt;. Depois fale com o NPC Saermon e selecione &quot;Tenho Calça de Duende aqui&quot; para obter o status [Saermon Radiante] - dura 1 0 minutos. Depois fale com a NPC Meri e selecione em &quot;Eu dei essas calças para ele&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Onde você comprou?',
                        'history_title' => 'Onde você comprou?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Buru', 'coordinates' => '410, 165', 'item_required' => 'Front Inimigo', 'instruction' => 'Vá até o NPC Buru e clique na opção &quot;Por que este lugar é tão caótico?&quot; para obter o status [Front Inimigo]. Logo após, vá até as coordenadas (410, 165) para obter o item [Fórmula de Espada]. Em seguida, retorne ao NPC Buru (535, 602) e clique na opção &quot;Aqui está a fórmula obtida com os Artesãos dele&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amor da Minha Vida',
                        'history_title' => 'Amor da Minha Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Saermon', 'coordinates' => '565, 257', 'item_required' => null, 'instruction' => 'Vá até o NPC Saermon (565, 257) e clique na opção &#39;&#39;Quais são seus planos de presente?&#39;&#39; para obter o item (Uma Caixa de Presente Contendo as Calças de Saermon). Em seguida, vá até o NPC Meri (560,257) e clique na opção &#39;&#39;Este é o presente de casamento de Saermon para você&#39;&#39; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Nunca vi isso',
                        'history_title' => 'Nunca vi isso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Kremi', 'coordinates' => '187, 301', 'item_required' => 'Restos de Almoço', 'instruction' => 'Derrote o mob &lt;Duende Cruel Carniceiro&gt; para obter o ítem [Restos de Almoço]. Vá até as coordenadas (187, 301) e use o item para obter [Comida coberta de Óleo de Motor]. Vá até as coordenadas (197, 312) e use o item obtido para receber o item [Rocha Desconhecida]. Logo após isso, vá até o NPC Kremi (423, 289) e clique na opção &quot;Esta é a pedra que achei perto da mina. Me parece fora do comum&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Poder Reciclado',
                        'history_title' => 'Poder Reciclado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '627, 133', 'item_required' => 'Em Posse do Núcleo de Energia', 'instruction' => 'Vá até o NPC O Soldado mecha arruinado (627, 133) e clica na opção &#39;&#39;Remover o Núcleo de Energia&#39;&#39; para obter o status [Em Posse do Núcleo de Energia] Em seguida, vá até as coordenadas (325, 107) e fale com o NPC Soldado Mecha Energizado e clique a opção &#39;&#39;Instalar o Núcleo de Energia&#39;&#39; para completar a trívia.'],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Buru &quot;Muito apertado? O que está acontecendo&quot;, Tesara e Jessie na opção &quot;O que você acha do ambiente acampamento? em seguida falar com Bannam na opção &quot;Eu coletei os sentimentos de todos em relação ao ambiente do acampamento&quot; para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Cordilheira Vermelha',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-cordilheira-vermelha',
                'description' => 'Mapa de Dimensão alternativa - Cordilheira Vermelha na região de Dimensão Alternativa.',
                'sort_order' => 41,
                'trivias' => [
                    [
                        'item_title' => 'Cada Vez Mais Bonito',
                        'history_title' => 'Cada Vez Mais Bonito',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Moa', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o NPC Moa e selecione &quot;Você já juntou o suficiente lá?&quot; para obter o item &lt;Espelho Claro&gt;. Fale com Gauss e selecione &quot;Eu tenho um belo espelho brilhante aqui&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Seus Próprios Pensamentos',
                        'history_title' => 'Seus Próprios Pensamentos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Waymond', 'coordinates' => null, 'item_required' => 'Transpirar Alegria', 'instruction' => 'Fale com o NPC Waymond e selecione &quot;Eddy não parece estar muito bem&quot; para receber o item &lt;Kit Primeiros-Socorros Vazio&gt;. Fale com NPC Sian e selecione &quot;Você pode me ajudar a encher este kit de primeiros socorros?&quot; para obter o item &lt;Kit de Primeiros-Socorros cheio&gt;. Volte até Waymond e selecione &quot;Eu trouxe de volta o kit de primeiros socorros&quot; para receber o status [Transpirar Alegria] - dura 10 min. Fale com Eddy e selecione &quot;Parece que você não está se sentindo bem enquanto come isso&quot; para adquirir o item &lt;Marmita Vazia&gt;. Fale com Mimi e selecione &quot;Você tem mais marmitas aí?&quot; para adquirir o item &lt;Marmita Cheia&gt;. Volte até Eddy e selecione &quot;Este é o almoço preparado por Mimi&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tudo tem uma fraqueza',
                        'history_title' => 'Tudo tem uma fraqueza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Sajil', 'coordinates' => null, 'item_required' => 'Relatório da Cordilheira Vermelha', 'instruction' => 'Fale com NPC Sajil e selecione em &quot;Você tem algo a dizer para Miranda?&quot; para obter o status [Relatório da Cordilheira Vermelha] - dura 5 min. Depois fale com a NPC Miranda e selecione em &quot;Alguém quer passar uma mensagem para você&quot; para obter o status [Extremamente Irritado] - dura 5 min. Por fim, vá até NPC Sian e selecione em &quot;Você vai conseguir que Miranda te escute?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Flasback de Quase Morte',
                        'history_title' => 'Flasback de Quase Morte',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Entregando Marmita', 'instruction' => 'Fale com o NPC Pesquisador do Instituto de Pesquisas Mimi e selecione &quot;Tem outra marmita por ai?&quot; para obter o status [Entregando Marmita], vá até o Agente de Inteligência Waymond e selecione &quot;Essa é a marmita de Mimi&quot; para obter o item Marmita de Mimi, clique com o botão direito no item para usá-lo e completar a trívia. Deve ser completada no horário 11h - 18h'],
                        ],
                    ],
                    [
                        'item_title' => 'Você não é Bonitão',
                        'history_title' => 'Você não é Bonitão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Com o Espelho de Gauss', 'instruction' => 'Fale com o NPC Logista Gauss selecione &quot;Um amigo está muito triste. Quero acalmá-lo com seu espelho. Vou comprar um espelho com você por 1 ouro.&quot; para obter o status [Com o Espelho de Gauss], vá até o Assistente do Agente de Inteligência Eddy e selecione &quot;Desista! Se olhe no espelho.&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Me dê Cobertura',
                        'history_title' => 'Me dê Cobertura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '435, 178', 'item_required' => null, 'instruction' => 'Vá até as coordenadas (435, 178) e derrote Vespa Maldita Curiosa para concluir a trívia. O mob tem nome amarelo e aparece só nos horários 10h - 14h.'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmão, Somos Camaradas',
                        'history_title' => 'Irmão, Somos Camaradas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Disfarce de Duende', 'instruction' => 'Fale com o NPC Explorador Moa e selecione &quot;Por favor, me empreste seu disfarce. Quero ir a um lugar mais fresco para viver uma aventura.&quot; para obter o status [Disfarce de Duende], vá até o Caçador de Demônios Metatro e selecione &quot;Obrigado pela ter misericórdia.&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Me dê Cobertura',
                        'history_title' => 'Me dê Cobertura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '438, 171', 'item_required' => null, 'instruction' => 'Para completar essa missão, você precisa derrotar a Vespa Sangrenta Curiosa localizada em (438, 171), mas somente entre as 10:00 e 14:00 no horário do servidor. Certifique-se de estar dentro desse horário para enfrentar a Vespa Sangrenta Curiosa e completar a missão com sucesso.'],
                        ],
                    ],
                    [
                        'item_title' => 'Não somos irmãos, somos camaradas.',
                        'history_title' => 'Não somos irmãos, somos camaradas.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Metatro', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o Explorador Moa e selecione &quot;Empresta-me sua fantasia, por favor? Vou para um lugar mais fresco em busca de aventuras.&quot; para receber um bônus. Aproxime-se do Caçador de Demônios Metatro para obter outro bônus. Fale com Metatro e selecione &quot;Obrigado por sua compreensão&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmaos Separados há muitos anos',
                        'history_title' => 'Irmaos Separados há muitos anos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Cain na opção &quot;Há algo que você não consegue deixar de lado recentemente?&quot;, Depois andar ate a Mansão praga vermelha ate ganhar os buffs &quot;Procurando na área da granja, direita e esqueda&quot;, depois volta no Cain na opção &quot;Não encontrei nenhuma pista&quot; para ganhar o buff &quot;Pergunte por perto&quot; depois falar com Mary Velsa na opção &quot;Você encontrou algum relogio de bolso recentemente? e depois voltar no Cain na opção &quot;Encontrei o seu relogio de pulso nas proximidades&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Segredo de Beleza',
                        'history_title' => 'Segredo de Beleza',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Tsuki Natsuya &quot;Como posso ajuda-la?&quot;, Depois ir ate Mimi &quot;Você tem alguma receita de beleza para cuidados com a pele?&quot;, Matar Esporos da Praga ate pegar o status de &quot;Liquido viscoso&quot;, voltar a falar com o Tsuki Natsuya ultima opção para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta Sprite',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-sprite',
                'description' => 'Mapa de Dimensão alternativa - Floresta Sprite na região de Dimensão Alternativa.',
                'sort_order' => 42,
                'trivias' => [
                    [
                        'item_title' => 'Sou eu, a Leoa',
                        'history_title' => 'Sou eu, a Leoa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '512, 700', 'item_required' => 'Pele de Leoa', 'instruction' => 'Derrote &lt;Leoa Selvagem&gt; para adquirir o item [Pele de Leoa]. (Pode demorar bastante para dropar) Em seguida, use o item e siga até as proximidades das coordenadas (512, 700) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ainda com Fome',
                        'history_title' => 'Ainda com Fome',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Anthorra', 'coordinates' => '407, 195', 'item_required' => 'Fatias Generosas de Carne de Urso', 'instruction' => 'Derrote o Monstro &lt;Urso de Cristal (407, 195) Crono&gt; x3 para obter o status [Fatias Generosas de Carne de Urso]. Logo após, derrote o Monstro &lt;Cogumelos&gt; (304, 138) para obter o status [Cogumelo da Floresta Sprite]. Depois disso, vá até o NPC Anthorra (470, 705) e clique na oopção &#39;&#39;Você ainda não está completo, não é? Me dá uma mordida!&#39;&#39; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Coração de Zindel',
                        'history_title' => 'Coração de Zindel',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Zindel', 'coordinates' => null, 'item_required' => 'Cristal Mágico de Zindel', 'instruction' => 'Vá até o NPC Zindel e clique na opção &quot;Noll se interessa bastante por cristais mágicos. Poderia dar umas amostras para ele?&quot; para obter o status [Cristal Mágico de Zindel]. Em seguida vá até o NPC Nynor e clique na opção [Trouxe o coração de Zindel] para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Banho Quente',
                        'history_title' => 'Banho Quente',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chara', 'coordinates' => '219, 479', 'item_required' => 'Água Recém-Aquecida', 'instruction' => 'Vá até o NPC Chara (219, 479) e clique na opção &#39;&#39;Noll está indo tomar um banho! Me dê um balde de água quente. Vou já buscar!&#39;&#39; para obter o status [Água Recém-Aquecida] Em seguida, vá até o NPC Nynor (318,698) e clique na opção &#39;&#39;Tome um banho logo! Está água vai esfriar já, já!&#39;&#39; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'A Desgraça cai do céu',
                        'history_title' => 'A Desgraça cai do céu',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '489, 181', 'item_required' => null, 'instruction' => 'Falar com Sakuzo na opção &quot;o quê! Um coco congelado?vou dar uma olhada.&quot;, depois vá ate (489,181) e usar o item, depois volta no Sakuzo na opção &quot;Eu trouxe um coco congelado&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Entrar ou Apanhar',
                        'history_title' => 'Entrar ou Apanhar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar Com Hasara na opção &quot;Se não quiser se juntar, o que fazer?&quot; depois na opção &quot;Quem quer se juntar a religião&quot; mate o boss para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta da Praga',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-da-praga',
                'description' => 'Mapa de Dimensão alternativa - Floresta da Praga na região de Dimensão Alternativa.',
                'sort_order' => 43,
                'trivias' => [
                    [
                        'item_title' => 'Aldeão Chocado',
                        'history_title' => 'Aldeão Chocado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '172, 54', 'item_required' => 'Eletrocutado', 'instruction' => 'Vá até as proximidades das coordenadas (172, 54) para obter o status [Eletrocutado] e após o [Coração Continua Batendo]. Logo após, ande nas proximidades das coordenadas (535, 401) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tendência Imperdível',
                        'history_title' => 'Tendência Imperdível',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '610, 640', 'item_required' => null, 'instruction' => 'Derrote o Monstro &lt;Diácono da Igreja de Carso&gt; (610, 640) para obter o item (Camiseta em Branco). Em seguida, vá até o Monstro &lt;Gigante do Magma&gt;(241, 608) e use o item no monstro para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Hidratante',
                        'history_title' => 'Hidratante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Emena', 'coordinates' => '264, 748', 'item_required' => 'Super Essência de Planta Espessa', 'instruction' => 'Vá até as coordenadas (264, 748) e procura por uma árvore com algum detalhe em roxo (parecendo estar parasitada) mate ela para adquirir o item [Super Essência de Planta Espessa]. Em seguida vá até o NPC Emena e clique na opção &quot;Esse é um hidratante típico local. Espero que sua pele esteja melhor agora&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Posso ser um cara mau',
                        'history_title' => 'Posso ser um cara mau',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '639, 142', 'item_required' => 'Desculpe pelas Convicções em minhas Crenças', 'instruction' => 'Derrote os Monstro &lt;Sacerdote do Teísmo&gt; (639, 142) para obter o status [Desculpe pelas Convicções em minhas Crenças] acumule esse status x20 depois derrote &lt;Pioneiro do Teísmo&gt; (754,214) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Charada da Chama azul',
                        'history_title' => 'Charada da Chama azul',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chara', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Chara, na opção &quot;Por que o fogo do acampamento é azul?&quot; para entrar no status &quot;Biólogo&quot; que dura 30 minutos. Com o status ativo, mate monstro Kitsune de Marfim para aparecer na sua bag o item &lt;Pelo de raposa&gt;. Retorne ao NPC Chara e selecione a opção &quot;Isso é pelo de raposa?&quot; para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Dança com Raposas',
                        'history_title' => 'Dança com Raposas',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Reynard na opção &quot;Me disseram que você queria ir dar um passeio&quot; para obter o item &quot;Sela de Doma de Montaria&quot;. Vá ate o monstro Kitsune de Marfim e utilize o item nela para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Gigante em Avanço',
                        'history_title' => 'Gigante em Avanço',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Aendello na opção &quot;Como fiquei tão grande?&quot; para entrar no status &quot;Poder absorvente&quot;. Derrote 5x o monstro Rei Odin de Cristal Formado do tempo para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Poder do Tempo',
                        'history_title' => 'Poder do Tempo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Nynor &quot;Como posso lhe ajudar?&quot; para entrar no status &quot;Matador Gigante&quot; que dura 60 minutos. Mate o monstro Rei Odin de Cristal Formado do Tempo para obter o item &lt;Cristal dimensional&gt;. Retorne ao NPC e selecione &quot;Esse é o cristal?&quot; para completar a trivia.'],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com HaoHao na opção &quot;Deixe comigo, eu vou infiltrar&quot; depois ir Ate o NPC Ancião Luxien para falar com a opção&quot;O que acontece com aqueles que violam a doutrina&quot; e voltar pro Hao Hao na opção &quot;Eu descobri algumas pistas sobre areligião Carso&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ensinamento Secreto',
                        'history_title' => 'Ensinamento Secreto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com o Sanzen na opção &quot;Estou aqui para ajudar a procurar&quot;, falar com Sokyo &quot;Tente estender a mão amiga &quot;e dps voltar pro Sanzen &quot;Encontrei a pessoa&quot; para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Planícies de Kaslow',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-plan-cies-de-kaslow',
                'description' => 'Mapa de Dimensão alternativa - Planícies de Kaslow na região de Dimensão Alternativa.',
                'sort_order' => 44,
                'trivias' => [
                    [
                        'item_title' => 'Poste da Coruja',
                        'history_title' => 'Poste da Coruja',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chara', 'coordinates' => '62, 385', 'item_required' => 'Armadilha para Pássaros Casiera', 'instruction' => 'Vá até o NPC Chara (62, 385) e clique na opção &quot;Soube que você bolou uma maneira de evitar a emboscada&quot; para obter o item [Armadilha para Pássaros Casiera]. Logo após use o item no monstro &lt;Coruja das Neves Branca&gt; para obter o status [O guia Definitivo para Pegar Passarinho]. Depois retorne ao NPC Chara e clique na opção &quot;Entendi&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Carteira',
                        'history_title' => 'Carteira',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Koe', 'coordinates' => '566, 415', 'item_required' => null, 'instruction' => 'Derrote o Monstro &lt;Membro de Investigação Lobotomizado&gt; (566, 415) para obter o item &lt;Carta de Investigador&gt; x5. Em seguida, vá até o NPC Koe (51, 395) e clique na opção &#39;&#39;Sua Carta&#39;&#39; para compeltar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Seja Sutil',
                        'history_title' => 'Seja Sutil',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Darlace', 'coordinates' => '804, 659', 'item_required' => 'Você não consegue me ver!', 'instruction' => 'Vá até o NPC Darlace e clique na opção &quot;Estou pronto para ajudar você a obter informações!&quot; para obter o status [Você não consegue me ver!]. Logo após, vá até as proximidades das coordenadas (804, 659) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pesquisador de Árvore Sábia',
                        'history_title' => 'Pesquisador de Árvore Sábia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aendello', 'coordinates' => '31, 383', 'item_required' => null, 'instruction' => 'Vá até o NPC Aendello (31, 383) e cique na opção &#39;&#39;Por uqe Árvores sábias voam?&#39;&#39; para obter o item (Escaneador Mágico). Em seguida, vá até a coordenadas (157, 297) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O lobo e o Grou',
                        'history_title' => 'O lobo e o Grou',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá ate o Seguidor Moribundo de Carso e selecione a opção &quot;Aproxime-se e verifique seus ferimentos&quot; irá aparecer alguns monstros, mate-os para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Formação dos Veados de Fogo',
                        'history_title' => 'Formação dos Veados de Fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Vash', 'coordinates' => '632, 591', 'item_required' => null, 'instruction' => 'Fale com Vash e selecione a opção &quot;Como vou implementar esse plano? &quot; para obter o item &lt;Armadilha para Veado&gt;. Vá ate o mob Caribu de Cristal e utilize o item nele para captura-lo. Retorne ao NPC e clique na opção &quot;Te peguei, Caribu&quot; para obter o item &lt;Tocha&gt;. Vá ate as coordenadas (632,591) ira aparecer um veado, use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Deixe Eu Entrar!',
                        'history_title' => 'Deixe Eu Entrar!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '433, 327', 'item_required' => null, 'instruction' => 'Vá até a coordenada (433,327) e aguarde no local até acumular 30x o status &quot;Deixe eu entrar&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pesquisador do Altar Sprite',
                        'history_title' => 'Pesquisador do Altar Sprite',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Nikko na opção &quot;Você parece preocupado. Você precisa de ajuda?&quot;. Mate os mob que aparecer para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Anime-se',
                        'history_title' => 'Anime-se',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Zindel na opção&quot;Como ajudar a aliviar o medo em seu coração&quot;, mate uns &quot;Veado Especialmente Bonitos&quot; e colete &quot;chifres grandes&quot;, vá ate 252,652. voltar e falar com o zindel na opção&quot;Prove e veja o ingrediente do seu sonho&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma pessoa perdida',
                        'history_title' => 'Uma pessoa perdida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Pisa &quot;Confuso! O que devo fazer?&quot;, ir ate 553,398. matar o mob que nasce quando usa o item para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Bosque de Gaia',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-bosque-de-gaia',
                'description' => 'Mapa de Dimensão alternativa - Bosque de Gaia na região de Dimensão Alternativa.',
                'sort_order' => 45,
                'trivias' => [
                    [
                        'item_title' => 'Apanhador de Água-Viva',
                        'history_title' => 'Apanhador de Água-Viva',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Akon', 'coordinates' => '208, 237', 'item_required' => 'Captura Água-Viva', 'instruction' => 'Apanhador de Água-Viva Vá até o NPC Akon (208, 237) e clique na opção &#39;&#39;Ouvi dizer que você pode consertar a barreira&#39;&#39; para obter o item (Rede de Água-Viva). Logo após, ultilize o item obtido no Monstro &lt;Água-Viva Fluruante&gt; (582, 592) para obter o status [Captura Água-Viva]. Agora, retorne ao NPC Akon e clique na opção &#39;&#39;Entendi&#39;&#39; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Cadê minha Bola?',
                        'history_title' => 'Cadê minha Bola?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Parro', 'coordinates' => '748, 599', 'item_required' => null, 'instruction' => 'Derrote o Monstro &lt;Tartaruga Gigante de Cristal&gt; (748, 599) para obter o item (Orbe de Cristal da Coragem) x3. Em seguida, vá até o NPC Parro (234, 191) e clique na opção &#39;&#39;Aqui está sua orbe. Como temo que isso não dê coragem suficiente, te dou outra mais&#39;&#39; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Presença da Deusa',
                        'history_title' => 'Presença da Deusa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Cirrus', 'coordinates' => '144, 232', 'item_required' => 'Seguidor de Gaia', 'instruction' => 'Vá até o NPC Cirrus (144, 232) e clique na opção &#39;&#39;Estou pronto para ir ao Lago da Deusa&#39;&#39; para obter o status [Seguidor de Gaia]. Depois disso, vá até a coordenada (283, 688) para obter o status [Jelly... Jelly-Coelho?]. Em seguida, retorne ao NPC Cirrus e clique na opção &#39;&#39;Não é uma deusa!&#39;&#39; para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre da Patrulha',
                        'history_title' => 'Mestre da Patrulha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Adara', 'coordinates' => '203, 148', 'item_required' => 'Saindo para Patrulhar', 'instruction' => 'Vá até o NPC Adara (203,148) e clque na opção &#39;&#39;Soube que precisa de ajuda para patrulhar&#39;&#39; para obter o status [Saindo para Patrulhar]. Logo após, vá até as coordenadas (426, 214), (685,428), (874, 589) e (886, 792) nessa ordem para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre do Pulo',
                        'history_title' => 'Mestre do Pulo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '683, 207', 'item_required' => null, 'instruction' => 'Vá até próximo Praça Arruinada (683,207) irá começar acumular 20x o status &quot;Correndo na direção contraria&quot;. Vá ate a coordenada (683,215) para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Soco Esplêndido',
                        'history_title' => 'Soco Esplêndido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Puppy', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Puppy e selecione &quot;Como eu faço o Jelly- Coelho Ermos parecerem bonitos?&quot; para obter o item &lt;Luvas de Maquiagem&gt;. Utilize o item em Jelly-Coelho dos Ermos para entrar no status &quot;Maquiagem Incrível&quot; que dura 30 minutos. Retorne ao NPC Puppy e selecione &quot;Eles são todos fofos de novo&quot; para completar a trivia. Obs: Se você usar algum tipo de teleporte irá perder o status, precisa ir andando (skill de casal, pedra teleporte, cristal de alma )'],
                        ],
                    ],
                    [
                        'item_title' => 'Consultor',
                        'history_title' => 'Consultor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '653, 50', 'item_required' => null, 'instruction' => 'Fale com Punally na opção &quot;Onde você vai montar o posto avançado?&quot; para obter o item &lt;Material de Construção&gt;. Vá até a coordenada (653, 50) e use o item &lt;Material de Construção&gt; para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Material de Construção Estranho',
                        'history_title' => 'Material de Construção Estranho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Nalla', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Nalla e selecione a opção &quot;Fiquei sabendo que você precisa de ajuda&quot; para entrar no status &quot;Mineiro&quot; que dura 30 minutos. Mate o mob Estátua Gigante de Cristal para dropar o item &lt;Cristal Solido&gt; . Retorne ao NPC Nalla e selecione &quot;Aqui está seu cristal&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Rotina de Brocom',
                        'history_title' => 'Rotina de Brocom',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Lida na opção&quot;Você está enfrentando algum problema?&quot;, ir ate o Quill na opção&quot;Você encontrou algum problema?&quot;, vá matar o &lt;Lider dos Bandidos&gt;Manny 322,144 e coletar o item, voltar no Lida e ir na ultima opção &quot;Entregue a bolsa de dinheiro recuperada para Lida&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sotina de Siscom',
                        'history_title' => 'Sotina de Siscom',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Quill segunda opção &quot;Você se aproxima de Quill, que segura um bolsa de dinheiro com uma expressão preucupada &quot;, Falar com Rau, voltar no Quill ultima opção&quot;Entregue o Colar para Quill&quot; para completar a trivia..'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta Luz da Lua',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-luz-da-lua',
                'description' => 'Mapa de Dimensão alternativa - Floresta Luz da Lua na região de Dimensão Alternativa.',
                'sort_order' => 46,
                'trivias' => [
                    [
                        'item_title' => 'Masculino ou Feminino?',
                        'history_title' => 'Masculino ou Feminino?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Profeta Barbama', 'coordinates' => null, 'item_required' => 'Esta é a Pessoa', 'instruction' => 'Fale com o NPC Profeta Barbama e selecione &quot;Oque você quer com Barbama?&quot; para obter o status [Esta é a Pessoa], depois selecione a opção &quot;Este Barbama não é Barbama&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Jovem mas Ambicioso',
                        'history_title' => 'Jovem mas Ambicioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '389, 186', 'item_required' => 'Acompanhe Hamak', 'instruction' => 'Fale com o NPC Raposa Demônio Filhote Hamak e selecione &quot;Você está a postos para me acompanhar até o Vilarejo Abandonado da Raposa Demônio?&quot; para obter o status [Acompanhe Hamak], vá com ele derrotar &lt;Infectada&gt; Raposa Demonio Filhote em (389,186) para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Só existe uma verdade',
                        'history_title' => 'Só existe uma verdade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '684, 127', 'item_required' => 'Onde está o Ladrão?', 'instruction' => 'Fale com o NPC Raposa Demônio Filhote Silas e selecione &quot;O ladrão é...?&quot; para obter o status [Onde está o Ladrão?] e o item Agulha Anestésica, encontre o Ladrão de Carso em (684,127) e use nele a Agulha Anestésica para obter o status [A verdade é Revelada], leve o Ladrão Capturado até Silas e selecione &quot;Você é um ótimo detetive!&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Portão de Ilya Alternativa',
                        'history_title' => 'Portão de Ilya Alternativa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Onde está...?', 'instruction' => 'Fale com o NPC Mago da Academia de Magia Noll e selecione &quot;Vamos! Estou pronto!&quot; para obter o status [Onde está...?] e ser teletrasportado para o Portão de Ilya Alternativa e ande para retornar a Noll e selecione &quot;Fui mandado de volta para casa mesmo antes de passar pela porta&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Chef Premium',
                        'history_title' => 'Chef Premium',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lulu', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Lulu e selecione a opção &quot;Nao sou uma má pessoa&quot; para entrar no status &quot;Super Assistente do Chef Premium&quot;. Derrote os mobs &lt;Escorpião de Cristal Bersek&gt;,&lt;Dragão Irritado&gt; e &lt;Besta lava Furiosa&gt; para dropar os itens &lt;Cauda de Escorpião Picante&gt;,&lt;Carne de Dragão Milenar&gt; e &lt;Molho de Lava&gt;. Retorne ao NPC Lulu e selecione a opção &quot;Ingredientes &quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esperança para Curar a Infecção',
                        'history_title' => 'Esperança para Curar a Infecção',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Archie', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Archie e selecione &quot;Você sabe de algum jeito para curar uma infecção?&quot; para adquirir &lt;Orbe Selado de Cristal&gt;. Vá ate mob Mago Raposa Demônio Infectado e use o item nele para receber o status &quot;Capturando Raposas&quot; que dura 10 minutos. Retorne ao NPC e selecione a opção &quot;Entendi&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Somi Adormecido',
                        'history_title' => 'Somi Adormecido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Somi', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Somi e selecione 5x a opção &quot;Levante-se! Pare de dormir!&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O Fim do Mundo',
                        'history_title' => 'O Fim do Mundo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lego', 'coordinates' => '518, 36', 'item_required' => null, 'instruction' => 'Fale com Lego e selecione a opção &quot;Como verificou esses portais?&quot; para adquirir o item &lt;Rocha Pequena&gt;. Vá ate a coordenadas (518,36) e use o item para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os crueis falam pouco',
                        'history_title' => 'Os crueis falam pouco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Matar &lt;Bully&gt;Bubba e falar com Mignet na opção &quot;Diga a Mignet que você já expulsou Bubba&quot;Para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Vilao morre jovem',
                        'history_title' => 'Vilao morre jovem',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Omni primeira opção&quot;Você perguntou a ele como se torna um herói como ele?&quot;, Vai entrar em uma duggeon, falar com o Omni &quot;Preparando-se para a batalha&quot; e vai passando pelo labirinto rapido e mata o mob do fim, Depois retorna ao NPC e fala com na ultima opção &quot;Sair deste lugar&quot; para completar a trivia. OBS: Para atravessar o lado é preciso andar cliclando no mapa com o mouse.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Floresta Antiga',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-floresta-antiga',
                'description' => 'Mapa de Dimensão alternativa - Floresta Antiga na região de Dimensão Alternativa.',
                'sort_order' => 47,
                'trivias' => [
                    [
                        'item_title' => 'Mercenário',
                        'history_title' => 'Mercenário',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Neegy', 'coordinates' => null, 'item_required' => 'Abra seus Olhos', 'instruction' => 'Vá até o NPC Neegy e clique na opção &quot;Vamos competir um pouquinho&quot; para obter o status [Abra seus Olhos]. Em seguida, no mesmo NPC clique na opção &quot;Eu vi cinco&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ataque Fingido',
                        'history_title' => 'Ataque Fingido',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Zindel', 'coordinates' => '300, 167', 'item_required' => null, 'instruction' => 'Vá até o NPC Zindel (300, 167) e clique na opção &#39;&#39; Vou ajuda-lo a distraí-los&#39;&#39; para obter o item (Foguetinhos Barulhentos). Logo após, use o item nas coordenadas (142,143) paracompletar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Desmonte Primeiro',
                        'history_title' => 'Desmonte Primeiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Observador Homem-Besta', 'coordinates' => '220, 303', 'item_required' => 'Canhão de Armstrong', 'instruction' => 'Vá até o NPC Observador Homem-Besta e clique na opção &quot;Como podemos impedi-los?&quot; para obter o item [Canhão de Armstrong]. Vá até as coordenadas (220, 303), use o item para se transformar e utilize a skill 1 para derrotar o monstro &lt;Tanque do Homem-Besta&gt; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Montanhista',
                        'history_title' => 'Montanhista',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Rogge', 'coordinates' => '395, 888', 'item_required' => null, 'instruction' => 'Vá até o NPC Rogge (395,888) e clique na opção &#39;&#39;Deixe isso comigo&#39;&#39; para obter o item (Câmara). Em seguida, vá até as coordenadas (547,630) e use o item obtido para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre de Surfe',
                        'history_title' => 'Mestre de Surfe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '667, 532', 'item_required' => null, 'instruction' => 'Vá ate as coordenadas (667,532) e fique parado para adquirir o status &quot;ondas rebeldes&quot; 10x para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Esperto como uma Criança',
                        'history_title' => 'Esperto como uma Criança',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro Experiente', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Fazendeiro Experiente e clique na opção &quot;Por que as larvas de abelha selvagens são maiores que as minhocas de abelha selvagem?&quot; para obter os itens &lt;Dispositivo de Coleta de Sangue A&gt; e &lt;Dispositivo de Coleta de sangue B&gt;. Vá ate os mobs Larvas de Abelha Selvagem e utilize o &lt;Dispositivo de Coleta de Sangue A&gt;, depois vá ate os mobs Abelhas Sanguinárias e utilize o &lt;Dispositivo de Coleta de Sangue B&gt; para entrar nos status &quot;Sangue de Larva e Sangue Imago&quot; que duram 10 minutos cada. Volte ao NPC e selecione &quot;Essa é a uma amostra de sangue&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Voltar para casa para plantar',
                        'history_title' => 'Voltar para casa para plantar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fazendeiro Experiente', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Fazendeiro Experiente e selecione &quot;Ouvi dizer que quer cultivar algo nesses campos&quot; ´para obter o item &lt;Luvas cogumelantes&gt;. Utilize o item no Cogumelo dos Ermos. Volte ao NPC Fazendeiro Experiente e selecione &quot;Eu trouxe o peixe que você queria&quot; para complementar a trivia'],
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
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Balu primeira opção&quot;O que aconteceu?&quot;, Falar com Nicole, Ann e Fene nas opções &quot;Pergunte sobre este caso de assasinato&quot;. depois falar com o Balu denovo e escolher a opção &quot;O verdadeiro assassino é o criado Fene&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Viciado em Gatos',
                        'history_title' => 'Viciado em Gatos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Kyent primeira opção&quot;Qual é o problema que ele está enfrentando&quot;, ir no local 555, 186 use o item no &lt;Leopardo das Flores&gt; e volte no Kyent para escolher a ultima opção&quot;Entregue o saco com o gato para Kyent&quot; para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Vale dos Cavaleiros',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-vale-dos-cavaleiros',
                'description' => 'Mapa de Dimensão alternativa - Vale dos Cavaleiros na região de Dimensão Alternativa.',
                'sort_order' => 48,
                'trivias' => [
                    [
                        'item_title' => 'Contos Agricolas do Vale dos Cavaleiros',
                        'history_title' => 'Contos Agricolas do Vale dos Cavaleiros',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Cahan selecionando a opção &quot;Você precisa de ajuda?&quot; para obter o item &lt;Regador de Crescimento rapido&gt;. Vá ate a coordenada (479.269) lá você ira encontrar a planta Brotinho, utilize o item nele 5x para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pechinchas Maiores',
                        'history_title' => 'Pechinchas Maiores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Brandr', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Brandr e selecione a opção &quot;Fiquei sabendo que você vende armas mais baratas que que o Barak?&quot; para entrar no status &quot;Pechinchas&quot;, que dura 5 minutos. Fale com NPC Barak na opção &quot;Brandr disse que suas armas são vendidas por 2.000 de ouros&quot;. Retorne ao npc Brandr e selecione a opção &quot;Barak disse que suas armas são vendidas por 200 ouros&quot;. Retorne ao Barak e selecione &quot;Brandr disse que suas armas são vendidas por 20 de ouros&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Terra, Gelo e Fogo',
                        'history_title' => 'Terra, Gelo e Fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Fuleyla selecionando a opção &quot;Sobre a Terra da fonte termal&quot; para entrar no status &quot;Exploração das terras Míticas&quot; que dura 30 minutos . Vá até a coordenada (290,313 ) para entrar no status &quot;Terapêutica&gt; irá aparecer um discovery no gritar, aguarde o status sair para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'O Cheiro está Otimo',
                        'history_title' => 'O Cheiro está Otimo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Jim na opção &quot;Você precisa de comida?&quot; para entrar no status &quot;Por orgulho&quot; que dura 30 minutos. Fale com o NPC Lilia na opção &quot;Por favor me dê comida&quot; para obter o item &lt;Lancheira do amor&gt;. Retorne a Jim e selecione a opção &quot;Tome a lancheira&quot; para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Fonte de Vitalidade',
                        'history_title' => 'Fonte de Vitalidade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Gump e comprar o item &lt;Bebida Refrescante&gt;, e falar com o Leiz &quot;Entregue a bebida refrescante&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Inimigo Infiltrado',
                        'history_title' => 'Inimigo Infiltrado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Paiter primeira opção&quot;Você já disse que pode ajudar&quot;, ir nas coordenadas do buff (431.345),(488.409)(359.442)e voltar pra falar com o Paifer &quot;Ja foram realizadas buscas cuidadosas em três lugares&quot; para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Baía de Auris',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-ba-a-de-auris',
                'description' => 'Mapa de Dimensão alternativa - Baía de Auris na região de Dimensão Alternativa.',
                'sort_order' => 49,
                'trivias' => [
                    [
                        'item_title' => 'Coragem Holandesa',
                        'history_title' => 'Coragem Holandesa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Lyon', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Lyon e selecione &quot;Você quer aprimorar sua força de combate?&quot; para obter &lt;Modelo de Cristal&gt;. Em seguida derrote Seguidor Furioso de Carso e Seguidor Belisco de Carso ate dropar 10x Caco de Cristal. Retorne ao NPC Lyon, selecione a opção de alquimia e arraste a formula &lt;Modelo de Cristal&gt; para sintetizar &lt;Cristal Mágico&gt; . Por ultimo selecione no mesmo NPC a opção &quot;Isso vai reforçar sua capacidade de combate&quot; para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'O Ciclo da Vida',
                        'history_title' => 'O Ciclo da Vida',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ryan', 'coordinates' => '334, 939', 'item_required' => null, 'instruction' => 'Fale com Ryan e selecione &quot;Não posso levar meu filho a estátua&quot; para receber o buff &quot;Padrinho&quot; que dura 30 minutos. Vá ate a coordenada (334, 939) em frente a estátua para completar a trívia (lado direito).'],
                        ],
                    ],
                    [
                        'item_title' => 'Literatura Intrigante',
                        'history_title' => 'Literatura Intrigante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Monica', 'coordinates' => '227, 196', 'item_required' => null, 'instruction' => 'Fale com Monica e selecione &quot;Você gosta de poesia?&quot; para obter o item &lt; Câmera Sterero&gt;. Vá até a coordenada (227, 196) e use o item para receber o status &quot;Maravilha do Pântano&quot;. Retorne a Monica e selecione a opção &quot;Vou tirar uma foto sua&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Livro em Branco',
                        'history_title' => 'Livro em Branco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Eugenie selecione a opção &quot;Por que você está fazendo corpo mole?&quot; para acumular o status &quot;Lembrete de envio&quot; 5x. Depois de acumular o status, selecione a opção &quot;E quanto ao novo livro de Quill?&quot; para completar a trivia'],
                        ],
                    ],
                    [
                        'item_title' => 'Aparição Espiritual',
                        'history_title' => 'Aparição Espiritual',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '145, 141', 'item_required' => null, 'instruction' => 'Falar com G Jins primeira opção&quot;Fale que está disposto a ajudar&quot;, ir ate (145,141). depois voltar no G Jins na opção &quot;Diga que você ja registrou&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Emissario da Justiça',
                        'history_title' => 'Emissario da Justiça',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Falar com Juen primeira opção &quot;Precisa de ajuda?&quot; ir falar com Jon, Won e Lin na opção &quot;Apresente seus documentos para X&quot;, ir ate o Fuul &quot;Apresente seus documentos para Full e prenda-o&quot; e voltar no Juen &quot;Entregue os membros da organização e informações relacionadas para Juen&quot; para completar a trivia..'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Dimensão Alternativa',
                'name' => 'Dimensão alternativa - Ruínas Polares Antigas',
                'slug' => 'dimens-o-alternativa-dimens-o-alternativa-ru-nas-polares-antigas',
                'description' => 'Mapa de Dimensão alternativa - Ruínas Polares Antigas na região de Dimensão Alternativa.',
                'sort_order' => 50,
                'trivias' => [
                    [
                        'item_title' => 'Lenda Undergraund',
                        'history_title' => 'Lenda Undergraund',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Aerias', 'coordinates' => '143, 346', 'item_required' => null, 'instruction' => 'Fale com Aerias na opção &quot;Fiquei sabendo que sua amiga está doente?&quot; para entrar no Status &quot;Totalmente Determinado&quot; que dura 30 minutos. Vá até a coordenada (143, 346) onde você irá encontrar varias florzinhas, ataque-as e receberá na bag o item &lt;Florzinha Amarela&gt;. Retorne ao NPC Aerias e selecione a opção &quot;Trouxe a Florzinha amarela&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amizade é feitiçaria',
                        'history_title' => 'Amizade é feitiçaria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com Troyal na opção &quot;Posso ser seu amigo?&quot; para entrar no status &quot;Hipnose&quot; mudará sua barra de skil e não conseguirá se mover, utilize a primeira skill 10x para obter o status &quot;Vontade Forte&quot; (ambos os status duram 5 minutos). Depois de acumular o status 10x, selecione a opção &quot;Isso é uma bela pegadinha&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'O que foi que eu vi?',
                        'history_title' => 'O que foi que eu vi?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o Cristal Flutuante Giga e selecione a opção &quot;O que pode fazer com seu poder&quot; para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sprite Ganancioso',
                        'history_title' => 'Sprite Ganancioso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '525, 428', 'item_required' => null, 'instruction' => 'Fale com Scrooge selecionando a opção &quot;Você tem bastante tesouro&quot; para entrar no status &quot;Miseravel&quot; que dura 30 minutos, bata nos baús ao redor do npc para obter na bag &lt;Moeda de Ouro do Desejo&gt;. Vá até a coordenada (525, 428) onde tem uma fonte, na frente dela use a moeda para completar a trívia'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre do Cristal do Amor',
                        'history_title' => 'Mestre do Cristal do Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ir ate o Mob &lt;Espécies Mágicas&gt; Coelho Geleia Veloz mate-os, colete e coma o &lt;Cristal Misterioso&gt; 5 vezes para completar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mestre Sem Amor',
                        'history_title' => 'Mestre Sem Amor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Ir ate o Mob &lt;Espécies Mágicas&gt; Coelho Geleia Veloz mate-os e colete &lt;Cristal Misterioso&gt; x5 vezespara ir falar com Maso 5x na opção &quot;Você entregou o cristal misterioso para Moso&quot; para completar a trivia.'],
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
                'sort_order' => 51,
                'trivias' => [
                    [
                        'item_title' => 'Maldição de Má Sorte',
                        'history_title' => 'A Espiral da Miséria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '853, 582', 'item_required' => 'A Espiral da Miséria', 'instruction' => 'Fale com o NPC Espírito Anônimo (853, 582)e selecione a opção &quot;Ajude o fantasma com seus últimos desejos&quot; para receber o buff [A Espiral da Miséria] - dura 5 minutos.'],
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
                            ['step_number' => 1, 'npc_name' => 'Mulher', 'coordinates' => '734, 283', 'item_required' => 'Sorriso Insuportável', 'instruction' => 'Fale com a NPC Mulher (734, 283) e selecione &quot;Deixe-me ler seus textos.&quot; para entrar no status [Sorriso Insuportável] - dura 2 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Amor dos Telhados',
                        'history_title' => 'Amor dos Telhados',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Barqueira Heralia', 'coordinates' => '286, 470', 'item_required' => null, 'instruction' => 'Fale com a NPC Barqueira Heralia (286, 470) e selecione &quot;Deixe-me ajudá-lo a expressar o que você pensa!&quot; para adquirir o item &lt;Caixa de som amplificada&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Bem à Mão',
                        'history_title' => 'Dentro da Visão',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '786, 341', 'item_required' => null, 'instruction' => 'Fale com Sprite Guardião Jody (786, 341) e selecione &quot;Você encontrou uma adaga recentemente?&quot; para obter o item &lt;Adaga Ok&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Saia do caminho',
                        'history_title' => 'Deixe de Brincadeiras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '882, 339', 'item_required' => 'Senho de Biggy é Despedaçado', 'instruction' => 'Mate os 4 goblins da &quot;Equipe de Expedição Goblin&quot;: Primogênito para obter o status [Senho de Biggy é Despedaçado], Martelo para obter o status [Senho de Hammy é Despedaçado], Justin para obter o status [Senho de Neily é Despedaçado] e Irmãos Latedores para obter [Senho de Woofy é Despedaçado] - todos os buffs duram 10 minutos. Podem ser encontrados nas coordenadas (882, 339) ao longo da ponte para a Vinha de Sahan. Irá completar a trívia ao juntar os 4 buffs.'],
                        ],
                    ],
                    [
                        'item_title' => 'Saudades de Casa',
                        'history_title' => 'Saudades de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '764, 359', 'item_required' => null, 'instruction' => 'Fale com o NPC &lt;Explorador de Kaslow&gt; Sean(764, 359) e selecione a opção &quot;A vida aqui é dura?&quot; para obter o item &lt;Relatório de Kaslow&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Você Devia ficar quieta',
                        'history_title' => 'Você deveria ficar quieta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Atlanta', 'coordinates' => '716, 349', 'item_required' => 'Fofoca sem fim', 'instruction' => 'Fale com a NPC Atlanta (716, 349) na opção &quot;Mais fofoca?&quot; para obter o status [Fofoca sem fim]. Acumule 5 vezes o status.'],
                        ],
                    ],
                    [
                        'item_title' => 'Clube Noturno Animado',
                        'history_title' => 'Clube Noturno Animado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '816, 524', 'item_required' => null, 'instruction' => 'Fale com o NPC &lt;Pálido&gt; Travesso (816, 524) e selecione a opção &quot;Quero me juntar a você&quot; (Aparece após às 00:00)'],
                        ],
                    ],
                    [
                        'item_title' => 'Supermestre do Disfarce',
                        'history_title' => 'Supermestre do Disfarce',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '699, 371', 'item_required' => null, 'instruction' => 'A &lt;Criaça Camuflada&gt; Flor está usando um poder de se transformar. Você deve encontrar os 3 locais que ela se escondeu para completar a trívia. Ela aparece em forma de Totem (699, 371) , depois de cristal amarelo (770, 379) ou (850, 320) e depois de vinha (832, 356) ou (796, 380). Ela sempre aparecerá na cidade central do mapa em locais aleatórios'],
                        ],
                    ],
                    [
                        'item_title' => 'Quem jogou o Remo',
                        'history_title' => 'Quem jogou o Remo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Gondoleiro Adus', 'coordinates' => '208, 431', 'item_required' => null, 'instruction' => 'Fale com o NPC Gondoleiro Adus (208, 431) na opção &quot;Me dá um remo de madeira&quot; para receber o item &lt;Remo de Madeira Velho&gt;'],
                        ],
                    ],
                    [
                        'item_title' => 'A vida é preciosa',
                        'history_title' => 'A vida é preciosa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com Dargon e escolhemos &quot;Por que você coleciona tantas pétalas?&quot;, Ele nos dará um debuff. Ao lado de dargon há um baú, depois de quebrá-lo, obteremos um balde de água. Vamos para 653, 595) e usamos o objeto para finalizar a trivia.'],
                        ],
                    ],
                    [
                        'item_title' => 'É molho. Coloquei um pouco de molho.',
                        'history_title' => 'É molho. Coloquei um pouco de molho.',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '286, 471', 'item_required' => null, 'instruction' => 'Vamos ao Shen Artigos Gerais e compramos o Molho Misterioso. Vamos até Heralia (286, 471) e conversamos com ela, escolhemos a opção &quot;Quer colocar molho no prato?&quot;. Ele nos dará a Sopa de Peixe Melhorada, levaremos para Jarred (794, 381). Ao falar com ele, escolhemos &quot;Experimente a sopa grossa novamente&quot; para completar a trivia.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Platô Nebuloso',
                'slug' => 'tormentum-plat-nebuloso',
                'description' => 'Mapa de Platô Nebuloso na região de Tormentum.',
                'sort_order' => 52,
                'trivias' => [
                    [
                        'item_title' => 'Responsabilidade do Homem de Palha',
                        'history_title' => 'Responsabilidade do Homem de Palha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '256, 181', 'item_required' => 'As Bençãos da Eterna Mãe', 'instruction' => 'Fale com &lt;Sábio Eterno&gt; Mina (256, 181) e selecione a opção &quot;Quem está cuidando destes campos?&quot; para receber o status [As Bençãos da Eterna Mãe] - dura 5 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Dança Bizarra do Gorila',
                        'history_title' => 'Dança Bizarra do Macaco',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Macaco Zangado Preto', 'instruction' => 'Mate «Macaco Zangado Preto» (próximo a 395, 458) para receber o status [Perfume do Macaco Negro] - dura 10 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tigres Voadores',
                        'history_title' => 'Tigres Voadores',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '527, 346', 'item_required' => null, 'instruction' => 'Vá até o NPC Pesquisador de Foguetes Oberth (527, 346) e selecione &quot;Eu também quero lançar um foguete!&quot; para obter &lt;Foguete de Teste Instável&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Voz Celestial',
                        'history_title' => 'Voz Celestial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '436, 305', 'item_required' => null, 'instruction' => 'Fale com Músico Rima (436, 305) e selecione &quot;Será que eu poderia ouvir a sua última composição?&quot; para obter &lt;Bolsa de Rádio Emissora Maligna&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sabor da Cidade Natal',
                        'history_title' => 'Sabor de Casa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Tigres Machos do Nevoeiro', 'instruction' => 'Derrote «Tigres Machos do Nevoeiro» e «Tigres Fêmeas do Nevoeiro» para obter &lt;Carne de Tigre Fresca&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pássaros iguais voam juntos',
                        'history_title' => 'Pássaros iguais voam juntos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Duende Herói', 'instruction' => 'Derrote monstros «Duende Herói» para obter o buff [Parece Familiar] - dura 5 min. Acumule 5 vezes o buff.'],
                        ],
                    ],
                    [
                        'item_title' => 'Fãs Leais',
                        'history_title' => 'Fãs Leais',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '602, 620', 'item_required' => null, 'instruction' => 'Fale om o NPC &lt;Eremita&gt; Mira (602, 620) e selecione a opção &quot;Porque você está tão ligado na Angelica?&quot; para obter o item &lt;Suprimentos de Treino&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Espere apenas 10 segundos',
                        'history_title' => 'Espere apenas 10 segundos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Eremita Angelica', 'coordinates' => '875, 715', 'item_required' => null, 'instruction' => 'Vá até o NPC Eremita Angelica (875,715) e clique na opção &quot;Estou pronto!&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Testador de Feitiçaria',
                        'history_title' => 'Testador de Feitiçaria',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Releno', 'coordinates' => '670, 580', 'item_required' => 'Experimento Vodu', 'instruction' => 'Vá até o NPC Releno (670,580) e clique na opção &quot;Fiquei sabendo que você está procurando alguém para testar sua nova feitiçaria&quot; para obter o buff [Experimento Vodu]'],
                        ],
                    ],
                    [
                        'item_title' => 'Me Leve Daqui',
                        'history_title' => 'Me Leve Daqui',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Janeve', 'coordinates' => '275, 185', 'item_required' => 'Correr atrás é difícil hoje em dia', 'instruction' => 'Fale com Janeve (275,185) e clique na opção &quot;Você tem um amorzinho?&quot; para receber o buff [Correr atrás é difícil hoje em dia]'],
                        ],
                    ],
                    [
                        'item_title' => 'Uma Flecha no Joelho',
                        'history_title' => 'Uma Flecha no Joelho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '885, 345', 'item_required' => 'Flecha Removida do Joelho', 'instruction' => 'Vá até o NPC Richter Simons (885,345) e clique na opção &quot;Fique sabendo que você era bem bom até levar Uma Flecha no Joelho?&quot; para adquirir o item [Flecha Removida do Joelho]'],
                        ],
                    ],
                    [
                        'item_title' => 'Um sorriso assustador',
                        'history_title' => 'um sorriso assustador',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos até Dove falar com ela, escolhemos &quot;Por que você não para de sorrir para mim?&quot;, ganhamos um buff ao fazer isso. Devemos acumulá-lo 5 vezes, então repetimos o processo; Uma vez feito, escolhemos a opção &quot;O que você quer fazer?&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'O sentimento de harmonia',
                        'history_title' => 'o sentimento de harmonia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '963, 688', 'item_required' => null, 'instruction' => 'Conversamos com Myra e escolhemos a opção &quot;Angélica tem algum método de treinamento especial?&quot;, agora temos o buff do Método de Treinamento Secreto. Nós vamos para (963, 688). Teremos um novo buff e uma habilidade, que devemos usar 5 vezes.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Banco de Areia Dourado',
                'slug' => 'tormentum-banco-de-areia-dourado',
                'description' => 'Mapa de Banco de Areia Dourado na região de Tormentum.',
                'sort_order' => 53,
                'trivias' => [
                    [
                        'item_title' => 'Pássaro Solar',
                        'history_title' => 'Pássaro Solar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '120, 423', 'item_required' => null, 'instruction' => 'Fale com o NPC Criador de Pássaros Adelaide (120, 423), e selecione a opção &quot;Ouvi dizer que você pode tentar montar um Pássaro Solar por 5 Ouros aqui&quot; para receber &lt;Sela para Pássaro Solar&gt;'],
                        ],
                    ],
                    [
                        'item_title' => 'Poço de Dinheiro',
                        'history_title' => 'Poço de Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Fonte dos Desejos Clea', 'coordinates' => '434, 301', 'item_required' => null, 'instruction' => 'Fale com Fonte dos Desejos Clea (434, 301) e selecione &quot;Eu Farei um desejo por 5 ouro&quot; para completar a trivia. (Para conversar com o NPC é necessário estar com o status &quot;Domar Pássaro Solar Irritado&quot;.)'],
                        ],
                    ],
                    [
                        'item_title' => 'Irmã Tomate',
                        'history_title' => 'Irmã Tomate',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '441, 276', 'item_required' => null, 'instruction' => 'Vá até (441,276) e destrua &quot;Caixa de colheita&quot; para obter o item &lt;Um Tomate Gigante&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Já chegamos ao Mar Aberto?',
                        'history_title' => 'Já chegamos ao Mar Aberto?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '570, 585', 'item_required' => null, 'instruction' => 'Vá até (570,585) e destrua &quot;Caixa Bonus&quot; para obter o item &lt;Cheque de 3.000.000&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Abraço da Agulha',
                        'history_title' => 'Abraço da Agulha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Besta do Oásis', 'instruction' => 'Mate alguns «Besta do Oásis» e/ou «Besta da Areia Amarela» para obter o buff [Ai] - dura 30 segundos, acumule 5x.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mais tempo em mãos, melhor',
                        'history_title' => 'Melhora com a Idade',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tylen', 'coordinates' => '494, 353', 'item_required' => null, 'instruction' => 'Fale com o NPC Tylen (494, 353) e selecione &quot;Você sabe de algum lugar divertido por aqui perto?&quot; para obter o item &lt;Revista Turística do Banco de Areia Dourado&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Expresso de Tendências',
                        'history_title' => 'Expresso de Tendências',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Samantha', 'coordinates' => '337, 715', 'item_required' => null, 'instruction' => 'Fale com o NPC Samantha (337, 715) e selecione a opção &quot;Me dê os espetinhos de Beira-Mar do Banco de Areia Dourado&quot; para receber o item &lt;Espetinhos de Beira-Mar do Banco de Areia Dourado&gt; e o estado &lt;Fresquinho é Mais Gostoso&gt; que dura 5 min.'],
                        ],
                    ],
                    [
                        'item_title' => 'Pegue o Cachorro Preto',
                        'history_title' => 'Pegue o Cachorro Preto',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Faustino', 'coordinates' => '570, 590', 'item_required' => 'Removedor de Pelo Misterioso', 'instruction' => 'Vá até o NPC Faustino (570,590) e clique na opção &quot;Você já tem a nova fórmula?&quot; para adquirir o item [Removedor de Pelo Misterioso]'],
                        ],
                    ],
                    [
                        'item_title' => 'Ta com fome ou não?',
                        'history_title' => 'Ta com fome ou não?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Comida para Dois Passáros', 'instruction' => 'Derrote o mob &quot;Ladrão do Deserto&quot; até obter o item [Comida para Dois Passáros]'],
                        ],
                    ],
                    [
                        'item_title' => 'Você é Especial',
                        'history_title' => 'Você é Especial',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Manu', 'coordinates' => '825, 475', 'item_required' => null, 'instruction' => 'Vá até o NPC Manu (825,475) e clique na opção &quot;Não vou fazer nada para você!&quot; para adquirir o status &quot;coragem para recusar&quot; 5 vezes completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Acorde! Você não tem pretendentes',
                        'history_title' => 'Acorde! Você não tem pretendentes',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Anita', 'coordinates' => '435, 330', 'item_required' => 'Só existe uma verdade', 'instruction' => 'Vá até a NPC Anita (435,330) e clique na opção &quot;Você era bem popular mesmo quando jovem?&quot; para obter o buff [Só existe uma verdade]'],
                        ],
                    ],
                    [
                        'item_title' => 'Entre Dimensões',
                        'history_title' => 'Entre Dimensões',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '460, 306', 'item_required' => null, 'instruction' => 'Compramo o item &quot;Recompensa de Sidingh&quot; do proprietário do armazém Kuan (460, 306). Falamos com Clea e escolhemos &quot;Quero trocar isso por outro desejo&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Grande fantasia é a melhor',
                        'history_title' => 'Grande fantasia é a melhor',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '313, 163', 'item_required' => null, 'instruction' => 'Vamos até onde está Ming e falamos com ele, escolhemos &quot;Ouvi dizer que eles têm jogos divertidos aqui?&quot;, Ele nos dará o Grand Fantasy Trial Edition. Levamos o objeto para Chiki (313, 163) e Manu (824, 474); com ambos, escolhemos a opção &quot;Aqui está um jogo divertido&quot;. Voltamos a Ming e ao falar com ele escolhemos &quot;Eu promovi com sucesso a Grande Fantasia&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Aldeia Aura Ilusória',
                'slug' => 'tormentum-aldeia-aura-ilus-ria',
                'description' => 'Mapa de Aldeia Aura Ilusória na região de Tormentum.',
                'sort_order' => 54,
                'trivias' => [
                    [
                        'item_title' => 'Se Eu Pudesse Voltar para o Passado',
                        'history_title' => 'Se Eu Pudesse Voltar para o Passado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '310, 434', 'item_required' => 'Estranhos Relógios Invertidos', 'instruction' => 'Vá até (310, 434) para receber o status [Estranhos Relógios Invertidos] por 2 minutos.'],
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
                            ['step_number' => 1, 'npc_name' => 'Perry', 'coordinates' => '722, 443', 'item_required' => null, 'instruction' => 'Vá até Perry (722, 443)e clique em &quot;Me passe a poção misteriosa, por favor&quot; para obter &lt;Poção Misteriosa&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Economia de Troca',
                        'history_title' => 'Economia de Troca',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '407, 109', 'item_required' => null, 'instruction' => 'Derrube o baú &lt;Mosqueando e Aguado…&gt; Lixeira de Reciclagem nas coordenadas (407, 109) para obter &lt;Sapatos Velhos&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Sargento por um dia',
                        'history_title' => 'Oficial Por Um Dia',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '262, 284', 'item_required' => 'Pare de Brincar!', 'instruction' => 'Fale com os 3 soldados preguiçosos &lt;Roubando peixes&gt; Soldado Preguiçoso (262, 284), &lt;Brincando com espada&gt; Soldado Preguiçoso (276, 280), &lt;Desleixado&gt; Soldado Preguiçoso (276, 280) e selecione &quot;Pare de brincar!&quot; para receber o buff [Pare de Brincar!] do que estava roubando peixes, &quot;É assim que se segura uma espada?&quot; para receber o buff [É assim que se segura uma espada?] do da espada e &quot;Novos recrutas, atenção!&quot; para receber o buff [Novos recrutas] do soldado desleixado (todos os buffs duram 5 min).'],
                        ],
                    ],
                    [
                        'item_title' => 'Ativista dos Direitos dos Roedores',
                        'history_title' => 'Proteção dos Direitos dos Coelhos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pesquisador Jelly-Coelho', 'coordinates' => '332, 398', 'item_required' => 'Ativista dos Direitos Roedores', 'instruction' => 'Fale com o NPC Pesquisador Jelly-Coelho (332, 398), e selecione &quot;Em que posso ajudar?&quot; para receber o buff [Ativista dos Direitos Roedores] e [Palavra-chave: Noite].'],
                        ],
                    ],
                    [
                        'item_title' => 'A Dignidade do Mestre',
                        'history_title' => 'A Dignidade do Mestre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Vinny', 'coordinates' => '313, 172', 'item_required' => null, 'instruction' => 'Vá até o NPC Vinny (313, 172) e compre o item &lt;Roupa da Besta da Lagoa de Cobalto&gt;, vá até as coordenadas (X:684, Y:177) e use o item para ganhar o estado &quot;Monstro Derrotado&quot; - dura 2 min.'],
                        ],
                    ],
                    [
                        'item_title' => 'Uivando na Noite Escura',
                        'history_title' => 'Uivando na Noite Escura',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Chichirame', 'coordinates' => null, 'item_required' => 'pergaminho de rancor vencido', 'instruction' => 'Vá até o NPC Chichirame e selecione a opção &quot;Você sabe o que está acontecendo com o chororô aqui?&quot; para obter [pergaminho de rancor vencido].'],
                        ],
                    ],
                    [
                        'item_title' => 'E o terceiro episódio?',
                        'history_title' => 'E o terceiro episódio?',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '481, 189', 'item_required' => 'Caderno da Inspiração', 'instruction' => 'Vá até o NPC Hélio (481, 189) e clique na opção &quot;Que tal o terceiro episódio&quot; para obter o item [Caderno da Inspiração].'],
                        ],
                    ],
                    [
                        'item_title' => 'Coelho de Sobremesa',
                        'history_title' => 'Coelho de Sobremesa',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Pesqisador Jelly-Coelho', 'coordinates' => '330, 400', 'item_required' => 'Pá de sobremesa', 'instruction' => 'Vá até o NPC Pesqisador Jelly-Coelho (330,400) e clique na opção &quot;O que vpcê está pesquisando?&quot; para obter o item [Pá de sobremesa].'],
                        ],
                    ],
                    [
                        'item_title' => 'Pedra da Levitação',
                        'history_title' => 'Pedra da Levitação',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '379, 399', 'item_required' => 'Pequena Pedra de Levitação', 'instruction' => 'Vá até o NPC Pesquisador de Pedra Flutuante (379, 399) e selecione a opção &quot;Posso pegar a sua Pedra de Levitação emprestado?&quot; para adquirir o item [Pequena Pedra de Levitação].'],
                        ],
                    ],
                    [
                        'item_title' => 'Mas eu me recuso',
                        'history_title' => 'Mas eu me recuso',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '186, 242', 'item_required' => null, 'instruction' => 'Conversamos com Montalbán e escolhemos &quot;Que segredos ele parece saber sobre a Guarda Pretoriana?&quot;, obteremos os testes de mutação e teremos que falar com Sabino (186, 242), na opção &quot;A mutação está relacionada a a Guarda Pretoriana?&quot;. Nós vencemos os inimigos para terminar.'],
                        ],
                    ],
                    [
                        'item_title' => 'O cheiro das Mentiras',
                        'history_title' => 'O cheiro das Mentiras',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vamos a Zamora e falamos com ele, escolhemos &quot;Você é realmente bom em liderar as tropas?&quot;, Ele nos dará um buff que devemos acumular 5 vezes, para isso, repetiremos o processo até fazê-lo. Finalmente, ao falar com ele, escolhemos &quot;O ar está cheio de cheiro de mentira&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Passagem da Chama de Fogo Congelante',
                'slug' => 'tormentum-passagem-da-chama-de-fogo-congelante',
                'description' => 'Mapa de Passagem da Chama de Fogo Congelante na região de Tormentum.',
                'sort_order' => 55,
                'trivias' => [
                    [
                        'item_title' => 'Banquete com Churrasco Mongol',
                        'history_title' => 'Banquete com Churrasco Mongol',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote Assassinos de Stolak (próximos a 375, 250) até que você receba Pedaço Estranho de Carne.'],
                        ],
                    ],
                    [
                        'item_title' => 'Mais Minério',
                        'history_title' => 'Mais Minério',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Obtenha 250x Minério da Meia Noite (obtido através de coleta no &quot;Minerar&quot; do seu Sprite, leilão e via troca).'],
                        ],
                    ],
                    [
                        'item_title' => 'Grande Engano',
                        'history_title' => 'Grande Engano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '663, 216', 'item_required' => 'Veja Bertha', 'instruction' => 'Derrote Matador de Stolak nas coordenadas (663, 216) para obter o status [Veja Bertha] - dura 30 min.'],
                        ],
                    ],
                    [
                        'item_title' => 'Também Não Quero Te Ver',
                        'history_title' => 'Também Não Quero Te Ver',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '345, 540', 'item_required' => null, 'instruction' => 'Derrote &lt;Símbolos de navegação&gt; Estranha caixa de madeira nas coordenadas (345, 540) para obter &lt;Pequeno telescópio&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Armado até os Dentes',
                        'history_title' => 'Totalmente Armado',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '322, 574', 'item_required' => null, 'instruction' => 'Fale com o NPC &lt;Admirador da Água Termal&gt; Wendy (322,574) em &#39;&#39;Devo ter atenção com algo nessas fontes termais?&#39;&#39; para obter &#39;&#39;Toalha de Banho Limpa&#39;&#39;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Trabalho Duro',
                        'history_title' => 'O Gosto do Trabalho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '116, 236', 'item_required' => null, 'instruction' => 'Fale com o NPC Fornecedor de Armas de Expedição Xavier (116, 236) e selecione &quot;O que os Mineiros costumam comer aqui?&quot; para receber o item &quot;Almoço Fracionado&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Febre de Jelly-Besta',
                        'history_title' => 'Febre de Jelly-Besta',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '485, 638', 'item_required' => null, 'instruction' => 'Fale com o NPC &lt;Caçador de Jelly Besta&gt; Agogo (485, 638) e selecione a opção &quot;Não compreendo porque é tão obcecado com Jelly Monstros&quot; para obter &lt;Boneco costurado à mão de Jelly Monstro&gt;'],
                        ],
                    ],
                    [
                        'item_title' => 'Caminhada dos Fãs!',
                        'history_title' => 'Caminhada dos Fãs!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '466, 268', 'item_required' => 'Que fedor!', 'instruction' => 'Vá até o NPC &lt;Leal Seguidor de Carso&gt; Ícaro (466,268) e clique na opção &quot;Alguém lhe disse que você cheira mal?&quot; para adquirir o status [Que fedor!]'],
                        ],
                    ],
                    [
                        'item_title' => 'Lado da Estrada',
                        'history_title' => 'Lado da Estrada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Picareta', 'instruction' => 'Derrote o monstro &quot;Escavador de Cristal&quot; até adquirir o item [Picareta]'],
                        ],
                    ],
                    [
                        'item_title' => 'Novas Maneiras de Fazer Dinheiro',
                        'history_title' => 'Novas Maneiras de Fazer Dinheiro',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '145, 243', 'item_required' => 'Ovos Frescos', 'instruction' => 'Vá até o NPC &lt;Prefeito da Aldeia Obsidiana&gt; Fagundes (145, 243) e selecione a opção &quot;Eu soube que há um novo jeito de fazer dinheiro.&quot; para adquirir o item [Ovos Frescos]'],
                        ],
                    ],
                    [
                        'item_title' => 'Inconstância',
                        'history_title' => 'Inconstância',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '348, 605', 'item_required' => 'Pequena Colher d&#39;Água', 'instruction' => 'Vá até a NPC &lt;Guardiã da Água Termal&gt; Marcia (348, 605) e selecione a opção &quot;Fique sabendo de um novo método de fonte termal para adquirir [Pequena Colher d&#39;Água]'],
                        ],
                    ],
                    [
                        'item_title' => 'Panela de fogo',
                        'history_title' => 'Panela de fogo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '346, 608', 'item_required' => null, 'instruction' => 'Conversamos com Kagi, escolhendo a opção &quot;Está muito frio aqui&quot; ao fazê-lo. Teremos que ir ao Marcia (346, 608) e ao falar com ele escolher &quot;Por acaso aqui não tem panela quente, não é?&quot;. Ele fornecerá o que há de mais moderno em panelas quentes. Voltamos a falar com o Kagie escolhemos &quot;Vamos comer uma panela quente&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Introdução Ninja',
                        'history_title' => 'Introdução Ninja',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Conversamos com Falco e escolhemos a opção &quot;Eu também quero ser ninja&quot;, aparecerá um manequim de treinamento próximo que devemos derrotar. Recebemos um buff e conversamos com Falco novamente, escolhendo &quot;Estou pronto para me tornar um ninja&quot;.'],
                        ],
                    ],
                ],
            ],
            [
                'city' => 'Tormentum',
                'name' => 'Península Relíquia',
                'slug' => 'tormentum-pen-nsula-rel-quia',
                'description' => 'Mapa de Península Relíquia na região de Tormentum.',
                'sort_order' => 56,
                'trivias' => [
                    [
                        'item_title' => 'Isso não é brincadeira',
                        'history_title' => 'Não É Brinquedo',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Quebre os baús vermelhos (próximos a 652, 600) até receber o item Chave de Canhão Pirata.'],
                        ],
                    ],
                    [
                        'item_title' => 'Magia do Minério Estranha',
                        'history_title' => 'Magia do Minério Estranha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Golem Fera', 'instruction' => 'Colete 5x &lt;Rocha Mágica de Fera&gt; de «Golem Fera» (próximos a 287, 121) e 5x &lt;Pedra Pontiaguda Mágica&gt; de «Golem Espinhudo Místico» (próximos a 260, 231).'],
                        ],
                    ],
                    [
                        'item_title' => 'Se eu crescer',
                        'history_title' => 'Enquanto Eu Crescer',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bonescar', 'coordinates' => '125, 360', 'item_required' => 'Monstro de pedra pontiagudo falso', 'instruction' => 'Vá até Bonescar (125, 360) e selecione &quot;Você quer se tornar atirador de elite?&quot; para aparecer um «Monstro de pedra pontiagudo falso». Derrote-o dentro de 10 segundos para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Como Gritar',
                        'history_title' => 'Como Gritar',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrote &lt;Saindo&gt; Monstro de Pedra Pontiagudo para obter &lt;Rocha Pontuda&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Os Bastidores do Trono',
                        'history_title' => 'A História por Trás do Trono',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '515, 673', 'item_required' => null, 'instruction' => 'Vá até a localização (515, 673) quebre o baú para obter o item &lt;Boneco Jelly-Coelho Quebrado&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'O prestígio',
                        'history_title' => 'Exibição de Primeira Classe',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => 'Matador Disfarçado', 'instruction' => 'Mate os monstros «Matador Disfarçado» até dropar o item &lt;Papel Rasgado&gt;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Isso não funciona',
                        'history_title' => 'Isso não funciona',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Vladmir', 'coordinates' => '485, 570', 'item_required' => 'O Disfarce de Yusheng', 'instruction' => 'Fale com o NPC Vladmir (485, 570) e selecione a opção &quot;Como você vai conseguir as informações&quot; para obter status [O Disfarce de Yusheng] - dura 10 minutos.'],
                        ],
                    ],
                    [
                        'item_title' => 'Disfarce de Sábio Coelho',
                        'history_title' => 'Disfarce de Sábio Coelho',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ronaldo', 'coordinates' => '630, 130', 'item_required' => 'Máscara Jelly-Coelho', 'instruction' => 'Derrote &lt;Jelly-Coelho Anormal&gt; até obter o item [Máscara Jelly-Coelho]. Em seguida use o item e fale com o NPC Ronaldo (630,130) e clique na opção &quot;Mexa com ele&quot; algumas vezes (cerca de umas 4/5 vezes) até você ser empurrado e aparecer que completou a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Ninguém disse que você podia assustar o jabuti!',
                        'history_title' => 'Ninguém disse que você podia assustar o jabuti!',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Atalho', 'coordinates' => '365, 525', 'item_required' => 'Vamos assustar eles', 'instruction' => 'Vá até o NPC Atalho para Beira Mar (365,525) em seguida clique na primeira opção &quot;Eu quero ir para Beira-Mar&quot;, depois disso você será teletransportado e receberá o buff [Vamos assustar eles].'],
                        ],
                    ],
                    [
                        'item_title' => 'Não Lata',
                        'history_title' => 'Não Lata',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Juarez', 'coordinates' => '133, 496', 'item_required' => 'Tesouro do General', 'instruction' => 'Vá até o NPC Juarez (133, 496) em seguida seleciona a opção &quot;Ouvi dizer que você tem uma arma especial contra lobisomens e criminosos?&quot; para obter o item [Tesouro do General]'],
                        ],
                    ],
                    [
                        'item_title' => 'Rezar é fácil quando você é o padre',
                        'history_title' => 'Rezar é fácil quando você é o padre',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Zilnan', 'coordinates' => '198, 654', 'item_required' => null, 'instruction' => 'Vá até o NPC Zilnan (198, 654) e clique na opção &quot;O Sábio passa muito tempo dando sermões?&quot;, em seguida no mesmo NPC clique na opção &quot;Oh meu deus, o que é isso?&quot; para completar a trívia.'],
                        ],
                    ],
                    [
                        'item_title' => 'Eu não sou humano',
                        'history_title' => 'Eu não sou humano',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => null, 'item_required' => null, 'instruction' => 'Derrotamos o Clone Mecânico, até obter 5 Núcleos de Transformação. Falamos com o cientista maluco e escolhemos a opção &quot;Por favor, transforme-me&quot;.'],
                        ],
                    ],
                    [
                        'item_title' => 'Jovens',
                        'history_title' => 'Jovens',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '504, 374', 'item_required' => null, 'instruction' => 'Compramos um &quot;Chá especial superior de Kalnis&quot; na loja do Raul, depois vamos para o npc Gardel(504, 374); fale com ele e escolha &quot;Quero convidar você para beber algo&quot;, obteremos uma habilidade, ao usá-la ele nos dará um buff , devemos acumulá-lo 5 vezes, então o usaremos até alcançá-lo.'],
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
                'sort_order' => 57,
                'trivias' => [
                    [
                        'item_title' => 'Caçador de Caçador Ilegal',
                        'history_title' => 'Caçador de Caçador Ilegal',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Tysen', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Tysen e selecione &quot;Ajude a expulsar os caçadores ilegais&quot; para receber o status &quot;Disfarce de Touro&quot;. Caminhe pela area do rancho da Ilha até aparecer no chat gritar a frase &quot;Maldito Caçador! Não saia correndo, se tiver coragem!&quot; então derrote &quot;Caçador Ilegal Bonru&quot; para concluir a trívia. Nota: Só pode ser concluída Quarta .'],
                        ],
                    ],
                    [
                        'item_title' => 'Som do Berrante',
                        'history_title' => 'Som do Berrante',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Bazo', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até Bazo e selecione a opção &quot;Por favor, patrulhe a ilha por mim!&quot; para receber o status &quot;Oficial de Inspeção da Patrulha&quot;. Fale com os Guardas da Ilha: Uno, Teliou, Duou na ordem e selecione &quot;Como estão as coisas aqui na ilha&quot; para receber o status de cada um. Por fim volte até Bazo e selecione &quot;Entregue os resultados&quot; para completar a trívia. Nota: Esta trívia só pode ser completada na Segunda .'],
                        ],
                    ],
                    [
                        'item_title' => 'Passeio na Fazenda',
                        'history_title' => 'Passeio na Fazenda',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => null, 'coordinates' => '375, 272', 'item_required' => null, 'instruction' => 'Vá até a Ayaa e selecione a opção &quot;Que tal relaxar um pouco no campo?&quot; para receber o item &quot;Poção de Cogumelo Embusteiro&quot;. Use o item nas coordenadas (375, 272) para concluir a trívia. Nota: Esta trívia só pode ser feita na Terça.'],
                        ],
                    ],
                    [
                        'item_title' => 'Noite no Museu de Modelos',
                        'history_title' => 'Noite no Museu de Modelos',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Juninho', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Fale com o Juninho e clique na opção &quot;Entre no museu Modelo Sprite&quot; para ser teleportado ao museu. Fale com Sprite Estranho Aka e selecione a opção &quot;Você consegue me ver?&quot; para adquirir o status &quot;Quem é Kar&quot;. Fale com Sprite estranho Ayn e selecione a opção &quot;Você consegue me ver?&quot; Para conseguir o status &quot;Quem é Yin?&quot; Fale com o Sprite Estranho Alea e selecione a opção &quot;Você consegue me ver?&quot; para conseguir o status &quot;Quem é La?&quot;. Fale com o Sprite Estranho Adoa e selecione &quot;Você consegue me ver?&quot; para receber o status &quot;Quem é Tao?&quot; Por fim fale com Administrador da casa Modelo Florinha e selecione a opção &quot;Quem mais está aqui?&quot; para concluir a trívia. Nota: Só pode ser completa na Quinta .'],
                        ],
                    ],
                    [
                        'item_title' => 'Carniceira Aquática',
                        'history_title' => 'Carniceira Aquática',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Oppen', 'coordinates' => '280, 200', 'item_required' => null, 'instruction' => 'Vá até Oppen e selecione a opção &quot;Quem teria feito uma barbaridade desses?&quot; em seguida compre uma vara de pesca com o npc Clink Clink. Vá para as coordenadas (280, 200) e inicie a pesca manual ou automática. Consiga Madeira Flutuante x20 e Pedra Redonda x20. Volte ao Oppen e selecione &quot;Acabei de ajudar na limpeza das peixarias!&quot; para completar a trívia. Nota: Trívia só pode ser completa na Sexta .'],
                        ],
                    ],
                    [
                        'item_title' => 'Sprite da Luz Dourada',
                        'history_title' => 'Sprite da Luz Dourada',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Ursula', 'coordinates' => null, 'item_required' => null, 'instruction' => 'Vá até o NPC Ursula e selecione a opção &quot;Quer ficar rico num piscar de olhos?&quot;. Fale com o Sprite da interface de peixaria e selecione &quot;Colete material de peixaria&quot; para receber &quot;Alimentação Leve&quot;. Fale com o Sprite da interface do rancho e selecione a opção &quot;Colete o material diário do rancho&quot; para adquirir &quot;Alimentação de Animal Leve&quot;. Vá até o Sprite da Pedreira da ilha e selecione &quot;Colete o material de minério diariamente&quot; para adquirir &quot;Folhado de Creme de Mordida Pequena&quot;. Fale com o Sprite Mordomo Juninho e selecione &quot;Colete material de conserto diário&quot; para adquirir &quot;Marreta de reparo do Trabalhador&quot;. Por fim vá até Ursula e selecione &quot;Tudo pronto!&quot; para concluir a trívia. Nota: Esta trívia só pode ser completada no sábado . Você deve ter colocado sprites nos altares para poder acessar a interface deles.'],
                        ],
                    ],
                    [
                        'item_title' => 'Tesouro na Ilha',
                        'history_title' => 'Tesouro na Ilha',
                        'steps' => [
                            ['step_number' => 1, 'npc_name' => 'Benji', 'coordinates' => '192, 288', 'item_required' => null, 'instruction' => 'Vá até Benji e selecione &quot;O tesouro lendário&quot; para adquirir &quot;Detector Geológico&quot; e &quot;Pesquisador de Mineração&quot;. Use o &quot;Detector Geológico&quot; nas coordenadas (192, 288) para adquirir &quot;Relatório Geológico da Pedreira&quot; e o &quot;Pesquisador de Mineração&quot; nas coordenadas (235, 331) para invocar Monstro da Terra Minhoca da Mina de Cristal para adquirir &quot;Mineral Misteriosos&quot;. Retorne ao Benji e selecione &quot;Aqui estão os resultados da busca&quot; para completar a trívia. Nota: Trívia pode ser completada apenas no domingo .'],
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
