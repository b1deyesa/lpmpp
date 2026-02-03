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
        Schema::create('pendampingan_akreditasi_nasionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendampingan_akreditasi_nasional_category_id')->nullable();
            $table->foreign('pendampingan_akreditasi_nasional_category_id', 'pan_cat_fk')->references('id')->on('pendampingan_akreditasi_nasional_categories')->nullOnDelete();
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
        Schema::dropIfExists('pendampingan_akreditasi_nasionals');
    }
};