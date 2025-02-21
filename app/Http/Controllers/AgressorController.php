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

        try {
            Agressor::create($data);
            return redirect()->route('listar-agressores')->with('success', 'Agressor cadastrado com sucesso.');
        } catch (QueryException $e) {
            return redirect()->route('listar-agressores')->with('error', 'Não foi possível cadastrar o agressor.');
        }
    }

    public function detalharAgressor($agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return redirect()->route('listar-agressores')->with('error', 'Agressor não encontrado.');
        }

        return view('agressor.detail_agressor', compact('agressor'));
    }

    public function formEditarAgressor($agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return redirect()->route('listar-agressores')->with('error', 'Agressor não encontrado.');
        }

        return view('agressor.update_agressor', compact('agressor'));
    }

    public function atualizarAgressor(AgressorRequest $request, $agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return redirect()->route('listar-agressores')->with('error', 'Agressor não encontrado.');
        }

        $data = $request->validated();

        try {
            $agressor->update($data);
            return redirect()->route('listar-agressores')->with('success', 'Agressor atualizado com sucesso.');
        } catch (QueryException $e) {
            return redirect()->route('listar-agressores')->with('error', 'Não foi possível atualizar o agressor.');
        }
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
