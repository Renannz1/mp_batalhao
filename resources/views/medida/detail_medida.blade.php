@extends('layouts.main_layout')

@section('content')

<div class="container mb-5 mt-4">
  <h2>Detalhes da Medida Protetiva</h2>
    <p class="mb-5">Listando todos os dados da medida protetiva: {{ $medida->medida_protetiva }}.</p>

  <div class="card">
    <div class="card-body">    
      <div class="card-body">

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Id </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->id }}</p>
        </div>
      </div>
            
      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Processo SEI </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->processo_sei }}</p>
        </div>
      </div>
            
      <hr class='mb-1 mt-1'>

      <div class="row">
          <div class="col-sm-3">
            <p class="mb-0"><strong> N° Medida </strong></p>
          </div>
          <div class="col-sm-9">
            <p class=" mb-0">{{ $medida->medida_protetiva }}</p>
          </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Assistida </strong></p>
        </div>
        <div class="col-sm-9">
          <a href="{{ route('detalhar-assistida', ['id' => $medida->assistida->id]) }}"  class=" mb-0">{{ $medida->assistida->nome }}</a>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Situação </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->situacao }}>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Nível de risco </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->nivel_risco }}</p>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Agressor </strong></p>
        </div>
        <div class="col-sm-9">
          <a href="{{ route('detalhar-agressor', ['id' => $medida->agressor->id]) }}" class=" mb-0">{{ $medida->agressor->nome }}</a>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Relação </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->relacao_vitima_agressor }}</p>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Restrições </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->restricoes_agressor }}</p>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Situação </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->situacao }}</p>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Início </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->inicio }}</p>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0"><strong> Término </strong></p>
        </div>
        <div class="col-sm-9">
          <p class=" mb-0">{{ $medida->previsao_termino }}</p>
        </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
          <div class="col-sm-3">
            <p class="mb-0"><strong> Renovação </strong></p>
          </div>
          <div class="col-sm-9">
            <p class=" mb-0">{{ $medida->renovacao }}</p>
          </div>
      </div>

      <hr class='mb-1 mt-1'>

      <div class="row">
          <div class="col-sm-3">
            <p class="mb-0"><strong> Revogação </strong></p>
          </div>
          <div class="col-sm-9">
            <p class=" mb-0">{{ $medida->renovacao }}</p>
          </div>
      </div>

      <hr class='mb-1 mt-1'>

      </div>
    </div>

    <div class="card-footer text-center">
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Voltar</a>
        <a href="{{ route('form-editar-medida', ['id' => $medida->id]) }}" class="btn btn-primary me-2">Editar</a>
        <a href="#" class="btn btn-danger me-2" data-bs-toggle="modal" data-bs-target="#excluirModal" data-id="{{ $medida->id }}">Excluir</a>
    </div>

    @include('medida/delete_medida')

  </div>

@endsection