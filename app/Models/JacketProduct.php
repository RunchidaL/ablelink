<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JacketProduct extends Model
{
    use HasFactory;
    protected $table="jacket_products";

    public function jacket_type()
    {
        return $this->belongsTo(JacketTypes::class,'jacket_id');
        
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function type()
    {
        return $this->belongsTo(TypeModels::class,'type_id');
        
    }
}
