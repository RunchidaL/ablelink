<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\ProductModels;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\BrandCategory;
use App\Models\ShoppingCart;
use App\Models\Brand;
use App\Models\SubBrandCategory;
use App\Models\GroupProduct;
use App\Models\SeriesModels;
use App\Models\TypeModels;
use App\Models\JacketProduct;

class GroupCategoryComponent extends Component
{
    public $category_slug;
    public $scategory_slug;
    public $bcategory_slug;
    public $sbcategory_slug;
    public $model_id;
    public $qty;
    public $attribute;
    public $brand_id;
    public $ccategory_id;
    public $count = 0;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount($category_slug,$scategory_slug,$bcategory_slug,$sbcategory_slug)
    {
        $this->$category_slug = $category_slug;
        $this->$scategory_slug = $scategory_slug;
        $this->$bcategory_slug = $bcategory_slug;
        $this->$sbcategory_slug = $sbcategory_slug;
        $this->qty = 1;
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
        if($model->product->subcategory_id == "7")
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
        $brand = Brand::where('slug',$this->bcategory_slug)->first();
        $brand_id = $brand->id;
        $ccategory = Subcategory::where('slug',$this->scategory_slug)->first();
        $ccategory_id = $ccategory->id;
        $bcategory = BrandCategory::where('brand_id',$brand_id)->where('subcategory_id',$ccategory_id)->first();
        $sbcategory = SubBrandCategory::where('slug',$this->sbcategory_slug)->where('brandcategory_id',$bcategory->id)->first();
        $category_id = $sbcategory->id;
        $category_name = $sbcategory->name;

        $products = Product::where('subbrandcategory_id',$category_id)->where('brandcategory_id',$bcategory->id)->paginate(1);
        $models = ProductModels::all();
        $namegroups = ProductModels::all();
        $groups = GroupProduct::all();
        $series = SeriesModels::all();
        $types = TypeModels::all();
        $jackets = JacketProduct::all();
        return view('livewire.group-category-component',['products'=>$products,'models'=>$models,'bcategory'=>$bcategory,'sbcategory'=>$sbcategory,'series'=>$series,'types'=>$types,'jackets'=>$jackets])->layout("layout.navfoot");
    }
}
