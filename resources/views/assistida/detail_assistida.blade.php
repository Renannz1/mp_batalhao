@extends('layouts.main_layout')

@section('content')

<h1>Perfil</h1>

<ul>
    <li>Nome: {{ $assistida->nome }}</li>
    <li>Idade: {{ $assistida->idade }}</li>
    <li>Bairro: {{ $assistida->bairro }}</li>
    <li>Municipio: {{ $assistida->municipio }}</li>
</ul>

<div class="card-footer text-center">
    <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Voltar</a>
    <a href="{{ route('form-editar-assistida', ['id' => $assistida->id]) }}" class="btn btn-primary me-2">Editar</a>
    <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="{{ $assistida->id }}">Excluir</a>
</div>

@endsection




