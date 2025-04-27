<?php

namespace App\DTO;

class UserCredentialsDTO
{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
    ) {}
}
