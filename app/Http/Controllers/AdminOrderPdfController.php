<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderID;
use App\Models\Order;
use App\Models\Dealer;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminOrderPdfController extends Controller
{
    public function export($orderpdf_id)
    {
        $order = OrderID::where('id',$orderpdf_id)->first();
        $items = Order::where('order_id',$orderpdf_id)->get();
        $pdf = PDF::loadView('livewire.order-pdf-component',['order'=>$order,'items'=>$items]);
        return $pdf->stream();
    }
}
