<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\Product;

class AdminProductComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Product delete');
    }

    public function render()
    {
        $products = Product::paginate(6);
        return view('livewire.admin.products.admin-product-component',['products' => $products])->layout("layout.navfoot");
    }
}
