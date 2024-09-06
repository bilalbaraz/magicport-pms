<?php

namespace App\Repositories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserRepository
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function createUser(array $data): ?User
    {
        return $this->user->create($data);
    }

    public function getUserByEmail(string $email): ?User
    {
        return $this->user->where(['email' => $email])->first();
    }

    public function comparePasswordByGivenPassword(User $user, string $password): bool
    {
        return Hash::check($password, $user->password);
    }

    public function createTokenByUser(User $user, array $abilities = ['*'], ?Carbon $expiresAt = null)
    {
        return $user->createToken('token_'.Carbon::now()->format('dmY'), $abilities, $expiresAt);
    }
}
