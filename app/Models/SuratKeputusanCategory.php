<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeputusanCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function suratKeputusans()
    {
        return $this->hasMany(SuratKeputusan::class);
    }
}