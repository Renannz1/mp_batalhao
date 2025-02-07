<?php

namespace App\Http\Controllers;

use App\Models\Agressor;
use Illuminate\Http\Request;

class AgressorController extends Controller
{
    public function listarAgressores(){
        $agressores = Agressor::all();
        return view('agressor.index_agressor', compact('agressores'));
    }

    public function detalharAgressor($agressor_id){
        $agressor = Agressor::find($agressor_id);

        if (!$agressor) {
            return "Agressor não encontrado";
        }

        return view('agressor.detail_agressor', compact('agressor'));
    }
}
