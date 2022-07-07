<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderDetailComponent extends Component
{
    public function render()
    {
        return view('livewire.order-detail-component')->layout("layout.navfoot");
    }
}
