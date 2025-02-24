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

        $totalAgressores = Agressor::count();

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
            'totalAssistidas', 'totalAgressores', 'totalMedidas', 'ultimasMedidas',
            'medidasNvBaixo', 'medidasNvMedio', 'medidasNvAlto',
            'medidasAtivas', 'medidasInativas', 'medidasFinalizadas',
            'medidasAnoInicio',
        ));
    }
    

}
