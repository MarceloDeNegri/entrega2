<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsavel;
use App\Http\Requests\ResponsavelRequest;

class ResponsavelController extends Controller
{
    private $totalPage = 2;

    public function index(){
        $responsaveis = Responsavel::paginate($this->totalPage);
        return view('responsaveis.index', ['responsaveis'=>$responsaveis]);
    }

    public function create(){
        return view('responsaveis.create');
    }

    public function store(ResponsavelRequest $request){

        $novo_responsavel = $request->all();
        Responsavel::create($novo_responsavel);
        return redirect()->route('responsaveis');
    }

    public function destroy($id){
        try{
            Responsavel::find($id)->delete();
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
        $responsavel = Responsavel::find($id);
         return view('responsaveis.edit', compact('responsavel'));
     }

     public function update(ResponsavelRequest $request, $id){
        Responsavel::find($id)->update($request->all());
         return redirect()->route('responsaveis');
     }
}



