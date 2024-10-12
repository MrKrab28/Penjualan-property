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
            $table->foreginId('property_id');
            $table->foreginId('metode_id');
            $table->integer('nominal');
            $table->integer('nominal_dp');

            $table->timestamps();
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
