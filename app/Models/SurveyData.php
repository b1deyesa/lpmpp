<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SurveyData extends Model
{
    protected $guarded = ['id'];

    public function field(): BelongsTo
    {
        return $this->belongsTo(SurveyFormField::class, 'survey_form_field_id');
    }
}
