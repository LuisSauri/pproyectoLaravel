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
        Schema::create('clases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            
            $table->enum('dia',['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes']);
            $table->enum('hora',['14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00']);
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
