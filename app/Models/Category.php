<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "category"
    ];
    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }
}
