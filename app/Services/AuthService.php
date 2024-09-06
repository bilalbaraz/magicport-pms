<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;
use Carbon\Carbon;

class AuthService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function signUp(array $userData): bool
    {
        return $this->userRepository->createUser($userData) instanceof User;
    }

    public function signIn(array $userData): bool
    {
        $user = $this->userRepository->getUserByEmail($userData['email']);

        if ($user === null) {
            return false;
        }

        return $this->userRepository->comparePasswordByGivenPassword($user, $userData['password']);
    }

    public function createToken(array $userData)
    {
        $user = $this->userRepository->getUserByEmail($userData['email']);

        if (!$user) {
            return false; 
        }

        $comparePassword = $this->userRepository->comparePasswordByGivenPassword($user, $userData['password']);

        if (!$comparePassword) {
            return false;
        }

        $token = $this->userRepository->createTokenByUser(
            $user,
            ['*'],
            Carbon::now()->addHour()
        );

        return $token->plainTextToken;
    }
}
