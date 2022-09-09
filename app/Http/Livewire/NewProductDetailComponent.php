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

    

    public function mount()
    {
        
        $this->month = "default";
        $this->year = "default";
    }


    public function render()
    {
        
        $brand = Brand::where('name',$this->name)->first();
        // if($this->month=="01"){
        //     $NewProduct = NewProduct::where('brand_id',$brand->id)->whereMonth('created_at', '=', '01')->orderBy('created_at','DESC')->get();
        // }
        // else if($this->month=="02"){
        //     $NewProduct = NewProduct::where('brand_id',$brand->id)->whereMonth('created_at', '=', '02')->orderBy('created_at','DESC')->get();
        // }
        // else if($this->month=="03"){
        //     $NewProduct = NewProduct::where('brand_id',$brand->id)->whereMonth('created_at', '=', '03')->orderBy('created_at','DESC')->get();
        // }
        // else {
        //     $NewProduct = NewProduct::where('brand_id',$brand->id)->orderBy('created_at','DESC')->get();
        // }
        if($this->year=="default" and $this->month=="default"){
            $NewProduct = NewProduct::where('brand_id',$brand->id)->orderBy('created_at','DESC')->get();
        }
        else if($this->year=="default" and $this->month){
            $NewProduct = NewProduct::where('brand_id',$brand->id)->whereMonth('created_at', '=', $this->month)->orderBy('created_at','DESC')->get();
        }
        else if($this->year and $this->month=="default"){
            $NewProduct = NewProduct::where('brand_id',$brand->id)->whereYear('created_at', '=', $this->year)->orderBy('created_at','DESC')->get();
        }
        else {
            $NewProduct = NewProduct::where('brand_id',$brand->id)->whereMonth('created_at', '=', $this->month)->whereYear('created_at', '=', $this->year)->orderBy('created_at','DESC')->get();
        }

        
        return view('livewire.new-product-detail-component',['NewProduct'=> $NewProduct,'brand'=> $brand])->layout("layout.navfoot");
    }
}
