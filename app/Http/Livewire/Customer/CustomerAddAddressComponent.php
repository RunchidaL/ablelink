<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\CustomerAddress;

class CustomerAddAddressComponent extends Component
{
    public $firstname;
    public $lastname;
    public $address;
    public $subdistrict;
    public $district;
    public $county;
    public $zipcode;
    public $phonenumber;

    public function addAddress()
    {
        $user = User::find(Auth::user()->id);
        $useraddress = new CustomerAddress();
        $useraddress->customerid = $user->id;
        $useraddress->firstname = $this->firstname;
        $useraddress->lastname = $this->lastname;
        $useraddress->address = $this->address;
        $useraddress->subdistrict = $this->subdistrict;
        $useraddress->district = $this->district;
        $useraddress->county = $this->county;
        $useraddress->zipcode = $this->zipcode;
        $useraddress->phonenumber = $this->phonenumber;
        $useraddress->save();

        session()->flash('message','Address has been updated successfully!');
        
    }

    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.customer.customer-add-address-component',['user'=>$user])->layout("layout.navfoot");
    }
}
