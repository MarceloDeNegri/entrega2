<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especializacao;
use App\Http\Requests\EspecializacaoRequest;
use Illuminate\Support\Facades\Input;

class EspecializacaoController extends Controller
{
    public function index(Request $filtro){
        $filtragem = $filtro->get('filtragem');
        if ($filtragem == null)
        $especializacaos = Especializacao::orderBy('nome')->paginate(10);
        else
        $especializacaos = Especializacao::where('nome','like','%' .$filtragem. '%')->orderBy("nome")->paginate(10);

        return view('especializacaos.index', ['especializacaos'=>$especializacaos]);
    }

    public function create(){
        return view('especializacaos.create');
    }

    public function store(EspecializacaoRequest $request){
        $novo_especializacao = $request->all();
        Especializacao::create($novo_especializacao);
        return redirect()->route('especializacaos');
}

    public function destroy($id){
        try{
            Especializacao::find($id)->delete();
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
        $especializacao = Especializacao::find($id);
        return view('especializacaos.edit', compact('especializacao'));
    }

    public function update(EspecializacaoRequest $request, $id){
        Especializacao::find($id)->update($request->all());
         return redirect()->route('especializacaos');
     }






}

