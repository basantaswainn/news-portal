<?php

namespace App\Application\Services;

use App\Domain\User\Contracts\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(protected UserRepositoryInterface $repository)
    {
    }

    public function create(array $attributes): User
    {
        $attributes['password'] = Hash::make($attributes['password']);

        return $this->repository->create($attributes);
    }
}
