<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Download;
use App\Models\DownloadCategory;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditDownloadComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $file;
    public $category_id;
    public $newimage;
    public $download_id;

    public function mount($download_slug)
    {
        $download = Download::where('slug',$download_slug)->first();
        $this->name = $download->name;
        $this->slug = $download->slug;
        $this->file = $download->file;
        $this->category_id = $download->category_id;
        $this->download_id = $download->id;
    }

    public function updateDownload()
    {
        $download = Download::find($this->download_id);
        $download->name = $this->name;
        $download->slug = $this->slug;
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('downloads',$imageName);
            $download->file = $imageName;
        }
        $download->category_id = $this->category_id;
        $download->save();
        session()->flash('message','update download successs');
    }
    public function render()
    {
        $categories = DownloadCategory::all();
        return view('livewire.admin-edit-download-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
