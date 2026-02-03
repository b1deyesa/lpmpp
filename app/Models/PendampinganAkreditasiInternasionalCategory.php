<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendampinganAkreditasiInternasionalCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function pendampinganAkreditasiInternasionals()
    {
        return $this->hasMany(PendampinganAkreditasiInternasional::class);
    }
}