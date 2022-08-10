<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use Livewire\WithPagination;
use App\Models\ShoppingCart;

class ShopComponent extends Component
{
    use WithPagination;

    public $model_id;
    public $qty;
    public $attribute;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->qty = 1;
    }

    public function addToCart($id)
    {
        $this->model_id = $id;
        if(auth()->user())
        {
            if($this->attribute)
            {
                $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $this->qty,
                'attribute' => $this->attribute,
                ];

            }
            else
            {
            $data = [
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'quantity' => $this->qty,
            ];
            }
            ShoppingCart::updateOrCreate($data);
            session()->flash('success_message','Item added in Cart');
        }
        else
        {
            return redirect(route('login'));
        }
    }

    public function render()
    {   
        $products = ProductModels::orderBy('created_at','DESC')->paginate(10);
        $categories = Category::all();
        return view('livewire.shop-component',['products'=> $products, 'categories' => $categories])->layout("layout.navfoot"); 
    }
}