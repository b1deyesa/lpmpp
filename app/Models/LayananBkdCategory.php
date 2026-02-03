<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananBkdCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function layananBkds()
    {
        return $this->hasMany(LayananBkd::class);
    }
}