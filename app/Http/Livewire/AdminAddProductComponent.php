<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $overview;
    public $application;
    public $network_connectivity;
    public $item_spotlight;
    public $feature;
    public $web_price;
    public $dealer_price;
    public $customer_price;
    public $stock_status;
    public $image;
    public $datasheet;
    public $firmware;
    public $guide;
    public $cert;
    public $config;
    public $category_id;
    public $scategory_id;

    public function mount()
    {
        $this->stock_status = 'instock';
    }

    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->overview = $this->overview;
        $product->application = $this->application;
        $product->network_connectivity = $this->network_connectivity;
        $product->item_spotlight = $this->item_spotlight;
        $product->feature = $this->feature;
        $product->web_price = $this->web_price;
        $product->dealer_price = $this->dealer_price;
        $product->customer_price = $this->customer_price;
        $product->stock_status = $this->stock_status;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        if($this->datasheet)
        {
            $file1 = $this->datasheet->getClientOriginalName();
            $this->datasheet->storeAs('products',$file1);
            $product->datasheet = $file1;
        }
        if($this->firmware)
        {
            $file2 = $this->firmware->getClientOriginalName();
            $this->firmware->storeAs('products',$file2);
            $product->firmware = $file2;
        }
        if($this->guide)
        {
            $file3 = $this->guide->getClientOriginalName();
            $this->guide->storeAs('products',$file3);
            $product->guide = $file3;
        }
        if($this->cert)
        {
            $file4 = $this->cert->getClientOriginalName();
            $this->cert->storeAs('products',$file4);
            $product->cert = $file4;
        }
        if($this->config)
        {
            $file5 = $this->config->getClientOriginalName();
            $this->config->storeAs('products',$file5);
            $product->config = $file5;
        }
        $product->category_id = $this->category_id;
        if($this->scategory_id)
        {
            $product->subcategory_id = $this->scategory_id;
        }
        $product->save();
        session()->flash('message','add Product successs');
    }

    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }


    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        return view('livewire.admin-add-product-component',['categories'=>$categories,'scategories'=>$scategories])->layout("layout.navfoot");
    }
}
