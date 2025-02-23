<?php

namespace App\Livewire;

use App\Models\Horario;
use DateTime;
use Exception;
use Livewire\Component;

class FormConsultar extends Component
{
    public $placa;
    protected function rules(){
        return[
            'placa' => 'required|regex:/^[A-Za-z]{3}-\d{4}$/',
        ];
    }
    protected function messages(){
        return[
            'placa.required'=>'Ingresa la placa',
            'placa.regex'=>'Placa invalida'
        ];
    }

    public function render()
    {
        return view('livewire.form-consultar');
    }
    public function consultar(){
        $this->validate();
        try{
            // Inicializo la funcion para obtener la fecha de hoy
            $fechaHoraActual = new DateTime();
            // Obtengo el dia en ingles
            $dia = $fechaHoraActual->format('l');
            // Obtengo la horas en formato 24 horas
            $hora = $fechaHoraActual->format('H:i:s');
            // creo un array para obtener el dia en español
            $diasEnEspanol = [
                'Monday' => 'lunes',
                'Tuesday' => 'martes',
                'Wednesday' => 'miércoles',
                'Thursday' => 'jueves',
                'Friday' => 'viernes',
                'Saturday' => 'sábado',
                'Sunday' => 'domingo',
            ];
            // guardo el dia en una variable
            $diasEnEspanol = $diasEnEspanol[$dia]; 
            // Consulta en la base de datos
            $consulta = Horario::whereRaw('LOWER(dia) LIKE ?', [strtolower($diasEnEspanol)])->first();
            // obtengo el ultimo valor de input de formulario
            $obtenerDigito = substr($this->placa, -1);
            // valido que la consulta no sea null
            if($consulta!=null){
                // guardo en una variable el campo de la base de datos tipo array
                $digitosPlaca= $consulta->num_placa;
                // evaluo si el valor esta dentro del array para hacer la validacion
                if(in_array($obtenerDigito,$digitosPlaca )){
                    // Valido si el rango de la hora de circulación
                    // Variable para presentar el rango de horas en mensaje 
                    $horario = "Horario en la mañana: {$consulta->hora_inicio_dia} a {$consulta->hora_fin_dia} Horario tarde:{$consulta->hora_inicio_tarde} a {$consulta->hora_fin_tarde}";
                    if ($hora >= $consulta->hora_inicio_dia && $hora <= $consulta->hora_fin_dia) {
                        // envio mensajes a la vista

                        session()->flash('status', "No puedes circular. $horario");
                        return;
                     } 
                     elseif ($hora >= $consulta->hora_inicio_tarde && $hora <= $consulta->hora_fin_tarde) {
                        session()->flash('status', "No puedes circular. $horario");
                    }else{
                        session()->flash('status','Su carro si puede circular');
                        return;
                    }
                }else{
                    session()->flash('status','Su carro si puede circular');
                    return;
                }
            }else{
                // solo entrara en el caso de sabado y domingo que son dias permitidos para circular
                session()->flash('status','Su carro si puede circular Sabado y Domingo');
                return;
            }
            

        }catch(Exception $e){

            session()->flash('status','Ocurrio un problema en su solicitud');
        }
    
    }
}
