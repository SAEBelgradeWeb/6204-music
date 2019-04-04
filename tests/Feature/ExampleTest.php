<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_check_if_homepage_loads()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_if_homepage_is_loaded_properly() {
        $this->get('/')->assertSee('laravel');
    }
}
