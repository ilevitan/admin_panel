<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostKz extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\CategoryKz', 'cat_id');
    }
}
