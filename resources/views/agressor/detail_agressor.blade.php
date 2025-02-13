@extends('layouts.main_layout')

@section('titulo', 'Info. Agressor')
@section('sub-titulo', 'Agressor')
@section('descricao')
    <p class="mt-0 mb-0">Todas as informações referentes ao agressor com o ID: {{ $agressor->id }}</p>
@endsection

@section('content')

<div class="card mb-5">
    <div class="card-body">
        <h5 class="card-subtitle mb-3 text-muted" style="text-transform: uppercase;">Dados Pessoais</h5>
        <div class="list-group mb-4">
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">ID:</strong>
                <span>{{ $agressor->id }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Nome:</strong>
                <span>{{ $agressor->nome }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Idade:</strong>
                <span>{{ $agressor->idade }}</span>
            </div>
        </div>

        <h5 class="card-subtitle mb-3 text-muted" style="text-transform: uppercase;">Endereço</h5>
        <div class="list-group">
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Logradouro:</strong>
                <span>{{ $agressor->logradouro }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Número:</strong>
                <span>{{ $agressor->numero }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Quadra:</strong>
                <span>{{ $agressor->quadra }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Bloco:</strong>
                <span>{{ $agressor->bloco }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Apartamento:</strong>
                <span>{{ $agressor->apartamento }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Bairro:</strong>
                <span>{{ $agressor->bairro }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Complemento:</strong>
                <span>{{ $agressor->complemento }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Município:</strong>
                <span>{{ $agressor->municipio }}</span>
            </div>
        </div>
    </div>
    
    <div class="card-footer text-center">
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Voltar</a>
        <a href="{{ route('form-editar-agressor', ['id' => $agressor->id]) }}" class="btn btn-primary me-2">Editar</a>
        <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="{{ $agressor->id }}">Excluir</a>
    </div>
</div>

@include('agressor/delete_agressor')

@endsection