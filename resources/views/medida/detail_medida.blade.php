@extends('layouts.main_layout')

@section('titulo', 'Info. Medida')
@section('sub-titulo', 'Medida Protetiva')
@section('descricao')
    <p class="mt-0 mb-0">Todas as informações referentes à medida protetiva com o ID: {{$medida->id}}</p>
@endsection


@section('content')

<div class="card mb-5">
    <div class="card-body">
        <h6 class="card-subtitle mb-3" style="text-transform: uppercase;">Informações do Processo</h6>
        <div class="list-group mb-4">
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">ID:</strong>
                <span>{{ $medida->id }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Processo SEI:</strong>
                <span>{{ $medida->processo_sei }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">N° Medida:</strong>
                <span>{{ $medida->medida_protetiva }}</span>
            </div>
        </div>

        <h6 class="card-subtitle mb-3" style="text-transform: uppercase;">Dados da Medida</h6>
        <div class="list-group mb-4">
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Assistida:</strong>
                <a href="{{ route('detalhar-assistida', ['id' => $medida->assistida->id]) }}" class="text-decoration-none text-dark">{{ $medida->assistida->nome }}</a>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Agressor:</strong>
                <a href="{{ route('detalhar-agressor', ['id' => $medida->agressor->id]) }}" class="text-decoration-none text-dark">{{ $medida->agressor->nome }}</a>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Relação:</strong>
                <span>{{ $medida->relacao_vitima_agressor }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Situação:</strong>
                <span>{{ $medida->situacao }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Nível de risco:</strong>
                <span>{{ $medida->nivel_risco }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Restrições:</strong>
                <span>{{ $medida->restricoes_agressor }}</span>
            </div>
        </div>

        <h6 class="card-subtitle mb-3" style="text-transform: uppercase;">Prazos e Status</h6>
        <div class="list-group">
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Início:</strong>
                <span>{{ $medida->inicio }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Término:</strong>
                <span>{{ $medida->previsao_termino }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Renovação:</strong>
                <span>{{ $medida->renovacao }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Revogação:</strong>
                <span>{{ $medida->renovacao }}</span>
            </div>
        </div>
    </div>
    
    <div class="card-footer text-center">
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Voltar</a>
        <a href="{{ route('form-editar-medida', ['id' => $medida->id]) }}" class="btn btn-primary me-2">Editar</a>
        <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="{{ $medida->id }}">Excluir</a>
    </div>
</div>

@include('medida/delete_medida')

@endsection