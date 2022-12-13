<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table="orders";

    public function model()
    {
        return $this->belongsTo(ProductModels::class,'product_id');
    }

    public function orderid()
    {
        return $this->belongsTo(OrderID::class,'order_id');
    }

    // public function review()
    // {
    //     return $this->hasOne(Review::class,'order_item_id');
    // }

}
