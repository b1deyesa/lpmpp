<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SurveyForm extends Model
{
    protected $guarded = ['id'];
    
    public function survey(): BelongsTo
    {
        return $this->belongsTo(Survey::class, 'survey_id');
    }
    
    public function fields(): HasMany
    {
        return $this->hasMany(Field::class);
    }
}
