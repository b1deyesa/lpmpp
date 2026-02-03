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
        Schema::create('instrumen_akreditasi_nasionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instrumen_akreditasi_nasional_category_id')->nullable();
            $table->foreign('instrumen_akreditasi_nasional_category_id', 'ian_cat_fk')->references('id')->on('instrumen_akreditasi_nasional_categories')->nullOnDelete();
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
        Schema::dropIfExists('instrumen_akreditasi_nasionals');
    }
};