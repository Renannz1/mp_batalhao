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
    public function formNovaAssistida(){
        return view('assistida.add_assistida');
    }

    // funcao que vai fazer a validacao e submissao dos dados 
    public function criarAssistida(Request $request){
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

    public function detalharAssistida($assistida_id){
        $assistida = Assistida::find($assistida_id);

        if (!$assistida) {
            return "Assistida não encontrada.";
        }

        return view('assistida.detail_assistida', compact('assistida'));
    }

    public function formEditarAssistida(Request $request, $id) {
        $assistida = Assistida::find($id);

        if (!$assistida) {
            return "Assistida não encontrada.";
        }

        return view('assistida.update_assistida', compact('assistida'));
    }

    public function atualizarAssistida(Request $request, $id){
        $assistida = Assistida::find($id);

        if (!$assistida) {
            return "Ocorreu um erro ao tentar atualizar os dados. Id da assistida inválido.";
        }

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

        $assistida->update([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            // 'telefone' => $request->input('telefone'),
            'logradouro' => $request->input('logradouro'),
            // 'numero' => $request->input('numero'),
            // 'quadra' => $request->input('quadra'),
            // 'bloco' => $request->input('bloco'),
            // 'apartamento' => $request->input('apartamento'),
            'bairro' => $request->input('bairro'),
            // 'complemento' => $request->input('complemento'),
            'municipio' => $request->input('municipio'),
        ]);

        return redirect()->route('listar-assistidas');
    }

    public function excluirAssistida($id){
        $assistida = Assistida::find($id);

        if (!$assistida) {
            return "Assistida não encontrada.";
        }

        return view('assistida.delete_assistida', compact('assistida'));
    }

    public function confirmExcluirAssistida($id){
        $assistida = Assistida::find($id);

        if (!$assistida) {
            return "Assistida não encontrada.";
        }

        $assistida->delete();

        return redirect()->route('listar-assistidas');
    }

}
