<?php

namespace App\Http\Livewire\Admin\Mainpage;

use Livewire\Component;
use App\Models\Aboutus;
use Livewire\WithFileUploads;

class CustomAboutusComponent extends Component
{
    use WithFileUploads;
    public $about_id;
    public $image;
    public $newimage;
    public $company;
    public $description;
    
    public $imagev1;
    public $newimagev1;
    public $titlev1;
    public $v1;
    public $imagev2;
    public $newimagev2;
    public $titlev2;
    public $v2;
    public $imagev3;
    public $newimagev3;
    public $titlev3;
    public $v3;
    public $imagev4;
    public $newimagev4;
    public $titlev4;
    public $v4;

    public $imagem1;
    public $newimagem1;
    public $titlem1;
    public $m1;
    public $imagem2;
    public $newimagem2;
    public $titlem2;
    public $m2;
    public $imagem3;
    public $newimagem3;
    public $titlem3;
    public $m3;
    public $imagem4;
    public $newimagem4;
    public $titlem4;
    public $m4;

    public function mount($about_id)
    {
        $us = Aboutus::find($about_id);
        $this->image = $us->image;
        $this->company = $us->company;
        $this->description = $us->description;
        $this->imagev1 = $us->image_vision1;
        $this->titlev1 = $us->title_vision1;
        $this->v1 = $us->vision1;
        $this->imagev2 = $us->image_vision2;
        $this->titlev2 = $us->title_vision2;
        $this->v2 = $us->vision2;
        $this->imagev3 = $us->image_vision3;
        $this->titlev3 = $us->title_vision3;
        $this->v3 = $us->vision3;
        $this->imagev4 = $us->image_vision4;
        $this->titlev4 = $us->title_vision4;
        $this->v4 = $us->vision4;

        $this->imagem1 = $us->image_mission1;
        $this->titlem1 = $us->title_mission1;
        $this->m1 = $us->mission1;
        $this->imagem2 = $us->image_mission2;
        $this->titlem2 = $us->title_mission2;
        $this->m2 = $us->mission2;
        $this->imagem3 = $us->image_mission3;
        $this->titlem3 = $us->title_mission3;
        $this->m3 = $us->mission3;
        $this->imagem4 = $us->image_mission4;
        $this->titlem4 = $us->title_mission4;
        $this->m4 = $us->mission4;
    }

    public function customAboutus()
    {
        $us = Aboutus::find($this->about_id);
        $us->company = $this->company;
        $us->description = $this->description;
        if($this->newimage)
        {
            $imageName = $this->newimage->getClientOriginalName();
            $this->newimage->storeAs('mainpage',$imageName);
            $us->image = $imageName;
        }
        $us->company = $this->company;
        $this->description = $us->description;
        if($this->newimagev1)
        {
            $imageName = $this->newimagev1->getClientOriginalName();
            $this->newimagev1->storeAs('mainpage',$imageName);
            $us->image_vision1 = $imageName;
        }
        $us->title_vision1 = $this->titlev1;
        $us->vision1 = $this->v1;
        if($this->newimagev2)
        {
            $imageName = $this->newimagev2->getClientOriginalName();
            $this->newimagev2->storeAs('mainpage',$imageName);
            $us->image_vision2 = $imageName;
        }
        $us->title_vision2 = $this->titlev2;
        $us->vision2 = $this->v2;
        if($this->newimagev3)
        {
            $imageName = $this->newimagev3->getClientOriginalName();
            $this->newimagev3->storeAs('mainpage',$imageName);
            $us->image_vision3 = $imageName;
        }
        $us->title_vision3 = $this->titlev3;
        $us->vision3 = $this->v3;
        if($this->newimagev4)
        {
            $imageName = $this->newimagev4->getClientOriginalName();
            $this->newimagev4->storeAs('mainpage',$imageName);
            $us->image_vision4 = $imageName;
        }
        $us->title_vision4 = $this->titlev4;
        $us->vision4 = $this->v4;

        if($this->newimagem1)
        {
            $imageName = $this->newimagem1->getClientOriginalName();
            $this->newimagem1->storeAs('mainpage',$imageName);
            $us->image_mission1 = $imageName;
        }
        $us->title_mission1 = $this->titlem1;
        $us->mission1 = $this->m1;
        if($this->newimagem2)
        {
            $imageName = $this->newimagem2->getClientOriginalName();
            $this->newimagem2->storeAs('mainpage',$imageName);
            $us->image_mission2 = $imageName;
        }
        $us->title_mission2 = $this->titlem2;
        $us->mission2 = $this->m2;
        if($this->newimagem3)
        {
            $imageName = $this->newimagem3->getClientOriginalName();
            $this->newimagem3->storeAs('mainpage',$imageName);
            $us->image_mission3 = $imageName;
        }
        $us->title_mission3 = $this->titlem3;
        $us->mission3 = $this->m3;
        if($this->newimagem4)
        {
            $imageName = $this->newimagem4->getClientOriginalName();
            $this->newimagem4->storeAs('mainpage',$imageName);
            $us->image_mission4 = $imageName;
        }
        $us->title_mission4 = $this->titlem4;
        $us->mission4 = $this->m4;

        $us->save();
        session()->flash('message','Custom us Page Successs');
    }

    public function render()
    {
        return view('livewire.admin.mainpage.custom-aboutus-component')->layout("layout.navfoot");
    }
}
