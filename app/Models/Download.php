<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $table = "downloads";

    public function category()
    {
        return $this->belongsTo(DownloadCategory::class,'category_id');
    }
}
