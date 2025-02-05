<?php

namespace App\Http\Controllers;

use App\Models\Assistida;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssistidaController extends Controller
{
    public function listarAssistidas(){
        $assistidas = Assistida::all();
        return view('assistida.index_assistida', ['assistidas' => $assistidas]);
    }

    // funcao para mostrar a pagina com o formulario para criar uma nova assistida
    public function novaAssistida() : View{
        return view('assistida/add_assistida');
    }

    // funcao que vai fazer a validacao e submissao dos dados 
    public function criarAssistida(Request $request){
        // validacao do formulario
        $request->validate([
            'nome' => 'required|string',
            'idade' => 'nullable',
            // 'telefone' => 'nullable|unique:assistida',
            'logradouro' => 'required',
            // 'numero' => 'nullable',
            // 'quadra' => 'nullable',
            // 'bloco' => 'nullable',
            // 'apartamento' => 'nullable',
            'bairro' => 'required',
            // 'complemento' => 'nullable',
            'municipio' => 'required',
        ]);

        Assistida::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'logradouro' => $request->logradouro,
            'bairro' => $request->bairro,
            'municipio' => $request->municipio,
        ]);

        return redirect()->route('listar-assistidas');
    }

    public function detalharAssistida() : View{
        return view('assistida.detail_assistida');
    }

    public function editarAssistida() : View {
        return view('assistida.update_assistida');
    }

    public function excluirAssistida() : View {
        return view('assistida.delete_assistida');
    }

}
