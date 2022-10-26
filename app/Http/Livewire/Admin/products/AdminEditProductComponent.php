<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\NetworkImage;
use App\Models\NetworkValue;
use App\Models\NetworkType;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\GroupProduct;
use App\Models\BrandCategory;
use App\Models\SubBrandCategory;
use Illuminate\Support\Str;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $category_id;
    public $product_id;
    public $scategory_id;
    public $bcategory_id;
    public $sbcategory_id;
    public $groupproduct_id;

    public function mount($product_id)
    {
        $product = Product::where('id',$product_id)->first();
        $this->name = $product->name;
        $this->category_id = $product->category_id;
        $this->scategory_id = $product->subcategory_id;
        $this->bcategory_id = $product->brandcategory_id;
        $this->sbcategory_id = $product->subbrandcategory_id;
        $this->product_id = $product->id;
        $this->groupproduct_id = $product->groupproduct_id;

    }

    public function updateProduct()
    {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'scategory_id' => 'required',
            'bcategory_id' => 'required',
            'sbcategory_id' => 'required',
        ]);
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->category_id = $this->category_id;
        if($this->scategory_id)
        {
            $product->subcategory_id = $this->scategory_id;
        }
        if($this->bcategory_id)
        {
            $product->brandcategory_id = $this->bcategory_id;
        }
        if($this->sbcategory_id)
        {
            $product->subbrandcategory_id = $this->sbcategory_id;
        }
        if($this->groupproduct_id)
        {
            $product->groupproduct_id = $this->groupproduct_id;
        }
        $product->save();
        session()->flash('message','update Product successs');
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
        $network_types = NetworkType::all();
        $groups = GroupProduct::all();
        $network_images = NetworkImage::all();
        return view('livewire.admin.products.admin-edit-product-component',['categories'=>$categories,'scategories'=>$scategories,'network_types'=>$network_types,'groups'=>$groups,'network_images'=>$network_images,'brands'=>$brands,'subbrands'=>$subbrands])->layout("layout.navfoot");
    }
}