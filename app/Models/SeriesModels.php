<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeriesModels extends Model
{
    use HasFactory;
    protected $table="series_models";

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function group()
    {
        return $this->belongsTo(GroupProduct::class,'group_id');
    }

    public function typemodels()
    {
        return $this->hasMany(TypeModels::class,'series_id');
    }
}
