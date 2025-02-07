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
            'logradouro' => 'required',
            'bairro' => 'required',
            'municipio' => 'required'
        ]);

        Agressor::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'logradouro' => $request->logradouro,
            'bairro' => $request->bairro,
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

        $agressor->update([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            'logradouro' => $request->input('logradouro'),
            'bairro' => $request->input('bairro'),
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
