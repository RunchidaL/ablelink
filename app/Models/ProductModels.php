<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModels extends Model
{
    use HasFactory;
    protected $table="product_models";

    public function series()
    {
        return $this->belongsTo(SeriesModels::class,'series_id');
    }

    public function typemodels()
    {
        return $this->belongsTo(TypeModels::class,'type_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function jacket()
    {
        return $this->belongsTo(JacketProduct::class,'jacket_id');
    }

    public function jacketname()
    {
        return $this->belongsTo(JacketTypes::class,'jacket_id');
    }
}
