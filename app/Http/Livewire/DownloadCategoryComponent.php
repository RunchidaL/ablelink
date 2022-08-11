<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Download;
use App\Models\DownloadCategory;

class DownloadCategoryComponent extends Component
{
    public $downloadcategory_slug;

    public function mount($downloadcategory_slug)
    {
        $this->downloadcategory_slug = $downloadcategory_slug;
    }

    public function render()
    {
        $downloadcategory = DownloadCategory::where('slug',$this->downloadcategory_slug)->first();
        $category_id = $downloadcategory->id;
        $category_name = $downloadcategory->name;

        $downloads = Download::where('category_id',$category_id)->orderBy('created_at','DESC')->paginate(20);
        $downloadcategories = DownloadCategory::all();
        $downloadcategory = DownloadCategory::where('slug',$this->downloadcategory_slug)->first();
        return view('livewire.download-category-component',['downloadcategory'=>$downloadcategory,'downloads'=>$downloads,'downloadcategories'=>$downloadcategories,'category_name'=>$category_name])->layout("layout.navfoot");
    }
}
