<?php

namespace App\Policies;

use App\Models\Tweet;
use App\Models\User;

class TweetPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function view(User $user, Tweet $tweet)
    {
        return true;
    }

    public function create(User $user)
    {
        return auth()->check();
    }

    public function update(User $user, Tweet $tweet)
    {
        return true;
    }

    public function delete(User $user, Tweet $tweet)
    {
        return true;
    }
}
