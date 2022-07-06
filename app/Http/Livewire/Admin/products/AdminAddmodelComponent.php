<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\ProductModels;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketTypes;
use App\Models\GroupProduct;
use App\Models\JacketProduct;

class AdminAddmodelComponent extends Component
{
    public $name;
    public $slug;
    public $description;
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
        $model->web_price = $this->web_price;
        $model->dealer_price = $this->dealer_price;
        $model->customer_price = $this->customer_price;
        $model->stock = $this->stock;
        $model->product_id = $this->product_id;
        $model->series_id = $this->series_id;
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
