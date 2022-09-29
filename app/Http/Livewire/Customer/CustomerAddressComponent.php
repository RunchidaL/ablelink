<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CustomerAddress;

class CustomerAddressComponent extends Component
{
    public function deleteAddress($id)
    {
        $deleteuser = CustomerAddress::find($id);
        $deleteuser->delete();
        session()->flash('message','Post has been deleted successfully!');
    }

    public function render()
    {
        $user = User::find(Auth::user()->id);
        $customeraddress = CustomerAddress::all();
        return view('livewire.customer.customer-address-component',['user'=>$user],['customeraddress'=>$customeraddress])->layout("layout.navfoot");
    }
}
