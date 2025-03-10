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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('thumbnail');
            $table->string('slug');
            $table->text('about');
            $table->unsignedBigInteger('stock');
            $table->string('category');
            $table->unsignedBigInteger('price');
            $table->boolean('is_popular');
            $table->foreignId('brands_id')->nullable()->constrained()->cascadeOnDelate();
            $table->softDeletes(); 
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};