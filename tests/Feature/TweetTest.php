<?php

use App\Models\User;
use App\Livewire\Tweet\Create;
use App\Models\Tweet;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Livewire\livewire;

it('should be able to create a tweet', function () {

    $user = User::factory()->create();

    actingAs($user);

    livewire(Create::class)
        ->set('body', 'This is my tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');

        assertDatabaseCount('tweets', 1);

        expect(Tweet::first())
            ->body->toBe('This is my tweet')
            ->created_by->toBe($user->id);
});

it('only authenticated users can twitter', function(){
    livewire(Create::class)
        ->set('body', 'This is my tweet')
        ->call('tweet')
        ->assertForbidden();

    actingAs(User::factory()->create());

    livewire(Create::class)
        ->set('body', 'This is my tweet')
        ->call('tweet')
        ->assertEmitted('tweet::created');
});

test('body is required', function () {
    actingAs(User::factory()->create());

    livewire(Create::class)
        ->set('body', null)
        ->call('tweet')
        ->assertHasErrors(['body' => 'required']);
});


todo('the tweet body should have a max length of 140 characters');
todo('should show the tweet on the timeline');
