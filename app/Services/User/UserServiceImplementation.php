<?php

namespace App\Services\User;

use App\DTO\UserCredentialsDTO;
use App\Exceptions\NoUserFoundException;
use App\Exceptions\UserPasswordDoesNotMatchException;
use App\Models\User;
use App\Repositories\User\UserRepositoryContract;
use Illuminate\Support\Facades\Hash;

class UserServiceImplementation implements UserServiceContract
{
    public function __construct(public readonly UserRepositoryContract $userRepository) {}

    /**
     * @throws NoUserFoundException
     * @throws UserPasswordDoesNotMatchException
     */
    public function login(UserCredentialsDTO $userCredentialsDTO): User
    {
        $user = $this->userRepository->retrieveUserByEmail($userCredentialsDTO);

        if (is_null($user)) {
            throw new NoUserFoundException('No User found by that email', 404);
        }

        if (! Hash::check($userCredentialsDTO->password, $user->password)) {
            throw new UserPasswordDoesNotMatchException('User password does not match');
        }

        return $user;

    }
}
