<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductModels;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\NetworkValue;
use App\Models\JacketTypes;
use App\Models\JacketProduct;
use App\Models\NetworkImage;
use App\Models\ShoppingCart;

class DetailsModelsComponent extends Component
{
    public $modelslug;
    public $qty;
    public $attribute;

    public function mount($modelslug)
    {
        $this->modelslug = $modelslug;
        $this->qty = 1;
        // $this->attribute = 1;
    }

    public function increaseQuantity()
    {
        $model = ProductModels::where('slug',$this->modelslug)->first();
        if(($this->qty) < $model->stock){
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

    public function addToCart($id)
    {
        if(auth()->user())
        {
            if($this->attribute)
            {
                $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $this->qty,
                'attribute' => $this->attribute,
                ];

            }
            else
            {
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $this->qty,
            ];
            }
            ShoppingCart::updateOrCreate($data);
            session()->flash('success_message','Item added in Cart');
        }
        else
        {
            return redirect(route('login'));
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
        $network_images = NetworkImage::all();
        return view('livewire.details-models-component',['model'=>$model,'network_products'=>$network_products,'product_models'=>$product_models,'series'=>$series,'types'=>$types,'jackets'=>$jackets,'jacket_products'=>$jacket_products,'network_images'=>$network_images])->layout("layout.navfoot");
    }
}
