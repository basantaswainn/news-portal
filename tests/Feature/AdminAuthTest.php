<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('allows an admin to log in and reach the dashboard', function () {
    User::factory()->create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => bcrypt('secret123'),
        'is_admin' => true,
    ]);

    $response = $this->post('/admin/login', [
        'email' => 'admin@example.com',
        'password' => 'secret123',
    ]);

    $response->assertRedirect('/admin/dashboard');
    $this->assertAuthenticatedAs(User::where('email', 'admin@example.com')->first());
});

it('redirects guests away from the dashboard', function () {
    $response = $this->get('/admin/dashboard');

    $response->assertRedirect('/admin/login');
});
