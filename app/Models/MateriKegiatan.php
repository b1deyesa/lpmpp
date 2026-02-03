<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriKegiatan extends Model
{
    protected $fillable = [
        'materi_kegiatan_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(MateriKegiatanCategory::class, 'materi_kegiatan_category_id');
    }
}