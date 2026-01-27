<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pusat extends Model
{
    protected $guarded = ['id'];
    
    public function getRouteKeyName()
    {
        return 'singkatan_bagian';
    }
    
    public function portalCategories(): HasMany
    {
        return $this->hasMany(PortalCategory::class);
    }
    
    public function pengelolas(): BelongsToMany
    {
        return $this->belongsToMany(Pengelola::class, 'pengelola_pusat', 'pusat_id', 'pengelola_id')->withPivot('jabatan')->withTimestamps();
    }
}
