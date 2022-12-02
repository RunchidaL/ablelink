<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\BrandCategory;
use App\Models\ShoppingCart;
use App\Models\Brand;
use App\Models\SubBrandCategory;
use App\Models\GroupProduct;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketProduct;

class GroupCategoryComponent extends Component
{
    public $category_slug;
    public $scategory_slug;
    public $bcategory_slug;
    public $sbcategory_slug;
    public $model_id;
    public $qty;
    public $attribute;
    public $brand_id;
    public $ccategory_id;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function mount($category_slug,$scategory_slug,$bcategory_slug,$sbcategory_slug)
    {
        $this->$category_slug = $category_slug;
        $this->$scategory_slug = $scategory_slug;
        $this->$bcategory_slug = $bcategory_slug;
        $this->$sbcategory_slug = $sbcategory_slug;
        $this->qty = 1;
    }

    public function render()
    {
        $brand = Brand::where('slug',$this->bcategory_slug)->first();
        $brand_id = $brand->id;
        $ccategory = Subcategory::where('slug',$this->scategory_slug)->first();
        $ccategory_id = $ccategory->id;
        $bcategory = BrandCategory::where('brand_id',$brand_id)->where('subcategory_id',$ccategory_id)->first();
        $sbcategory = SubBrandCategory::where('slug',$this->sbcategory_slug)->where('brandcategory_id',$bcategory->id)->first();
        $category_id = $sbcategory->id;
        $category_name = $sbcategory->name;

        $products = Product::where('subbrandcategory_id',$category_id)->get();
        $models = ProductModels::all();
        $groups = GroupProduct::all();
        $series = SeriesModels::all();
        $types = TypeModels::all();
        $jackets = JacketProduct::all();
        return view('livewire.group-category-component',['products'=> $products,'models'=>$models,'groups'=>$groups,'series'=>$series,'types'=>$types,'jackets'=>$jackets])->layout("layout.navfoot");
    }
}
