<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\NetworkType;

class AddNetworktypeComponent extends Component
{
    public $name;

    public function storeNetwork()
    {
        $this->validate([
            'name' => 'required'
        ]);
        $network = new NetworkType();
        $network->name = $this->name;
        $network->save();

    session()->flash('message','success');
    
    }
    public function render()
    {
        return view('livewire.admin.products.add-networktype-component')->layout("layout.navfoot");
    }
}
