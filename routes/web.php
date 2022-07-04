<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/home', 'home  ', ['menuAtivo' => 'Clientes'])
    ->name('home');

Route::redirect('/', '/home');


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
Route::get('produtos/{produto}/edit', [$controller, 'edit'])
    ->name('produtos.edit');
Route::post('produtos/{produto}/update', [$controller, 'update'])
    ->name('produtos.update');
Route::get('produtos/{produto}/delete', [$controller, 'delete'])
    ->name('produtos.delete');
Route::delete('produtos/{produto}/destroy', [$controller, 'destroy'])
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
Route::get('servicos/{servico}/edit', [$controller, 'edit'])
    ->name('servicos.edit');
Route::post('servicos/{servico}/update', [$controller, 'update'])
    ->name('servicos.update');
Route::get('servicos/{servico}/delete', [$controller, 'delete'])
    ->name('servicos.delete');
Route::delete('servicos/{servico}/destroy', [$controller, 'destroy'])
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
Route::get('funcionarios/{funcionario}/edit', [$controller, 'edit'])
    ->name('funcionarios.edit');
Route::post('funcionarios/{funcionario}/update', [$controller, 'update'])
    ->name('funcionarios.update');
Route::get('funcionarios/{funcionario}/delete', [$controller, 'delete'])
    ->name('funcionarios.delete');
Route::delete('funcionarios/{funcionario}/destroy', [$controller, 'destroy'])
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
Route::get('clientes/{cliente}/edit', [$controller, 'edit'])
    ->name('clientes.edit');
Route::post('clientes/{cliente}/update', [$controller, 'update'])
    ->name('clientes.update');
Route::get('clientes/{cliente}/delete', [$controller, 'delete'])
    ->name('clientes.delete');
Route::delete('clientes/{cliente}/destroy', [$controller, 'destroy'])
    ->name('clientes.destroy');


/**
 * Fornecedores Controller
 */
$controller = Controllers\FornecedoresController::class;

Route::get('fornecedores', [$controller, 'index'])
    ->name('fornecedores.index');
Route::get('fornecedores/create', [$controller, 'create'])
    ->name('fornecedores.create');
Route::post('fornecedores/store', [$controller, 'store'])
    ->name('fornecedores.store');
Route::get('fornecedores/{fornecedor}/edit', [$controller, 'edit'])
    ->name('fornecedores.edit');
Route::post('fornecedores/{fornecedor}/update', [$controller, 'update'])
    ->name('fornecedores.update');
Route::get('fornecedores/{fornecedor}/delete', [$controller, 'delete'])
    ->name('fornecedores.delete');
Route::delete('fornecedores/{fornecedor}/destroy', [$controller, 'destroy'])
    ->name('fornecedores.destroy');


/**
 * Estoque Controller
 */
$controller = Controllers\EstoqueController::class;

Route::get('/estoque', [$controller, 'index'])
    ->name('estoque.index');
Route::post('/estoque/{produto}/update/up', [$controller, 'up'])
    ->name('estoque.update.up');
Route::post('/estoque/{produto}/update/down', [$controller, 'down'])
    ->name('estoque.update.down');
