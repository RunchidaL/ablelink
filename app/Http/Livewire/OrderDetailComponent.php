<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderID;
use App\Models\Order;
use App\Models\Dealer;
use Barryvdh\DomPDF\Facade\PDF;
use App\Models\CustomerAddress;
use App\Models\Review;

class OrderDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }

    // public function export()
    // {
    //     $order = OrderID::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
    //     // $items = Order::where('order_id',$order->id)->get();
    //     $pdf = PDF::loadView('livewire.order-pdf-component',['order'=>$order]);
    //     return $pdf->download('order' . rand(1,1000) .'.pdf');
    // }

    public function render()
    {
        $order = OrderID::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
        $items = Order::where('order_id',$order->id)->get();
        $dealer = Dealer::where('dealerid',Auth::user()->id)->first();
        $customer = CustomerAddress::where('customerid',Auth::user()->id)->where('id',$order->address_id)->first();
        $reviews = Review::all();
        return view('livewire.order-detail-component',['order'=>$order,'items'=>$items,'dealer'=>$dealer,'customer'=>$customer,'reviews'=>$reviews])->layout("layout.navfoot");
    }
}
