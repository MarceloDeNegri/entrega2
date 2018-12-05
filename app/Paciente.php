<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Datetime;

class Paciente extends Model
{
    protected $fillable = ['nome', 'dtNascimento', 'status', 'tipoSanguineo', 'alergico', 'cpf', 'responsavel_id'];

    public function responsavel(){
        return $this->belongsTo('App\Responsavel','responsavel_id');
    }

    public function consulta(){
        return $this->hasMany('App\Consulta');
    }

    public function dtNascimentoForms()
    {
        $dateTime = new DateTime($this->dtNascimento);
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');
        return $date;
    }
}
