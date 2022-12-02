<?php

namespace App\Http\Livewire\Admin\posts;

use App\Models\PostCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditPostCategoryComponent extends Component
{
    public $postcategory_slug;
    public $postcategory_id;
    public $name;
    public $slug;

    public function mount($postcategory_slug)
    {
        $this->postcategory_slug = $postcategory_slug;
        $postcategory = PostCategory::where('Slug',$postcategory_slug)->first();
        $this->postcategory_id = $postcategory->id;
        $this->name = $postcategory->name;
        $this->slug = $postcategory->slug;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updatePostCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|alpha_dash',
        ]);
        $postcategory = PostCategory::find($this->postcategory_id);
        $postcategory->name = $this->name;
        $postcategory->slug = $this->slug;
        $postcategory->save();
        session()->flash('message','PostCategory has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.posts.admin-edit-post-category-component')->layout("layout.navfoot");
    }
}
