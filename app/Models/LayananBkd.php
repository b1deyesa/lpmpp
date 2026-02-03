<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananBkd extends Model
{
    protected $fillable = [
        'layanan_bkd_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(LayananBkdCategory::class, 'layanan_bkd_category_id');
    }
}