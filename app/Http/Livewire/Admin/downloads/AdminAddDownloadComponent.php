<?php

namespace App\Http\Livewire\Admin\downloads;

use App\Models\Download;
use App\Models\DownloadCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddDownloadComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $file;
    public $category_id;
    
    public function addDownload()
    {
        $download = new Download();
        $download->name = $this->name;
        $download->slug = $this->slug;
        $fileName = $this->file->getClientOriginalName();
        $this->file->storeAs('downloads', $fileName);
        $download->file = $fileName;
        $download->category_id = $this->category_id;
        $download->save();
        session()->flash('message','add Download successs');
    }

    public function render()
    {
        $categories = DownloadCategory::all();
        return view('livewire.admin.downloads.admin-add-download-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
