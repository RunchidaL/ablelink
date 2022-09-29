<?php

namespace App\Http\Livewire\Admin\downloads;

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
        $downloads = Download::orderBy('created_at','DESC')->get();
        return view('livewire.admin.downloads.admin-download-component',['downloads'=>$downloads])->layout("layout.navfoot");
    }
}
