@extends('layouts.main_layout')

@section('content')
<h1>Excluir Medida {{ $medida->medida_protetiva }}</h1>
<h2></h2>

<form action="{{ route('excluir-medida', ['id' => $medida->id])}}" method="post">
    <div>
        <ul>
            <li>Processo SEI: {{ $medida->processo_sei }}</li>
            <li>Assistida: {{ $medida->assistida->nome }}</li>
            <li>Agressor: {{ $medida->agressor->nome }}</li>
            <li>Data de Inicio: {{ $medida->inicio }}</li>
        </ul>
    </div>
    <div>
        <button><a href="{{ route('listar-medidas') }}">Cancelar</a></button>
        <button><a href="{{ route('excluir-medida', ['id' => $medida->id]) }}">Excluir</a></button>
    </div>
</form>  
@endsection


