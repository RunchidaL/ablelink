<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Download;
use App\Models\DownloadCategory;
use App\Models\Brand;

class DownloadCategoryComponent extends Component
{
    public $download_brand;

    public function mount($download_brand)
    {
        $this->download_brand = $download_brand;
    }

    public function render()
    {
        $brand_id = $this->download_brand;
        $brand = Brand::where('slug',$brand_id)->first();
        $downloads = Download::where('brand_id',$brand->id)->get();
        $catelogs = Download::where('brand_id',$brand->id)->where('category_id',1)->get();
        $pres = Download::where('brand_id',$brand->id)->where('category_id',3)->get();
        $vdos = Download::where('brand_id',$brand->id)->where('category_id',5)->get();
        return view('livewire.download-category-component',['downloads'=>$downloads,'catelogs'=>$catelogs,'pres'=>$pres,'vdos'=>$vdos])->layout("layout.navfoot");
    }
}
