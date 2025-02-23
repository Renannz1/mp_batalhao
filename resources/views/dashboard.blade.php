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
            
                {{-- <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            {{-- card 1 --}}
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card border border-primary">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h6 class="text-muted fw-semibold">Profile Views</h6>
                                <h6 class="fw-bold mb-0">112.000</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- card 1 --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-black mb-4 border border-success">
                    <div class="card-body">
                        Total de Assistidas: {{ $totalAssistidas }}
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="#">View Details</a>
                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- card 1 --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-black mb-4 border border-danger">
                    <div class="card-body">
                        Total de Assistidas: {{ $totalAssistidas }}
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="#">View Details</a>
                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            {{-- card 1 --}}
            <div class="col-xl-3 col-md-6">
                <div class="card text-black mb-4 border border-warning">
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