<?php

namespace App\Http\Livewire;

use App\Models\PostCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminAddPostCategoryComponent extends Component
{
    public $name;
    public $slug;


    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storePostCategory()
    {
        $postcategory = new PostCategory();
        $postcategory->name = $this->name;
        $postcategory->slug = $this->slug;
        $postcategory->save();
        session()->flash('message','Post Category has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin-add-post-category-component')->layout("layout.navfoot");
    }
}
