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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->string('number');
            $table->string('address');
            $table->string('petname');
            $table->string('petbreed');
            $table->date('petbdate');
            $table->integer('petage');
            $table->string('type');
            $table->string('sex');
            $table->string('color');
            $table->string('purpose');
            $table->date('app_date');
            $table->time('app_time');
            $table->text('comments')->nullable();
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
