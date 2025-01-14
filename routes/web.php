<?php

use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// testing send email
Route::get('/email', function(){
    Mail::raw('Essa é uma mensagem de teste.', function(Message $message){
        $message->to('teste@gmail.com')
        ->subject('Titulo do email')
        ->from('mpbatalhao@gmail.com');
    });
    echo '<h1> Email enviado com sucesso </h1>';
});

// testing data base conection
Route::get('/conection', function(){
    try {
        DB::connection()->getPdo();
        echo "Banco de dados conectado -> " . DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
        echo "Erro ao conectar ao banco de dados.";
    }
});

Route::get('/teste', function () {
    echo "Testando o sistema";
});