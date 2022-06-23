<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
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
    public $newimage;
    public $newdatasheet;
    public $newfirmware;
    public $newguide;
    public $newcert;
    public $newconfig;
    public $product_id;
    public $scategory_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->overview = $product->overview;
        $this->application = $product->application;
        $this->network_connectivity = $product->network_connectivity;
        $this->item_spotlight = $product->item_spotlight;
        $this->feature = $product->feature;
        $this->web_price = $product->web_price;
        $this->dealer_price = $product->dealer_price;
        $this->customer_price = $product->customer_price;
        $this->stock_status = $product->stock_status;
        $this->image = $product->image;
        $this->datasheet = $product->datasheet;
        $this->firmware = $product->firmware;
        $this->guide = $product->guide;
        $this->cert = $product->cert;
        $this->config = $product->config;
        $this->category_id = $product->category_id;
        $this->scategory_id = $product->subcategory_id;
        $this->product_id = $product->id;
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
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
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        if($this->newdatasheet)
        {
            $file1 = $this->newdatasheet->getClientOriginalName();
            $this->newdatasheet->storeAs('products',$file1);
            $product->datasheet = $file1;
        }
        if($this->newfirmware)
        {
            $file2 = $this->newfirmware->getClientOriginalName();
            $this->newfirmware->storeAs('products',$file2);
            $product->firmware = $file2;
        }
        if($this->newguide)
        {
            $file3 = $this->newguide->getClientOriginalName();
            $this->newguide->storeAs('products',$file3);
            $product->guide = $file3;
        }
        if($this->newcert)
        {
            $file4 = $this->newcert->getClientOriginalName();
            $this->newcert->storeAs('products',$file4);
            $product->cert = $file4;
        }
        if($this->newconfig)
        {
            $file5 = $this->newconfig->getClientOriginalName();
            $this->newconfig->storeAs('products',$file5);
            $product->config = $file5;
        }
        $product->category_id = $this->category_id;
        if($this->scategory_id)
        {
            $product->subcategory_id = $this->scategory_id;
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
        return view('livewire.admin-edit-product-component',['categories'=>$categories,'scategories'=>$scategories])->layout("layout.navfoot");
    }
}
