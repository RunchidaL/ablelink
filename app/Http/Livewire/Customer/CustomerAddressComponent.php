<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CustomerAddress;

class CustomerAddressComponent extends Component
{
    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'deleteAddress'];

    public function deleteAddresses($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteAddress()
    {
        $customeraddresses = CustomerAddress::where('id',$this->delete_id)->first();
        $customeraddresses->delete();
        $this->dispatchBrowserEvent('deleteaddress');
        session()->flash('message','Item has been deleted successfully!');
    }

    public function render()
    {
        $user = User::find(Auth::user()->id);
        $customeraddress = CustomerAddress::all();
        return view('livewire.customer.customer-address-component',['user'=>$user],['customeraddress'=>$customeraddress])->layout("layout.navfoot");
    }
}