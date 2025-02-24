<?php

namespace App\Http\Controllers;

use App\Models\Agressor;
use App\Models\Assistida;
use App\Models\Medida;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalAssistidas = Assistida::all()->count();
        $totalAgressores = Agressor::all()->count();
        $totalMedidas = Medida::all()->count();
        $ultimasMedidas = Medida::orderBy('created_at', 'desc')->take(10)->get();


        return view('dashboard', compact('totalAssistidas', 'totalAgressores', 'totalMedidas', 'ultimasMedidas'));
    }

}
