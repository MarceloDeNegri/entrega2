<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convenio;
use App\Http\Requests\ConvenioRequest;

class ConvenioController extends Controller
{
    private $totalPage = 2;

        public function index(Request $filtro){
            $filtragem = $filtro->get('filtragem');
            if ($filtragem == null)
            $convenios = Convenio::orderBy('nome')->paginate($this->totalPage);
            else
            $convenios = Convenio::where('nome','like','%' .$filtragem. '%')->orderBy("nome")->paginate(10);

            return view('convenios.index', ['convenios'=>$convenios]);
    }

    public function create(){
        return view('convenios.create');
    }

    public function store(ConvenioRequest $request){
        $novo_convenio = $request->all();
        Convenio::create($novo_convenio);
        return redirect()->route('convenios');

    }
    public function destroy($id){
        try{
            Convenio::find($id)->delete();
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
        $convenio = Convenio::find($id);
         return view('convenios.edit', compact('convenio'));
     }

     public function update(ConvenioRequest $request, $id){
        Convenio::find($id)->update($request->all());
         return redirect()->route('convenios');
     }
}
