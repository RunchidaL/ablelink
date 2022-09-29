<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\GroupProduct;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketTypes;
use App\Models\JacketProduct;

class EditGroupComponent extends Component
{
    public $group_id;
    public $name;
    public $idgroup;
    public $serie_id;
    public $series_c;
    public $type_id;
    public $types_c;
    public $jacket_id;
    public $jackets_c;

    public function mount($group_id,$serie_id=null,$type_id=null,$jacket_id=null)
    {
        if($this->jacket_id)
        {
            $this->jacket_id = $jacket_id;
            $jacket = JacketProduct::where('id',$jacket_id)->first();
            $this->jacket_id = $jacket->id;
            $this->idgroup = $jacket->type->series->group_id;
            $this->series_c = $jacket->type->series_id;
            // $this->productserie_id = $jacket->type->product_id;
            $this->types_c = $jacket->type_id;
            $this->name = $jacket->name;
            // $this->productjacket_id = $jacket->product_id;

        }
        else if($this->type_id)
        {
            $this->type_id = $type_id;
            $type = TypeModels::where('id',$type_id)->first();
            $this->type_id = $type->id;
            $this->name = $type->name;
            $this->idgroup = $type->series->group_id;
            $this->series_c = $type->series_id;
            // $this->productserie_id = $type->product_id;
        }
        else if($this->serie_id)
        {
            $this->series_id = $serie_id;
            $serie = SeriesModels::where('id',$serie_id)->first();
            $this->serie_id = $serie->id;
            $this->name = $serie->name;
            $this->idgroup = $serie->group_id;
        }
        else{
            $this->group_id = $group_id;
            $group = GroupProduct::where('id',$group_id)->first();
            $this->group_id = $group->id;
            $this->name = $group->name;
        }

        
    }

    public function updateGroup()
    {
        if($this->types_c)
        {
            $jacket = JacketProduct::find($this->jacket_id);
            $jacket->name = $this->name;
            $jacket->type_id = $this->types_c;
            // $jacket->product_id = $this->productjacket_id;
            $jacket->save();

        }
        else if($this->series_c)
        {
            $type = TypeModels::find($this->type_id);
            $type->name = $this->name;
            $type->series_id = $this->series_c;
            $type->series->group_id = $this->idgroup;
            // $type->product_id = $this->productserie_id;
            $type->save();

        }
        else if($this->idgroup)
        {
            $serie = SeriesModels::find($this->serie_id);
            $serie->name = $this->name;
            $serie->group_id = $this->idgroup;
            $serie->save();
        }
        else{
            $group = GroupProduct::find($this->group_id);
            $group->name = $this->name;
            $group->save();
        }
        

        session()->flash('message','edit success');
        
    }

    public function changeSeries()
    {
        $this->series_c = 0;
    }

    public function changeType()
    {
        $this->types_c = 0;
    }
    
    public function render()
    {
        $groups = GroupProduct::all();
        $series = SeriesModels::where('group_id',$this->idgroup)->get();
        $types = TypeModels::where('series_id',$this->series_c)->get();
        return view('livewire.admin.products.edit-group-component',['groups'=>$groups,'series'=>$series,'types'=>$types])->layout("layout.navfoot");
    }
}