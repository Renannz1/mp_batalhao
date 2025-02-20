<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedidaRequest;
use App\Models\Medida;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    public function listarMedidas(){
        $medidas = Medida::all();
        return view('medida.index_medida', compact('medidas'));
    }

    public function formNovaMedida(){
        return view('medida.add_medida');
    }
    
    public function criarMedida(MedidaRequest $request){
        $data = $request->validated();
            
        Medida::create($data);

        return redirect()->route('listar-medidas');   
    }

    public function detalharMedida($medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida_id) {
            return redirect()->route('listar-medidas')->with('error', 'Medida Protetiva não encontrada.');
        }

        return view('medida.detail_medida', compact('medida'));
    }

    public function formEditarMedida($medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida_id) {
            return redirect()->route('listar-medidas')->with('error', 'Medida Protetiva não encontrada.');
        }

        return view('medida.update_medida', compact('medida'));
    }

    public function  atualizarMedida(MedidaRequest $request, $medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida) {
            return redirect()->route('listar-medidas')->with('error', 'Medida Protetiva não encontrada.');
        }

        $data = $request->validated();
        
       $medida->update($data);

       return redirect()->route('listar-medidas');
    }

    public function excluirMedida($medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida_id) {
            return redirect()->route('listar-medidas')->with('error', 'Medida Protetiva não encontrada.');
        }
        
        try {
            $medida->delete();
            return redirect()->route('listar-medidas')->with('success', 'Medida excluída com sucesso.');
        } catch (QueryException $e) {
            return redirect()->route('listar-medidas')->with('error', 'Ocorreu um erro ao tentar excluir a Medida.');
        }
    }
    
}
