<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InovasiPembelajaran extends Model
{
    protected $fillable = [
        'inovasi_pembelajaran_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(InovasiPembelajaranCategory::class, 'inovasi_pembelajaran_category_id');
    }
}