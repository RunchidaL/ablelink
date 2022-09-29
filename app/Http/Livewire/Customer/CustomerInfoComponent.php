<?php

namespace App\Http\Livewire\Customer;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;

class CustomerInfoComponent extends Component
{
    public $name;
    public $email;
    public $phonenumber;

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phonenumber = $user->phonenumber;
    }

    public function updateProfile()
    {
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->phonenumber = $this->phonenumber;
        $user->save();

        session()->flash('message','Profile has been updated successfully!');
    }

    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.customer.customer-info-component',['user'=>$user])->layout("layout.navfoot");
    }
}
