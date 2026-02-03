<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenMbkm extends Model
{
    protected $fillable = [
        'dokumen_mbkm_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(DokumenMbkmCategory::class, 'dokumen_mbkm_category_id');
    }
}