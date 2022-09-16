<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProduct extends Model
{
    use HasFactory;
    protected $table="new_products";

    public function brand()
    {
    return $this->belongsTo(Brand::class,'brand_id');
    }
}
