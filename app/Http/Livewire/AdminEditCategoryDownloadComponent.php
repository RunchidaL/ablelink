<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DownloadCategory;
use Illuminate\Support\Str;

class AdminEditCategoryDownloadComponent extends Component
{
    public $categorydownload_slug;
    public $category_id;
    public $name;
    public $slug;

    public function mount($categorydownload_slug)
    {
        $this->categorydownload_slug = $categorydownload_slug;
        $category = DownloadCategory::where('slug',$categorydownload_slug)->first();
        $this->category_id = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateCategory()
    {
        $category = DownloadCategory::find($this->category_id);
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','edit success');
        
    }

    public function render()
    {
        return view('livewire.admin-edit-category-download-component')->layout("layout.navfoot");
    }
}
