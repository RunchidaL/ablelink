<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = "products"; 

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subCategories()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }

    public function network()
    {
        return $this->hasMany(NetworkValue::class,'product_id');
    }

    public function network_allimage()
    {
        return $this->belongsTo(NetworkValue::class,'product_id');
    }
    
}
