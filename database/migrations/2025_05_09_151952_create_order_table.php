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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('product')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('category')->onDelete('cascade');
            $table->foreignId('sub_category_id')->constrained('sub_category')->onDelete('cascade');
            $table->string('order_status')->default('pending');
            $table->decimal('total_amount', 10, 2);
            $table->string('payment_method')->default('credit_card');
            $table->string('shipping_address')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('tracking_number')->nullable();
            $table->string('shipping_status')->default('pending');
            $table->string('payment_status')->default('pending');
            $table->timestamp('order_date')->nullable();
            $table->timestamp('delivery_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
