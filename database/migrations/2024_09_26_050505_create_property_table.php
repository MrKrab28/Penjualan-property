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
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->string('property');
            $table->foreignId('type_id');
            $table->foreignId('spesifikasi_id');
            // $table->integer('nominal');
            // $table->integer('nominal_dp');
            $table->integer('nominal_book');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('type')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('spesifikasi_id')->references('id')->on('spesifikasi')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
