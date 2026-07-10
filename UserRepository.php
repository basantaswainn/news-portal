<?php

namespace App\Application\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Interface UserRepository
 *
 * Defines the contract for user data access operations.
 * This decouples the application layer from the data access implementation.
 */
interface UserRepository
{
    public function findById(string $id): ?User;
    public function all(): Collection;
}