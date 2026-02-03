<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenKurikulumCategory extends Model
{
    protected $fillable = ['title'];

    public function dokumenKurikulums()
    {
        return $this->hasMany(DokumenKurikulum::class);
    }
}