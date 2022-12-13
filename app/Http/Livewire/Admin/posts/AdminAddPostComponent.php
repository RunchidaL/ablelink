<?php

namespace App\Http\Livewire\Admin\posts;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostCategory;
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

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'slug' => 'required|alpha_dash',
            'titleimg' => 'required',
        ]);
    }

    public function addPost()
    {
        $this->validate([
            'title' => 'required',
            'slug' => 'required|alpha_dash',
            'titleimg' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);
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
        $postcategories = PostCategory::all();
        return view('livewire.admin.posts.admin-add-post-component',['postcategories'=>$postcategories])->layout("layout.navfoot");
    }
}
