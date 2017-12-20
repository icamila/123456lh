<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $table = 'pacientes';
    protected $fillable = [
        "nombre", "aPaterno", "fechaNacimiento" ,"aMaterno","sexo_id",
    ];
}
