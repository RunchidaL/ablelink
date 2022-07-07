<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\NetworkValue;
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

    public function mount($slug)
    {
        $this->slug = $slug;
    }
    
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $network_products = NetworkValue::all();
        $product_models = ProductModels::all();
        $series = SeriesModels::all();
        $types = TypeModels::all();
        $jacket_products = JacketProduct::all();
        $jackets = JacketTypes::all();
        return view('livewire.details-component',['product'=>$product,'network_products'=>$network_products,'product_models'=>$product_models,'series'=>$series,'types'=>$types,'jackets'=>$jackets,'jacket_products'=>$jacket_products])->layout("layout.navfoot");
    }
}
