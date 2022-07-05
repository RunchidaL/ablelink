<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\GroupProduct;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketTypes;
use App\Models\JacketProduct;

class AdminAddGroupComponent extends Component
{
    public $name;
    public $group_id;
    public $serie_id;
    public $productserie_id;
    public $type_id;
    public $jacket_id;
    public $productjacket_id;

    public function storeGroup()
    {
        if($this->type_id){
            $jacket = new JacketProduct();
            $jacket->type_id = $this->type_id;
            $jacket->jacket_id = $this->jacket_id;
            $jacket->product_id = $this->productjacket_id;
            $jacket->save();
        }
        else if($this->serie_id){
            $type = new TypeModels();
            $type->name = $this->name;
            $type->series_id = $this->serie_id;
            $type->product_id = $this->productserie_id;
            $type->save();
        }
        else if($this->group_id)
        {
            $serie = new SeriesModels();
            $serie->name = $this->name;
            $serie->group_id = $this->group_id;
            $serie->save();

        }
        else{
            $group = new GroupProduct();
            $group->name = $this->name;
            $group->save();
        }
        session()->flash('message','success');
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
        $series = SeriesModels::where('group_id',$this->group_id)->get();
        $types = TypeModels::where('series_id',$this->serie_id)->get();
        $jacket_types = JacketTypes::all();
        return view('livewire.admin.products.admin-add-group-component',['groups'=>$groups,'series'=>$series,'types'=>$types,'jacket_types'=>$jacket_types])->layout("layout.navfoot");
    }
}
