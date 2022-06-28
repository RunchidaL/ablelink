<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\NetworkValue;

class DetailsComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug',$this->slug)->first();
        $network_products = NetworkValue::all();
        return view('livewire.details-component',['product'=>$product,'network_products'=>$network_products])->layout("layout.navfoot");
    }
}
