<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Brand;
use Illuminate\Support\Str;

class AddBrandComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $link;

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeBrand()
    {
        
        $brand = new Brand();
        $brand->name = $this->name;
        $brand->slug = $this->slug;
        if($this->image)
        {
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('brands',$imageName);
        $brand->image = $imageName;
        }
        $brand->link = $this->link;
        $brand->save();
        

        session()->flash('message','success');
        
    }

    public function render()
    {
        return view('livewire.admin.products.add-brand-component')->layout("layout.navfoot");
    }
}
