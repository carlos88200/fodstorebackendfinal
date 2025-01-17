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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Image');
            $table->string('Description');
            $table->integer('Price');
            $table->unsignedBigInteger('idFoodGroupFK');
            $table->foreign('idFoodGroupFK')->references('id')->on('food_groups');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
