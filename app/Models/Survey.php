<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Survey extends Model
{
    protected $guarded = ['id'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function forms(): HasMany
    {
        return $this->hasMany(SurveyForm::class);
    }
}
