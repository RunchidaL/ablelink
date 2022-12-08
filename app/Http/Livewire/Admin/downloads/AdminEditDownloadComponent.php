<?php

namespace App\Http\Livewire\Admin\downloads;

use Livewire\Component;
use App\Models\Download;
use App\Models\DownloadCategory;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Brand;

class AdminEditDownloadComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $file;
    public $filetext;
    public $category_id;
    public $newfile;
    public $download_id;
    public $brand_id;
    

    public function mount($download_id)
    {
        $download = Download::where('id',$download_id)->first();
        $this->name = $download->name;
        if($this->category_id == '1' or $this->category_id == '3'){
            $this->file = $download->file;
        }
        else{
            $this->filetext = $download->file;
        }
        $this->category_id = $download->category_id;
        $this->brand_id = $download->brand_id;
    }

    public function updateDownload()
    {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);
        $download = Download::find($this->download_id);
        $download->name = $this->name;
        if($this->newfile)
        {
            $fileName = $this->newfile->getClientOriginalName();
            $this->newfile->storeAs('downloads',$fileName);
            $download->file = $fileName;
        }
        if($this->filetext){

            $download->file = $this->filetext;
        }
        $download->category_id = $this->category_id;
        $download->brand_id = $this->brand_id;
        $download->save();
        session()->flash('message','update download successs');
    }
    public function render()
    {
        $brands = Brand::all();
        $categories = DownloadCategory::all();
        return view('livewire.admin.downloads.admin-edit-download-component',['categories'=>$categories,'brands'=>$brands])->layout("layout.navfoot");
    }
}
