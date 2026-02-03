<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    protected $fillable = [
        'sertifikat_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(SertifikatCategory::class, 'sertifikat_category_id');
    }
}