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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('tour');
            $table->integer('food')->nullable();
            $table->integer('star')->nullable();
            $table->text('name')->nullable();
            $table->text('info')->nullable();
            $table->timestamps();
            $table->index('tour', 'idx_tour2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
