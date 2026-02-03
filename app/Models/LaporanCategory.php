<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LaporanCategory extends Model
{
    protected $guarded = ['id'];
    
    public function laporans(): HasMany
    {
        return $this->hasMany(Laporan::class);
    }
}
