<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkImage extends Model
{
    use HasFactory;
    protected $table="network_images";

    public function type()
    {
        return $this->belongsTo(NetworkType::class,'type_id');
    }
}
