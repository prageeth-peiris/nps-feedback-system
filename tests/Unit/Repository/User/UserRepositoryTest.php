<?php

namespace Repository\User;

use App\DTO\UserCredentialsDTO;
use App\Models\User;
use App\Repositories\User\UserRepositoryContract;
use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    public function test_it_retrieves_user_by_email()
    {
        User::factory()->create(['email' => 'johndoe@example.com']);

        $userCredentialsDTO = new UserCredentialsDTO(
            email: 'johndoe@example.com',
            password: 'password'
        );

        $user = app(UserRepositoryContract::class)->retrieveUserByEmail($userCredentialsDTO);

        $this->assertTrue($user instanceof User);

    }

    public function test_it_retrieves_null_if_user_not_found()
    {

        User::factory()->create(['email' => 'johndoe@example.com']);

        $userCredentialsDTO = new UserCredentialsDTO(
            email: 'abc@gmail.com',
            password: 'password'
        );

        $user = app(UserRepositoryContract::class)->retrieveUserByEmail($userCredentialsDTO);

        $this->assertTrue(is_null($user));

    }
}
