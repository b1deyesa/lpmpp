<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstrumenAkreditasiInternasional extends Model
{
    protected $fillable = [
        'instrumen_akreditasi_internasional_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(InstrumenAkreditasiInternasionalCategory::class, 'instrumen_akreditasi_internasional_category_id');
    }
}