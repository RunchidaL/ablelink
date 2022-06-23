<?php

namespace App\Http\Livewire;

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
        return view('livewire.admin-category-download-component',['categories'=>$categories])->layout("layout.navfoot");
    }
}
