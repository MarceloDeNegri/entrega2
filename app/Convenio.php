<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable = [
        'nome',
        'valor',
    ];

    public function agendamento(){
        return $this->hasMany('App\Agendamento');
    }
}
