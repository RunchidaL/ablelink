<?php

namespace App\Http\Livewire\Admin\downloads;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Download;
use App\Models\DownloadCategory;

class AdminDownloadComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $category;
    public function mount()
    {
        $this->category = "default";
    }

    public function deleteDownload($id)
    {
        $download = Download::find($id);
        $download->delete();
        session()->flash('message','Post has been deleted successfully!');
    }
    public function render()
    {
        if($this->category=="default"){
            $downloads = Download::orderBy('created_at','DESC')->paginate(10);
        }
        elseif($this->category=="1"){
            $downloads = Download::where('category_id',1)->orderBy('created_at','DESC')->paginate(10);
        }
        elseif($this->category=="2"){
            $downloads = Download::where('category_id',3)->orderBy('created_at','DESC')->paginate(10);
        }
        elseif($this->category=="3"){
            $downloads = Download::where('category_id',5)->orderBy('created_at','DESC')->paginate(10);
        }
        
        return view('livewire.admin.downloads.admin-download-component',['downloads'=>$downloads])->layout("layout.navfoot");
    }
}
