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

    public function detalharMedida($medida_id){
        $medida = Medida::find($medida_id);
        return view('medida.detail_medida', compact('medida'));
    }
}
