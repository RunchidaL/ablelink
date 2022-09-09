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

    

    public function mount($name,$year=null)
    {
        $this->name = $name;
        $this->year = $year;
    }


    public function render()
    {
        
        $brand = Brand::where('name',$this->name)->first();
        if($this->year){
            $NewProduct = NewProduct::where('brand_id',$brand->id)->whereYear('created_at', '=', $this->year)->orderBy('created_at','DESC')->get();
        }
        else{
            $NewProduct = NewProduct::where('brand_id',$brand->id)->orderBy('created_at','DESC')->get();
        }

        
        return view('livewire.new-product-detail-component',['NewProduct'=> $NewProduct,'brand'=>$brand])->layout("layout.navfoot");
    }
}