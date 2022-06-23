<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;

class CategoryComponent extends Component
{
    public $category_slug;
    public $scategory_slug;

    public function mount($category_slug,$scategory_slug=null)
    {
        $this->$category_slug = $category_slug;
        $this->$scategory_slug = $scategory_slug;
    }

    public function render()
    {   
        $category_id = null;
        $category_name = "";
        $filter = "";
        
        if($this->scategory_slug)
        {
            $scategory = Subcategory::where('slug',$this->scategory_slug)->first();
            $category_id = $scategory->id;
            $category_name = $scategory->name;
            $filter = "sub";
        }
        else
        {
            $category = Category::where('slug',$this->category_slug)->first();
            $category_id = $category->id;
            $category_name = $category->name;
            $filter = "";
        }
        
        $products = Product::where($filter.'category_id',$category_id)->paginate(8);
        $categories = Category::all();
        $category = Category::where('slug',$this->category_slug)->first();
        $scategory = Subcategory::where('slug',$this->scategory_slug)->first();
        return view('livewire.category-component',['products'=> $products, 'categories' => $categories, 'category_name' => $category_name,'category'=>$category,'scategory'=>$scategory])->layout("layout.navfoot"); 
    }
}
