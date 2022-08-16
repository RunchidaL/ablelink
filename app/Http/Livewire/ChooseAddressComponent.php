<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Dealer;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart as Cart;
use App\Models\ProductModels;
use App\Models\Order;
use App\Models\OrderID;

class ChooseAddressComponent extends Component
{
    public $cartitems;
    public $payment;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'payment' => 'required',
        ]);
    }

    public function checkout()
    {
        $this->validate([
            'payment' => 'required',
        ]);
        
        $cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        foreach($cartitems as $item)
        {
            if(!ProductModels::where('id',$item->product_id)->where('stock','>=',$item->quantity)->exists())
            {
                // $name = ProductModels::where('id',$item->product_id);
                // $removeItem = Cart::where(['user_id'=>auth()->user()->id])->where('product_id',$item->product_id)->first();
                // $removeItem->delete();
                session()->flash('message','สินค้าบางชนิดหมดหรือ stock มีน้อยกว่าที่ลูกค้าจะซื้อ กรุณาลบ');
                return redirect()->route('product.cart');
                
            }
        }
        if($this->payment == '1')
        {
            $user = User::find(Auth::user()->id);
            $dealer = Dealer::where('dealerid',$user->id)->first();
            $total = session()->get('chooseaddress')['total'];
            $dealer->coin = $dealer->coin - $total;
            $dealer->save();
        
            $orderid = New OrderID();
            $orderid->user_id = $user->id;
            $orderid->payment_code = 1;
            $orderid->address_id = 1;
            $orderid->save();
            
            foreach($cartitems as $item)
            {
                $model = ProductModels::where('id',$item->product_id)->first();
                $model->stock = $model->stock - $item->quantity;
                $model->save();

                $order = New Order();
                $order->product_id = $item->product_id;
                $order->quantity = $item->quantity;
                $id = OrderID::where('user_id',$user->id)->latest('created_at')->first();
                $order->order_id = $id->id;
                $order->save();
            }
            Cart::where('user_id',auth()->id())->delete();
            session()->forget('chooseaddress');
        }
        return redirect()->route('checkout');
    }
    public function render()
    {
        $this->cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        $user = User::find(Auth::user()->id);
        $dealer = Dealer::where('dealerid',$user->id)->first();
        return view('livewire.choose-address-component',['user'=>$user,'dealer'=>$dealer])->layout("layout.navfoot");
    }
}
