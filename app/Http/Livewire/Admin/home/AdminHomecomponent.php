<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;

class AdminHomecomponent extends Component
{
    
    public function deleteSlide($slide_id)
    {
        $slider = Home::find($slide_id);
        $slider->delete();
        session()->flash('message','Slider has been deleted successfully!');
    }

    public function render()
    {
        $sliders = Home::all();
        return view('livewire.admin.home.admin-homecomponent',['sliders'=>$sliders])->layout("layout.navfoot");
    }
}
