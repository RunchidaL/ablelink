<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class DetailPostComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $post = Post::where('slug',$this->slug)->first();
        return view('livewire.detail-post-component',['post'=>$post])->layout("layout.navfoot");
    }
}
