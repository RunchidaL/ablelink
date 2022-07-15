<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;

class NavbarComponent extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.navbar-component',['categories'=>$categories]);
    }
}
