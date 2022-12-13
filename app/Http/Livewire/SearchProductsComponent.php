<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use Livewire\WithPagination;
use App\Models\ShoppingCart;

class SearchProductsComponent extends Component
{
    use WithPagination;

    public $model_id;
    public $qty;
    public $attribute;
    public $count = 0;
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
        if(auth()->user())
        {
        $this->model_id = $id;
        
        $model = ProductModels::where('id',$this->model_id)->first();
        if($model->product->attibute == 1)
        {
            $this->validate([
                'attribute' => 'required'
            ]);
        }

        if($this->qty > $model->stock || $this->attribute * $this->qty > $model->stock)
        {
            session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
            return redirect(request()->header('Referer'));
        }

        //check before add
        $c_item = ShoppingCart::with('model')->where(['user_id'=>auth()->user()->id])->where('product_id',$id)->first();
        if($c_item)
        {
            if(empty($c_item->attribute))
            {
                $total = $c_item->quantity + $this->qty;
                if($total > $model->stock)
                {
                    session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                    return redirect(request()->header('Referer'));
                }
            }
            else{
                $len = ($c_item->quantity * $c_item->attribute) +  ($this->qty *$this->attribute);
                if($len > $model->stock)
                    {
                        session()->flash('message','สินค้าใน stock มีจำนวนน้อยกว่าที่ลูกค้าต้องการ');
                        return redirect(request()->header('Referer'));
                    }
            }
        }


        $count = ShoppingCart::whereUserId(auth()->user()->id)->count();
            
            if($count == 0)
            {
                $this->create($id);
            }
            else
            {
                $cartitem = ShoppingCart::with('model')->where(['user_id'=>auth()->user()->id])->where('product_id',$id)->first();
                if($cartitem)
                {
                    if($cartitem->attribute == null || $cartitem->attribute == $this->attribute)
                    {
                        $cartitem->quantity = $cartitem->quantity + $this->qty;
                        $cartitem->save();
                        return redirect(request()->header('Referer'));
                    }
                    else
                    {
                        $data = [
                            'user_id' => auth()->user()->id,
                            'product_id' => $id,
                            'quantity' => $this->qty,
                            'attribute' => $this->attribute,
                            ];
                        ShoppingCart::updateOrCreate($data);
                        return redirect(request()->header('Referer'));
                    }
                }
                else
                {
                    $this->create($id);
                }
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function create($id)
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
        return redirect(request()->header('Referer'));
    }

    public function render()
    {   
        $models = ProductModels::where('name','like','%'.$this->search .'%')->orWhere('slug','like','%'. $this->search .'%')->orderBy('created_at','DESC')->paginate(10);
        $categories = Category::all();
        return view('livewire.search-products-component',['models'=> $models, 'categories' => $categories])->layout("layout.navfoot"); 
    }
}