<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart as Cart;
use App\Models\ProductModels;
use App\Models\OrderID;
use App\Models\Order;
use App\Models\User;
use App\Models\Dealer;
use Illuminate\Support\Facades\Auth;
use App\Models\CustomerAddress;

class CheckoutComponent extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $dealer = Dealer::where('dealerid',$user->id)->first();
        $orderid = OrderID::where('user_id',$user->id)->latest('created_at')->first();
        $orders = Order::where('order_id',$orderid->id)->get();
        $customer = CustomerAddress::where('customerid',$user->id)->where('id',$orderid->address_id)->first();
        return view('livewire.checkout-component',['user'=>$user,'orders'=>$orders,'dealer'=>$dealer,'orderid'=>$orderid,'customer'=>$customer])->layout("layout.navfoot");
    }
}
