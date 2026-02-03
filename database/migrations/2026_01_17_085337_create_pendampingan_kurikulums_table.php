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
        Schema::create('pendampingan_kurikulums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendampingan_kurikulum_category_id')->nullable();
            $table->foreign('pendampingan_kurikulum_category_id', 'pk_cat_fk')->references('id')->on('pendampingan_kurikulum_categories')->nullOnDelete();
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
        Schema::dropIfExists('pendampingan_kurikulums');
    }
};