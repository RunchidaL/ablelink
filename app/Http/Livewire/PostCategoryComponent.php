<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use App\Models\PostCategory;

class PostCategoryComponent extends Component
{   
    public $postcategory_slug;

    public function mount($postcategory_slug)
    {
        $this->postcategory_slug = $postcategory_slug;
    }

    public function render()
    {
        $postcategory = PostCategory::where('slug',$this->postcategory_slug)->first();

        $category_id = $postcategory->id;
        $category_name = $postcategory->name;
        
        $posts = Post::where('category_id',$category_id)->paginate(8);

        $postscategories = PostCategory::all();
        return view('livewire.post-category-component',['posts'=> $posts,'postscategories'=>$postscategories,'category_name'=>$category_name,'postcategory'=>$postcategory])->layout("layout.navfoot");
    }
}

