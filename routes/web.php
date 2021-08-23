<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


// PRODUTOS
Route::get('/produtos', [Controllers\ProdutosController::class, 'index'])->name('produtos.index');

// SERVIÇOS
Route::get('/servicos', [Controllers\ServicosController::class, 'index'])->name('servicos.index');

// FUNCIONARIOS
Route::get('/funcionarios', [Controllers\FuncionariosController::class, 'index'])->name('funcionarios.index');

// CLIENTES
Route::get('/clientes', [Controllers\ClientesController::class, 'index'])->name('clientes.index');

// FORNECEDORES
Route::get('/fornecedores', [Controllers\FornecedoresController::class, 'index'])->name('fornecedores.index');

// ESTOQUE
Route::get('/estoque', [Controllers\EstoqueController::class, 'index'])->name('estoque.index');