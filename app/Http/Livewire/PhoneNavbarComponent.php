<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class PhoneNavbarComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.phone-navbar-component',['categories'=>$categories]);
    }
}
