<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Footer;

class FooterComponent extends Component
{
    public function render()
    {
        $footer = Footer::where('id',1)->first();
        return view('livewire.footer-component',['footer'=>$footer]);
    }
}
