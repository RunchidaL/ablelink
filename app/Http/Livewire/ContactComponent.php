<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactComponent extends Component
{
    public function render()
    {
        $contact = Contact::where('id',1)->first();
        return view('livewire.contact-component',['contact'=>$contact])->layout("layout.navfoot");
    }
}
