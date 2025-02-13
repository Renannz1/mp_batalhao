@extends('layouts.main_layout')

@section('content')

<div class="container mb-5 mt-4">
    <div>
        <h2>Tabela de Medidas</h2>
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-5">Listando todas as medidas protetivas disponíveis.</p>
            <a href="{{ route('form-nova-medida') }}" class="btn btn-primary mb-5">Cadastrar Nova Medida</a>
        </div>
    </div> 

    <div class="card mb-4">
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
                        <th>Previsão Término</th>
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
                        <th>Previsão Término</th>
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
</div>

@endsection




