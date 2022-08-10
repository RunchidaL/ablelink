<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\ShoppingCart as Cart;

class ChooseAddressComponent extends Component
{
    public $cartitems;
    public function render()
    {
        $this->cartitems = Cart::with('model')->where(['user_id'=>auth()->user()->id])->get();
        $user = User::find(Auth::user()->id);
        return view('livewire.choose-address-component',['user'=>$user])->layout("layout.navfoot");
    }
}
