<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pengelola extends Model
{
    protected $guarded = ['id'];
    
    public function pusat(): HasMany
    {
        return $this->hasMany(Pusat::class);
    }
}
