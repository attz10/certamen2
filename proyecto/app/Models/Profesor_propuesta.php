<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profesor_propuesta extends Model
{
    use HasFactory;
    protected $table = 'profesor_propuesta';

    public function profesor(): BelongsTo{
        return $this->belongsTo('App\Models\Profesor', 'profesor_rut', 'rut');
    }

    public function propuesta(){
        return $this->belongsTo('App\Models\Propuesta');
    }
}
