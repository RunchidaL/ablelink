<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeModels extends Model
{
    use HasFactory;
    protected $table="type_models";

    public function series()
    {
        return $this->belongsTo(SeriesModels::class,'series_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function jackets()
    {
        return $this->hasMany(JacketProduct::class,'type_id');
    }

}
