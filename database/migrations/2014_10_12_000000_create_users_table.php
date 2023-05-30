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
            $table->string('name', 50);
            $table->date('birthdate')->nullable();
            $table->string('email', 20)->nullable();
            $table->string('phone_number', 14)->nullable();
            $table->string('address', 30)->nullable();
            $table->string('kelurahan', 20)->nullable();
            $table->string('kecamatan', 20)->nullable();
            $table->string('kabupaten', 20)->nullable();
            $table->string('provinsi', 20)->nullable();
            $table->string('image')->nullable();
            $table->string('username', 15);
            $table->string('password', 255);
            $table->rememberToken()->nullable();
            $table->integer('role')->default(0);
            $table->integer('pendapatan')->default(0);
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            // $table->timestamps();
            // $table->timestamp('email_verified_at')->nullable();
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
