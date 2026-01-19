<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SurveyFormField extends Model
{
    protected $guarded = ['id'];
    
    public function form(): BelongsTo
    {
        return $this->belongsTo(SurveyForm::class, 'survey_form_id');
    }

    public function field(): BelongsTo
    {
        return $this->belongsTo(Field::class, 'field_id');
    }

    public function data(): HasMany
    {
        return $this->hasMany(SurveyData::class);
    }
}
