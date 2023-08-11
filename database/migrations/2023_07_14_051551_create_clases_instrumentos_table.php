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
        Schema::create('clases_instrumentos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_instrumento')->unsigned();
            $table->foreign('id_instrumento')->references('id')->on('instrumentos');
            
            $table->bigInteger('id_clase')->unsigned();
            $table->foreign('id_clase')->references('id')->on('clases');
           

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases_instrumentos');
    }
};
