<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendampinganAkreditasiNasionalCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function pendampinganAkreditasiNasionals()
    {
        return $this->hasMany(PendampinganAkreditasiNasional::class);
    }
}