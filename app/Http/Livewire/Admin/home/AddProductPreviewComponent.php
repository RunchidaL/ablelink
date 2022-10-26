<?php

namespace App\Http\Livewire\Admin\Home;

use Livewire\Component;
use App\Models\Category;
use App\Models\ProductModels;
use App\Models\ProductPreview;

class AddProductPreviewComponent extends Component
{
    public $product_id;
    public $category_id;

    public function addproductpreview()
    {
        $this->validate([
            'product_id' => 'required',
            'category_id' => 'required'
        ]);
        $preview = new ProductPreview();
        $preview->product_id = $this->product_id;
        $preview->category_id = $this->category_id;
        $preview->save();
        session()->flash('message','Add Successs');
    }

    public function render()
    {
        $categories = Category::all();
        $products = ProductModels::all();
        return view('livewire.admin.home.add-product-preview-component',['categories'=>$categories,'products'=>$products])->layout("layout.navfoot");
    }
}
