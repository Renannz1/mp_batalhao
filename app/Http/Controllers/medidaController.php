<?php

namespace App\Http\Controllers;

use App\Models\Assistida;
use App\Models\Medida;
use Illuminate\Http\Request;

class medidaController extends Controller
{
    public function listarMedidas(){
        $medidas = Medida::all();
        return view('medida.index_medida', compact('medidas'));
    }

    public function formNovaMedida(){
        return view('medida.add_medida');
    }
    
    public function criarMedida(Request $request){
        $request->validate([
            'processo_sei' => 'required',
            'medida_protetiva' => 'required',
            'assistida_id' => 'required',
            'situacao' => 'required',
            'nivel_risco' => 'required',
            'agressor_id' => 'required',
            'relacao_vitima_agressor' => 'required',
            'restricoes_agressor' => 'required',
            'inicio' => 'required',
            // 'previsao_termino' => 'nullable',
            // 'renovacao' => 'nullable',
            // 'revogacao' => 'nullable',
        ]);      
        
        Medida::create([
            'processo_sei' => $request->processo_sei,
            'medida_protetiva' => $request->medida_protetiva,
            'assistida_id' => $request->assistida_id,
            'situacao' => $request->situacao,
            'nivel_risco' => $request->nivel_risco,
            'agressor_id' => $request->agressor_id,
            'relacao_vitima_agressor' => $request->relacao_vitima_agressor,
            'restricoes_agressor' => $request->restricoes_agressor,
            'inicio' => $request->inicio,
            // 'previsao_termino' => $request->previsao_termino,
            // 'renovacao' => $request->renovacao,
            // 'revogacao' => $request->revogacao,
        ]);

        return redirect()->route('listar-medidas');   
    }

    public function detalharMedida($medida_id){
        $medida = Medida::find($medida_id);
        return view('medida.detail_medida', compact('medida'));
    }

    public function formEditarMedida($medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida_id) {
            return "medida não encontrada.";
        }

        return view('medida.update_medida', compact('medida'));
    }

    public function  atualizarMedida(Request $request, $medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida) {
            return "medida não encontrada.";
        }

        $request->validate([
            'processo_sei' => 'required',
            'medida_protetiva' => 'required',
            'assistida_id' => 'required',
            'situacao' => 'required',
            'nivel_risco' => 'required',
            'agressor_id' => 'required',
            'relacao_vitima_agressor' => 'required',
            'restricoes_agressor' => 'required',
            'inicio' => 'required',
            // 'previsao_termino' => 'nullable',
            // 'renovacao' => 'nullable',
            // 'revogacao' => 'nullable',
        ]); 
        
       $medida->update([
        'processo_sei' => $request->processo_sei,
        'medida_protetiva' => $request->medida_protetiva,
        'assistida_id' => $request->assistida_id,
        'situacao' => $request->situacao,
        'nivel_risco' => $request->nivel_risco,
        'agressor_id' => $request->agressor_id,
        'relacao_vitima_agressor' => $request->relacao_vitima_agressor,
        'restricoes_agressor' => $request->restricoes_agressor,
        'inicio' => $request->inicio,
        // 'previsao_termino' => $request->previsao_termino,
        // 'renovacao' => $request->renovacao,
        // 'revogacao' => $request->revogacao,
       ]);

       return redirect()->route('listar-medidas');
    }

    public function excluirMedida($medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida) {
            Return "medida não encontrada.";
        }

        return view('medida.delete_medida', compact('medida'));
    }

    public function confirmExcluirMedida($medida_id){
        $medida = Medida::find($medida_id);

        if (!$medida_id) {
            return 'medida não encontrada';
        }
        
        $medida->delete();

        return redirect()->route('listar-medidas');
    }
}
