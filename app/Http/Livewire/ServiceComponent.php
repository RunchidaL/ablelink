<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Contact;

class ServiceComponent extends Component
{
    public function render()
    {
        $service = Service::where('id',1)->first();
        $contact = Contact::where('id',1)->first();
        return view('livewire.service-component',['service'=>$service,'contact'=>$contact])->layout("layout.navfoot");
    }
}
