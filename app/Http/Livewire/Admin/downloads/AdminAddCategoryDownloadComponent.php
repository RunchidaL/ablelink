<?php

namespace App\Http\Livewire\Admin\downloads;

use Livewire\Component;
use App\Models\DownloadCategory;
use Illuminate\Support\Str;

class AdminAddCategoryDownloadComponent extends Component
{
    public $name;
    public $slug;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|alpha_dash'
        ]);
        $category = new DownloadCategory();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();

        session()->flash('message','success');
        
    }
    public function render()
    {
        return view('livewire.admin.downloads.admin-add-category-download-component')->layout("layout.navfoot");
    }
}
