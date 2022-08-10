<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdmindashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admindashboard-component')->layout("layout.navfoot");
    }
}
