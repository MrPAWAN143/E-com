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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_trending')->default(false);
            $table->boolean('is_best_seller')->default(false);
            $table->boolean('is_special')->default(false);
            $table->boolean('is_onsale')->default(false);
            $table->boolean('is_discount')->default(false);
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->integer('quantity')->nullable();
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained('sub_category')->onDelete('cascade');
            $table->foreignId('parent_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
