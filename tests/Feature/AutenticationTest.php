<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AutenticationTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Autentication()
    {
        $response = $this->get('/privada1');

        $response->assertRedirect('/login');
    }    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Autenticationdone()
    {
        $user = User::Factory()->create();
        Auth::login($user);
        $response = $this->get('/privada1');

        $response->assertStatus(200);
    }
}
