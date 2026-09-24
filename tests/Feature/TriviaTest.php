<?php

namespace Tests\Feature;

use App\Models\Trivia;
use App\Models\TriviaStep;
use App\Models\User;
use App\Models\Zone;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TriviaTest extends TestCase
{
    use RefreshDatabase;

    public function test_trivias_index_page_displays_step_by_step_instructions(): void
    {
        $zone = Zone::create([
            'city' => 'Kaslow',
            'name' => 'Baía Azul',
            'slug' => 'kaslow-baia-azul',
            'sort_order' => 1,
        ]);

        $trivia = Trivia::create([
            'zone_id' => $zone->id,
            'item_title' => 'Peixe Seco Delicioso',
            'history_title' => 'Peixe Seco Delicioso',
            'points' => 2,
            'sort_order' => 1,
        ]);

        TriviaStep::create([
            'trivia_id' => $trivia->id,
            'step_number' => 1,
            'npc_name' => 'Fazendeiro Cyer',
            'coordinates' => '416, 229',
            'instruction' => 'Fale com o NPC <Fazendeiro Cyer> (416, 229) e selecione "Mackrel delicioso?"',
        ]);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Peixe Seco Delicioso');
        $response->assertSee('Passo a Passo');
        $response->assertSee('Fazendeiro Cyer');
        $response->assertSee('416, 229');
    }

    public function test_trivia_show_page_displays_detailed_steps(): void
    {
        $zone = Zone::create([
            'city' => 'Kaslow',
            'name' => 'Baía Azul',
            'slug' => 'kaslow-baia-azul',
            'sort_order' => 1,
        ]);

        $trivia = Trivia::create([
            'zone_id' => $zone->id,
            'item_title' => 'Mágia Básica',
            'history_title' => 'Mágica 101',
            'points' => 2,
            'sort_order' => 1,
        ]);

        TriviaStep::create([
            'trivia_id' => $trivia->id,
            'step_number' => 1,
            'npc_name' => 'Adami',
            'coordinates' => '641, 498',
            'instruction' => 'Fale com Soldado do Forte Adami (641, 498)',
        ]);

        TriviaStep::create([
            'trivia_id' => $trivia->id,
            'step_number' => 2,
            'npc_name' => 'Ralakeshia',
            'coordinates' => '634, 505',
            'item_required' => 'Livro de Magia',
            'instruction' => 'Vá até Ralakeshia (634, 505) e receba o [Livro de Magia]',
        ]);

        $response = $this->get(route('trivias.show', $trivia->id));

        $response->assertStatus(200);
        $response->assertSee('Passos para Realização');
        $response->assertSee('Ralakeshia');
        $response->assertSee('634, 505');
        $response->assertSee('Livro de Magia');
    }

    public function test_guest_cannot_toggle_trivia_progress(): void
    {
        $zone = Zone::create(['city' => 'Kaslow', 'name' => 'Baía Azul', 'slug' => 'kaslow-baia-azul', 'sort_order' => 1]);
        $trivia = Trivia::create(['zone_id' => $zone->id, 'item_title' => 'Test', 'history_title' => 'Test', 'points' => 2, 'sort_order' => 1]);

        $response = $this->postJson(route('progress.toggle'), ['trivia_id' => $trivia->id]);

        $response->assertStatus(401);
    }

    public function test_authenticated_user_can_toggle_trivia_progress(): void
    {
        $user = User::factory()->create();
        $zone = Zone::create(['city' => 'Kaslow', 'name' => 'Baía Azul', 'slug' => 'kaslow-baia-azul', 'sort_order' => 1]);
        $trivia = Trivia::create(['zone_id' => $zone->id, 'item_title' => 'Test', 'history_title' => 'Test', 'points' => 2, 'sort_order' => 1]);

        $response = $this->actingAs($user)->postJson(route('progress.toggle'), ['trivia_id' => $trivia->id]);

        $response->assertStatus(200);
        $response->assertJson(['success' => true, 'completed' => true]);
        $this->assertDatabaseHas('user_progress', [
            'user_id' => $user->id,
            'trivia_id' => $trivia->id,
        ]);
    }
}
