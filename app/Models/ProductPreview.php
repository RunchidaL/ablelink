<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPreview extends Model
{
    use HasFactory;
    protected $table="product_previews";

    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function product()
    {
        return $this->belongsTo(ProductModels::class,'product_id');
    }
}
