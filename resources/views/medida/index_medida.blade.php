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
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Processo SEI</th>
                    <th>Medida Protetiva</th>
                    <th>Assistida</th>
                    <th>Situação</th>
                    <th>Nível de Risco</th>
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
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Processo SEI</th>
                    <th>Medida Protetiva</th>
                    <th>Assistida</th>
                    <th>Situação</th>
                    <th>Nível de Risco</th>
                    <th>Agressor</th>
                    <th>Relação VA</th>
                    <th>Restrições Agressor</th>
                    <th>Início</th>
                    <th>Término</th>
                    <th>Renovação</th>
                    <th>Revogação</th>
                    <th>Ação</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($medidas as $medida)
                <tr>
                    <td>{{ $medida->id }}</td>
                    <td>{{ $medida->processo_sei }}</td>
                    <td>{{ $medida->medida_protetiva }}</td>
                    <td><a href="{{ route('detalhar-assistida', ['id' => $medida->assistida->id]) }}">
                        {{ $medida->assistida->nome }}
                    </a></td>
                    <td>{{ $medida->situacao }}</td>
                    <td>{{ $medida->nivel_risco }}</td>
                    <td><a href="{{ route('detalhar-agressor', ['id' => $medida->agressor->id]) }}">
                        {{ $medida->agressor->nome }}
                    </a></td>
                    <td>{{ $medida->relacao_vitima_agressor }}</td>
                    <td>{{ $medida->restricoes_agressor }}</td>
                    <td>{{ $medida->inicio }}</td>
                    <td>{{ $medida->previsao_termino }}</td>
                    <td>{{ $medida->renovacao }}</td>
                    <td>{{ $medida->revogacao }}</td>
                    <td>
                        <a href="{{ route('detalhar-medida', ['id' => $medida->id]) }}" class="">Detalhar</a>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection




