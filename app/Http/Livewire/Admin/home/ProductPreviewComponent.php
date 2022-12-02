<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\ProductPreview;

class ProductPreviewComponent extends Component
{

    public function deletePreview($id)
    {
        $preview = ProductPreview::find($id);
        $preview->delete();
        session()->flash('message','Product Preview delete success!');
    }

    public function render()
    {
        $previews = ProductPreview::orderBy('category_id','DESC')->get();
        return view('livewire.admin.home.product-preview-component',['previews'=>$previews])->layout("layout.navfoot");
    }
}
