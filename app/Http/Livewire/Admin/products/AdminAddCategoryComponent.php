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

class AdminAddCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $category_id;
    public $scategory_id;
    public $image;
    public $brand_id;
    public $addcat;
    

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }


    public function storeCategory()
    {
        if($this->addcat == "sbcat")
        {   
            $this->validate([
                'name' => 'required',
                'slug' => 'required',
                'category_id' => 'required',
                'brand_id' => 'required',
                'scategory_id' => 'required'
            ]);
            $sbcategory = new SubBrandCategory();
            $sbcategory->name = $this->name;
            $sbcategory->slug = $this->slug;

            $brand = Brand::where('id',$this->brand_id)->first();
            $brandid = $brand->id;
            $ccategory = Subcategory::where('id',$this->scategory_id)->first();
            $ccategory_id = $ccategory->id;
            $sb_id = BrandCategory::where('brand_id',$brandid)->where('subcategory_id',$ccategory_id)->first();

            $sbcategory->brandcategory_id = $sb_id->id;
            $sbcategory->save();
        }
        else if($this->addcat == "bcat")
        {          
            $this->validate([
                'category_id' => 'required',
                'brand_id' => 'required',
                'scategory_id' => 'required'
            ]); 
            $bcategory = new BrandCategory();
            $bcategory->subcategory_id = $this->scategory_id;
            $bcategory->brand_id = $this->brand_id;
            $bcategory->save();
        }
        else if($this->addcat == "scat")
        {
            $this->validate([
                'name' => 'required|unique:subcategories',
                'slug' => 'required|unique:subcategories',
                'category_id' => 'required'
            ]);
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
        else if($this->addcat == "cat"){
            $this->validate([
                'name' => 'required|unique:categories',
                'slug' => 'required|unique:categories'
            ]);
            $category = new Category();
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }
        session()->flash('message','Success');
        
    }

    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }

    public function render()
    {   
        $categories = Category::all();
        $subcategories = Subcategory::where('category_id',$this->category_id)->get();
        $brands = Brand::orderBy('name','ASC')->get();
        return view('livewire.admin.products.admin-add-category-component',['categories'=>$categories,'subcategories'=>$subcategories,'brands'=>$brands])->layout("layout.navfoot");
    }
}