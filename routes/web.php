<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ConfiguracoesController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\BannersController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FormularioController;
use App\Models\Teste;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('/usuarios/cadastrar', [UsuariosController::class, 'cadastrar'])->name('usuarios-cadastrar');
Route::get('/usuarios/alterar', [UsuariosController::class, 'alterar'])->name('usuarios-alterar');

Route::get('/configuraçoes', [ConfiguracoesController::class, 'index'])->name('configuraçoes');

Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('/clientes/cadastrar', [ClientesController::class, 'cadastrar'])->name('clientes-cadastrar');

Route::get('/pedidos', [PedidosController::class, 'index'])->name('pedidos');
Route::get('/pedidos/detalhes', [PedidosController::class, 'detalhes'])->name('pedido-detalhes');

Route::get('/banners', [BannersController::class, 'index'])->name('banners');
Route::get('/banners/criar', [BannersController::class, 'criar'])->name('banners-criar');


Route::get('/categorias', [CategoriasController::class, 'index'])->name('categorias');
Route::get('/categorias/criar', [CategoriasController::class, 'criar'])->name('categorias-criar');
Route::get('/categorias/editar', [CategoriasController::class, 'editar'])->name('categorias-editar');



Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');

Route::post('/enviar-formulario', [FormularioController::class, 'enviar'])->name('formulario');
Route::delete('/usuarios/{id}', [FormularioController::class,'destroy'])->name('deletar');



Route::get('/original', function () {
    return view('original');
});



Route::get('/admin', function () {
    return view('admin');

    
});




