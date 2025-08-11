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
        Schema::create('partcounts', function (Blueprint $table) {
            $table->id();
            $table->string('name_ru', 256)->unique();
            $table->json('name');
            $table->set('service_type', ['tour', 'excursion']);
            $table->index(['id', 'service_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partcounts');
    }
};
