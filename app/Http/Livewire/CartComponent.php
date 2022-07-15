<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Cart;

class CartComponent extends Component
{
    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'deleted'];

    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty+1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        if($product->qty > 1)
        {
            $qty = $product->qty-1;
            Cart::update($rowId,$qty);
        }
    }

    public function delete($rowId)
    {
        // Cart::remove($rowId);
        $this->delete_id = $rowId;
        $this->dispatchBrowserEvent('show-delete-confirmation');
        // return redirect()->route('product.cart');
    }

    public function deleted($rowId)
    {
        Cart::remove($rowId);
        $this->dispatchBrowserEvent('deletedP');
        // return redirect()->route('product.cart');
    }
    public function render()
    {
        return view('livewire.cart-component')->layout("layout.navfoot");
    }
}
