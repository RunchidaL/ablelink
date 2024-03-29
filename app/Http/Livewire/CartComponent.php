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
    public $items;
    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'deleteItem'];

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

    public function deleteItems($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteItem()
    {
        $item = Cart::where('id',$this->delete_id)->first();
        $item->delete();
        $this->dispatchBrowserEvent('deletedItem');
    }

    public function getCartItemCount()
    {
        $this->count = Cart::whereUserId(auth()->user()->id)->count();
    }

    public function setAmount()
    {
        session()->put('chooseaddress',[
            'total' => $this->total
        ]);
    }

    public function check()
    {
        
        $items = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        $l = 0;
        foreach($items as $i)
        {
            
            if($i->attribute)
            {
                $l = $l + ($i->attribute * $i->quantity);
            }
        }

        $cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();

        foreach($cartitems as $item)
        {
            if($item->attribute)
            {
                if(!ProductModels::where('id',$item->product_id)->where('stock','>=',$l)->exists())
                {
                    session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                    return redirect()->route('product.cart');
                }
            }
            else 
            {
                if(!ProductModels::where('id',$item->product_id)->where('stock','>=',$item->quantity)->exists())
                {
                    session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                    return redirect()->route('product.cart');
                }
            }
        }
        return redirect()->route('chooseaddress');
    }


    public function render()
    {
        $this->cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        $this->total = 0;
        $this->subtotal = 0;

        foreach($this->cartitems as $item)
        {
            if(empty($item->model->id)){
                $item->delete();
            }
            else{
                if(auth()->user()->role == '1')
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
                else
                {
                    if($item->attribute)
                    {
                        $this->subtotal += $item->model->dealer_price * $item->quantity * $item->attribute;
                    }
                    else
                    {
                        $this->subtotal += $item->model->dealer_price * $item->quantity;
                    }
                }
            }


        }

        $this->total = $this->subtotal;
        
        $this->getCartItemCount();
        $this->setAmount();

        return view('livewire.cart-component')->layout("layout.navfoot");
    }
}