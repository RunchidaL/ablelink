<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CostSale;
use App\Models\User;

class AddCostSaleComponent extends Component
{
    public $cost;
    public $dealerid;
    public function addCost()
    {
        $this->validate([
            'cost' => 'required|numeric|max:999999',
            'dealerid' => 'required|numeric|exists:users,id',
        ]);
        $cost = new CostSale();
        $cost->cost = $this->cost;
        $cost->user_id = $this->dealerid;
        $cost->save();
        session()->flash('message','Add successs');
    }
    public function render()
    {
        $users = User::where('role',2,)->get();
        return view('livewire.add-cost-sale-component',['users'=>$users])->layout("layout.navfoot");
    }
}
