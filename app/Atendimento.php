<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $fillable = [
        'hora_inicio',
        'hora_fim',
        'agendamento_id'

    ];
    public function agendamento(){
        return $this->belongsTo('App\Agendamento','agendamento_id');
    }
    public function prontuarios(){
        return $this->hasMany('App\Prontuario');
    }


    public function horaIForms()
    {
        $dateTime = new DateTime($this->hora_inicio);
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');
        return $time;
    }

    public function horaFForms()
    {
        $dateTime = new DateTime($this->hora_fim);
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');
        return $time;
    }

}
