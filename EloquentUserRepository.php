<?php

namespace App\Infrastructure\Repositories;

use App\Application\Contracts\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class EloquentUserRepository
 *
 * The Eloquent ORM implementation of the UserRepository contract.
 * It handles all the database operations related to the User model.
 */
class EloquentUserRepository implements UserRepository
{
    /**
     * Find a user by their UUID.
     */
    public function findById(string $id): ?User
    {
        return User::find($id);
    }

    /**
     * Retrieve all users.
     * In a real application, this would be paginated.
     */
    public function all(): Collection
    {
        return User::all();
    }
}