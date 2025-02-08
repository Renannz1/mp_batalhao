<?php

namespace App\Http\Controllers;

use App\Models\Medida;
use Illuminate\Http\Request;

class medidaController extends Controller
{
    public function listarMedidas(){
        $medidas = Medida::all();
        return view('medida.index_medida', compact('medidas'));
    }
}
