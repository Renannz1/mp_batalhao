<?php

use App\Http\Controllers\AgressorController;
use App\Http\Controllers\AssistidaController;
use App\Http\Controllers\MedidaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('layouts.index');
});

Route::controller(AssistidaController::class)->group(function(){
    Route::get('/assistidas', 'listarAssistidas')->name('listar-assistidas');
    Route::get('/assistidas/form-criar', 'formNovaAssistida')->name('form-nova-assistida');
    Route::post('/assistidas/criar', 'criarAssistida')->name('criar-assistida');
    Route::get('/assistida/{id}', 'detalharAssistida')->name('detalhar-assistida');
    Route::get('/assistida/form-editar/{id}', 'formEditarAssistida')->name('form-editar-assistida');
    Route::put('/assistida/atualizar/{id}', 'atualizarAssistida')->name('atualizar-assistida');
    Route::get('/assistidas/excluir/{id}', 'excluirAssistida')->name('excluir-assistida');
});

Route::controller(AgressorController::class)->group(function(){
    Route::get('/agressores', 'listarAgressores')->name('listar-agressores');
    Route::get('/agressor/form-criar', 'formNovoAgressor')->name('form-novo-agressor');
    Route::post('/agressor/criar', 'criarAgressor')->name('criar-agressor');
    Route::get('/agressor/{id}', 'detalharAgressor')->name('detalhar-agressor');
    Route::get('/agressor/form-editar/{id}', 'formEditarAgressor')->name('form-editar-agressor');
    Route::put('/agressor/atualizar/{id}', 'atualizarAgressor')->name('atualizar-agressor');
    Route::get('/agressor/excluir/{id}', 'excluirAgressor')->name('excluir-agressor');
});

Route::controller(MedidaController::class)->group(function(){
    Route::get('/medidas', 'listarMedidas')->name('listar-medidas');
    Route::get('/medida/form-criar', 'formNovaMedida')->name('form-nova-medida');
    Route::post('/medida/criar', 'criarMedida')->name('criar-medida');
    Route::get('/medida/{id}', 'detalharMedida')->name('detalhar-medida');
    Route::get('/medida/form-editar/{id}', 'formEditarMedida')->name('form-editar-medida');
    Route::put('/medida/atualizar/{id}', 'atualizarMedida')->name('atualizar-medida');
    Route::get('/medida/excluir/{id}', 'excluirMedida')->name('excluir-medida');
});