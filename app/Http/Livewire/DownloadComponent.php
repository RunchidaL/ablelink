<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Download;
use App\Models\DownloadCategory;

class DownloadComponent extends Component
{
    public function render()
    {
        $dcategories = DownloadCategory::all();
        $downloads = Download::orderBy('created_at','DESC')->get();
        return view('livewire.download-component',['downloads'=>$downloads,'dcategories'=>$dcategories])->layout("layout.navfoot");
    }
}
