<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instrumentos extends Model
{
    use HasFactory;

    public function clases_instrumentos(){
        return $this->hasMany('App\Models\clases_instrumentos');
    }

}
