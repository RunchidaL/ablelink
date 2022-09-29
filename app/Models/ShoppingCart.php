<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $table = "shopping_carts";

    public function model()
    {
        return $this->belongsTo(ProductModels::class,'product_id');
    }
}
