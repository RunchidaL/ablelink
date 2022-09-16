<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NewProduct;

class NewProductComponent extends Component
{
    public function render()
    {

        $NewProduct = NewProduct::all();
        return view('livewire.new-product-component',['NewProduct'=> $NewProduct,])->layout("layout.navfoot");
    }

}
