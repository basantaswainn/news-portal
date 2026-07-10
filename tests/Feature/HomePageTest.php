<?php

test('the homepage renders premium newsroom content', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
        ->assertSee('Enterprise News')
        ->assertSee('Breaking News')
        ->assertSee('Latest News');
});
