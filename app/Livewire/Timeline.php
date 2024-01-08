<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class Timeline extends Component
{
    protected $listeners = ['tweet::created' => '$refresh'];

    public function render()
    {
        $tweets = Tweet::query()->latest()->get();

        return view('livewire.timeline', [
            'tweets' => $tweets
        ]);
    }
}
