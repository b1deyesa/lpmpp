<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Renstra extends Model
{
    protected $fillable = [
        'renstra_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(RenstraCategory::class, 'renstra_category_id');
    }
}