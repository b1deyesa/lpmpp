<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pusat extends Model
{
    protected $guarded = ['id'];
    
    public function getRouteKeyName()
    {
        return 'singkatan_bagian';
    }
    
    public function getAnggotaAttribute()
    {
        $result = [];

        $anggotas = json_decode($this->attributes['anggota'] ?? '[]', true);

        if ($anggotas) {

            foreach ($anggotas as $anggota) {
                $tenaga = TenagaPengelola::find($anggota['tenaga_pengelola_id']);
    
                if ($tenaga) {
                    $result[$tenaga->nama] = $anggota['jabatan'];
                }
            }
        }

        return $result;
    }
    
    public function portalCategories(): HasMany
    {
        return $this->hasMany(PortalCategory::class);
    }
}
