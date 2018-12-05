<?php

namespace App\Http\Controllers;


use App\Agendamento;
use App\Medico;
use App\Paciente;
use App\User;
use Illuminate\Http\Request;
use App\Prontuario;
use App\Atendimento;
use App\Http\Requests\ProntuarioRequest;
use Illuminate\Support\Facades\DB;
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

class ProntuarioController extends Controller
{
    private $totalPage = 10;

    public function relatorio($id){
        $prontuarios = Prontuario::find($id);
        $pdf = \PDF::loadView('prontuarios.pdf',['prontuarios' => $prontuarios]);
            return $pdf->download('user.pdf');
     }

    public function detail($id){
        $prontuarios = Prontuario::find($id);
        return view('prontuarios.detail', ['prontuarios'=>$prontuarios]);
        }

    public function index(){

       $prontuarios = Prontuario::paginate($this->totalPage);
        return view('prontuarios.index', ['prontuarios'=>$prontuarios]);
    }

    public function create($id){
        $atendimento = Atendimento::find($id);
        if($atendimento){

            return view('prontuarios.create', ['atendimento'=> $atendimento]);
        }

        return redirect()->route('prontuarios');
    }

    public function store(ProntuarioRequest $request){
        $novo_prontuario = $request->all();
        Prontuario::create($novo_prontuario);
        return redirect()->route('prontuarios');

    }


    public function destroy($id){
        try{
            Prontuario::find($id)->delete();
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
        $atendimento = Atendimento::find($id);
        $prontuario = Prontuario::find($id);
         return view('prontuarios.edit', compact('prontuario'), ['atendimento'=> $atendimento]);
     }

     public function update(ProntuarioRequest $request, $id){
        Prontuario::find($id)->update($request->all());
         return redirect()->route('prontuarios');
     }
}
