<?php

use App\Http\Controllers\AgressorController;
use App\Http\Controllers\AssistidaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\medidaController;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::controller(AssistidaController::class)->group(function(){
    Route::get('/assistidas', 'listarAssistidas')->name('listar-assistidas');
    Route::get('/assistidas/form-criar', 'formNovaAssistida')->name('form-nova-assistida');
    Route::post('/assistidas/criar', 'criarAssistida')->name('criar-assistida');
    Route::get('/assistida/{id}', 'detalharAssistida')->name('detalhar-assistida');
    Route::get('/assistida/form-editar/{id}', 'formEditarAssistida')->name('editar-assistida');
    Route::put('/assistida/atualizar/{id}', 'atualizarAssistida')->name('atualizar-assistida');
    Route::get('/assistidas/form-excluir/{id}', 'excluirAssistida')->name('excluir-assistida');
    Route::get('/assistidas/excluir/{id}', 'confirmExcluirAssistida')->name('confirm-excluir-assistida');
});

Route::controller(AgressorController::class)->group(function(){
    Route::get('/agressores', 'listarAgressores')->name('listar-agressores');
    Route::get('/agressor/form-criar', 'formNovoAgressor')->name('form-novo-agressor');
    Route::post('/agressor/criar', 'criarAgressor')->name('criar-agressor');
    Route::get('/agressor/{id}', 'detalharAgressor')->name('detalhar-agressor');
    Route::get('/agressor/form-editar/{id}', 'formEditarAgressor')->name('form-editar-agressor');
    Route::put('/agressor/atualizar/{id}', 'atualizarAgressor')->name('atualizar-agressor');
    Route::get('/agressor/form-excluir/{id}', 'excluirAgressor')->name('excluir-agressor');
    Route::get('/agressor/excluir/{id}', 'confirmExcluirAgressor')->name('confirm-excluir-agressor');
});

Route::controller(medidaController::class)->group(function(){
    Route::get('/medidas', 'listarMedidas')->name('listar-medidas');
    Route::get('/medida/{id}', 'detalharMedida')->name('detalhar-medida');
});
