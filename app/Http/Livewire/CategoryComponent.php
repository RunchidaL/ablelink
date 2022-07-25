<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\BrandCategory;

class CategoryComponent extends Component
{
    public $category_slug;
    public $scategory_slug;
    public $bcategory_slug;

    public function mount($category_slug,$scategory_slug=null,$bcategory_slug=null)
    {
        $this->$category_slug = $category_slug;
        $this->$scategory_slug = $scategory_slug;
        $this->$bcategory_slug = $bcategory_slug;
    }

    public function render()
    {   
        $category_id = null;
        $category_name = "";
        $filter = "";

        if($this->bcategory_slug)
        {
            $bcategory = BrandCategory::where('slug',$this->bcategory_slug)->first();
            $category_id = $bcategory->id;
            $category_name = $bcategory->name;
            $filter = "brand";
        }
        else if($this->scategory_slug)
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
        
        $products = Product::where($filter.'category_id',$category_id)->paginate();
        $models = ProductModels::all();
        $categories = Category::all();
        $category = Category::where('slug',$this->category_slug)->first();
        $scategory = Subcategory::where('slug',$this->scategory_slug)->first();
        $bcategory = BrandCategory::where('slug',$this->bcategory_slug)->first();
        return view('livewire.category-component',['products'=> $products, 'categories' => $categories, 'category_name' => $category_name,'category'=>$category,'scategory'=>$scategory,'models'=>$models,'bcategory'=>$bcategory])->layout("layout.navfoot"); 
    }
}
