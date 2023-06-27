<?php

namespace App\Http\Controllers;

use App\Models\Trabalhos;
use Illuminate\Http\Request;



class TrabalhosController extends Controller
{
    public function create()
    {
        return view('cadtrab');
    }
    public function cadastrar(Request $request){
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'dataentrega' => 'required',
            'requisitos'=> 'required',
            'pagamento' => 'required',
            'autor'=> 'required',
        ]);
            $trabalho = new Trabalhos;

            $trabalho->titulo = $request-> input('tituloFormularios');
            $trabalho->descricao = $request-> input('descricaoFormularios');
            $trabalho->requisitos = $request-> input('requisitosFormularios');
            $trabalho->pagamento =$request-> input('valorPagamentoFormulario');
            $trabalho->dataentrega = $request-> input('dataEntregaFormularios');
            $trabalho->datapublicacao = date('d-m-y');
            $trabalho->statusT = 'aguardando';
            $trabalho->autor = session('user');

            $trabalho->save();

            return redirect('/');
                   
    }
    public function pesquisar($id){
        $trabalho = Trabalhos::find($id);
    }
    public function exibirTrabalhos()
    {
        $listaTrabalhos = Trabalhos::all();
        return view('trabalhos', ['listaTrabalhos' => $listaTrabalhos]);
    }
}
