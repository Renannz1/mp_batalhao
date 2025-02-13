<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgressorRequest;
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

    public function criarAgressor(AgressorRequest $request){
        $data = $request->validated();

        Agressor::create($data);

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

    public function atualizarAgressor(AgressorRequest $request, $agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return "Agressor não encontrado.";
        }

        $data = $request->validated();

        $agressor->update($data);

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
