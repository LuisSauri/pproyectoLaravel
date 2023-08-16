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
        Schema::create('clases_alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_alumno')->nullable();
            $table->foreign('id_alumno')->references('id',)->on('alumnos');

            $table->unsignedBigInteger('id_clase')->nullable();
            $table->foreign('id_clase')->references('id')->on('clases');
  
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases_alumnos');
    }
};
