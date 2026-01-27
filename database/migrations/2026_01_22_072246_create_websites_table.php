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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(false);
            $table->string('jumbotron_background')->nullable();
            $table->string('jumbotron_title')->nullable();
            $table->string('jumbotron_subtitle')->nullable();
            $table->string('jumbotron_description')->nullable();
            $table->string('page_background')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->text('address')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('tiktok_link')->nullable();
            $table->text('x_link')->nullable();
            $table->text('instagram_link')->nullable();
            $table->text('youtube_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
