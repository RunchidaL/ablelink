<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
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
    public $category_id;

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
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','add Product successs');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin-add-product-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
