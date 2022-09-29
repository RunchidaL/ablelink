<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\NetworkValue;
use App\Models\NetworkImage;
use App\Models\NetworkType;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\GroupProduct;
use App\Models\BrandCategory;
use Illuminate\Support\Str;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    // public $overview;
    // public $application;
    // public $item_spotlight;
    // public $feature;
    // public $image;
    // public $p_images;
    // public $datasheet;
    // public $firmware;
    // public $guide;
    // public $cert;
    // public $config;
    public $category_id;
    public $scategory_id;
    public $bcategory_id;
    public $videos;
    public $groupproduct_id;

    // public $network_images;
    // public $images = [];
    // public $attr;
    // public $inputs=[];
    // public $attribute_arr=[];
    // public $attribute_values;

    // public function add()
    // {
    //     if(!in_array($this->attr,$this->attribute_arr))
    //     {
    //         array_push($this->inputs,$this->attr);
    //         array_push($this->attribute_arr,$this->attr);
    //         array_push($this->images,$this->attr);
    //     }
    // }

    // public function remove($attr)
    // {
    //     unset($this->inputs[$attr]);
    // }
    
    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }


    public function addProduct()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        // $product->overview = $this->overview;
        // $product->application = $this->application;
        // $product->item_spotlight = $this->item_spotlight;
        // $product->feature = $this->feature;
        // $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        // $this->image->storeAs('products',$imageName);
        // $product->image = $imageName;
        // if($this->p_images)
        // {
        //     $imagesName = '';
        //     foreach($this->p_images as $key=>$image)
        //     {
        //         $imageName = $image->getClientOriginalName();
        //         $image->storeAs('products',$imageName);
        //         $imagesName = $imagesName . ',' . $imageName ;
        //     }
        //     $product->images = $imagesName;
        // }
        // if($this->datasheet)
        // {
        //     $file1 = $this->datasheet->getClientOriginalName();
        //     $this->datasheet->storeAs('products',$file1);
        //     $product->datasheet = $file1;
        // }
        // if($this->firmware)
        // {
        //     $file2 = $this->firmware->getClientOriginalName();
        //     $this->firmware->storeAs('products',$file2);
        //     $product->firmware = $file2;
        // }
        // if($this->guide)
        // {
        //     $file3 = $this->guide->getClientOriginalName();
        //     $this->guide->storeAs('products',$file3);
        //     $product->guide = $file3;
        // }
        // if($this->cert)
        // {
        //     $file4 = $this->cert->getClientOriginalName();
        //     $this->cert->storeAs('products',$file4);
        //     $product->cert = $file4;
        // }
        // if($this->config)
        // {
        //     $file5 = $this->config->getClientOriginalName();
        //     $this->config->storeAs('products',$file5);
        //     $product->config = $file5;
        // }
        $product->category_id = $this->category_id;
        if($this->scategory_id)
        {
            $product->subcategory_id = $this->scategory_id;
        }
        if($this->bcategory_id)
        {
            $product->brandcategory_id = $this->bcategory_id;
        }

        $product->groupproduct_id = $this->groupproduct_id;

        // if($this->videos)
        // {
        //     $videosName = '';
        //     foreach($this->videos as $key=>$video)
        //     {
        //         $videoName = $video->getClientOriginalName();
        //         $video->storeAs('products',$videoName);
        //         $videosName = $videosName . ',' . $videoName ;
        //     }
        //     $product->videos = $videosName;
        // }

        $product->save();

        // if($this->attribute_values)
        // {

        //     foreach($this->attribute_values as $key=>$attribute_value)
        //     {

        //         if($this->network_images)
        //         {
        //         $attribute_image = new NetworkImage();
        //         $fileNet = $this->network_images[$key]->getClientOriginalName();
        //         $this->network_images[$key]->storeAs('products', $fileNet);
        //         $attribute_image->image = $fileNet;
        //         $attribute_image->type_id = $key;
        //         $attribute_image->save();
                

        //         $avalues = explode(",",$attribute_value);
        //         foreach($avalues as $avalue)
        //         {
        //             $attr_value = new NetworkValue();
        //             $attr_value->network_image_id = $attribute_image->id;
        //             $attr_value->product_in_photo = $avalue;
        //             $attr_value->product_id = $product->id;
        //             $attr_value->save();
        //         }
        //         }
            
        //     }

        // }
        
        
        session()->flash('message','add Product successs');
    }

    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }

    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        $brands = BrandCategory::where('subcategory_id',$this->scategory_id)->get();
        $products = Product::all();
        $groups = GroupProduct::all();
        $network_types = NetworkType::all();
        $network_images = NetworkImage::all();
        return view('livewire.admin.products.admin-add-product-component',['categories'=>$categories,'scategories'=>$scategories,'products'=>$products,'network_types'=>$network_types,'network_images'=>$network_images,'groups'=>$groups,'brands'=>$brands])->layout("layout.navfoot");
    }
}