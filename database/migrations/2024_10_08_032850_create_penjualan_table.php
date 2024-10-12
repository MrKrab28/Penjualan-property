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
            $table->foreignId('property_id');
            $table->foreignId('user_id');
            $table->integer('jumlah_pembayaran');
            $table->integer('nominal_dp');
            $table->integer('nominal_harga');
            $table->string('no_rek');
            $table->string('foto_ktp')->nullable();
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('property')
                ->onUpdate('cascade')
                ->onDelete('cascade');


            $table->foreign('user_id')->references('id')->on('user')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
