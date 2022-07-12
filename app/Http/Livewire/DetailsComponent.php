<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\NetworkValue;
use App\Models\NetworkImage;
use App\Models\ProductModels;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketTypes;
use App\Models\JacketProduct;
use App\Models\GroupProduct;
use Cart;

class DetailsComponent extends Component
{
    public $slug;
    public $group_id;
    public $series_id;
    public $jacket_id;
    public $qty;

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
    }
    
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function increaseQuantity()
    {
        $product = Product::where('slug',$this->slug)->first();
        if(($this->qty)+1 <= $product->stock){
            $this->qty++;
        }
        
    }

    public function decreaseQuantity()
    {
        if($this->qty > 1)
        {
            $this->qty--;
        }
    }

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $network_products = NetworkValue::all();
        $network_images = NetworkImage::all();
        $product_models = ProductModels::all();
        $series = SeriesModels::all();
        $types = TypeModels::all();
        $jacket_products = JacketProduct::all();
        $jackets = JacketTypes::all();
        return view('livewire.details-component',['product'=>$product,'network_products'=>$network_products,'product_models'=>$product_models,'series'=>$series,'types'=>$types,'jackets'=>$jackets,'jacket_products'=>$jacket_products,'network_images'=>$network_images])->layout("layout.navfoot");
    }
}
