<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkValue extends Model
{
    use HasFactory;
    protected $table="network_values";

    public function image_id()
    {
        return $this->belongsTo(NetworkImage::class,'network_image_id');
    }

    public function photo()
    {
        return $this->belongsTo(Product::class,'product_in_photo');
    }

    public function image_network()
    {
        return $this->hasMany(NetworkImage::class,'network_image_id');
    }
}
