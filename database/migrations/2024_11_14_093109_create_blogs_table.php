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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); 
            $table->string('category_id', 255)->nullable(); 
            $table->string('title', 255)->nullable(); 
            $table->string('slug', 255)->nullable(); 
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable(); 
            $table->string('banner', 255)->nullable(); 
            $table->string('meta_title', 255)->nullable(); 
            $table->string('meta_img', 255)->nullable(); 
            $table->string('meta_description', 255)->nullable(); 
            $table->string('meta_keywords', 255)->nullable(); 
            $table->string('status', 255)->nullable(); 
            $table->string('banner_alt', 255)->nullable(); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
