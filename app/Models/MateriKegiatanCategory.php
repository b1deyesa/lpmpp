<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriKegiatanCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function materiKegiatans()
    {
        return $this->hasMany(MateriKegiatan::class);
    }
}