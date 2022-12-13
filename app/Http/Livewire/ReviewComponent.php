<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Review;

class ReviewComponent extends Component
{
    public $order_item_id;
    public $rating;
    public $comment;

    public function mount($order_item_id)
    {
        $this->order_item_id = $order_item_id;
    }

    public function addReview()
    {
        $this->validate([
            'comment' => 'required'
        ]);
        $review = new Review();
        $reviewitem = Order::find($this->order_item_id);
        if($reviewitem->rstatus == true)
        {
            session()->flash('danger','เคยรีวิวแล้ว');
        }
        else{
            if($this->rating == null){
                $review->rating = 5;
            }
            else{
                $review->rating = $this->rating;
            }
            $review->comment = $this->comment;
            $review->product_id = $reviewitem->model->id;
            $review->user_id = auth()->user()->id;
            $review->save();
            
            $reviewitem->rstatus = true;
            $reviewitem->save();

            session()->flash('message','Add Review successs');
            $this->dispatchBrowserEvent('alert-review-success');
            return redirect(route('order.detail',['order_id'=>$reviewitem->order_id]));
        }
    }

    public function render()
    {
        $item = Order::where('id',$this->order_item_id)->first();
        return view('livewire.review-component',['item'=>$item])->layout("layout.navfoot");
    }
}
