<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderID;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderPdfComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id = $order_id;
    }
    
    public function export()
    {
        $order = OrderID::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();;
        $pdf = PDF::loadView('livewire.order-pdf-component',['order'=>$order]);
        return $pdf->download('order' . rand(1,1000) .'.pdf');
        // return $pdf->stream();
    }

    public function render()
    {
        $order = OrderID::where('user_id',Auth::user()->id)->where('id',$this->order_id)->first();
        $items = Order::where('order_id',$order->id)->get();
        return view('livewire.order-pdf-component',['order'=>$order]);
    }
}
