<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use Cart;
use Livewire\WithPagination;
use App\Models\ShoppingCart;

class ShopComponent extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // public function store($product_id,$product_name,$product_price)
    // {
    //     Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
    //     session()->flash('success_message','Item added in Cart');
    //     return redirect()->route('product.cart');
    // }

    public function addToCart($id)
    {
        if(auth()->user())
        {
        }
        else
        {
            return redirect(route('login'));
        }
    }

    public function render()
    {   
        // $products = Product::paginate(10);
        // $products = Product::all();
        $products = ProductModels::orderBy('created_at','DESC')->paginate(10);
        // $products = Product::paginate(10);
        $categories = Category::all();
        return view('livewire.shop-component',['products'=> $products, 'categories' => $categories])->layout("layout.navfoot"); 
    }
}