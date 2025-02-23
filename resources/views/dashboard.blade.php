@extends('layouts.main_layout')

@section('titulo', 'Página Inicial')
@section('sub-titulo', 'Dashboard')
@section('descricao')
    <p class="mt-0 mb-0">Informações gerais do sistema.</p>
@endsection

@section('content')

<main>
    <div class="card-5">
        <div class="row">
            
            {{-- card 1 --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-black mb-4">
                    <div class="card-body">
                        Total de Assistidas: {{ $totalAssistidas }}
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="#">View Details</a>
                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

        </div>
        
        {{-- tabela --}}
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>

            
            <div class="card-body">
                <table id="datatablesSimple">

                </table>
            </div>
        </div>
        
    </div>
</main>
@endsection