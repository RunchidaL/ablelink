<?php

namespace App\Http\Livewire\Admin\downloads;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Download;
use App\Models\DownloadCategory;
use App\Models\Brand;

class AdminDownloadComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $category;
    public $brand;
    public function mount()
    {
        $this->category = "default";
        $this->brand = "default";
    }

    public function deleteDownload($id)
    {
        $download = Download::find($id);
        $download->delete();
        session()->flash('message','Post has been deleted successfully!');
    }
    public function render()
    {
        if($this->category=="default" and $this->brand=="default"){
            $downloads = Download::orderBy('created_at','DESC')->paginate(10);
        }
        elseif($this->category and $this->brand =="default"){
            $downloads = Download::where('category_id',$this->category)->orderBy('created_at','DESC')->paginate(10);
        }
        elseif($this->category =="default"and $this->brand){
            $downloads = Download::where('brand_id',$this->brand)->orderBy('created_at','DESC')->paginate(10);
        }
        elseif($this->category and $this->brand){
            $downloads = Download::where('category_id',$this->category)->where('brand_id',$this->brand)->orderBy('created_at','DESC')->paginate(10);
        }
        $brands = Brand::orderBy('name','ASC')->get();
        $categories = DownloadCategory::orderBy('name','ASC')->get();
        return view('livewire.admin.downloads.admin-download-component',['downloads'=>$downloads,'brands'=>$brands,'categories'=>$categories])->layout("layout.navfoot");
    }
}
