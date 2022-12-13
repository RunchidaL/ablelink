<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Category;
use App\Models\ProductModels;
use App\Models\ProductPreview;

class EditProductPreviewComponent extends Component
{
    public $preview_id;
    public $product_id;
    public $category_id;

    public function mount($preview_id)
    {
        $preview = ProductPreview::find($preview_id);
        $this->preview_id = $preview->id;
        $this->category_id = $preview->category_id;
        $this->product_id = $preview->product_id;
    }

    public function updatePreview()
    {
        $this->validate([
            'product_id' => 'required|numeric|exists:product_models,id',
            'category_id' => 'required'
        ]);
        $preview = ProductPreview::find($this->preview_id);
        $preview->category_id = $this->category_id;
        $preview->product_id = $this->product_id;
        $preview->save();
        session()->flash('message','Product Preview has been updated successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        $products = ProductModels::all();
        return view('livewire.admin.home.edit-product-preview-component',['categories'=>$categories,'products'=>$products])->layout("layout.navfoot");
    }
}
