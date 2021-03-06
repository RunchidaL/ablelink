<?php

namespace App\Http\Livewire\Admin\posts;

use App\Models\PostCategory;
use Livewire\Component;

class AdminPostCategoryComponent extends Component
{

    public function deletePostCategory($id)
    {
        $postcategory = PostCategory::find($id);
        $postcategory->delete();
        session()->flash('message','PostCategory has been deleted successfully!');
    }

    public function render()
    {
        $postcategories = PostCategory::all();
        return view('livewire.admin.posts.admin-post-category-component',['postcategories'=>$postcategories])->layout("layout.navfoot");
    }
}
