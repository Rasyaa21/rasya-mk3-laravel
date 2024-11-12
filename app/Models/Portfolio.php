<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        "project",
        "image",
        "url",
        "category_id"
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
