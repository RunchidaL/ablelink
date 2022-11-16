<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderID;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\User;

class OrderpdfComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    public function render()
    {
        $order = OrderID::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
        $items = Order::where('order_id',$order->id)->get();
        $user = User::all();
        return view('livewire.order-pdf-component',['order'=>$order,'items'=>$items,'user'=>$user]);
    }
}
