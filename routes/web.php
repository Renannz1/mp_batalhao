<?php

use App\Http\Controllers\AssistidaController;
use App\Http\Controllers\MainController;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

// // testing send email
// Route::get('/email', function(){
//     Mail::raw('Essa é uma mensagem de teste.', function(Message $message){
//         $message->to('teste@gmail.com')
//         ->subject('Titulo do email')
//         ->from('mpbatalhao@gmail.com');
//     });
//     echo '<h1> Email enviado com sucesso </h1>';
// });


// ASSISTIDAS ROUTES
Route::get('/assistidas', [AssistidaController::class, 'listarAssistidas'])->name('listar-assistidas');

// rota que carrega a pagina com o formulario parao usuario preencher
Route::get('/assistidas/form-nova-assistida', [AssistidaController::class, 'formNovaAssistida'])->name('nova-assistida');

// rota que vai fazer a submissão do formulario
Route::post('/assistidas/criar-assistida', [AssistidaController::class, 'criarAssistida'])->name('criar-assistida');

Route::get('/assistida/{id}', [AssistidaController::class, 'detalharAssistida'])->name('detalhar-assistida');

Route::get('/assistidas/editar', [AssistidaController::class, 'editarAssistida'])->name('editar-assistida');

Route::get('/assistidas/excluir', [AssistidaController::class, 'excluirAssistida'])->name('excluir-assistida');
