<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewProductComponent extends Component
{
    public function render()
    {
        return view('livewire.new-product-component')->layout("layout.navfoot");
    }
}
