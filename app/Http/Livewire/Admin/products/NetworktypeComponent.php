<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\NetworkType;

class NetworktypeComponent extends Component
{
    public function deleteType($id)
    {
        $network = NetworkType::find($id);
        $network->delete();
        session()->flash('message','Network Type delete success');
    }

    public function render()
    {
        $networks = NetworkType::orderBy('created_at','DESC')->get();
        return view('livewire.admin.products.networktype-component',['networks'=>$networks])->layout("layout.navfoot");
    }
}
