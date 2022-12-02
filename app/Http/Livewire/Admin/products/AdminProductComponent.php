<?php

namespace App\Http\Livewire\Admin\products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\ProductModels;

class AdminProductComponent extends Component
{
    public $searchproduct;
    public $searchmodel;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
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
        $products = Product::where('name','LIKE',$search)
                    ->orderBy('id','DESC')->paginate(10);

        $searchmodel = '%' . $this->searchmodel . '%';
        $models = ProductModels::where('slug','LIKE',$searchmodel)->orderBy('id','DESC')->get();

        return view('livewire.admin.products.admin-product-component',['products' => $products,'models'=>$models])->layout("layout.navfoot");
    }
}
