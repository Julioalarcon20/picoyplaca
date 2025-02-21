<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    protected $fillable=[
        'num_placa',
        'dia',
        'hora_inicio_dia',
        'hora_fin_dia',
        'hora_inicio_tarde',
        'hora_fin_tarde',
    ];
    protected $casts = [
        'num_placa' => 'array',
    ];
}
