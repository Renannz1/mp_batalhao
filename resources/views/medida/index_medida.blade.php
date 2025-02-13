@extends('layouts.main_layout')

@section('titulo', 'Medidas')
@section('sub-titulo', 'Medidas Protetivas')
@section('descricao')
    <p class="mt-0 mb-0">Todas as medidas protetivas cadastradas no sistema.</p>
    <a href="{{ route('form-nova-medida') }}" class="btn btn-primary mt-0 mb-0">Cadastrar Nova Medida</a>
@endsection

@section('content')

<div class="card mb-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Banco de Dados de Medidas Protetivas
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
                    <th>Término</th>
                    <th>Renovação</th>
                    <th>Revogação</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medidas as $medida)
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
                            @elseif($medida->situacao == 'Revogada') bg-danger
                            @elseif($medida->situacao == 'Pendente') bg-warning
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
                    <td>{{ $medida->previsao_termino }}</td>
                    <td>{{ $medida->renovacao }}</td>
                    <td>{{ $medida->revogacao }}</td>
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

@endsection
