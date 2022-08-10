<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Home;

class AdminHomecomponent extends Component
{
    public $delete_id;

    protected $listeners = ['deleteConfirmed'=>'deleteSlide'];

    public function deleteSlides($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteSlide()
    {
        $slider = Home::where('id',$this->delete_id)->first();
        $slider->delete();
        $this->dispatchBrowserEvent('deletedSlider');
        session()->flash('message','Slider has been deleted successfully!');
    }

    public function render()
    {
        $sliders = Home::all();
        return view('livewire.admin.home.admin-homecomponent',['sliders'=>$sliders])->layout("layout.navfoot");
    }
}
