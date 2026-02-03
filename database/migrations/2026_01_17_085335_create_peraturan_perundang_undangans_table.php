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
        Schema::create('peraturan_perundang_undangans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peraturan_perundang_undangan_category_id')->nullable();
            $table->foreign('peraturan_perundang_undangan_category_id', 'ppu_cat_fk')->references('id')->on('peraturan_perundang_undangan_categories')->nullOnDelete();
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
        Schema::dropIfExists('peraturan_perundang_undangans');
    }
};