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
        Schema::create('harga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->foreignId('metode_id');
            $table->integer('nominal');
            $table->integer('nominal_dp');
            // $table->string('nominal_book');
            $table->timestamps();


            $table->foreign('property_id')->references('id')->on('property')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('metode_id')->references('id')->on('metode')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('harga');
    }
};
