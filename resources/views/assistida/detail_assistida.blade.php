@extends('layouts.main_layout')

@section('titulo', 'Info. Assistida')
@section('sub-titulo', 'Assistida')
@section('descricao')
    <p class="mt-0 mb-0">Todas as informações referentes à assistida com o ID: {{ $assistida->id }}</p>
@endsection

@section('content')


<div class="card mb-5">
    <div class="card-body">
        <h5 class="card-subtitle mb-3 text-muted" style="text-transform: uppercase;">Dados Pessoais</h5>
        <div class="list-group mb-4">
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">ID:</strong>
                <span>{{ $assistida->id }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Nome:</strong>
                <span>{{ $assistida->nome }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Idade:</strong>
                <span>{{ $assistida->idade }}</span>
            </div>
        </div>

        <h5 class="card-subtitle mb-3 text-muted" style="text-transform: uppercase;">Endereço</h5>
        <div class="list-group">
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Logradouro:</strong>
                <span>{{ $assistida->logradouro }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Número:</strong>
                <span>{{ $assistida->numero }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Quadra:</strong>
                <span>{{ $assistida->quadra }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Bloco:</strong>
                <span>{{ $assistida->bloco }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Apartamento:</strong>
                <span>{{ $assistida->apartamento }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Bairro:</strong>
                <span>{{ $assistida->bairro }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Complemento:</strong>
                <span>{{ $assistida->complemento }}</span>
            </div>
            <div class="list-group-item">
                <strong class="d-inline-block" style="width: 200px">Município:</strong>
                <span>{{ $assistida->municipio }}</span>
            </div>
        </div>
    </div>
    
    <div class="card-footer text-center">
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Voltar</a>
        <a href="{{ route('form-editar-assistida', ['id' => $assistida->id]) }}" class="btn btn-primary me-2">Editar</a>
        <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="{{ $assistida->id }}">Excluir</a>
    </div>
</div>

@include('assistida/delete_assistida')

@endsection