<?php

namespace App\Http\Controllers;

use App\Models\Agressor;
use Illuminate\Http\Request;

class AgressorController extends Controller
{
    public function listarAgressores(){
        $agressores = Agressor::all();
        return view('agressor.index_agressor', compact('agressores'));
    }

    public function formNovoAgressor(){
        return view('agressor.add_agressor');
    }

    public function criarAgressor(Request $request){
        $request->validate([
            'nome' => 'required|string',
            'idade' => 'nullable',
            'telefone' => 'nullable|unique:agressores',
            'logradouro' => 'required',
            'numero' => 'nullable',
            'quadra' => 'nullable',
            'bloco' => 'nullable',
            'apartamento' => 'nullable',
            'bairro' => 'required',
            'complemento' => 'nullable',
            'municipio' => 'required',
        ]);

        Agressor::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'telefone' => $request->telefone,
            'logradouro' => $request->logradouro,
            'numero' => $request->numero, 
            'quadra' => $request->quadra, 
            'bloco' => $request->bloco, 
            'apartamento' => $request->apartamento, 
            'bairro' => $request->bairro, 
            'complemento' => $request->complemento, 
            'municipio' => $request->municipio, 
        ]);

        return redirect()->route('listar-agressores');
    }

    public function detalharAgressor($agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return "Agressor não encontrado";
        }

        return view('agressor.detail_agressor', compact('agressor'));
    }

    public function formEditarAgressor($agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return "Agressor não encontrado.";
        }

        return view('agressor.update_agressor', compact('agressor'));
    }

    public function atualizarAgressor(Request $request, $agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return "Agressor não encontrado.";
        }

        $request->validate([
            'nome' => 'required|string',
            'idade' => 'nullable',
            'telefone' => 'nullable|unique:agressores',
            'logradouro' => 'required',
            'numero' => 'nullable',
            'quadra' => 'nullable',
            'bloco' => 'nullable',
            'apartamento' => 'nullable',
            'bairro' => 'required',
            'complemento' => 'nullable',
            'municipio' => 'required',
        ]);

        $agressor->update([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            'telefone' => $request->input('telefone'),
            'logradouro' => $request->input('logradouro'),
            'numero' => $request->input('numero'),
            'quadra' => $request->input('quadra'),
            'bloco' => $request->input('bloco'),
            'apartamento' => $request->input('apartamento'),
            'bairro' => $request->input('bairro'),
            'complemento' => $request->input('complemento'),
            'municipio' => $request->input('municipio'),
        ]);

        return redirect()->route('listar-agressores');
    }

    public function excluirAgressor($agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return "Agressor não encontrado.";
        }

        return view('agressor.delete_agressor', compact('agressor'));
    }

    public function confirmExcluirAgressor($agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return "Agressor não encontrado.";
        }

        $agressor->delete();

        return redirect()->route('listar-agressores');
    }
}
