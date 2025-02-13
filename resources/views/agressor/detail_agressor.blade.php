@extends('layouts.main_layout')

@section('titulo', 'Info. Agressor')
@section('sub-titulo', 'Agressor')
@section('descricao')
    <p class="mt-0 mb-0">Todas as informações referentes ao agressor com o ID: {{ $agressor->id }}</p>
@endsection

@section('content')

<div class="card mb-5">
        <div class="card-body">    
            <div class="card-body">

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Id </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->id }}</p>
                    </div>
                </div>
                        
                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Nome </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->nome }}</p>
                    </div>
                </div>
                        
                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0"><strong> Idade </strong></p>
                    </div>
                    <div class="col-sm-9">
                        <p class=" mb-0">{{ $agressor->idade }}</p>
                    </div>
                </div>


                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Logradouro </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->logradouro }}>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Número </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->numero }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Quadra </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->quadra }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> bloco </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->bloco }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Apartamento </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->apartamento }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Bairro </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->bairro }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Complemento </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->complemento }}</p>
                    </div>
                </div>

                <hr class='mb-1 mt-1'>

                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0"><strong> Munícipio </strong></p>
                    </div>
                    <div class="col-sm-9">
                    <p class=" mb-0">{{ $agressor->municipio }}</p>
                </div>
            </div>
        </div>
</div>

<div class="card-footer text-center">
    <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Voltar</a>
    <a href="{{ route('form-editar-agressor', ['id' => $agressor->id]) }}" class="btn btn-primary me-2">Editar</a>
    <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="{{ $agressor->id }}">Excluir<a>
</div>

@include('agressor/delete_agressor')

@endsection