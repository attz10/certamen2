<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor_propuesta extends Model
{
    use HasFactory;
    protected $table = 'profesor_propuesta';

    public function profesor(){
        return $this->belongsTo('App\Models\Profesor');
    }

    public function propuesta(){
        return $this->belongsTo('App\Models\Propuesta');
    }
}
