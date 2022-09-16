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
use App\Models\CustomerAddress;

class ChooseAddressComponent extends Component
{
    public $cartitems;
    public $payment;
    public $ad;

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
            if($item->attribute)
            {
                if(!ProductModels::where('id',$item->product_id)->where('stock','>=',$item->quantity * $item->attribute)->exists())
                {
                    session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                    return redirect()->route('product.cart');
                }
            }
            else 
            {
                if(!ProductModels::where('id',$item->product_id)->where('stock','>=',$item->quantity)->exists())
                {
                    // $name = ProductModels::where('id',$item->product_id);
                    // $removeItem = Cart::where(['user_id'=>auth()->user()->id])->where('product_id',$item->product_id)->first();
                    // $removeItem->delete();
                    session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                    return redirect()->route('product.cart');
                }
            }
        }

        $user = User::find(Auth::user()->id);
        $dealer = Dealer::where('dealerid',$user->id)->first();
        $total = session()->get('chooseaddress')['total'];
        if($this->payment == '1')
        {
            if($total > $dealer->coin)
            {
                session()->flash('message','ยอดเงินคงเหลือไม่เพียงพอ');
                return redirect()->route('chooseaddress');
            }
            $dealer->coin = $dealer->coin - $total;
            $dealer->save();

            $this->cutstock();
        }
    }

    public function cutstock()
    {
        $user = User::find(Auth::user()->id);
        $total = session()->get('chooseaddress')['total'];
        
        if($user->role == '2'){
            $orderid = New OrderID();
            $orderid->user_id = $user->id;
            $orderid->payment_code = $this->payment;
            $orderid->address_id = 1;
            $orderid->total = $total;
            $orderid->save();
        }
        else{
            $orderid = New OrderID();
            $orderid->user_id = $user->id;
            $orderid->payment_code = $this->payment;
            $orderid->address_id = $this->address;
            $orderid->total = $total;
            $orderid->save();
        }


        $cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        
        foreach($cartitems as $item)
        {
            $model = ProductModels::where('id',$item->product_id)->first();
            if($item->attribute)
            {
                $model->stock = $model->stock - ($item->quantity * $item->attribute);
            }
            else
            {
                $model->stock = $model->stock - $item->quantity;
            }
            $model->save();

            $order = New Order();
            $order->product_id = $item->product_id;
            $order->quantity = $item->quantity;
            if($item->attribute)
            {
                $order->attribute = $item->attribute;
            }
            $id = OrderID::where('user_id',$user->id)->latest('created_at')->first();
            $order->order_id = $id->id;
            $order->save();
        }
        Cart::where('user_id',auth()->id())->delete();
        session()->forget('chooseaddress');
        return redirect()->route('checkout');
    }

    public function render()
    {
        $this->cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        $user = User::find(Auth::user()->id);
        $dealer = Dealer::where('dealerid',$user->id)->first();
        $customers = CustomerAddress::where('customerid',$user->id)->get();
        return view('livewire.choose-address-component',['user'=>$user,'dealer'=>$dealer,'customers'=>$customers])->layout("layout.navfoot");
    }
}
