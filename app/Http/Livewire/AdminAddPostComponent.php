<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class AdminAddPostComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $slug;
    public $titleimg;
    public $category_id;
    public $description;


    public function generateSlug()
    {
        $this->slug = Str::slug($this->title,'-');
    }

    public function addPost()
    {
        $post = new Post();
        $post->title = $this->title;
        $post->slug = $this->slug;
        $imageName = Carbon::now()->timestamp. '.' . $this->titleimg->extension();
        $this->titleimg->storeAs('posts',$imageName);
        $post->titleimg = $imageName;
        $post->category_id = $this->category_id;
        $post->description = $this->description;
        $post->save();
        session()->flash('message','add Post successs');
    }

    public function render()
    {
        return view('livewire.admin-add-post-component')->layout("layout.navfoot");
    }
}
