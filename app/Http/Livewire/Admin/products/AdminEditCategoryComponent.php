<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\BrandCategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\Brand;
use App\Models\SubBrandCategory;

class AdminEditCategoryComponent extends Component
{
    use WithFileUploads;
    public $category_slug;
    public $category_id;
    public $name;
    public $slug;
    public $scategory_id;
    public $scategory_slug;
    public $bcategory_slug;
    public $bcategory_id;
    public $category_c;
    public $scategory_c;
    public $image;
    public $newimage;
    public $brand_id;
    public $sbcategory_slug;

    public function mount($category_slug,$scategory_slug=null,$bcategory_slug=null,$sbcategory_slug=null)
    {
        if($this->sbcategory_slug)
        {
            $this->sbcategory_slug = $sbcategory_slug;
            $sbcategory = SubBrandCategory::where('id',$sbcategory_slug)->first();
            $this->sbcategory_id = $sbcategory->id;
            $this->name = $sbcategory->name;
            $this->slug = $sbcategory->slug;
        }
        else if($this->bcategory_slug)
        {
            $this->bcategory_slug = $bcategory_slug;
            $bcategory = BrandCategory::where('id',$bcategory_slug)->first();
            $this->bcategory_id = $bcategory->id;
            $this->brand_id = $bcategory->brand_id;
            $this->category_c = $bcategory->subcategories->category_id;
            $this->scategory_c = $bcategory->subcategory_id;
        }
        else if($this->scategory_slug)
        {
            $this->scategory_slug = $scategory_slug;
            $scategory = Subcategory::where('slug',$scategory_slug)->first();
            $this->scategory_id = $scategory->id;
            $this->category_c = $scategory->category_id;
            $this->name = $scategory->name;
            $this->slug = $scategory->slug;
            $this->image = $scategory->image;
        }
        else{
            $this->category_slug = $category_slug;
            $category = Category::where('slug',$category_slug)->first();
            $this->category_id = $category->id;
            $this->name = $category->name;
            $this->slug = $category->slug;
        }
        
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required|alpha_dash',
        ]);
        if($this->sbcategory_slug)
        {
            $sbcategory = SubBrandCategory::find($this->sbcategory_slug);
            $sbcategory->name = $this->name;
            $sbcategory->slug = $this->slug;
            $sbcategory->save();
        }
        else if($this->scategory_c)
        {
            $bcategory = BrandCategory::find($this->bcategory_id);
            $bcategory->brand_id = $this->brand_id;
            $bcategory->subcategory_id = $this->scategory_c;
            $bcategory->save();
        }
        else if($this->category_c)
        {
            $scategory = Subcategory::find($this->scategory_id);
            $scategory->name = $this->name;
            $scategory->slug = $this->slug;
            $scategory->category_id = $this->category_c;
            if($this->newimage)
            {
                $imageName = $this->newimage->getClientOriginalName();
                $this->newimage->storeAs('products',$imageName);
                $scategory->image = $imageName;
            }
            $scategory->save();
        }
        else{
            $category = Category::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }
        session()->flash('message','Edit success');
        
    }

    public function changeSubcategory()
    {
        $this->scategory_c = 0;
    }
    
    public function render()
    {
        $categories = Category::all();
        $subcategories = Subcategory::where('category_id',$this->category_c)->get();
        $brands = Brand::all();
        return view('livewire.admin.products.admin-edit-category-component',['categories'=>$categories,'subcategories'=>$subcategories,'brands'=>$brands])->layout("layout.navfoot");
    }
}
