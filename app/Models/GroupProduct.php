<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupProduct extends Model
{
    use HasFactory;
    protected $table="group_products";

    public function product_series()
    {
        return $this->hasMany(SeriesModels::class,'group_id');
    }
}
