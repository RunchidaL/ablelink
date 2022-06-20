<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddPostComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $titleimg;
    public $category;
    public $description;

    public function addPost()
    {
        $post = new Post();
        $post->title = $this->title;
        $imageName = Carbon::now()->timestamp. '.' . $this->titleimg->extension();
        $this->titleimg->storeAs('posts',$imageName);
        $post->titleimg = $imageName;
        $post->category = $this->category;
        $post->description = $this->description;
        $post->save();
        session()->flash('message','add Post successs');
    }

    public function render()
    {
        return view('livewire.admin-add-post-component')->layout("layout.navfoot");
    }
}
