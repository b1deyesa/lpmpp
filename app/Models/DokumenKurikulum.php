<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenKurikulum extends Model
{
    protected $fillable = [
        'dokumen_kurikulum_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(DokumenKurikulumCategory::class);
    }
}
