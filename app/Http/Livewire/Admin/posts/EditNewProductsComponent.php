<?php

namespace App\Http\Livewire\Admin\Posts;

use App\Models\Brand;
use Livewire\Component;
use App\Models\NewProduct;

class EditNewProductsComponent extends Component
{

    public $name;
    public $img;
    public $linkproduct;
    public $brand_id;
    public $N_id;


    public function mount($NewProduct_id)
    {
        $NewProduct = NewProduct::where('id',$NewProduct_id)->first();
        $this->name = $NewProduct->name;
        $this->img = $NewProduct->img;
        $this->linkproduct = $NewProduct->linkproduct;
        $this->brand_id = $NewProduct->brand_id;
        $this->N_id = $NewProduct->id;
    }

    public function updateNewProduct()
    {
        $this->validate([
            'name' => 'required',
            'img' => 'required',
            'linkproduct' => 'required',
            'brand_id' => 'required',
        ]);
        $NewProduct = NewProduct::find($this->N_id);
        $NewProduct->name = $this->name;
        $NewProduct->img = $this->img;
        $NewProduct->linkproduct = $this->linkproduct;
        $NewProduct->brand_id = $this->brand_id;
        $NewProduct->save();
        session()->flash('message','Edit NewProduct successs');
    }

    public function render()
    {
        $brand = Brand::all();
        return view('livewire.admin.posts.edit-new-products-component',['brand'=> $brand])->layout('layout.navfoot');
    }
}
