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
        Schema::create('pusats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bagian');
            $table->string('singkatan_bagian')->unique();
            $table->string('anggota')->nullable();
            $table->text('tugas')->nullable();
            $table->text('email')->nullable();
            $table->text('no_telp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pusats');
    }
};
