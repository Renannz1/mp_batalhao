<?php

use App\Http\Controllers\AssistidaController;
use App\Http\Controllers\MainController;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::controller(AssistidaController::class)->group(function(){
    Route::get('/assistidas', 'listarAssistidas')->name('listar-assistidas');
    Route::get('/assistidas/form-nova-assistida', 'formNovaAssistida')->name('form-nova-assistida');
    Route::post('/assistidas/criar-assistida', 'criarAssistida')->name('criar-assistida');
    Route::get('/assistida/{id}', 'detalharAssistida')->name('detalhar-assistida');
    Route::get('/assistida/form-editar-assistida/{id}', 'formEditarAssistida')->name('editar-assistida');
    Route::put('/assistida/atualizar-assistida/{id}', 'atualizarAssistida')->name('atualizar-assistida');
    Route::get('/assistidas/excluir/{id}', 'excluirAssistida')->name('excluir-assistida');
    Route::get('/assistidas/confirm-excluir/{id}', 'confirmExcluirAssistida')->name('confirm-excluir-assistida');
});
