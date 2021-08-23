<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = Fornecedores::all();
        return view('fornecedores.index', compact('fornecedores'));
    }
}
