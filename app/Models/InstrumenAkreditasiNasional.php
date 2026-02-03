<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstrumenAkreditasiNasional extends Model
{
    protected $fillable = [
        'instrumen_akreditasi_nasional_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(InstrumenAkreditasiNasionalCategory::class, 'instrumen_akreditasi_nasional_category_id');
    }
}