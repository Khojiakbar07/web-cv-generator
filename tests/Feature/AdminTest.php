<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_admin_dashboard()
    {
        $user = User::factory()->create();

        $this->actingAs($user, 'web')->get('/dashboard')->assertStatus(200);
    }
}
