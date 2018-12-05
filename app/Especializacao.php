<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especializacao extends Model
{
    protected $fillable = [
        'nome',
        'descricao',

    ];

    public function medico(){
        return $this->hasMany('App\Medico');
    }
}
