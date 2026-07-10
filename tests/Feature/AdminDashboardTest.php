<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('shows the admin dashboard navigation and management sections', function () {
    $user = User::factory()->create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => bcrypt('secret123'),
        'is_admin' => true,
    ]);

    $this->actingAs($user)
        ->get('/admin/dashboard')
        ->assertOk()
        ->assertSee('System Overview')
        ->assertSee('Article Management')
        ->assertSee('User Management');
});
