<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


/**
 * Produtos Controller
 */
$controller = Controllers\ProdutosController::class;

Route::get('produtos', [$controller, 'index'])
    ->name('produtos.index');


/**
 * Serviços Controller
 */
$controller = Controllers\ServicosController::class;

Route::get('servicos', [$controller, 'index'])
    ->name('servicos.index');


/**
 * Funcionários Controller
 */
$controller = Controllers\FuncionariosController::class;

Route::get('funcionarios', [$controller, 'index'])
    ->name('funcionarios.index');


/**
 * Clientes Controller
 */
$controller = Controllers\ClientesController::class;

Route::get('clientes', [$controller, 'index'])
    ->name('clientes.index');


/**
 * Fornecedores Controller
 */
$controller = Controllers\FornecedoresController::class;

Route::get('fornecedores', [$controller, 'index'])
    ->name('fornecedores.index');


/**
 * Estoque Controller
 */
$controller = Controllers\EstoqueController::class;

Route::get('/estoque', [$controller, 'index'])
    ->name('estoque.index');
