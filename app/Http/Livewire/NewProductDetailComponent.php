<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;
use App\Models\NewProduct;

class NewProductDetailComponent extends Component
{

    public $month;
    public $year;
    public $name;

    

    public function mount($name)
    {
        $this->name = $name;
    }


    public function render()
    {
        
        $brand = Brand::where('name',$this->name)->first();
        $NewProduct = NewProduct::where('brand_id',$brand->id)->orderBy('created_at','DESC')->get();
        $years = NewProduct::whereYear('created_at', '=', '2020')->get();
        return view('livewire.new-product-detail-component',['NewProduct'=> $NewProduct,'years'=>$years])->layout("layout.navfoot");
    }
}
