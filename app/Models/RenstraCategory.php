<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RenstraCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function renstras()
    {
        return $this->hasMany(Renstra::class);
    }
}