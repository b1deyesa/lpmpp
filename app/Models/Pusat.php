<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pusat extends Model
{
    protected $guarded = ['id'];
    
    public function tenagaPengelola(): BelongsTo
    {
        return $this->belongsTo(TenagaPengelola::class, 'tenaga_pengelola_id');
    }
}
