<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\GroupProduct;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketProduct;

class AdminAddGroupComponent extends Component
{
    public $name;
    public $group_id;
    public $serie_id;
    public $type_id;
    public $jacket_id;
    public $addgroup;

    public function storeGroup()
    {
        if($this->addgroup == "jtype"){
            $this->validate([
                'name' => 'required',
                'group_id' => 'required',
                'serie_id' => 'required',
                'type_id' => 'required',
            ]);
            $jacket = new JacketProduct();
            $jacket->name = $this->name;
            $jacket->type_id = $this->type_id;
            $jacket->save();
        }
        else if($this->addgroup == "type"){
            $this->validate([
                'name' => 'required',
                'group_id' => 'required',
                'serie_id' => 'required'
            ]);
            $type = new TypeModels();
            $type->name = $this->name;
            $type->series_id = $this->serie_id;
            $type->save();
        }
        else if($this->addgroup == "series")
        {
            $this->validate([
                'name' => 'required',
                'group_id' => 'required'
            ]);
            $serie = new SeriesModels();
            $serie->name = $this->name;
            $serie->group_id = $this->group_id;
            $serie->save();

        }
        else if($this->addgroup == "group"){
            $this->validate([
            'name' => 'required|unique:group_products'
            ]);
            $group = new GroupProduct();
            $group->name = $this->name;
            $group->save();
        }
        session()->flash('message','Success');
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
        return view('livewire.admin.products.admin-add-group-component',['groups'=>$groups,'series'=>$series,'types'=>$types])->layout("layout.navfoot");
    }
}