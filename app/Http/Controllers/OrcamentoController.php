<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrcamentoController extends Controller
{

    public function listar(){

        $orcamentos = \App\Orcamento::paginate(10);
        
        return view ('orcamentos.listar', compact('orcamentos'));

    }

    public function adicionar(){
        return view('orcamentos.adicionar');
    }

    public function salvar(\App\Http\Requests\OrcamentoRequest $request){
        \App\Orcamento::create($request->all());

        \Session::flash('flash_message',[
            'msg'=>"Orçamento salvo com sucesso!",
            'class'=>"alert alert-success"
        ]);

        return redirect()->route('orcamentos.adicionar');
    }

    public function deletar($id){
        $orcamentos = \App\Orcamento::find($id);

        $orcamentos->delete();

        \Session::flash('flash_message',[
            'msg'=>"Deletado com sucesso!",
            'class'=>"alert alert-success"
        ]);

        return redirect()->route('orcamentos.listar');
    }

    public function editar($id){
        $orcamentos = \App\Orcamento::find($id);

        return view('orcamentos.editar', compact('orcamentos'));
    }

    public function atualizar(\App\Http\Requests\OrcamentoRequest $request, $id){
        \App\Orcamento::find($id)->update($request->all());

        \Session::flash('flash_message',[
            'msg'=>"Atualizado com sucesso!",
            'class'=>"alert alert-success"
        ]);
        
        return redirect()->route('orcamentos.listar');
    }

    public function pesquisar(Request $request){
        
        $query = $request->input('query');

        $orcamentos = \App\Orcamento::where('vendedor', 'like', "%$query%")->paginate(5);

        return view('orcamentos.listar')->with('orcamentos', $orcamentos);
    }
    
}
