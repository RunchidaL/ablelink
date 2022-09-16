<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderID;

class OrderComponent extends Component
{
    public $count = 0;

    public function getOrderCount()
    {
        $this->count = OrderID::where('user_id',Auth::user()->id)->count();
    }

    public function render()
    {
        $this->getOrderCount();
        $orders = OrderID::where('user_id',Auth::user()->id)->get();
        return view('livewire.order-component',['orders'=>$orders])->layout("layout.navfoot");
    }
}
