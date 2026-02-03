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
        Schema::create('inovasi_pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inovasi_pembelajaran_category_id')->nullable()->constrained('inovasi_pembelajaran_categories')->nullOnDelete();
            $table->string('title');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inovasi_pembelajarans');
    }
};