<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    public function estudiante(){
        return $this->belongTo('App\Models\Estudiante');
    }

    public function profesores_propuestas(){
        return $this->hasMany('App\Models\Profesor_propuesta');
    }
}
