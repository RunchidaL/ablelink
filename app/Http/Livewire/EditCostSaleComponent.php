<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CostSale;
use App\Models\Dealer;

class EditCostSaleComponent extends Component
{
    public $dealer_id;
    public function mount($dealer_id)
    {
        $dealercost = Dealer::where('dealerid',$dealer_id)->first();
        $this->Dcost_id = $dealercost->id;
    }

    public function deleteCost($id)
    {
        $cost = CostSale::find($id);
        $cost->delete();
        session()->flash('message','Cost has been deleted successfully!');
    }
    public function render()
    {
        $dealers = CostSale::all();
        $id = Dealer::find($this->Dcost_id);
        return view('livewire.edit-cost-sale-component',['dealers'=>$dealers,'id'=>$id])->layout("layout.navfoot");
    }
}
