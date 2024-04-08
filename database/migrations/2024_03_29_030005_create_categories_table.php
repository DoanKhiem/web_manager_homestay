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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('utility_id')->constrained();
//            $table->integer('first_block');
//            $table->float('first_block_price');
            $table->float('hourly_price');
            $table->float('daily_price');
//            $table->float('weekend_surcharge');
//            $table->float('holiday_surcharge');
//            $table->float('early_checkin');
//            $table->float('late_checkout');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
