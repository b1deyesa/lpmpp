<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PortalCategory extends Model
{
    protected $guarded = ['id'];
    
    public function pusat(): BelongsTo
    {
        return $this->belongsTo(Pusat::class, 'pusat_id');
    }
    
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(PortalPost::class, 'portal_category_portal_post');
    }
}
