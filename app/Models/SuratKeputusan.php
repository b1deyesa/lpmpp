<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuratKeputusan extends Model
{
    protected $fillable = [
        'surat_keputusan_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(SuratKeputusanCategory::class, 'surat_keputusan_category_id');
    }
}