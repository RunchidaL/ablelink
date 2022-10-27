<?php

namespace App\Http\Livewire\Admin\Mainpage;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;

class CustomServiceComponent extends Component
{
    use WithFileUploads;
    public $service_id;
    public $image;
    public $newimage;
    public $title;
    public $image1;
    public $newimage1;
    public $title1;
    public $description1;
    public $image2;
    public $newimage2;
    public $title2;
    public $description2;
    public $image3;
    public $newimage3;
    public $title3;
    public $description3;

    public function mount($service_id)
    {
        $s = Service::find($service_id);
        $this->image = $s->image;
        $this->title = $s->title;
        $this->title1 = $s->title1;
        $this->image1 = $s->image1;
        $this->description1 = $s->description1;
        $this->title2 = $s->title2;
        $this->image2 = $s->image2;
        $this->description2 = $s->description2;
        $this->title3 = $s->title3;
        $this->image3 = $s->image3;
        $this->description3 = $s->description3;
    }

    public function customService()
    {
        $s = Service::find($this->service_id);
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('mainpage',$imageName);
            $s->image = $imageName;
        }
        $s->title = $this->title;
        $s->title1 = $this->title1;
        if($this->newimage1)
        {
            $imageName = $this->newimage1->getClientOriginalName();
            $this->newimage1->storeAs('mainpage',$imageName);
            $s->image1 = $imageName;
        }
        $s->description1 = $this->description1;
        $s->title2 = $this->title2;
        if($this->newimage2)
        {
            $imageName = $this->newimage2->getClientOriginalName();
            $this->newimage2->storeAs('mainpage',$imageName);
            $s->image2 = $imageName;
        }
        $s->description2 = $this->description2;
        $s->title3 = $this->title3;
        if($this->newimage3)
        {
            $imageName = $this->newimage3->getClientOriginalName();
            $this->newimage3->storeAs('mainpage',$imageName);
            $s->image3 = $imageName;
        }
        $s->description3 = $this->description3;

        $s->save();
        session()->flash('message','Custom us Page Successs');
    }

    public function render()
    {
        return view('livewire.admin.mainpage.custom-service-component')->layout("layout.navfoot");
    }
}
