<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditHomecomponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $slider_id;

    public function mount($slide_id)
    {
        $slider = Home::find($slide_id);
        $this->title = $slider->title;
        $this->subtitle = $slider->subtitle;
        $this->link = $slider->link;
        $this->image = $slider->image;
        $this->status = $slider->status;
        $this->slider_id = $slider->id;
    }
    
    public function updateSlide()
    {
        $this->validate([
            'image' => 'required',
            'status' => 'required'
        ]);
        $slider = Home::find($this->slider_id);
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->link = $this->link;
        if($this->newimage)
        {
            $imagename = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('sliders',$imagename);
            $slider->image = $imagename;
        }
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','Slide has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.home.admin-edit-homecomponent')->layout("layout.navfoot");
    }
}
