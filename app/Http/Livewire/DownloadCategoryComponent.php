<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Download;
use App\Models\DownloadCategory;
use App\Models\Brand;
// use Livewire\WithPagination;

class DownloadCategoryComponent extends Component
{
    public $download_brand;
    // use WithPagination;

    // protected $paginationTheme = 'bootstrap';

    public function mount($download_brand)
    {
        $this->download_brand = $download_brand;
    }

    public function render()
    {
        $brand_id = $this->download_brand;
        $brand = Brand::where('slug',$brand_id)->first();
        $downloads = Download::where('brand_id',$brand->id)->get();
        $catelogs = Download::where('brand_id',$brand->id)->where('category_id',1)->paginate(5, ['*'], 'catelogs');
        $presentations = Download::where('brand_id',$brand->id)->where('category_id',3)->paginate(5, ['*'], 'presentations');
        $vdos = Download::where('brand_id',$brand->id)->where('category_id',5)->paginate(5, ['*'], 'vdos');
        return view('livewire.download-category-component',['brand'=>$brand,'downloads'=>$downloads,'catelogs'=>$catelogs,'presentations'=>$presentations,'vdos'=>$vdos])->layout("layout.navfoot");
    }
}
