<?php

namespace App\Http\Livewire\Admin\Dealer;

use Livewire\Component;
use App\Models\Dealer;
use App\Models\User;
use Livewire\WithFileUploads;

class AdminAddInfoDealerComponent extends Component
{

    use WithFileUploads;
    public $firstname;
    public $lastname;
    public $emailaddress;
    public $phonenumber;
    public $address;
    public $subdistrict;
    public $district;
    public $county;
    public $zipcode;
    public $companyTH;
    public $companyEN;
    public $taxid;
    public $idcompany;
    public $coin;
    public $dealerid;
    

    public function addDealerinfo()
    {
        $dealerinfo = new Dealer();
        $dealerinfo->firstname = $this->firstname;
        $dealerinfo->lastname = $this->lastname;
        $dealerinfo->emailaddress = $this->emailaddress;
        $dealerinfo->phonenumber = $this->phonenumber;
        $dealerinfo->address = $this->address;
        $dealerinfo->subdistrict = $this->subdistrict;
        $dealerinfo->district = $this->district;
        $dealerinfo->county = $this->county;
        $dealerinfo->zipcode = $this->zipcode;
        $dealerinfo->companyTH = $this->companyTH;
        $dealerinfo->companyEN = $this->companyEN;
        $dealerinfo->taxid = $this->taxid;
        $dealerinfo->idcompany = $this->idcompany;
        $dealerinfo->coin = $this->coin;
        $dealerinfo->dealerid = $this->dealerid;
        $dealerinfo->save();
        session()->flash('message','Add InfoDealer successs');
    }

    public function render()
    {
        $users = User::where('role',2,)->get();
        $Userinfo = Dealer::all();
        return view('livewire.admin.dealer.admin-add-info-dealer-component',['users'=>$users,'Userinfo'=>$Userinfo])->layout("layout.navfoot");
    }
}
