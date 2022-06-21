<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Download;

class DownloadComponent extends Component
{
    public function render()
    {
        $downloads = Download::paginate(4);
        return view('livewire.download-component',['downloads'=>$downloads])->layout("layout.navfoot");
    }
}
