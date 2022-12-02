<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Brand;
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
        $this->validate([
            'name' => 'required',
            'img' => 'required',
            'linkproduct' => 'required',
            'brand_id' => 'required',
        ]);
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
        $brand = Brand::orderBy('name','ASC')->get();
        return view('livewire.admin.posts.add-new-products-component',['brand'=> $brand])->layout("layout.navfoot");
    }
}
