<?php

namespace App\Services\User;

use App\DTO\UserCredentialsDTO;
use App\Models\User;

interface UserServiceContract
{
    // indicates whether user credentials matched. if success returns user or throws exceptions
    public function login(UserCredentialsDTO $userCredentialsDTO): User;
}
