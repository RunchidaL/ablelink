<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostSale extends Model
{
    use HasFactory;
    protected $table = "cost_sales";

    public function dealer()
    {
        return $this->belongsTo(User::class,'dealerid');
    }
}
