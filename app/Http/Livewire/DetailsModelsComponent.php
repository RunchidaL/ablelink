<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\NetworkValue;
use App\Models\JacketProduct;
use App\Models\NetworkImage;
use App\Models\ShoppingCart;
use App\Models\Review;
use Livewire\WithPagination;

class DetailsModelsComponent extends Component
{
    public $modelslug;
    public $qty;
    public $attribute;
    public $amount;
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount($modelslug)
    {
        $this->modelslug = $modelslug;
        $this->qty = 1;
        $this->amount = 5;
    }

    public function load()
    {
        $this->amount += 5;
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
        if($model->product->subbrandcategory_id == "89")
        {
            $this->validate([
                'attribute' => 'required'
            ]);
        }

        if($this->qty > $model->stock || $this->attribute * $this->qty > $model->stock)
        {
            session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
            return redirect(request()->header('Referer'));
        }

        //check before add
        $c_item = ShoppingCart::with('model')->where(['user_id'=>auth()->user()->id])->where('product_id',$id)->first();
        if($c_item)
        {
            if(empty($c_item->attribute))
            {
                $total = $c_item->quantity + $this->qty;
                if($total > $model->stock)
                {
                    session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                    return redirect(request()->header('Referer'));
                }
            }
            else{
                $len = ($c_item->quantity * $c_item->attribute) +  ($this->qty *$this->attribute);
                if($len > $model->stock)
                    {
                        session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                        return redirect(request()->header('Referer'));
                    }
            }
        }

        if(auth()->user())
        {
            $count = ShoppingCart::whereUserId(auth()->user()->id)->count();
            
            if($count == 0)
            {
                $this->create($id);
            }
            else
            {
                $cartitem = ShoppingCart::with('model')->where(['user_id'=>auth()->user()->id])->where('product_id',$id)->first();
                if($cartitem)
                {
                    if($cartitem->attribute == null || $cartitem->attribute == $this->attribute)
                    {
                        $cartitem->quantity = $cartitem->quantity + $this->qty;
                        $cartitem->save();
                        return redirect(request()->header('Referer'));
                    }
                    else
                    {
                        $data = [
                            'user_id' => auth()->user()->id,
                            'product_id' => $id,
                            'quantity' => $this->qty,
                            'attribute' => $this->attribute,
                            ];
                        ShoppingCart::updateOrCreate($data);
                        return redirect(request()->header('Referer'));
                    }
                }
                else
                {
                    $this->create($id);
                }
            }
        }
        else
        {
            return redirect(route('login'));
        }
    }

    public function create($id)
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
        return redirect(request()->header('Referer'));
    }

    public function render()
    {
        $this->emit('shop-component');
        $model = ProductModels::where('slug',$this->modelslug)->first();
        $product_models = ProductModels::all();
        $series = SeriesModels::all();
        $types = TypeModels::all();
        $network_products = NetworkValue::all();
        $jacket_products = JacketProduct::all();
        $network_images = NetworkImage::all();
        $rating = Review::where('product_id',$model->id)->get();
        $reviews = Review::where('product_id',$model->id)->orderBy('created_at','DESC')->take($this->amount)->get();
        return view('livewire.details-models-component',['model'=>$model,'network_products'=>$network_products,'product_models'=>$product_models,'series'=>$series,'types'=>$types,'jacket_products'=>$jacket_products,'network_images'=>$network_images,'rating'=>$rating,'reviews'=>$reviews])->layout("layout.navfoot");
    }
}
