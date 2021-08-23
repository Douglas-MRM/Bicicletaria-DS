<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::all();
        // dd($produtos);
        return view('produtos.index', compact('produtos'));
    }
}
