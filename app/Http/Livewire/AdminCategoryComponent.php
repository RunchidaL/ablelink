<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    // use WithPagination;
    public function deleCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','delete success');
    }

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin-category-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
