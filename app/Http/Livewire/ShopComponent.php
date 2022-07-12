<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductModels;
use Cart;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function render()
    {   
        // $products = Product::paginate(10);
        $products = Product::all();
        $categories = Category::all();
        return view('livewire.shop-component',['products'=> $products, 'categories' => $categories])->layout("layout.navfoot"); 
    }
}
