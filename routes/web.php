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
Route::get('produtos/create', [$controller, 'create'])
    ->name('produtos.create');
Route::post('produtos/store', [$controller, 'store'])
    ->name('produtos.store');
Route::get('produtos/edit/{produto}', [$controller, 'edit'])
    ->name('produtos.edit');
Route::post('produtos/update/{produto}', [$controller, 'update'])
    ->name('produtos.update');
Route::get('produtos/delete/{produto}', [$controller, 'delete'])
    ->name('produtos.delete');
Route::delete('produtos/destroy/{produto}', [$controller, 'destroy'])
    ->name('produtos.destroy');


/**
 * Serviços Controller
 */
$controller = Controllers\ServicosController::class;

Route::get('servicos', [$controller, 'index'])
    ->name('servicos.index');
Route::get('servicos/create', [$controller, 'create'])
    ->name('servicos.create');
Route::post('servicos/store', [$controller, 'store'])
    ->name('servicos.store');
Route::get('servicos/edit/{servico}', [$controller, 'edit'])
    ->name('servicos.edit');
Route::post('servicos/update/{servico}', [$controller, 'update'])
    ->name('servicos.update');
Route::get('servicos/delete/{servico}', [$controller, 'delete'])
    ->name('servicos.delete');
Route::delete('servicos/destroy/{servico}', [$controller, 'destroy'])
    ->name('servicos.destroy');


/**
 * Funcionários Controller
 */
$controller = Controllers\FuncionariosController::class;

Route::get('funcionarios', [$controller, 'index'])
    ->name('funcionarios.index');
Route::get('funcionarios/create', [$controller, 'create'])
    ->name('funcionarios.create');
Route::post('funcionarios/store', [$controller, 'store'])
    ->name('funcionarios.store');
Route::get('funcionarios/edit/{funcionario}', [$controller, 'edit'])
    ->name('funcionarios.edit');
Route::post('funcionarios/update/{funcionario}', [$controller, 'update'])
    ->name('funcionarios.update');
Route::get('funcionarios/delete/{funcionario}', [$controller, 'delete'])
    ->name('funcionarios.delete');
Route::delete('funcionarios/destroy/{funcionario}', [$controller, 'destroy'])
    ->name('funcionarios.destroy');


/**
 * Clientes Controller
 */
$controller = Controllers\ClientesController::class;

Route::get('clientes', [$controller, 'index'])
    ->name('clientes.index');
Route::get('clientes/create', [$controller, 'create'])
    ->name('clientes.create');
Route::post('clientes/store', [$controller, 'store'])
    ->name('clientes.store');
Route::get('clientes/edit/{cliente}', [$controller, 'edit'])
    ->name('clientes.edit');
Route::post('clientes/update/{cliente}', [$controller, 'update'])
    ->name('clientes.update');
Route::get('clientes/delete/{cliente}', [$controller, 'delete'])
    ->name('clientes.delete');
Route::delete('clientes/destroy/{cliente}', [$controller, 'destroy'])
    ->name('clientes.destroy');


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
