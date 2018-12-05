<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $table = 'responsaveis';
    protected $fillable = ['nome', 'sobrenome', 'email', 'telefone'];

    public function paciente(){
        return $this->hasMany('App\Paciente');
    }

}
