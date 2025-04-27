<?php

namespace App\Repositories\User;

use App\DTO\UserCredentialsDTO;
use App\Models\User;

interface UserRepositoryContract
{
    // find the user by email
    public function retrieveUserByEmail(UserCredentialsDTO $userCredentialsDTO): ?User;
}
