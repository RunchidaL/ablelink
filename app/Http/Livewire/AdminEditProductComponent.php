<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
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
    public $category_id;
    public $newimage;
    public $product_id;

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
        $this->category_id = $product->category_id;
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
            $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
            $this->image->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','update Product successs');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin-edit-product-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
