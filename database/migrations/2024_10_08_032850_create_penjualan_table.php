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
            $table->string('alamat');
            $table->string('status_kawin');
            $table->integer('jumlah_pembayaran');
            $table->string('metode');
            $table->integer('nominal_harga');
            $table->integer('nominal_dp');
            $table->string('no_rek');
            $table->string('nama_bank');
            $table->string('pekerjaan');
            $table->string('nama_tempat_bekerja');
            $table->string('alamat_tempat_bekerja');
            $table->string('gaji');
            $table->string('nama_orang_terdekat');
            $table->string('no_hp_orang_terdekat');
            $table->string('alamat_orang_terdekat');
            $table->string('foto_ktp');
            $table->date('tanggal');
            $table->timestamps();


            $table->foreign('user_id')->references('id')->on('users')
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
