<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgressorRequest;
use App\Models\Agressor;
use Illuminate\Database\QueryException;
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
            return redirect()->route('listar-agressores')->with('error', 'Agressor não encontrado.');
        }

        try {
            $agressor->delete();
            return redirect()->route('listar-agressores')->with('success', 'Agressor excluído com sucesso.');
        } catch (QueryException $e) {
            return redirect()->route('listar-agressores')->with('error', 'Não é possível excluir este agressor, pois há medidas protetivas associadas.');
        }
    }
}
