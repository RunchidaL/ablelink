<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Download;
use App\Models\DownloadCategory;

class AdminDownloadComponent extends Component
{
    public function deleteDownload($id)
    {
        $download = Download::find($id);
        $download->delete();
        session()->flash('message','Post has been deleted successfully!');
    }
    public function render()
    {
        $downloads = Download::all();
        return view('livewire.admin-download-component',['downloads'=>$downloads])->layout("layout.navfoot");
    }
}
