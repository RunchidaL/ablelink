<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use Livewire\WithPagination;
use App\Models\ShoppingCart;

class SearchboxComponent extends Component
{
    use WithPagination;

    public $model_id;
    public $qty;
    public $attribute;

    public $search;

    protected $paginationTheme = 'bootstrap';

    public function mount()
    {
        $this->qty = 1;
        $this->fill(request()->only('search'));
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'attribute' => 'required'
        ]);
    }

    public function addToCart($id)
    {
        $this->model_id = $id;
        
        $model = ProductModels::where('id',$this->model_id)->first();
        if($model->product->subcategory_id == "7")
        {
            $this->validate([
                'attribute' => 'required'
            ]);
        }


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
        return view('livewire.searchbox-component')->layout("layout.navfoot"); 
    }
}