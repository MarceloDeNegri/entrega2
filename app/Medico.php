<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = ['nome', 'cpf', 'rg', 'crm','telefone','user_id'];

    function especializacaos() {
        return $this->belongsToMany("App\Especializacao", "tipos");//
        //primeiro referencia  a model depois a tabela do banco

    }

    public function consulta(){
        return $this->hasMany('App\Consulta');
    }
}
