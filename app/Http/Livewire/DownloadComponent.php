<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Brand;

class DownloadComponent extends Component
{
    public function render()
    {
        $brand = Brand::all();
        return view('livewire.download-component',['brand'=>$brand])->layout("layout.navfoot");
    }
}
