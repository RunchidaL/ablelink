<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Forwork;

class ForworkComponent extends Component
{
    public function render()
    {
        $work = Forwork::where('id',1)->first();
        return view('livewire.forwork-component',['work'=>$work])->layout("layout.navfoot");
    }
}
