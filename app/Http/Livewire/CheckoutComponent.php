<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart as Cart;
use App\Models\ProductModels;
use App\Models\OrderID;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckoutComponent extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        $orderid = OrderID::where('user_id',$user->id)->latest('created_at')->first();
        $orders = Order::where('order_id',$orderid->id)->get();
        return view('livewire.checkout-component',['orders'=>$orders])->layout("layout.navfoot");
    }
}
