<?php

namespace App\Http\Livewire\Admin\Mainpage;

use Livewire\Component;
use App\Models\Forwork;
use Livewire\WithFileUploads;

class CustomForworkComponent extends Component
{
    use WithFileUploads;
    public $forwork_id;
    public $image;
    public $newimage;
    public $title;
    public $title1;
    public $service1;
    public $service2;
    public $service3;
    public $service4;
    public $service5;
    public $service6;
    public $service7;
    public $service8;
    public $service9;
    public $service10;
    public $title2;
    public $hrmail;
    public $hrtel;
    public $heading;
    public $detail1;
    public $detail2;
    public $detail3;
    public $detail4;
    public $detail5;
    public $detail6;
    public $detail7;

    public function mount($forwork_id)
    {
        $work = Forwork::find($forwork_id);
        $this->image = $work->image;
        $this->title = $work->title;
        $this->title1 = $work->title1;
        $this->service1 = $work->service1;
        $this->service2 = $work->service2;
        $this->service3 = $work->service3;
        $this->service4 = $work->service4;
        $this->service5 = $work->service5;
        $this->service6 = $work->service6;
        $this->service7 = $work->service7;
        $this->service8 = $work->service8;
        $this->service9 = $work->service9;
        $this->service10 = $work->service10;
        $this->title2 = $work->title2;
        $this->hrmail = $work->hrmail;
        $this->hrtel = $work->hrtel;
        $this->heading = $work->heading;
        $this->detail1 = $work->detail1;
        $this->detail2 = $work->detail2;
        $this->detail3 = $work->detail3;
        $this->detail4 = $work->detail4;
        $this->detail5 = $work->detail5;
        $this->detail6 = $work->detail6;
        $this->detail7 = $work->detail7;
    }

    public function customForwork()
    {
        $work = Forwork::find($this->forwork_id);
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('mainpage',$imageName);
            $work->image = $imageName;
        }
        $work->title = $this->title;
        $work->title1 = $this->title1;
        $work->service1 = $this->service1;
        $work->service2 = $this->service2;
        $work->service3 = $this->service3;
        $work->service4 = $this->service4;
        $work->service5 = $this->service5;
        $work->service6 = $this->service6;
        $work->service7 = $this->service7;
        $work->service8 = $this->service8;
        $work->service9 = $this->service9;
        $work->service10 = $this->service10;
        $work->title2 = $this->title2;
        $work->hrmail = $this->hrmail;
        $work->hrtel = $this->hrtel;
        $work->heading = $this->heading;
        $work->detail1 = $this->detail1;
        $work->detail2 = $this->detail2;
        $work->detail3 = $this->detail3;
        $work->detail4 = $this->detail4;
        $work->detail5 = $this->detail5;
        $work->detail6 = $this->detail6;
        $work->detail7 = $this->detail7;
        $work->save();
        session()->flash('message','Custom Forwork Page Successs!');
    }

    public function render()
    {
        return view('livewire.admin.mainpage.custom-forwork-component')->layout("layout.navfoot");
    }
}
