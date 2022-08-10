<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandCategory extends Model
{
    use HasFactory;
    protected $table="brand_categories";

    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_id');
    }
}
