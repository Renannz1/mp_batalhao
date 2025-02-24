<?php

namespace App\Http\Controllers;

use App\Models\Agressor;
use App\Models\Assistida;
use App\Models\Medida;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalAssistidas = Assistida::count();
        $assistidasGuanambi = Assistida::where('municipio', 'Guanambi')->count();
        $assistidasCandiba = Assistida::where('municipio', 'Candiba')->count();
        $assistidasCariranha = Assistida::where('municipio', 'Cariranha')->count();
        
        $totalAgressores = Agressor::count();
        $agressoresGuanambi = Agressor::where('municipio', 'Guanambi')->count();
        $agressoresCandiba = Agressor::where('municipio', 'Candiba')->count();
        $agressoresCariranha = Agressor::where('municipio', 'Cariranha')->count();

        $totalMedidas = Medida::count();
        $ultimasMedidas = Medida::orderBy('inicio', 'desc')->take(10)->get();
        $medidasNvBaixo = Medida::where('nivel_risco', 'Baixo')->count();
        $medidasNvMedio = Medida::where('nivel_risco', 'Médio')->count();
        $medidasNvAlto = Medida::where('nivel_risco', 'Alto')->count();
        $medidasAtivas = Medida::where('situacao', 'Ativa')->count();
        $medidasInativas = Medida::where('situacao', 'Inativa')->count();
        $medidasFinalizadas = Medida::where('situacao', 'Finalizada')->count();
        $medidasAnoInicio = Medida::selectRaw('YEAR(inicio) as ano, COUNT(*) as total')
            ->groupBy('ano')
            ->orderBy('ano', 'asc')
            ->pluck('total', 'ano')
            ->toArray();
        
        return view('dashboard', compact(
            'totalAssistidas',
            'assistidasGuanambi', 'assistidasCandiba', 'assistidasCariranha',
            
            
            'totalAgressores', 
            'agressoresGuanambi', 'agressoresCandiba', 'agressoresCariranha',
            
            'totalMedidas', 
            'ultimasMedidas', 'medidasNvBaixo', 'medidasNvMedio', 'medidasNvAlto',
            'medidasAtivas', 'medidasInativas', 'medidasFinalizadas', 'medidasAnoInicio',
        ));
    }
    

}
