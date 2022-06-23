<?php

namespace App\Http\Livewire\Admin\downloads;

use Livewire\Component;
use App\Models\DownloadCategory;

class AdminCategoryDownloadComponent extends Component
{
    public function deleteCategory($id)
    {
        $category = DownloadCategory::find($id);
        $category->delete();
        session()->flash('message','Category delete success');
    }
    public function render()
    {
        $categories = DownloadCategory::all();
        return view('livewire.admin.downloads.admin-category-download-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
