<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('survey_form_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_form_id')->constrained('survey_forms')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('field_id')->constrained('fields')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('label');
            $table->boolean('is_required')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_form_fields');
    }
};
