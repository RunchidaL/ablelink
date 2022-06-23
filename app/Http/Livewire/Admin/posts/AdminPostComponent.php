<?php

namespace App\Http\Livewire\Admin\posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostCategory;

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
        $postcategory = PostCategory::all();
        $posts = Post::all();
        return view('livewire.admin.posts.admin-post-component',['posts'=>$posts,'postcategory'=>$postcategory])->layout("layout.navfoot");
    }
}
