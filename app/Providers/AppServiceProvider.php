<?php

namespace App\Providers;

use App\Domain\User\Contracts\UserRepositoryInterface;
use App\Infrastructure\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, function (): UserRepository {
            return new UserRepository(new User());
        });
    }

    public function boot(): void
    {
        //
    }
}
