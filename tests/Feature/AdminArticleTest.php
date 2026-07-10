<?php

use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('lets an admin create and view an article', function () {
    $user = User::factory()->create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => bcrypt('secret123'),
        'is_admin' => true,
    ]);

    $this->actingAs($user)
        ->post('/admin/articles', [
            'title' => 'New Tech Feature',
            'excerpt' => 'A short summary',
            'content' => 'Full content body',
            'status' => 'published',
        ])
        ->assertRedirect('/admin/articles');

    $this->assertDatabaseHas('articles', ['title' => 'New Tech Feature']);
    $this->actingAs($user)
        ->get('/admin/articles')
        ->assertOk()
        ->assertSee('New Tech Feature');
});
