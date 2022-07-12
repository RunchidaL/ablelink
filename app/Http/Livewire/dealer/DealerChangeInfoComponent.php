<?php

namespace App\Http\Livewire\Dealer;

use Livewire\Component;
use App\Models\Dealer;
use App\Models\User;
use Livewire\WithFileUploads;

class DealerChangeInfoComponent extends Component
{

    // use WithFileUploads;
    // public $firstname;
    // public $lastname;
    // public $emailaddress;
    // public $phonenumber;
    // public $address;
    // public $subdistrict;
    // public $district;
    // public $county;
    // public $zipcode;
    // public $companyTH;
    // public $companyEN;
    // public $taxid;
    // public $idcompany;
    // public $coin;
    // public $dealerid;
    // public $D_id;
    
    // public function mount($infodealer_id)
    // {
    //     $dealerinfo = Dealer::where('dealerid',$infodealer_id)->first();
    //     $this->firstname = $dealerinfo->firstname;
    //     $this->lastname = $dealerinfo->lastname;
    //     $this->emailaddress = $dealerinfo->emailaddress;
    //     $this->phonenumber = $dealerinfo->phonenumber;
    //     $this->address = $dealerinfo->address;
    //     $this->subdistrict = $dealerinfo->subdistrict;
    //     $this->district = $dealerinfo->district;
    //     $this->county = $dealerinfo->county;
    //     $this->zipcode = $dealerinfo->zipcode;
    //     $this->companyTH = $dealerinfo->companyTH;
    //     $this->companyEN = $dealerinfo->companyEN;
    //     $this->taxid = $dealerinfo->taxid;
    //     $this->idcompany = $dealerinfo->idcompany;
    //     $this->coin = $dealerinfo->coin;
    //     $this->dealerid = $dealerinfo->dealerid;
    //     $this->D_id = $dealerinfo->id;
    // }

    // public function addDealerinfo()
    // {
    //     $dealerinfo = Dealer::find($this->D_id);
    //     $dealerinfo->firstname = $this->firstname;
    //     $dealerinfo->lastname = $this->lastname;
    //     $dealerinfo->emailaddress = $this->emailaddress;
    //     $dealerinfo->phonenumber = $this->phonenumber;
    //     $dealerinfo->address = $this->address;
    //     $dealerinfo->subdistrict = $this->subdistrict;
    //     $dealerinfo->district = $this->district;
    //     $dealerinfo->county = $this->county;
    //     $dealerinfo->zipcode = $this->zipcode;
    //     $dealerinfo->companyTH = $this->companyTH;
    //     $dealerinfo->companyEN = $this->companyEN;
    //     $dealerinfo->taxid = $this->taxid;
    //     $dealerinfo->idcompany = $this->idcompany;
    //     $dealerinfo->coin = $this->coin;
    //     $dealerinfo->dealerid = $this->dealerid;
    //     $dealerinfo->save();
    //     session()->flash('message','Edit InfoDealer successs');
    // }

    public function render()
    {
        return view('livewire.dealer.dealer-change-info-component')->layout("layout.navfoot");
    }
}
