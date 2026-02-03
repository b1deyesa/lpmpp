<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendampinganKurikulum extends Model
{
    protected $fillable = [
        'pendampingan_kurikulum_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(PendampinganKurikulumCategory::class, 'pendampingan_kurikulum_category_id');
    }
}