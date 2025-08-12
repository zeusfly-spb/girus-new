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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('user_type_id')->nullable();
            $table->string('salt')->nullable();
            $table->dateTime('ctime')->nullable();
            $table->dateTime('ltime')->nullable();
            $table->dateTime('mtime')->nullable();
            $table->integer('ecount')->default(0);
            $table->boolean('status')->default(true);
            $table->string('phone')->nullable();
            $table->integer('msg_user')->default(0);
            $table->integer('msg_admin')->default(0);
            $table->integer('msg_total')->default(0);
            $table->integer('ord_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
