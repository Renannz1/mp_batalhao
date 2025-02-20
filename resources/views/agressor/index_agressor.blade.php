@extends('layouts.main_layout')

@section('titulo', 'Agressores')
@section('sub-titulo', 'Agressores')
@section('descricao')
    <p class="mt-0 mb-0">Todas os agressores cadastrados no sistema.</p>
    <a href="{{ route('form-novo-agressor') }}" class="btn btn-primary mt-0 mb-0">Cadastrar Novo Agressor</a>
@endsection

@section('content')

{{-- notificação de exclusão --}}
@if(session('error'))
    <div class="alert alert-danger mb-4">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success mb-4">
        {{ session('success') }}
    </div>
@endif
{{-- notificação de exclusão --}}


<div class="card mb-5">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Banco de dados de Agressores
    </div>
        <div class="card-body">

            <table id="datatablesSimple" class="table table-bordered table-responsive text-center">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>Logradouro</th>
                        <th>N°</th>
                        <th>QD</th>
                        <th>BL</th>
                        <th>APT°</th>
                        <th>Bairro</th>
                        <th>Complemento</th>
                        <th>Munícipio</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agressores as $agressor)
                    <tr>
                        <td>{{ $agressor->id }}</td>
                        <td>{{ $agressor->nome }}</td>
                        <td>{{ $agressor->idade }}</td>
                        <td>{{ $agressor->telefone }}</td>
                        <td>{{ $agressor->logradouro }}</td>
                        <td>{{ $agressor->numero }}</td>
                        <td>{{ $agressor->quadra }}</td>
                        <td>{{ $agressor->bloco }}</td>
                        <td>{{ $agressor->apartamento }}</td>
                        <td>{{ $agressor->bairro }}</td>
                        <td>{{ $agressor->complemento }}</td>
                        <td>{{ $agressor->municipio }}</td>
                        <td>
                            <a href="{{ route('detalhar-agressor', ['id' => $agressor->id]) }}" class="">
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