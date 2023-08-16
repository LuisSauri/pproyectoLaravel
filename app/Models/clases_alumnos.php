<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clases_alumnos extends Model
{
    use HasFactory;

    public function alumno(){
        return $this->belongsTo(alumnos::class, 'id_alumno');
    }

    public function clase(){
        return $this->belongsTo(clases::class, 'id_clase');
    }

    public function instrumento(){
        return $this->belongsTo(instrumentos::class, 'id_instrumento');
    }
}
