<?php

namespace App\Http\Livewire\Admin\Posts;

use Livewire\Component;
use App\Models\NewProduct;

class AdminNewProductsComponent extends Component
{
    public function deleteNewProduct($id)
    {
        $NewProduct = NewProduct::find($id);
        $NewProduct->delete();
        session()->flash('message','Post has been deleted successfully!');
    }

    public function render()
    {
        $NewProduct = NewProduct::all();
        return view('livewire.admin.posts.admin-new-products-component',['NewProduct'=> $NewProduct,])->layout("layout.navfoot");
    }
}
