<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\NetworkValue;
use App\Models\NetworkImage;
use App\Models\NetworkType;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\GroupProduct;
use App\Models\BrandCategory;
use App\Models\SubBrandCategory;
use Illuminate\Support\Str;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $category_id;
    public $scategory_id;
    public $bcategory_id;
    public $sbcategory_id;
    public $groupproduct_id;
    public $attibute;

    public function addProduct()
    {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'scategory_id' => 'required',
            'bcategory_id' => 'required',
            'sbcategory_id' => 'required',
            'groupproduct_id' => 'required',
        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->category_id = $this->category_id;
        $product->subcategory_id = $this->scategory_id;
        $product->brandcategory_id = $this->bcategory_id;
        $product->subbrandcategory_id = $this->sbcategory_id;
        if($this->scategory_id == 7)
        {
            if($this->attibute == null){
                $product->attibute = 0;
            }
            elseif($this->attibute == 0){
                $product->attibute = 0;
            }
            else{
                $product->attibute = 1;
            }
        }
        $product->groupproduct_id = $this->groupproduct_id;
        $product->save();    
        session()->flash('message','Add Product Success!');
    }

    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }

    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        $brands = BrandCategory::where('subcategory_id',$this->scategory_id)->get();
        $subbrands = SubBrandCategory::where('brandcategory_id',$this->bcategory_id)->get();
        $products = Product::all();
        $groups = GroupProduct::all();
        $network_types = NetworkType::all();
        $network_images = NetworkImage::all();
        return view('livewire.admin.products.admin-add-product-component',['categories'=>$categories,'scategories'=>$scategories,'products'=>$products,'network_types'=>$network_types,'network_images'=>$network_images,'groups'=>$groups,'brands'=>$brands,'subbrands'=>$subbrands])->layout("layout.navfoot");
    }
}