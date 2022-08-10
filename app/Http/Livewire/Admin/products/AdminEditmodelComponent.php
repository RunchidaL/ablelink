<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\ProductModels;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketTypes;
use App\Models\JacketProduct;
use App\Models\GroupProduct;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use App\Models\NetworkImage;
use App\Models\NetworkValue;
use App\Models\NetworkType;
use App\Models\Product;

class AdminEditmodelComponent extends Component
{
    use WithFileUploads;
    public $model_id;
    public $name;
    public $slug;
    public $description;
    public $application;
    public $item_spotlight;
    public $feature;
    public $datasheet;
    public $firmware;
    public $guide;
    public $cert;
    public $config;
    public $web_price;
    public $dealer_price;
    public $customer_price;
    public $stock;
    public $product_id;
    public $series_id;
    public $type_id;
    public $jacket_id;
    public $group_products;
    public $image;
    public $pimages;
    public $newimage;
    public $newimages;
    public $videos;
    public $newdatasheet;
    public $newfirmware;
    public $newguide;
    public $newcert;
    public $newconfig;

    public $new_network_images=[];
    public $network_images=[];
    public $images = [];
    public $attr;
    public $inputs=[];
    public $attribute_arr=[];
    public $attribute_values=[];
    

    public function mount($model_slug)
    {
        $model = ProductModels::where('slug',$model_slug)->first();
        $this->model_id = $model->id;
        $this->name = $model->name;
        $this->slug = $model->slug;
        $this->description = $model->description;
        $this->overview = $model->overview;
        $this->application = $model->application;
        $this->item_spotlight = $model->item_spotlight;
        $this->feature = $model->feature;
        $this->web_price = $model->web_price;
        $this->dealer_price = $model->dealer_price;
        $this->customer_price = $model->customer_price;
        $this->stock = $model->stock;
        $this->product_id = $model->product->id;
        $this->series_id = $model->series_id;
        $this->type_id = $model->type_id;
        $this->jacket_id = $model->jacket_id;
        $this->group_products = $model->group_products;
        $this->image = $model->image;
        $this->pimages = explode(",",$model->images);
        $this->datasheet = $model->datasheet;
        $this->firmware = $model->firmware;
        $this->guide = $model->guide;
        $this->cert = $model->cert;
        $this->config = $model->config;
        $this->videos = $model->videos;
        $this->inputs = $model->network->where('model_id',$model->id)->unique('network_image_id')->pluck('network_image_id');
        $this->attribute_arr = $model->network->where('model_id',$model->id)->unique('network_image_id')->pluck('network_image_id');
        $this->images = $model->network->where('model_id',$model->id)->unique('network_image_id')->pluck('network_image_id');

        foreach($this->attribute_arr as $a_rr)
        {
            $allValue = NetworkValue::where('model_id',$model->id)->where('network_image_id',$a_rr)->get()->pluck('product_in_photo');
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

    public function updateModel()
    {
        $model = ProductModels::find($this->model_id);
        $model->name = $this->name;
        $model->slug = $this->slug;
        $model->web_price = $this->web_price;
        $model->dealer_price = $this->dealer_price;
        $model->customer_price = $this->customer_price;
        $model->stock = $this->stock;
        $model->product_id = $this->product_id;
        $model->series_id = $this->series_id;
        $model->group_products = $this->group_products;
        $model->overview = $this->overview;
        $model->application = $this->application;
        $model->item_spotlight = $this->item_spotlight;
        $model->feature = $this->feature;
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('products',$imageName);
            $model->image = $imageName;
        }
        if($this->newimages)
        {
            if($model->images)
            {
                $images = explode(",",$model->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('images/products'.'/'.$image);
                    }
                }
            }
            $imagesName = '';
            foreach($this->newimages as $key=>$image)
            {
                $imageName = $image->getClientOriginalName();
                $image->storeAs('products',$imageName);
                $imagesName = $imagesName . ','. $imageName;
            }
            $model->images = $imagesName;
        }
        if($this->newdatasheet)
        {
            $file1 = $this->newdatasheet->getClientOriginalName();
            $this->newdatasheet->storeAs('products',$file1);
            $model->datasheet = $file1;
        }
        if($this->newfirmware)
        {
            $file2 = $this->newfirmware->getClientOriginalName();
            $this->newfirmware->storeAs('products',$file2);
            $model->firmware = $file2;
        }
        if($this->newguide)
        {
            $file3 = $this->newguide->getClientOriginalName();
            $this->newguide->storeAs('products',$file3);
            $model->guide = $file3;
        }
        if($this->newcert)
        {
            $file4 = $this->newcert->getClientOriginalName();
            $this->newcert->storeAs('products',$file4);
            $model->cert = $file4;
        }
        if($this->newconfig)
        {
            $file5 = $this->newconfig->getClientOriginalName();
            $this->newconfig->storeAs('products',$file5);
            $model->config = $file5;
        }
        if($this->videos)
        {
            $model->videos = $this->videos;
        }
        if($this->videos == '')
        {
            $model->videos = null;
        }
        if($this->type_id)
        {
            $model->type_id = $this->type_id;
        }
        
        if($this->jacket_id)
        {
            $model->jacket_id = $this->jacket_id;
        }
        
        $model->save();

        NetworkValue::where('model_id',$model->id)->delete();
        
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
                $attr_value->model_id = $model->id;
                $attr_value->save();
            }
            }
        
        }

        session()->flash('message','update Model successs');
    }

    public function changeSeries()
    {
        $this->series_id = 0;
    }

    public function changeType()
    {
        $this->type_id = 0;
    }


    public function render()
    {
        $groups = GroupProduct::all();
        $series = SeriesModels::where('group_id',$this->group_products)->get();
        $types = TypeModels::where('series_id',$this->series_id)->get();
        $jacket_types = JacketTypes::all();
        $jackets = JacketProduct::where('type_id',$this->type_id)->get();
        $network_types = NetworkType::all();
        $network_images = NetworkImage::all();
        $products = Product::all();
        return view('livewire.admin.products.admin-editmodel-component',['series'=>$series,'types'=>$types,'jacket_types'=>$jacket_types,'groups'=>$groups,'jackets'=>$jackets,'network_types'=>$network_types,'network_images'=>$network_images,'products'=>$products])->layout("layout.navfoot");
    }
}