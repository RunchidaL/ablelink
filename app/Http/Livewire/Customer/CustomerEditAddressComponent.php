<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CustomerAddress;

class CustomerEditAddressComponent extends Component
{
    public $firstname;
    public $lastname;
    public $address;
    public $subdistrict;
    public $district;
    public $county;
    public $zipcode;
    public $phonenumber;
    public $C_id;

    public function mount($address_id)
    {
        $customeraddress = CustomerAddress::where('id',$address_id)->first();
        $this->firstname = $customeraddress->firstname;
        $this->lastname = $customeraddress->lastname;
        $this->address = $customeraddress->address;
        $this->subdistrict = $customeraddress->subdistrict;
        $this->district = $customeraddress->district;
        $this->county = $customeraddress->county;
        $this->zipcode = $customeraddress->zipcode;
        $this->phonenumber = $customeraddress->phonenumber;
        $this->C_id = $customeraddress->id;
    }

    public function updateAddress()
    {
        $customeraddress = CustomerAddress::find($this->C_id);
        $customeraddress->firstname = $this->firstname;
        $customeraddress->lastname = $this->lastname;
        $customeraddress->address = $this->address;
        $customeraddress->subdistrict = $this->subdistrict;
        $customeraddress->district = $this->district;
        $customeraddress->county = $this->county;
        $customeraddress->zipcode = $this->zipcode;
        $customeraddress->phonenumber = $this->phonenumber;
        $customeraddress->save();

        session()->flash('message','Address has been updated successfully!');
    }

    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.customer.customer-edit-address-component',['user'=>$user])->layout('layout.navfoot');
    }
}
