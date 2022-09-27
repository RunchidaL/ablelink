<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\OrderID;
use App\Models\Order;
use App\Models\Dealer;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\CustomerAddress;

class OrderDetailsComponent extends Component
{
    public $order_id;

    public function mount($orderid)
    {
        $this->orderid = $orderid;
    }

    public function render()
    {
        $order = OrderID::where('id',$this->orderid)->first();
        $user = User::where('id',$order->user_id)->first();
        $items = Order::where('order_id',$order->id)->get();
        $dealer = Dealer::where('dealerid',$order->user_id)->first();
        $customer = CustomerAddress::where('customerid',$order->user_id)->first();
        return view('livewire.admin.order-details-component',['order'=>$order,'user'=>$user,'items'=>$items,'dealer'=>$dealer,'customer'=>$customer])->layout("layout.navfoot");
    }
}
