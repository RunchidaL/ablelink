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
        $review = new Review();
        if($this->rating == null){
            $review->rating = 5;
        }
        else{
            $review->rating = $this->rating;
        }
        $review->comment = $this->comment;
        $reviewitem = Order::find($this->order_item_id);
        $review->product_id = $reviewitem->model->id;
        $review->user_id = auth()->user()->id;
        $review->save();
        session()->flash('message','Add Review successs');
    }

    public function render()
    {
        $item = Order::find($this->order_item_id);
        return view('livewire.review-component',['item'=>$item])->layout("layout.navfoot");
    }
}
