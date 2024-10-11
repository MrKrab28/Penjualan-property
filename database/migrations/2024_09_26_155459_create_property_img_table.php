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
        Schema::create('property_img', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->string('filename');
            $table->timestamps();


            $table->foreign('property_id')->references('id')->on('property')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_img');
    }
};
