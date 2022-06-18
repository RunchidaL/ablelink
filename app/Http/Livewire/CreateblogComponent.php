<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreateblogComponent extends Component
{   
    public $title; 
    public $titleimg;
    public $category;
    public $description;
    use WithFileUploads;

    public function storepost()
    {
        $this->validate([
            'title' => 'required',
            'titleimg' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $post = new Post();
        $post->title = $this->title;
        
        $imageName = Carbon::now()->timestamp. '.' . $this->titleimg->extension();
        $this->titleimg->storeAs('posts',$imageName);
        $post->titleimg = $imageName;

        $post->category = $this->category;
        $post->description = $this->description;
        $post->save();
        session()->flash('message','success');
    }
    


    public function render()
    {   
        return view('livewire.createblog-component')->layout("layout.navfoot");
    }
}


