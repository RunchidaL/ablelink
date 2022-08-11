<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\GroupProduct;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketProduct;

class GroupComponent extends Component
{
    public function deleteGroup($id)
    {
        $group = GroupProduct::find($id);
        $group->delete();
        session()->flash('message','Group delete success');
    }

    public function deleteSeries($id)
    {
        $serie = SeriesModels::find($id);
        $serie->delete();
        session()->flash('message','Series delete success');
    }

    public function deleteType($id)
    {
        $type = TypeModels::find($id);
        $type->delete();
        session()->flash('message','Type delete success');
    }

    public function deleteJacket($id)
    {
        $jacket = JacketProduct::find($id);
        $jacket->delete();
        session()->flash('message','Jacket delete success');
    }

    public function render()
    {
        $groups = GroupProduct::orderBy('created_at','DESC')->get();
        $series = SeriesModels::all();
        return view('livewire.admin.products.group-component',['groups'=>$groups,'series'=>$series])->layout("layout.navfoot");
    }
}
