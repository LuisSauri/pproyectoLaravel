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
        Schema::create('historial_acads', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('id_alumno')->unsigned();
            $table->foreign('id_alumno')->references('id')->on('alumnos');

            $table->bigInteger('id_clase')->unsigned();
            $table->foreign('id_clase')->references('id')->on('clases');
            
            $table->float('calificación');
            $table->enum('estatus', ['aprobado','reprobado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_acads');
    }
};
