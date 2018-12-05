<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'dtConsulta',
        'hora',
        'condicao',
        'paciente_id',
        'medico_id',
        'convenio_id',
        'UC_Agendamento',

    ];
    public function medico(){
        return $this->belongsTo('App\Medico','medico_id');
    }
    public function paciente(){
        return $this->belongsTo('App\Paciente','paciente_id');
    }
    public function convenio(){
        return $this->belongsTo('App\Convenio','convenio_id');
    }
    public function atendimentos(){
        return $this->hasMany('App\Atendimento');
    }

    public function dtConsultaForms()
    {
        $dateTime = new DateTime($this->dtConsulta);
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');
        return $date;
    }
}
