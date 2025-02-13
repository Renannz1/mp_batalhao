@extends('layouts.main_layout')

@section('titulo', 'Assistidas')
@section('sub-titulo', 'Assistidas')
@section('descricao')
    <p class="mt-0 mb-0">Todas as assistidas cadastradas no sistema.</p>
    <a href="{{ route('form-nova-assistida') }}" class="btn btn-primary mt-0 mb-0">Cadastrar Nova Assistida</a>
@endsection


@section('content')

<div class="card mb-5">
        <div class="card-body">

            <table id="datatablesSimple" class="table table-bordered table-responsive text-center">

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
                <tbody>
                    @foreach ($assistidas as $assistida)
                    <tr>
                        <td>{{ $assistida->id }}</td>
                        <td>{{ $assistida->nome }}</td>
                        <td>{{ $assistida->idade }}</td>
                        <td>{{ $assistida->telefone }}</td>
                        <td>{{ $assistida->logradouro }}</td>
                        <td>{{ $assistida->numero }}</td>
                        <td>{{ $assistida->quadra }}</td>
                        <td>{{ $assistida->bloco }}</td>
                        <td>{{ $assistida->apartamento }}</td>
                        <td>{{ $assistida->bairro }}</td>
                        <td>{{ $assistida->complemento }}</td>
                        <td>{{ $assistida->municipio }}</td>
                        <td>
                            <a href="{{ route('detalhar-assistida', ['id' => $assistida->id]) }}" class="">
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




