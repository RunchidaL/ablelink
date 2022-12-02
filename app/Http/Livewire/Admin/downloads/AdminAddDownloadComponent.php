<?php

namespace App\Http\Livewire\Admin\downloads;

use App\Models\Download;
use App\Models\DownloadCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Brand;

class AdminAddDownloadComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $file;
    public $filetext;
    public $category_id;
    public $brand_id;
    
    public function addDownload()
    {
        $download = new Download();
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
        ]);
        $download->name = $this->name;
        $download->category_id = $this->category_id;
        $download->brand_id =  $this->brand_id;

        if($this->file){
            $this->validate([
                'file' => 'required',
            ]);
            $fileName = $this->file->getClientOriginalName();
            $this->file->storeAs('downloads', $fileName);
            $download->file = $fileName;
        }
        if($this->filetext){
            $this->validate([
                'filetext' => 'required',
            ]);
            $download->file = $this->filetext;
        }
        
        $download->save();
        session()->flash('message','add Download successs');
    }

    public function render()
    {
        $brands = Brand::all();
        $categories = DownloadCategory::all();
        return view('livewire.admin.downloads.admin-add-download-component',['categories'=>$categories,'brands'=>$brands])->layout("layout.navfoot");
    }
}
