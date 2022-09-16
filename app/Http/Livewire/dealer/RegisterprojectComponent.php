<?php

namespace App\Http\Livewire\Dealer;

use App\Mail\RegisterProject;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class RegisterprojectComponent extends Component
{
    public function render()
    {
        return view('livewire.dealer.registerproject-component')->layout("layout.navfoot");
    }
}
