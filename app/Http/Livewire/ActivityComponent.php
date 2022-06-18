<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class ActivityComponent extends Component
{
    public function render()
    {
        // $posts = Post::all();
        return view('livewire.activity-component')->layout("layout.navfoot");
    }
}

// ,['posts'=> $posts]