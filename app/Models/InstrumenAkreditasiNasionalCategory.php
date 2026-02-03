<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstrumenAkreditasiNasionalCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function instrumenAkreditasiNasionals()
    {
        return $this->hasMany(InstrumenAkreditasiNasional::class);
    }
}