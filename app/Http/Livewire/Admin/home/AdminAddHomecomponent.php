<?php

namespace App\Http\Livewire\Admin\Home;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Home;
use Livewire\WithFileUploads;

class AdminAddHomecomponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $link;
    public $image;
    public $status;
    
    public function mount()
    {
        $this->status = 0;
    }

    public function addSlide()
    {
        $slider = new Home();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->link = $this->link;
        $imagename = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('sliders',$imagename);
        $slider->image = $imagename;
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','Slide has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.home.admin-add-homecomponent')->layout("layout.navfoot");
    }
}
