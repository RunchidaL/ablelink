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

    public function brand()
    {
        return $this->belongsTo(BrandCategory::class,'brandcategory_id');
    }
    
    public function subbrand()
    {
        return $this->belongsTo(SubBrandCategory::class,'subbrandcategory_id');
    }

    public function network_allimage()
    {
        return $this->belongsTo(NetworkValue::class,'product_id');
    }

    public function product_models()
    {
        return $this->hasMany(ProductModels::class,'product_id');
    }

    public function group_product()
    {
        return $this->hasMany(GroupProduct::class, 'groupproduct_id');
    }

    public function group_products()
    {
        return $this->belongsTo(GroupProduct::class, 'groupproduct_id');
    }
}
