<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SertifikatCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function sertifikats()
    {
        return $this->hasMany(Sertifikat::class);
    }
}