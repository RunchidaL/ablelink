<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DownloadComponent extends Component
{
    public function render()
    {
        return view('livewire.download-component')->layout("layout.navfoot");
    }
}
