<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;
    protected $table = "dealers";

    public function dealer()
    {
        return $this->belongsTo(User::class,'dealerid');
    }
}
