<?php

namespace App\Http\Livewire\Admin\Dealer;

use Livewire\Component;

class AdminDealerComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.dealer.admin-dealer-component')->layout("layout.navfoot");
    }
}
