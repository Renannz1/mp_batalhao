<?php

namespace App\Http\Controllers;

use App\Models\Agressor;
use Illuminate\Http\Request;

class AgressorController extends Controller
{
    public function listarAgressores(){
        $agressores = Agressor::all();
        return view('agressores.index_agressor', compact('agressores'));
    }
}
