<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MedicoRequest;
use App\Medico;
use App\Especializacao;
use App\Tipo;

class MedicoController extends Controller
{
    private $totalPage = 2;
    public function index(){
        $medicos = Medico::paginate($this->totalPage);
        return view('medicos.index', ['medicos'=>$medicos]);
    }

    public function create(){
        return view('medicos.create');
    }

    public function store(MedicoRequest $request){
        $novo_medico = $request->all();
        Medico::create($novo_medico);

        return redirect()->route('medicos');
    }

    public function destroy($id){
        try{
            Tipo::where("medico_id", $id)->delete();
            Medico::find($id)->delete();
            $ret = array('status'=>'ok', 'msg'=>"null");

        }catch (\Illuminate\Database\QueryException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMessagw());
        }
        catch (\PDOException $e) {
            $ret = array('status'=>'erro', 'msg'=>$e->getMessagw());

    }
        return $ret;
}

    public function edit($id){
        $medico = Medico::find($id);
         return view('medicos.edit', compact('medico'));
     }

     public function update(MedicoRequest $request, $id){
        Medico::find($id)->update($request->all());
         return redirect()->route('medicos');
     }
     public function createMaster(){
        return view('medicos.masterDetail');
    }

    public function masterDetail(Request $request){
        $medico = Medico::create([
            'nome' => $request->get('nome'),
            'cpf' => $request->get('cpf'),
            'rg' => $request->get('rg'),
            'crm' => $request->get('crm'),
            'telefone' => $request->get('telefone')

            ]);
            $itens = $request->itens;
            foreach($itens as $key => $value) {
                Tipo::create([
                    'medico_id' => $medico->id,
                    'especializacao_id' => $itens[$key]

            ]);
        }
         return redirect()->route('medicos');
     }
}
