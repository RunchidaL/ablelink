<?php

namespace App\Http\Livewire\Admin\Mainpage;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithFileUploads;

class CustomContactComponent extends Component
{
    use WithFileUploads;
    public $contact;
    public $image;
    public $newimage;
    public $title;
    public $Address;
    public $facebook;
    public $link_facebook;
    public $line;
    public $link_line;
    public $youtube;
    public $link_youtube;
    public $email;
    public $link_email;
    public $tel;
    public $googlemap;
    public $contact_id;



    public function mount($contact_id)
    {
        $contact = Contact::find($contact_id);
        $this->title = $contact->title;
        $this->image = $contact->image;
        $this->Address = $contact->Address;
        $this->facebook = $contact->facebook;
        $this->link_facebook = $contact->link_facebook;
        $this->line = $contact->line;
        $this->link_line = $contact->link_line;
        $this->youtube = $contact->youtube;
        $this->link_youtube = $contact->link_youtube;
        $this->email = $contact->email;
        $this->link_email = $contact->link_email;
        $this->tel = $contact->tel;
        $this->googlemap = $contact->googlemap;
    }

    public function customContact()
    {
        $contact = Contact::find($this->contact_id);
        $contact->title = $this->title;
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('mainpage',$imageName);
            $contact->image = $imageName;
        }
        $contact->Address = $this->Address;
        $contact->facebook = $this->facebook;
        $contact->link_facebook = $this->link_facebook;
        $contact->line = $this->line;
        $contact->link_line = $this->link_line;
        $contact->youtube = $this->youtube;
        $contact->link_youtube = $this->link_youtube;
        $contact->email = $this->email;
        $contact->link_email = $this->link_email;
        $contact->tel = $this->tel;
        $contact->googlemap = $this->googlemap;
        $contact->save();
        session()->flash('message','Custom Contact Page Successs');
    }

    public function render()
    {
        $contact = Contact::all();
        return view('livewire.admin.mainpage.custom-contact-component',['contact'=>$contact])->layout("layout.navfoot");
    }
}
