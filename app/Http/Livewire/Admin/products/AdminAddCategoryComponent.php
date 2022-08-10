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

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $category_id;
    public $scategory_id;
    public $image;
    public $brand_id;
    

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function storeCategory()
    {
        if($this->scategory_id)
        {           
            $bcategory = new BrandCategory();
            $bcategory->subcategory_id = $this->scategory_id;
            $bcategory->brand_id = $this->brand_id;
            $bcategory->save();
        }
        else if($this->category_id)
        {
            $scategory = new Subcategory();
            $scategory->name = $this->name;
            $scategory->slug = $this->slug;
            $scategory->category_id = $this->category_id;
            if($this->image)
            {
                $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
                $this->image->storeAs('products',$imageName);
                $scategory->image = $imageName;
            }

            $scategory->save();
        }
        else{
            $category = new Category();
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }
        session()->flash('message','success');
        
    }

    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }

    public function render()
    {   
        $categories = Category::all();
        $subcategories = Subcategory::where('category_id',$this->category_id)->get();
        $brands = Brand::all();
        return view('livewire.admin.products.admin-add-category-component',['categories'=>$categories,'subcategories'=>$subcategories,'brands'=>$brands])->layout("layout.navfoot");
    }
}
