@extends('layouts.main_layout')

@section('content')
    
<h1>Confirme a Exclusão</h1>
<h3>Deseja realmente excluir o agressor: </h3>
<ul>
    <li>{{$agressor->id}}</li>
    <li>{{$agressor->nome}}</li>
    <li>{{$agressor->idade}}</li>
    <li>{{$agressor->bairro}}</li>
</ul>
<button><a href="{{ route('listar-agressores') }}">Cancelar</a></button>
<button><a href="{{ route('confirm-excluir-agressor', ['id' => $agressor->id]) }}">Excluir</a></button>

@endsection


