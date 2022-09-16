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

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'attribute' => 'required'
        ]);
    }

    public function addToCart($id)
    {
        $this->model_id = $id;
        
        $model = ProductModels::where('id',$this->model_id)->first();
        if($model->product->subCategories->name == "Cabling")
        {
            $this->validate([
                'attribute' => 'required'
            ]);
        }

        if($this->qty > $model->stock || $this->attribute * $this->qty > $model->stock)
        {
            session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
            return redirect('/shop');
        }

        //check before add
        $cartitems = ShoppingCart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        foreach($cartitems as $item)
        {
            if($item->product_id == $id)
            {
                $item_cart = ShoppingCart::where('id',$item->id)->first();
                $total = $item_cart->quantity + $this->qty;
                if($total > $model->stock)
                {
                    session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                    return back();
                }
            }

        }

        if(auth()->user())
        {
            $count = ShoppingCart::whereUserId(auth()->user()->id)->count();
            
            if($count == 0)
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

            }
            else
            {
                $cartitems = ShoppingCart::with('model')->where(['user_id'=>auth()->user()->id])->get();
                foreach($cartitems as $item)
                {
                    
                    if($item->product_id == $id)
                    {
                        $item_cart = ShoppingCart::where('id',$item->id)->first();
                        $item_cart->quantity = $item_cart->quantity + $this->qty;
                        $item_cart->save();
                    }
                    //มีปัญหา
                    if($item->product_id != $id)
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
                        // session()->flash('success_message','Item added in Cart');
                    }                    
                }
            }
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
