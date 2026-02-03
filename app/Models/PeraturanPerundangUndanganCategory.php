<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PeraturanPerundangUndanganCategory extends Model
{
    protected $fillable = [
        'title',
    ];

    public function peraturanPerundangUndangans()
    {
        return $this->hasMany(PeraturanPerundangUndangan::class);
    }
}