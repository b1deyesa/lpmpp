<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeraturanPerundangUndangan extends Model
{
    protected $fillable = [
        'peraturan_perundang_undangan_category_id',
        'title',
        'file',
    ];

    public function category()
    {
        return $this->belongsTo(PeraturanPerundangUndanganCategory::class, 'ppuCategory_id');
    }
}