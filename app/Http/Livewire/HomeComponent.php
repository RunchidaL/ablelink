<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Home;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\ProductModels;

class HomeComponent extends Component
{
    public function render()
    {   
        $postcategory = PostCategory::all();
        
        $posts = Post::orderBy('created_at','DESC')->get();
        $sliders = Home::where('status',0)->get();
        $Lproduct = ProductModels::orderBy('created_at','DESC')->get()->take(6);
        return view('livewire.home-component',['sliders'=>$sliders,'posts'=> $posts,'postcategory'=>$postcategory,'Lproduct'=>$Lproduct])->layout("layout.navfoot");
    }
}
