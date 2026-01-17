<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Akreditasi extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'tanggal_kadaluarsa' => 'date',
    ];    
}
