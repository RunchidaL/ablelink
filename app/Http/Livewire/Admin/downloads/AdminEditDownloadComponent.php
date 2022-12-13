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
    public $newfiletext;
    public $download_id;
    public $brand_id;
    

    public function mount($download_id)
    {
        $download = Download::where('id',$download_id)->first();
        $this->name = $download->name;
        $this->file = $download->file;
        $this->filetext = $download->file;
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
        $download->category_id = $this->category_id;
        $download->brand_id = $this->brand_id;

        if($this->newfiletext and $this->newfile == null){
            $download->filetext = $this->newfiletext;
            $download->file = null;
            $download->save();
            session()->flash('message','Edit Download successs');
        }
        if($this->newfile and $this->newfiletext == null){
            $fileName = $this->newfile->getClientOriginalName();
            $this->newfile->storeAs('downloads', $fileName);
            $download->file = $fileName;
            $download->filetext = null;
            $download->save();
            session()->flash('message','Edit Download successs');
        }
        if($this->newfiletext and $this->newfile){
            session()->flash('danger','กรุณาเลือกใส่ File หรือ Link');
        }
        if($this->newfiletext == null and $this->newfile == null){
            $download->save();
            session()->flash('message','Edit Download successs');
        }
    }
    public function render()
    {
        $brands = Brand::all();
        $categories = DownloadCategory::all();
        $download = Download::find($this->download_id);
        return view('livewire.admin.downloads.admin-edit-download-component',['categories'=>$categories,'brands'=>$brands,'download'=>$download])->layout("layout.navfoot");
    }
}
