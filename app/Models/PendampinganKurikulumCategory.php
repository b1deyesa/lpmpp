<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendampinganKurikulumCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function pendampinganKurikulums()
    {
        return $this->hasMany(PendampinganKurikulum::class);
    }
}