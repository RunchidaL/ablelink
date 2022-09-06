<?php

namespace App\Http\Livewire\Admin\Posts;

use Livewire\Component;
use App\Models\NewProduct;

class AddNewProductsComponent extends Component
{
    public $name;
    public $img;
    public $linkproduct;
    public $brand_id;


    public function addNewProduct()
    {
        $NewProduct = new NewProduct();
        $NewProduct->name = $this->name;
        $NewProduct->img = $this->img;
        $NewProduct->linkproduct = $this->linkproduct;
        $NewProduct->brand_id = $this->brand_id;
        $NewProduct->save();
        session()->flash('message','Add NewProduct successs');
    }

    public function render()
    {
        return view('livewire.admin.posts.add-new-products-component')->layout("layout.navfoot");
    }
}
