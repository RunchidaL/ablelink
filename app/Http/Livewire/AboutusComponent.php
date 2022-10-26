<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Aboutus;

class AboutusComponent extends Component
{
    
    public function render()
    {
        $us = Aboutus::where('id',1)->first();
        $postcategory = PostCategory::all();
        $posts = Post::orderBy('created_at','DESC')->get();
        return view('livewire.aboutus-component',['posts'=> $posts,'postcategory'=>$postcategory,'us'=> $us])->layout("layout.navfoot");
    }
}