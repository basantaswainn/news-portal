<?php

namespace App\Infrastructure\Repositories;

use App\Domain\User\Contracts\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(protected User $model)
    {
    }

    public function create(array $attributes): User
    {
        return $this->model->create($attributes);
    }

    public function findByEmail(string $email): ?User
    {
        return $this->model->where('email', $email)->first();
    }

    public function findByUsername(string $username): ?User
    {
        return $this->model->where('username', $username)->first();
    }
}
