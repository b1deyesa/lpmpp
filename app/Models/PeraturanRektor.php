<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeraturanRektor extends Model
{
    protected $fillable = [
        'peraturan_rektor_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(PeraturanRektorCategory::class, 'peraturan_rektor_category_id');
    }
}