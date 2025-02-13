@extends('layouts.main_layout')

@section('content')

<div class="container mb-5 mt-4">
  <h2>Detalhes da Assistida</h2>
    <p class="mb-5">Listando todos os dados da assistida: {{ $assistida->nome }}.</p>

    <div class="card">
        <div class="card-body">    
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Id </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->id }}</p>
                    </div>
                </div>
                        
                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Nome </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->nome }}</p>
                    </div>
                </div>
                        
                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0"><strong> Idade </strong></p>
                    </div>
                    <div class="col-sm-9">
                        <p class=" mb-0">{{ $assistida->idade }}</p>
                    </div>
                </div>


                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Logradouro </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->logradouro }}>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Número </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->numero }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Quadra </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->quadra }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> bloco </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->bloco }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Apartamento </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->apartamento }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Bairro </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->bairro }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Complemento </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->complemento }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Munícipio </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $assistida->municipio }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer text-center">
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Voltar</a>
        <a href="{{ route('form-editar-assistida', ['id' => $assistida->id]) }}" class="btn btn-primary me-2">Editar</a>
        <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="{{ $assistida->id }}">Excluir</a>
    </div>

    @include('assistida/delete_assistida')

  </div>

@endsection