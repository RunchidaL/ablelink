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

    public function mount($modelslug)
    {
        $this->modelslug = $modelslug;
    }

    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\ProductModels');
        return redirect()->route('product.cart');
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
