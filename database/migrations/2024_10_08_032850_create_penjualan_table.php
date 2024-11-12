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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_property');
            $table->string('nama_type');
            $table->foreignId('user_id');
            $table->integer('jumlah_pembayaran');
            $table->integer('nominal_dp');
            $table->integer('nominal_book');
            $table->integer('nominal_harga');
            $table->string('no_rek');
            $table->string('foto_ktp')->nullable();
            $table->date('tanggal');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('user')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
