<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductModels;

class AdminProductComponent extends Component
{
    public $searchproduct;
    
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('message','Product delete success!');
    }

    public function deleteModel($id)
    {
        $model = ProductModels::find($id);
        $model->delete();
        session()->flash('message','Model delete success!');
    }

    public function render()
    {
        $search = '%' . $this->searchproduct . '%';
        $products = Product::where('slug','LIKE',$search)
                    ->orderBy('id','DESC')->paginate(10);

        return view('livewire.admin.products.admin-product-component',['products' => $products])->layout("layout.navfoot");
    }
}
