<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\ShoppingCart as Cart;
use Illuminate\Support\Facades\Auth;

class PhoneNavbarComponent extends Component
{
    public $count = 0;
    protected $listeners = ['refreshComponent'=>'$refresh'];

    public function verify()
    {
        if(!Auth::check()){
            $this->count = 0;
        }
        else{
            $this->count = Cart::whereUserId(auth()->user()->id)->count();
        }
    }

    public function render()
    {
        $this->verify();
        $categories = Category::all();
        return view('livewire.phone-navbar-component',['categories'=>$categories]);
    }
}
