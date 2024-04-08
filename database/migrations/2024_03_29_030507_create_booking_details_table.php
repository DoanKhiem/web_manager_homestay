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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('category_id')->constrained();
//            $table->foreignId('room_id')->constrained();
//            $table->foreignId('menu_id')->constrained();
            $table->string('customer_name');
            $table->string('phone_number');
            $table->string('booking_category');
            $table->string('period_time');
            $table->decimal('total_time', 15, 0);
            $table->decimal('booking_price', 15, 0);
//            $table->integer('menu_quantity');
//            $table->float('menu_price');
            $table->integer('adult');
            $table->integer('kid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};
