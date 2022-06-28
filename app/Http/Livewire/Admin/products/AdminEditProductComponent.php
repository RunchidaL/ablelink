<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\NetworkImage;
use App\Models\NetworkValue;
use App\Models\NetworkType;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $overview;
    public $application;
    public $item_spotlight;
    public $feature;
    public $web_price;
    public $dealer_price;
    public $customer_price;
    public $stock;
    public $image;
    public $datasheet;
    public $firmware;
    public $guide;
    public $cert;
    public $config;
    public $category_id;
    public $newimage;
    public $newdatasheet;
    public $newfirmware;
    public $newguide;
    public $newcert;
    public $newconfig;
    public $product_id;
    public $scategory_id;

    public $new_network_images=[];
    public $network_images=[];
    public $images = [];
    public $attr;
    public $inputs=[];
    public $attribute_arr=[];
    public $attribute_values=[];

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->overview = $product->overview;
        $this->application = $product->application;
        $this->item_spotlight = $product->item_spotlight;
        $this->feature = $product->feature;
        $this->web_price = $product->web_price;
        $this->dealer_price = $product->dealer_price;
        $this->customer_price = $product->customer_price;
        $this->stock = $product->stock;
        $this->image = $product->image;
        $this->datasheet = $product->datasheet;
        $this->firmware = $product->firmware;
        $this->guide = $product->guide;
        $this->cert = $product->cert;
        $this->config = $product->config;
        $this->category_id = $product->category_id;
        $this->scategory_id = $product->subcategory_id;
        $this->product_id = $product->id;
        $this->inputs = $product->network->where('product_id',$product->id)->unique('network_image_id')->pluck('network_image_id');
        $this->attribute_arr = $product->network->where('product_id',$product->id)->unique('network_image_id')->pluck('network_image_id');
        
        // $network_products = NetworkValue::all();
        $this->images = $product->network->where('product_id',$product->id)->unique('network_image_id')->pluck('network_image_id');
        // foreach($this->images as $i_rr)
        // {
        //     $allValue = NetworkImage::where('id',$network_products->id)->where('type_id',$i_rr)->get()->pluck('image');
        //     $valueString = '';
        //     foreach($allValue as $value)
        //     {
        //         $valueString = $valueString . $value . ',';
        //     }
        //     $this->network_images[$i_rr] = rtrim($valueString,',');
        // }

        foreach($this->attribute_arr as $a_rr)
        {
            $allValue = NetworkValue::where('product_id',$product->id)->where('network_image_id',$a_rr)->get()->pluck('product_in_photo');
            $valueString = '';
            foreach($allValue as $value)
            {
                $valueString = $valueString . $value . ',';
            }
            $this->attribute_values[$a_rr] = rtrim($valueString,',');
        }
    
    
    }

    public function add()
    {
        if(!$this->attribute_arr->contains($this->attr))
        {
            $this->inputs->push($this->attr);
            $this->attribute_arr->push($this->attr);
            $this->images->push($this->attr);
        }
    }

    public function remove($attr)
    {
        unset($this->inputs[$attr]);
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->overview = $this->overview;
        $product->application = $this->application;
        $product->item_spotlight = $this->item_spotlight;
        $product->feature = $this->feature;
        $product->web_price = $this->web_price;
        $product->dealer_price = $this->dealer_price;
        $product->customer_price = $this->customer_price;
        $product->stock = $this->stock;
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        if($this->newdatasheet)
        {
            $file1 = $this->newdatasheet->getClientOriginalName();
            $this->newdatasheet->storeAs('products',$file1);
            $product->datasheet = $file1;
        }
        if($this->newfirmware)
        {
            $file2 = $this->newfirmware->getClientOriginalName();
            $this->newfirmware->storeAs('products',$file2);
            $product->firmware = $file2;
        }
        if($this->newguide)
        {
            $file3 = $this->newguide->getClientOriginalName();
            $this->newguide->storeAs('products',$file3);
            $product->guide = $file3;
        }
        if($this->newcert)
        {
            $file4 = $this->newcert->getClientOriginalName();
            $this->newcert->storeAs('products',$file4);
            $product->cert = $file4;
        }
        if($this->newconfig)
        {
            $file5 = $this->newconfig->getClientOriginalName();
            $this->newconfig->storeAs('products',$file5);
            $product->config = $file5;
        }
        $product->category_id = $this->category_id;
        if($this->scategory_id)
        {
            $product->subcategory_id = $this->scategory_id;
        }
        $product->save();

        NetworkValue::where('product_id',$product->id)->delete();
        foreach($this->attribute_values as $key=>$attribute_value)
        {
            if($this->network_images)
            {
                $attribute_image = new NetworkImage();
                $fileNet = $this->network_images[$key]->getClientOriginalName();
                $this->network_images[$key]->storeAs('products', $fileNet);
                $attribute_image->image = $fileNet;
                $attribute_image->type_id = $key;
                $attribute_image->save();

            $avalues = explode(",",$attribute_value);
            foreach($avalues as $avalue)
            {
                $attr_value = new NetworkValue();
                $attr_value->network_image_id = $attribute_image->id;
                $attr_value->product_in_photo = $avalue;
                $attr_value->product_id = $product->id;
                $attr_value->save();
            }
            }
        
        }

        session()->flash('message','update Product successs');
    }

    public function changeSubcategory()
    {
        $this->scategory_id = 0;
    }

    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        $network_types = NetworkType::all();
        return view('livewire.admin.products.admin-edit-product-component',['categories'=>$categories,'scategories'=>$scategories,'network_types'=>$network_types])->layout("layout.navfoot");
    }
}
