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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
//            User Data
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('user_id');

//            Product Data
            $table->string('product_title');
            $table->string('quantity');
            $table->string('price');
            $table->text('image');
            $table->string('product_id');

//            Payment Status
            $table->string('payment_status')->nullable();
            $table->string('delivery_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
