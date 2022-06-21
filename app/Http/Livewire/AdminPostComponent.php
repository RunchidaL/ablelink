<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class AdminPostComponent extends Component
{
    
    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        session()->flash('message','Post has been deleted successfully!');
    }

    public function render()
    {
        $posts = Post::all();
        return view('livewire.admin-post-component',['posts'=>$posts])->layout("layout.navfoot");
    }
}
