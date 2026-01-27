<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pengelola extends Model
{
    protected $guarded = ['id'];
    
    public function pusats(): BelongsToMany
    {
        return $this->belongsToMany(Pusat::class, 'pengelola_pusat', 'pengelola_id', 'pusat_id')->withPivot('jabatan')->withTimestamps();
    }
}
