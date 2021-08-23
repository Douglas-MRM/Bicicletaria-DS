<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index(){
        $servicos = Servicos::all();
        return view('servicos.index', compact('servicos'));
    }
}
