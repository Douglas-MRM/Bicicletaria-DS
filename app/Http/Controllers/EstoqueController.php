<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index(){
        $estoque = Estoque::all();
        return view('estoque.index', compact('estoque'));
    }
}
