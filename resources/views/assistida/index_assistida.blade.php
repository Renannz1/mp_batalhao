@extends('layouts.main_layout')

@section('content')

<div class="container mb-5 mt-4">
    <div>
        <h2>Tabela de Assistidas</h2>
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-5">Listando todas as mulheres com medidas protetivas.</p>
            <a href="{{ route('form-nova-assistida') }}" class="btn btn-primary mb-5">Cadastrar Nova Assistida</a>
        </div>
    </div> 

    <div class="card mb-4">
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
                            <a href="{{ route('detalhar-assistida', ['id' => $assistida->id]) }}" class="">Detalhar</a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection




