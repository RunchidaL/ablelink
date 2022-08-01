<?php

namespace App\Http\Livewire\Dealer;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Dealer;
use App\Models\User;

class DealerChangeInfoComponent extends Component
{

    public function render()
    {
        $userProfile = Dealer::where('dealerid',Auth::user()->id)->first();
        if(!$userProfile)
        {
            $profile = new Dealer();
            $profile->dealerid = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);
        return view('livewire.dealer.dealer-change-info-component',['user'=>$user])->layout("layout.navfoot");
    }
}
