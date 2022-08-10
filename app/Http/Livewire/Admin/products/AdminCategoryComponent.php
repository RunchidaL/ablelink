<?php

namespace App\Http\Livewire\Admin\products;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brandcategory;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    // use WithPagination;
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        session()->flash('message','Category delete success');
    }

    public function deleteSubcategory($id)
    {
        $scategory = Subcategory::find($id);
        $scategory->delete();
        session()->flash('message','Subcategory delete success');
    }

    public function Brandcategory($id)
    {
        $bcategory = Brandcategory::find($id);
        $bcategory->delete();
        session()->flash('message','Subcategory delete success');
    }

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.products.admin-category-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
