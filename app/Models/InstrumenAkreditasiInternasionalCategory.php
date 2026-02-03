<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstrumenAkreditasiInternasionalCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function instrumenAkreditasiInternasionals()
    {
        return $this->hasMany(InstrumenAkreditasiInternasional::class);
    }
}