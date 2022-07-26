<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\ProductModels;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketTypes;
use App\Models\GroupProduct;
use App\Models\JacketProduct;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminAddmodelComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $description;
    public $overview;
    public $application;
    public $item_spotlight;
    public $feature;
    public $image;
    public $p_images;
    public $datasheet;
    public $firmware;
    public $guide;
    public $cert;
    public $config;
    public $videos;
    public $web_price;
    public $dealer_price;
    public $customer_price;
    public $stock;
    public $product_id;
    public $series_id;
    public $type_id;
    public $jacket_id;
    public $group_id;
    public $group_products;

    public function addModel()
    {
        $model = new ProductModels();
        $model->name = $this->name;
        $model->slug = $this->slug;
        $model->description = $this->description;
        $model->overview = $this->overview;
        $model->application = $this->application;
        $model->item_spotlight = $this->item_spotlight;
        $model->feature = $this->feature;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $model->image = $imageName;
        if($this->p_images)
        {
            $imagesName = '';
            foreach($this->p_images as $key=>$image)
            {
                $imageName = $image->getClientOriginalName();
                $image->storeAs('products',$imageName);
                $imagesName = $imagesName . ',' . $imageName ;
            }
            $model->images = $imagesName;
        }
        if($this->datasheet)
        {
            $file1 = $this->datasheet->getClientOriginalName();
            $this->datasheet->storeAs('products',$file1);
            $model->datasheet = $file1;
        }
        if($this->firmware)
        {
            $file2 = $this->firmware->getClientOriginalName();
            $this->firmware->storeAs('products',$file2);
            $model->firmware = $file2;
        }
        if($this->guide)
        {
            $file3 = $this->guide->getClientOriginalName();
            $this->guide->storeAs('products',$file3);
            $model->guide = $file3;
        }
        if($this->cert)
        {
            $file4 = $this->cert->getClientOriginalName();
            $this->cert->storeAs('products',$file4);
            $model->cert = $file4;
        }
        if($this->config)
        {
            $file5 = $this->config->getClientOriginalName();
            $this->config->storeAs('products',$file5);
            $model->config = $file5;
        }

        if($this->videos)
        {
            $videosName = '';
            foreach($this->videos as $key=>$video)
            {
                $videoName = $video->getClientOriginalName();
                $video->storeAs('products',$videoName);
                $videosName = $videosName . ',' . $videoName ;
            }
            $model->videos = $videosName;
        }
        
        $model->web_price = $this->web_price;
        $model->dealer_price = $this->dealer_price;
        $model->customer_price = $this->customer_price;
        $model->stock = $this->stock;
        $model->product_id = $this->product_id;
        if($this->series_id)
        {
            $model->series_id = $this->series_id;
        }
        $model->group_products = $this->group_products;
        
        if($this->type_id)
        {
            $model->type_id = $this->type_id;
        }
        if($this->jacket_id)
        {
            $model->jacket_id = $this->jacket_id;
        }

        $model->save();

        session()->flash('message','add Model successs');
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
        return view('livewire.admin.products.admin-addmodel-component',['series'=>$series,'types'=>$types,'jacket_types'=>$jacket_types,'groups'=>$groups,'jackets'=>$jackets])->layout("layout.navfoot");
    }
}