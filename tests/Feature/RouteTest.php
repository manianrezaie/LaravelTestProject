<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get(route('home'));
        $response->assertStatus(200);

        $response = $this->get(route('api_all_players'));
        $response->assertStatus(200);

        $response = $this->get(route('api_all_teams'));
        $response->assertStatus(200);

        $response = $this->get(route('api_get_player', ['id' => 1]));
        $response->assertStatus(200);

        $this->json('GET', '/api/player', ['id' => 1])
            ->seeJsonStructure([
                'data' => ['id', 'image', 'name', 'score', 'teams', 'birth_date', 'created_at', 'updated_at']
            ]);
    }
}
