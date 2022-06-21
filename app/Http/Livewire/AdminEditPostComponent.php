<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditPostComponent extends Component
{   
    use WithFileUploads;
    public $title;
    public $slug;
    public $titleimg;
    public $category_id;
    public $description;
    public $newtitleimg;
    public $post_id;

    public function mount($post_slug)
    {
        $post = Post::where('slug',$post_slug)->first();
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->titleimg = $post->titleimg;
        $this->category_id = $post->category_id;
        $this->description = $post->description;
        $this->post_id = $post->id;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->title,'-');
    }


    public function updatePost()
    {
        $post = Post::find($this->post_id);
        $post->title = $this->title;
        $post->slug = $this->slug;
        if($this->newtitleimg)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newtitleimg->extension();
            $this->newtitleimg->storeAs('posts',$imageName);
            $post->titleimg = $imageName;
        }
        $post->category_id = $this->category_id;
        $post->description = $this->description;
        $post->save();
        session()->flash('message','Update successs!');
    }

    public function render()
    {   
        $postscategories = PostCategory::all();
        return view('livewire.admin-edit-post-component',['postscategories'=>$postscategories])->layout("layout.navfoot");
    }
}
