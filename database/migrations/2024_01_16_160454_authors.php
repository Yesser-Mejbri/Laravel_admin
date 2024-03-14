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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('organism');
            $table->unsignedInteger('id_special'); 
            $table->unsignedInteger('id_countries'); 
            $table->foreign('id_special')->references('id')->on('specialsessions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_countries')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
