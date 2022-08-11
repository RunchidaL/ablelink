<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewProductDetailComponent extends Component
{
    public function render()
    {
        return view('livewire.new-product-detail-component')->layout("layout.navfoot");
    }
}
