<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    protected $fillable = [
        'peso',
        'altura',
        'idade',
        'observacao',
        'alimentacao',
        'febre',
        'dores',
        'atendimento_id'

    ];
    public function atendimento(){
        return $this->belongsTo('App\Atendimento','atendimento_id');
    }


}
