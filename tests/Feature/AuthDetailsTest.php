<?php

namespace Tests\Feature;

use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class AuthDetailsTest extends TestCase
{
    public function test_returns_user_details_when_authenticated(): void
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/auth/details');

        $response->assertStatus(200)
            ->assertJsonStructure(['user' => ['id', 'name', 'email']]);
    }

    public function test_returns_unauthenticated_when_not_authenticated(): void
    {
        $response = $this->getJson('/api/auth/details');

        $response->assertStatus(401)
            ->assertJson(['error' => 'Unauthenticated.']);
    }
}

