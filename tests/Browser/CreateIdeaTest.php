<?php

use App\Models\User;

it('creates a new idea', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    visit('/ideas')
        ->click('@create-idea-button')
        ->fill('title', 'Some Example Title')
        ->click('@button-status-completed')
        ->fill('description', 'An example description')
        ->fill('#new-link', 'http://www.example.com')
        ->click('@submit-new-link-button')
        ->click('button[type="submit"]')
        ->assertPathIs('/ideas')
        ->assertSee('Some Example Title')
        ->assertNoJavaScriptErrors();

    $idea = $user->ideas()->sole();

    expect($idea->title)->toBe('Some Example Title');
    expect($idea->status->value)->toBe('completed');
    expect($idea->description)->toBe('An example description');
    expect($idea->links->getArrayCopy())->toBe(['http://www.example.com']);
});
