<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Home;
use App\Models\Post;
use App\Models\PostCategory;

class HomeComponent extends Component
{
    public function render()
    {   
        $postcategory = PostCategory::all();
        
        $posts = Post::all();
        $sliders = Home::where('status',0)->get();
        return view('livewire.home-component',['sliders'=>$sliders,'posts'=> $posts,'postcategory'=>$postcategory])->layout("layout.navfoot");
    }
}
