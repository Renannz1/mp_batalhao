<?php

namespace App\Http\Controllers;

use App\Models\Agressor;
use App\Models\Assistida;
use App\Models\Medida;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        // para os cards 
        $totalAssistidas = Assistida::count();
        $totalAgressores = Agressor::count();
        $totalMedidas = Medida::count();

        // para a tabela de últimas medidas
        $ultimasMedidas = Medida::orderBy('created_at', 'desc')->take(10)->get();
    

        // para os gráficos
        // Dados para o gráfico de Nível de Risco
        $medidasNvBaixo = Medida::where('nivel_risco', 'Baixo')->count();
        $medidasNvMedio = Medida::where('nivel_risco', 'Médio')->count();
        $medidasNvAlto = Medida::where('nivel_risco', 'Alto')->count();
    
        // Dados para o gráfico de Status da Medida
        $medidasStAtiva = Medida::where('situacao', 'Ativa')->count();
        $medidasStInativa = Medida::where('situacao', 'Inativa')->count();
        $medidasFinalizada = Medida::where('situacao', 'Finalizada')->count();
    
        // Dados para o gráfico de Medidas por Ano
        $medidasPorAno = Medida::selectRaw('YEAR(created_at) as ano, COUNT(*) as total')
            ->groupBy('ano')
            ->orderBy('ano', 'asc')
            ->pluck('total', 'ano')
            ->toArray();
    
        // Dados para o gráfico de Medidas por Mês no Ano
        $anos = array_keys($medidasPorAno); // Lista de anos disponíveis
        $medidasPorMes = [];
    
        foreach ($anos as $ano) {
            $dadosMes = Medida::selectRaw('MONTHNAME(created_at) as mes, COUNT(*) as total')
                ->whereYear('created_at', $ano)
                ->groupBy('mes')
                ->orderByRaw("FIELD(mes, 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro')")
                ->pluck('total', 'mes')
                ->toArray();
            
            $medidasPorMes[$ano] = $dadosMes;
        }
    
        return view('dashboard', compact(
            'totalAssistidas', 'totalAgressores', 'totalMedidas', 'ultimasMedidas',
            'medidasNvBaixo', 'medidasNvMedio', 'medidasNvAlto',
            'medidasStAtiva', 'medidasStInativa', 'medidasFinalizada',
            'medidasPorAno', 'medidasPorMes', 'anos'
        ));
    }
    

}
