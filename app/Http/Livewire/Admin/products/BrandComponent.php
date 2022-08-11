<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\Brand;

class BrandComponent extends Component
{
    public function deleteBrand($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        session()->flash('message','Brand delete success');
    }

    public function render()
    {
        $brands = Brand::orderBy('created_at','DESC')->get();
        return view('livewire.admin.products.brand-component',['brands'=>$brands])->layout("layout.navfoot");
    }
}
