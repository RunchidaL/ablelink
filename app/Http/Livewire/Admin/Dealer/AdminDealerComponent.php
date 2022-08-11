<?php

namespace App\Http\Livewire\Admin\Dealer;

use Livewire\Component;
use App\Models\User;
use App\Models\Dealer;

class AdminDealerComponent extends Component
{

    public function deleteDealer($infodealer_id)
    {
        $dealer = User::find($infodealer_id);
        $dealer->delete();
        session()->flash('message','Dealer has been deleted successfully!');
    }

    public function render()
    {
        $dealers = User::where('role',2)->orderBy('created_at','DESC')->get();
        $infodealers = Dealer::all();
        return view('livewire.admin.dealer.admin-dealer-component',['dealers'=>$dealers,'infodealers'=>$infodealers])->layout("layout.navfoot");
    }
}
