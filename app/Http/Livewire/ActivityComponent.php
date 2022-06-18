<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ActivityComponent extends Component
{
    public function render()
    {
        $posts = Post::paginate(3);
        return view('livewire.activity-component',['posts'=> $posts])->layout("layout.navfoot");
    }
}
