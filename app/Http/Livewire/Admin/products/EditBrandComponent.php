<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Brand;
use Illuminate\Support\Str;

class EditBrandComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $image;
    public $newimage;

    public function mount($brand_slug)
    {
        $this->brand_slug = $brand_slug;
        $brand = Brand::where('slug',$brand_slug)->first();
        $this->brand_id = $brand->id;
        $this->name = $brand->name;
        $this->slug = $brand->slug;
        $this->image = $brand->image;
        
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateBrand()
    {
        $brand = Brand::find($this->brand_id);
        $brand->name = $this->name;
        $brand->slug = $this->slug;
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('brands',$imageName);
            $brand->image = $imageName;
        }
        $brand->save();
        session()->flash('message','Edit success');
    }

    public function render()
    {
        return view('livewire.admin.products.edit-brand-component')->layout("layout.navfoot");
    }
}
