<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Horarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Horario::create(
            [
                'dia'=>'Lunes',
                'num_placa'=>["1", "2"],
                'hora_inicio_dia' => '06:00:00',
                'hora_fin_dia' => '09:30:00',
                'hora_inicio_tarde' => '16:00:00',
                'hora_fin_tarde' => '20:00:00',
            ]
        );
        \App\Models\Horario::create(
            [
                'dia'=>'Martes',
                'num_placa'=>["3", "4"],
                'hora_inicio_dia' => '06:00:00',
                'hora_fin_dia' => '09:30:00',
                'hora_inicio_tarde' => '16:00:00',
                'hora_fin_tarde' => '20:00:00',
            ]
        );
        \App\Models\Horario::create(
            [
                'dia'=>'Miercoles',
                'num_placa'=>["5", "6"],
                'hora_inicio_dia' => '06:00:00',
                'hora_fin_dia' => '09:30:00',
                'hora_inicio_tarde' => '16:00:00',
                'hora_fin_tarde' => '20:00:00',
            ]
        );
        \App\Models\Horario::create(
            [
                'dia'=>'Jueves',
                'num_placa'=>["7", "8"],
                'hora_inicio_dia' => '06:00:00',
                'hora_fin_dia' => '09:30:00',
                'hora_inicio_tarde' => '16:00:00',
                'hora_fin_tarde' => '20:00:00',
            ]
        );
        \App\Models\Horario::create(
            [
                'dia'=>'Viernes',
                'num_placa'=>["9", "0"],
                'hora_inicio_dia' => '06:00:00',
                'hora_fin_dia' => '09:30:00',
                'hora_inicio_tarde' => '16:00:00',
                'hora_fin_tarde' => '20:00:00',
            ]
        );
    }
}
