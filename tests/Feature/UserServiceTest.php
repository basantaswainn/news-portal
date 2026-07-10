<?php

use App\Application\Services\UserService;
use App\Infrastructure\Repositories\UserRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

uses(RefreshDatabase::class);

it('creates a user with enterprise profile fields', function (): void {
    $service = new UserService(new UserRepository(new App\Models\User));

    $user = $service->create([
        'name' => 'Ada Lovelace',
        'username' => 'ada',
        'email' => 'ada@example.com',
        'phone' => '+1-555-0100',
        'password' => 'StrongPassword123!',
        'status' => 'active',
        'email_verified_at' => now(),
    ]);

    expect($user->name)->toBe('Ada Lovelace')
        ->and($user->username)->toBe('ada')
        ->and($user->status)->toBe('active')
        ->and(Hash::check('StrongPassword123!', $user->password))->toBeTrue();
});
