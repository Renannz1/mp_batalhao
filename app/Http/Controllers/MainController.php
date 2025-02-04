<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function listarAssistidas(){
        $assistidas = DB::select('select * from assistidas');

        dd($assistidas);
    }

    public function listarAgressores(){
        $agressores = DB::select('select * from agressores');
        
        dd($agressores);
    }

    public function listarMedidas(){
        $medidas = DB::select('select * from medidas');
    
        dd($medidas);
    }
}
