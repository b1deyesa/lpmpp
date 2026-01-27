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
        Schema::create('pengelola_pusat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengelola_id')->constrained('pengelolas')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('pusat_id')->constrained('pusats')->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('jabatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengelola_pusat');
    }
};
