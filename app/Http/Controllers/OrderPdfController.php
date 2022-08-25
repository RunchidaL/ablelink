<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderID;
use App\Models\Order;
use App\Models\Dealer;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderPdfController extends Controller
{
    // public $orderpdf_id;

    // public function mount($orderpdf_id)
    // {
    //     $this->orderpdf_id = $orderpdf_id;
    // }

    public function export($orderpdf_id)
    {
        $order = OrderID::where('user_id',Auth::user()->id)->where('id',$orderpdf_id)->first();
        $dealer = Dealer::where('dealerid',Auth::user()->id)->first();
        $pdf = PDF::loadView('livewire.order-pdf-component',['order'=>$order,'dealer'=>$dealer]);
        // return $pdf->download('order' . rand(1,1000) .'.pdf');
        return $pdf->stream();
    }
}
