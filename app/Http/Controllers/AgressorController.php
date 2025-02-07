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
}
