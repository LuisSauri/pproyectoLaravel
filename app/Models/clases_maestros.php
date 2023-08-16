<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clases_maestros extends Model
{
    use HasFactory;

    public function maestro(){
        return $this->belongsTo(maestros::class, 'id_maestro');
    }

    public function clase(){
        return $this->belongsTo(clases::class, 'id_clase');
    }
}
