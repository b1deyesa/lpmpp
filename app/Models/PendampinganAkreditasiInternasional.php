<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendampinganAkreditasiInternasional extends Model
{
    protected $fillable = [
        'pendampingan_akreditasi_internasional_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(PendampinganAkreditasiInternasionalCategory::class, 'pendampingan_akreditasi_internasional_category_id');
    }
}