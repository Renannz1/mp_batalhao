@extends('layouts.main_layout_dashboard')

@section('titulo', 'Página Inicial')
@section('sub-titulo', 'Dashboard')
@section('descricao')
    <p class="mt-0 mb-0">Informações gerais do sistema.</p>
@endsection

@section('content')

<main>
    <div class="card-5">

        {{-- cards --}}
        <div class="row justify-content-between">
            
            {{-- card 1 --}}
            <div class="col-6 col-lg-4 col-md-6 mb-4">
                <div class="card border border-primary">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-user-shield text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted fw-semibold">Total de Assistidas</h6>
                                <h6 class="fw-bold mb-0">{{ $totalAssistidas }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- card 2 --}}
            <div class="col-6 col-lg-4 col-md-6 mb-4">
                <div class="card border border-danger">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-danger rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-user text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted fw-semibold">Total de Agressores</h6>
                                <h6 class="fw-bold mb-0">{{ $totalAgressores }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- card 3 --}}
            <div class="col-6 col-lg-4 col-md-6 mb-4">
                <div class="card border border-success">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-success rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-shield text-white"></i>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted fw-semibold">Total de Medidas</h6>
                                <h6 class="fw-bold mb-0">{{ $totalMedidas }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        {{-- gráfico --}}
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <i class="fas fa-chart-bar me-1"></i>
                        Gráfico Dinâmico
                    </div>
                    <div class="d-flex gap-3">
                        <div class="mb-0">
                            <select id="tipoTabela" class="form-select">
                                <option value="medidas">Medidas</option>
                                <option value="assistidas">Assistidas</option>
                                <option value="agressores">Agressores</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <select id="filtroGrafico" class="form-select"></select>
                        </div>
                    </div>
                </div>
            </div>
            <canvas class="card-body" id="GraficoDinamico" width="100%" height="30"></canvas>
        </div>
            
        <script id="dados-graficos" type="application/json">
            {!! json_encode([
                'medidas' => [
                    'nivel_risco' => [
                        'labels' => ['Baixo', 'Médio', 'Alto'],
                        'values' => [$medidasNvBaixo, $medidasNvMedio, $medidasNvAlto]
                    ],
                    'situacao' => [
                        'labels' => ['Ativa', 'Finalizada', 'Renovada'],
                        'values' => [$medidasAtivas, $medidasFinalizadas, $medidasRenovadas]
                    ],
                    'por_ano' => [
                        'labels' => array_keys($medidasAnoInicio),
                        'values' => array_values($medidasAnoInicio)
                    ],
                ],
                'assistidas' => [
                    'municipio' => [
                        'labels' => ['Guanambi', 'Candiba', 'Cariranha'],
                        'values' => [$assistidasGuanambi, $assistidasCandiba, $assistidasCariranha]
                    ]
                ],
                'agressores' => [
                    'municipio' => [
                        'labels' => ['Guanambi', 'Candiba', 'Cariranha'],
                        'values' => [$agressoresGuanambi, $agressoresCandiba, $agressoresCariranha]
                    ]
                ]
            ]) !!}
        </script>

        {{-- tabela --}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Últimas Medidas Cadastradas
            </div>

            
            <div class="card-body">
                <table id="datatablesSimple" class="text-center table table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Processo SEI</th>
                            <th>Medida Protetiva</th>
                            <th>Assistida</th>
                            <th>Situação</th>
                            <th>Risco</th>
                            <th>Agressor</th>
                            <th>Relação VA</th>
                            <th>Restrições Agressor</th>
                            <th>Início</th>
                            {{-- <th>Término</th>
                            <th>Renovação</th>
                            <th>Revogação</th> --}}
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ultimasMedidas as $medida)
                        <tr>
                            <td>{{ $medida->id }}</td>
                            <td>{{ $medida->processo_sei }}</td>
                            <td>{{ $medida->medida_protetiva }}</td>
                            <td><a href="{{ route('detalhar-assistida', ['id' => $medida->assistida->id]) }}" class="text-decoration-none text-dark">
                                {{ $medida->assistida->nome }}
                            </a></td>
                            <td class="text-center">
                                <span class="badge 
                                    @if($medida->situacao == 'Ativa') bg-success
                                    @elseif($medida->situacao == 'Finalizada') bg-secondary
                                    @elseif($medida->situacao == 'Renovada') bg-primary
                                    @else bg-secondary
                                    @endif">
                                    {{ $medida->situacao }}
                                </span>
                            </td>
                            <td class="text-center">
                                <span class="badge 
                                    @if($medida->nivel_risco == 'Baixo') bg-success
                                    @elseif($medida->nivel_risco == 'Médio') bg-warning
                                    @elseif($medida->nivel_risco == 'Alto') bg-danger
                                    @else bg-secondary
                                    @endif">
                                    {{ $medida->nivel_risco }}
                                </span>
                            </td>
                            <td><a href="{{ route('detalhar-agressor', ['id' => $medida->agressor->id]) }}" class="text-decoration-none text-dark">
                                {{ $medida->agressor->nome }}
                            </a></td>
                            <td>{{ $medida->relacao_vitima_agressor }}</td>
                            <td>{{ $medida->restricoes_agressor }}</td>
                            <td>{{ $medida->inicio }}</td>
                            {{-- <td>{{ $medida->previsao_termino }}</td>
                            <td>{{ $medida->renovacao }}</td>
                            <td>{{ $medida->revogacao }}</td> --}}
                            <td>
                                <a href="{{ route('detalhar-medida', ['id' => $medida->id]) }}" class="">
                                    <i class="fas fa-eye"></i> 
                                </a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</main>
@endsection