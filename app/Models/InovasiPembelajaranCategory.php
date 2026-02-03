<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InovasiPembelajaranCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function inovasiPembelajarans()
    {
        return $this->hasMany(InovasiPembelajaran::class);
    }
}