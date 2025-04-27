<?php

namespace App\Repositories\User;

use App\DTO\UserCredentialsDTO;
use App\Models\User;

class UserRepositoryImplementation implements UserRepositoryContract
{
    public function retrieveUserByEmail(UserCredentialsDTO $userCredentialsDTO): ?User
    {

        return User::where('email', $userCredentialsDTO->email)->first();

    }
}
