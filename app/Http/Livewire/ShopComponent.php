<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

class ShopComponent extends Component
{
    public function render()
    {   
        $products = Product::paginate(8);
        $categories = Category::all();
        return view('livewire.shop-component',['products'=> $products, 'categories' => $categories])->layout("layout.navfoot"); 
    }
}
