<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PelatihanCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function pelatihans()
    {
        return $this->hasMany(Pelatihan::class);
    }
}