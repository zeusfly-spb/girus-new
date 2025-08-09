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
        Schema::create('txts', function (Blueprint $table) {
            $table->id();
            $table->string('link', 256)->unique();
            $table->string('name_ru', 256);
            $table->text('name');
            $table->unsignedBigInteger('muser');
            $table->unsignedBigInteger('acmd_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('txts');
    }
};
