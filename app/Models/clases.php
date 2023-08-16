<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class clases extends Model
{
    use HasFactory;
    
    public function clases_alumnos(){
        return $this->hasMany('App\Models\clases_alumnos');
    }
    
}
