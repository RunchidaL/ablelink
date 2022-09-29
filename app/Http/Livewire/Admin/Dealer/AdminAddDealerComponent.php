<?php

namespace App\Http\Livewire\Admin\Dealer;

use App\Models\Dealer;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class AdminAddDealerComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password;
    public $role;

    public function addDealer()
    {
        $dealer = new User();
        $dealer->name = $this->name;
        $dealer->email = $this->email;
        $dealer->password = Hash::make($this->password);
        $dealer->role = '2';
        $dealer->save();
        session()->flash('message','Add Dealer successs');
    }

    public function render()
    {
        return view('livewire.admin.dealer.admin-add-dealer-component')->layout("layout.navfoot");
    }
}
