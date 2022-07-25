<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\ShoppingCart as Cart;
use App\Models\ProductModels;

class CartComponent extends Component
{
    public $cartitems;
    public $total = 0;
    public $subtotal = 0;
    public $count = 0;

    public function increaseQuantity($id)
    {
        $cart = Cart::whereId($id)->first();
        $model = ProductModels::where('id',$cart->product_id)->first();
        if(($cart->quantity) < $model->stock){
            $cart->quantity++;
            $cart->save();
        }

    }

    public function decreaseQuantity($id)
    {
        $cart = Cart::whereId($id)->first();
        if($cart->quantity > 1)
        {
            $cart->quantity--;
            $cart->save();
        }
    }

    public function delete($id)
    {
        $cart = Cart::whereId($id)->first();
        if($cart)
        {
            $cart->delete();
        }
        return redirect()->route('product.cart');
    }

    public function getCartItemCount()
    {
        $this->count = Cart::whereUserId(auth()->user()->id)->count();
    }


    public function render()
    {
        $this->cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        $this->total = 0;
        $this->subtotal = 0;

        foreach($this->cartitems as $item)
        {
            if($item->attribute)
            {
                $this->subtotal += $item->model->customer_price * $item->quantity * $item->attribute;
            }
            else
            {
                $this->subtotal += $item->model->customer_price * $item->quantity;
            }
        }

        $this->total = $this->subtotal;
        
        $this->getCartItemCount();

        return view('livewire.cart-component')->layout("layout.navfoot");
    }
}