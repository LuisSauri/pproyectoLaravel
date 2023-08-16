<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
    use HasFactory;

    public function clases_maestros(){
        return $this->hasMany('App\Models\clases_maestros');

    }


}
