<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBrandCategory extends Model
{
    use HasFactory;

    protected $table="sub_brand_categories";

    public function brandcategories()
    {
        return $this->belongsTo(BrandCategory::class,'brandcategory_id');
    }
}
