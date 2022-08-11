<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostCategory;
class AboutusComponent extends Component
{
    
    public function render()
    {
        $postcategory = PostCategory::all();
        $posts = Post::orderBy('created_at','DESC')->get();
        return view('livewire.aboutus-component',['posts'=> $posts,'postcategory'=>$postcategory])->layout("layout.navfoot");
    }
}