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
        Schema::create('portal_category_portal_post', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portal_category_id')->constrained()->cascadeOnDelete();
            $table->foreignId('portal_post_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portal_category_portal_post');
    }
};
