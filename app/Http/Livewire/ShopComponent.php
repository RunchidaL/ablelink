<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use Livewire\WithPagination;
use App\Models\ShoppingCart;

class ShopComponent extends Component
{
    use WithPagination;

    public $model_id;
    public $qty;
    public $attribute;
    public $count = 0;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->qty = 1;
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
        if($model->product->subcategory_id == "7")
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
        // $cartitems = ShoppingCart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        // foreach($cartitems as $item)
        // {
        //     if($item->product_id == $id)
        //     {
        //         $item_cart = ShoppingCart::where('id',$item->id)->first();
        //         $total = $item_cart->quantity + $this->qty;
        //         if($total > $model->stock)
        //         {
        //             session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
        //             return redirect('/shop');
        //         }
        //     }

        // }

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
                return redirect('/shop');

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
                        return redirect('/shop');
                    }
                    //มีปัญหา
                    // else
                    // {
                    //     if($this->attribute)
                    //     {
                    //         $data = [
                    //         'user_id' => auth()->user()->id,
                    //         'product_id' => $id,
                    //         'quantity' => $this->qty,
                    //         'attribute' => $this->attribute,
                    //         ];
                    //     }
                    //     else
                    //     {
                    //     $data = [
                    //         'user_id' => auth()->user()->id,
                    //         'product_id' => $id,
                    //         'quantity' => $this->qty,
                    //     ];
                    //     }
                    //     ShoppingCart::updateOrCreate($data);
                    //     return redirect('/shop');
                    //     session()->flash('success_message','Item added in Cart');
                    // }                    
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
        $products = ProductModels::orderBy('created_at','DESC')->paginate(10);
        $categories = Category::all();
        return view('livewire.shop-component',['products'=> $products, 'categories' => $categories])->layout("layout.navfoot"); 
    }
}