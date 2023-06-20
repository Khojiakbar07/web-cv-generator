<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_main_page(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function test_login_page()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_register_page()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_forgot_password_page()
    {
        $response = $this->get('/login/forgot-password');

        $response->assertStatus(200);
    }
}
