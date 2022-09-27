<?php

namespace App\Http\Livewire\Admin\products;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\BrandCategory;
use App\Models\SubBrandCategory;
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

    public function deleteBrandcategory($id)
    {
        $bcategory = BrandCategory::find($id);
        $bcategory->delete();
        session()->flash('message','Subcategory delete success');
    }

    public function deleteSubBrandcategory($id)
    {
        $sbcategory = SubBrandCategory::find($id);
        $sbcategory->delete();
        session()->flash('message','Subcategory delete success');
    }

    public function render()
    {
        $categories = Category::orderBy('created_at','DESC')->get();
        return view('livewire.admin.products.admin-category-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
