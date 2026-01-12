<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PortalPost extends Model
{
    protected $guarded = ['id'];
    
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(PortalCategory::class, 'portal_category_portal_post');
    }
}
