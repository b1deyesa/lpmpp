<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenMbkmCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function dokumenMbkms()
    {
        return $this->hasMany(DokumenMbkm::class);
    }
}