<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    protected $fillable = [
        'pelatihan_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(PelatihanCategory::class, 'pelatihan_category_id');
    }
}