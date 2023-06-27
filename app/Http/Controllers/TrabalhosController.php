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
    public function store(Request $request){
            $trabalho = new Trabalhos;

            $trabalho->titulo = $request->tituloFormularios;
            $trabalho->descricao = $request->descricaoFormularios;
            $trabalho->requisitos = $request->requisitosFormularios;
            $trabalho->pagamento =$request->valorPagamentoFormulario;
            $trabalho->dataentrega = $request->dataEntregaFormularios;
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
