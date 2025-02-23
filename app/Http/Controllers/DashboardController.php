<?php

namespace App\Http\Controllers;

use App\Models\Assistida;
use App\Models\Medida;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalAssistidas = Assistida::all()->count();
        return view('dashboard', compact('totalAssistidas'));
    }
}
