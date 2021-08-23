<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index(){
        $funcionarios = Funcionarios::all();
        return view('funcionarios.index', compact('funcionarios'));
    }
}
