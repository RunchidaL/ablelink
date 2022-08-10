<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table="subcategories";

    public function category()
    {
        $this->belongsTo(Category::class,'category_id');
    }

    public function brandCategories()
    {
        return $this->hasMany(BrandCategory::class,'subcategory_id');
    }
}
