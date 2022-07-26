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
    public $newvideos;
    public $newdatasheet;
    public $newfirmware;
    public $newguide;
    public $newcert;
    public $newconfig;
    

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
        $this->videos = explode(",",$model->videos);
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
        if($this->newvideos)
        {
            if($model->videos)
            {
                $videos = explode(",",$model->videos);
                foreach($videos as $video)
                {
                    if($video)
                    {
                        unlink('images/products'.'/'.$video);
                    }
                }
            }
            $videosName = '';
            foreach($this->newvideos as $key=>$video)
            {
                $videoName = $video->getClientOriginalName();
                $video->storeAs('products',$videoName);
                $videosName = $videosName . ','. $videoName;
            }
            $model->videos = $videosName;
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
        return view('livewire.admin.products.admin-editmodel-component',['series'=>$series,'types'=>$types,'jacket_types'=>$jacket_types,'groups'=>$groups,'jackets'=>$jackets])->layout("layout.navfoot");
    }
}