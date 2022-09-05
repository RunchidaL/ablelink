<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderID extends Model
{
    use HasFactory;
    protected $table="orderid";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
