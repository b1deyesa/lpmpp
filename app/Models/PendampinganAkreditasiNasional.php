<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendampinganAkreditasiNasional extends Model
{
    protected $fillable = [
        'pendampingan_akreditasi_nasional_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(PendampinganAkreditasiNasionalCategory::class, 'pendampingan_akreditasi_nasional_category_id');
    }
}