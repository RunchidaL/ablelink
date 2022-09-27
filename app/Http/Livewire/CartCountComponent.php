<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ShoppingCart as Cart;
use Illuminate\Support\Facades\Auth;

class CartCountComponent extends Component
{
    public $count = 0;
    protected $listeners = ['refreshComponent'=>'$refresh'];

    public function verify()
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        else{
            $items = Cart::whereUserId(auth()->user()->id)->get();
            $count = 0;
            foreach($items as $item)
            {
                $this->count += $item->quantity;
            }
            
        }
    }
    
    public function render()
    {
        $this->verify();

        return view('livewire.cart-count-component');
    }
}
