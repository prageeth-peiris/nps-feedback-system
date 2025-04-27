<?php

namespace Forms;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserLoginFormTest extends TestCase
{


    public function test_it_logins_successfully_with_correct_credentials()
    {

      $user =   User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);


        $response = $this->post(route('attempt-auth'), [
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticatedAs($user);

    }

    public function test_it_logins_fails_with_incorrect_credentials(){

        $user =   User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);


        $response = $this->post(route('attempt-auth'), [
            'email' => 'abc@gmail.com',
            'password' => '123'
        ]);

        $response->assertSessionHasErrors(['fail']);
            $response->assertRedirect(route('login'));



    }



}
