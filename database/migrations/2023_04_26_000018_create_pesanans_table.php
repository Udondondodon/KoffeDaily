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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->date('tanggal_pemesanan');
            $table->dateTime('waktu_pemesanan');
            $table->string('nama_produk');
            $table->integer('quantity');
            $table->string('nama_pemesan');
            $table->integer('total_harga');
            $table->unsignedBigInteger('mitra_id');
            $table->foreign('mitra_id')->references('id')->on('users');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
