<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeraturanRektorCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function peraturanRektors()
    {
        return $this->hasMany(PeraturanRektor::class);
    }
}