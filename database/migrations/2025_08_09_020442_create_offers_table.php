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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->enum('type', ['tour', 'excursion', 'guide', 'translator']);
            $table->dateTime('ctime');
            $table->dateTime('mtime');
            $table->integer('quota');
            $table->integer('quota1')->default(0);
            $table->integer('quota2')->default(0);
            $table->text('prices')->nullable();
            $table->text('prices_partner')->nullable();
            $table->integer('price');
            $table->integer('price_partner')->nullable();
            $table->date('stop_date')->nullable();
            $table->integer('off');
            $table->integer('lang');
            $table->timestamps();
            $table->primary(['id', 'service_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
