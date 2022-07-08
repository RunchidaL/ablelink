<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductModels;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\NetworkValue;
use App\Models\JacketTypes;
use App\Models\JacketProduct;
use Cart;

class DetailsModelsComponent extends Component
{
    public $modelslug;
    public $qty;

    public function mount($modelslug)
    {
        $this->modelslug = $modelslug;
        $this->qty = 1;
    }

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\ProductModels');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function increaseQuantity()
    {
        $model = ProductModels::where('slug',$this->modelslug)->first();
        if(($this->qty)+1 <= $model->stock){
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
        $model = ProductModels::where('slug',$this->modelslug)->first();
        $product_models = ProductModels::all();
        $series = SeriesModels::all();
        $types = TypeModels::all();
        $jackets = JacketTypes::all();
        $network_products = NetworkValue::all();
        $jacket_products = JacketProduct::all();
        return view('livewire.details-models-component',['model'=>$model,'network_products'=>$network_products,'product_models'=>$product_models,'series'=>$series,'types'=>$types,'jackets'=>$jackets,'jacket_products'=>$jacket_products])->layout("layout.navfoot");
    }
}
