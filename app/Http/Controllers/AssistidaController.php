<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssistidaRequest;
use App\Models\Assistida;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssistidaController extends Controller
{
    public function listarAssistidas(){
        $assistidas = Assistida::all();
        return view('assistida.index_assistida', ['assistidas' => $assistidas]);
    }

    public function formNovaAssistida(){
        return view('assistida.add_assistida');
    }

    public function criarAssistida(AssistidaRequest $request){
        $data = $request->validated();


        try {
            Assistida::create($data);
            return redirect()->route('listar-assistidas')->with('success', 'Assistida cadastrada com sucesso.');
        } catch (QueryException $e) {
            return redirect()->route('listar-assistidas')->with('error', 'Não foi possível cadastrar a assistida.');
        }
    }

    public function detalharAssistida($assistida_id){
        $assistida = Assistida::find($assistida_id);

        if (!$assistida) {
            return redirect()->route('listar-assistidas')->with('error', 'Assistida não encontrada.');
        }

        return view('assistida.detail_assistida', compact('assistida'));
    }

    public function formEditarAssistida(Request $request, $id) {
        $assistida = Assistida::find($id);

        if (!$assistida) {
            return redirect()->route('listar-assistidas')->with('error', 'Assistida não encontrada.');
        }

        return view('assistida.update_assistida', compact('assistida'));
    }

    public function atualizarAssistida(AssistidaRequest $request, $id){
        $assistida = Assistida::find($id);

        if (!$assistida) {
            return redirect()->route('listar-assistidas')->with('error', 'Assistida não encontrada.');
        }

        $data = $request->validated();

        try {
            $assistida->update($data);
            return redirect()->route('listar-assistidas')->with('success', 'Assistida atualizada com sucesso.');
        } catch (QueryException $e) {
            return redirect()->route('listar-assistidas')->with('error', 'Não foi possível atualizar a assistida.');
        }
    }

    public function excluirAssistida($id){
        $assistida = Assistida::find($id);
    
        if (!$assistida) {
            return redirect()->route('listar-assistidas')->with('error', 'Assistida não encontrada.');
        }
    
        try {
            $assistida->delete();
            return redirect()->route('listar-assistidas')->with('success', 'Assistida excluída com sucesso.');
        } catch (QueryException $e) {
            return redirect()->route('listar-assistidas')->with('error', 'Não é possível excluir esta assistida, pois há medidas protetivas associadas.');
        }
    }
    
}
