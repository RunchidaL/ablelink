<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\OrderID;
use App\Models\Dealer;
use App\Models\User;
use App\Models\CustomerAddress;
use Livewire\WithPagination;

class AllOrderComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $role;

    public function mount()
    {
        $this->role = "default";
    }

    public function render()
    {
        // $orders = OrderID::orderBy('created_at','DESC')->paginate(20);
        $dealers = Dealer::all();
        $customers = CustomerAddress::all(); 

        if($this->role=="default"){
            $orders = OrderID::orderBy('created_at','DESC')->paginate(20);
        }
        else if($this->role=="dealer"){
            $orders = OrderID::orderBy('created_at','DESC')->paginate(20) && User::where('role',2);
        }
        return view('livewire.admin.all-order-component',['orders'=>$orders,'dealers'=>$dealers,'customers'=>$customers])->layout("layout.navfoot");
    }
}
