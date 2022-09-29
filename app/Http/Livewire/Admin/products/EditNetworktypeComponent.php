<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\NetworkType;

class EditNetworktypeComponent extends Component
{
    public $network_id;
    public $name;

    public function mount($network_id)
    {
        $this->network_id = $network_id;
        $network = NetworkType::where('id',$network_id)->first();
        $this->name = $network->name;
    }

    public function updateNetworktype()
    {
        $network = NetworkType::find($this->network_id);
        $network->name = $this->name;
        $network->save();
        session()->flash('message','Edit success');
    }
    public function render()
    {
        return view('livewire.admin.products.edit-networktype-component')->layout("layout.navfoot");
    }
}
