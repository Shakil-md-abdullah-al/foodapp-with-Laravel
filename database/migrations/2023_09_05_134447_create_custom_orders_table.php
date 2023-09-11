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
        Schema::create('custom_orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('user_id')->nullable;
            $table->string('rice')->nullable();
            $table->string('veg')->nullable();
            $table->string('soft_drinks')->nullable();
            $table->string('lacchi')->nullable();
            $table->string('meat')->nullable();
            $table->string('fish')->nullable();
            $table->string('own')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_orders');
    }
};
