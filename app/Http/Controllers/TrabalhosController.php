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

            $trabalho->titulo = $request->tituloFormulario;
            $trabalho->descricao = $request->descricaoFormulario;
            $trabalho->requisitos = $request->requisitosFormulario;
            $trabalho->pagamento =$request->valorPagamentoFormulario;
            $trabalho->dataentrega = date('Y-m-d', strtotime($request->input('dataEntregaFormulario')));
            $trabalho->datapublicacao = date('d-m-y');
            $trabalho->statusT = 'aguardando';
            $trabalho->autor = $request->autor;

            $trabalho->save();

            return redirect('exibir');
                   
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
