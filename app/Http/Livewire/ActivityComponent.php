<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\PostCategory;

class ActivityComponent extends Component
{   
    // public function deletePost($id)
    // {
    //     $post = Post::find($id);
    //     $post->delete();
    //     session()->flash('message','Post has been deleted successfully!');
    // }



    public function render()
    {

        $postcategory = PostCategory::all();
        
        $posts = Post::orderBy('created_at','DESC')->get();
        return view('livewire.activity-component',['posts'=> $posts,'postcategory'=>$postcategory])->layout("layout.navfoot");
    }
}
