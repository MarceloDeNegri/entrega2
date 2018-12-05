<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Http\Requests\PacienteRequest;


class PacienteController extends Controller
{
    private $totalPage = 2;

    public function index(){
        $pacientes = Paciente::paginate($this->totalPage);
        return view('pacientes.index', ['pacientes'=>$pacientes]);
    }

    public function create(){
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request){
        $novo_paciente = $request->all();
        Paciente::create($novo_paciente);

        return redirect()->route('pacientes');
    }

    public function destroy($id){
        try{
            Paciente::find($id)->delete();
            $ret = array('status'=>'ok', 'msg'=>"null");
        }catch(\Illuminate\Database\QueryException $e){
            $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        catch(\PDOException $e){
            $ret = array('status'=>'erro', 'msg'=>$e->getMessage());
        }
        return $ret;
    }

    public function edit($id){
        $paciente = Paciente::find($id);
         return view('pacientes.edit', compact('paciente'));
     }

     public function update(PacienteRequest $request, $id){
        Paciente::find($id)->update($request->all());
         return redirect()->route('pacientes');
     }
}

