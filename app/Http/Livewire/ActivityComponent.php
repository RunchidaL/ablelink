<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\PostCategory;
use Livewire\WithPagination;

class ActivityComponent extends Component
{   
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['addToCart'];

    public function render()
    {

        $postcategory = PostCategory::all();
        
        $posts = Post::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.activity-component',['posts'=> $posts,'postcategory'=>$postcategory])->layout("layout.navfoot");
    }
}
