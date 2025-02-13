@extends('layouts.main_layout')

@section('titulo', 'Agressores')
@section('sub-titulo', 'Agressores')
@section('descricao')
    <p class="mt-0 mb-0">Todas os agressores cadastrados no sistema.</p>
    <a href="{{ route('form-nova-assistida') }}" class="btn btn-primary mt-0 mb-0">Cadastrar Novo Agressor</a>
@endsection

@section('content')

<div class="card mb-5">
        <div class="card-body">

            <table id="datatablesSimple">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>Logradouro</th>
                        <th>Número</th>
                        <th>Quadra</th>
                        <th>Bloco</th>
                        <th>Apartamento</th>
                        <th>Bairro</th>
                        <th>Complemento</th>
                        <th>Munícipio</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>Logradouro</th>
                        <th>Número</th>
                        <th>Quadra</th>
                        <th>Bloco</th>
                        <th>Apartamento</th>
                        <th>Bairro</th>
                        <th>Complemento</th>
                        <th>Munícipio</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
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
                            <a href="{{ route('detalhar-agressor', ['id' => $agressor->id]) }}" class="">Detalhar</a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
</div>

@endsection