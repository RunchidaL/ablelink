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

class CheckoutComponent extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $dealer = Dealer::where('dealerid',$user->id)->first();
        $orderid = OrderID::where('user_id',$user->id)->latest('created_at')->first();
        $orders = Order::where('order_id',$orderid->id)->get();
        return view('livewire.checkout-component',['user'=>$user,'orders'=>$orders,'dealer'=>$dealer,'orderid'=>$orderid])->layout("layout.navfoot");
    }
}
