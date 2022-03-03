<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//usuarios
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuarios/new', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuarios/store', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuario.store');

//cliente
Route::get('/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
Route::get('/clientes/new', [App\Http\Controllers\ClienteController::class, 'create'])->name('cliente.create');
Route::post('/clientes/store', [App\Http\Controllers\ClienteController::class, 'store'])->name('cliente.store');

//Despachos
Route::get('/despachos', [App\Http\Controllers\DespachoController::class, 'index'])->name('despacho.index');
Route::get('/despachos/new', [App\Http\Controllers\DespachoController::class, 'create'])->name('despacho.create');
Route::post('/despachos/store', [App\Http\Controllers\DespachoController::class, 'store'])->name('despacho.store');

//gastos
Route::get('/gastos', [App\Http\Controllers\GastoController::class, 'index'])->name('gasto.index');
Route::get('/gastos/new', [App\Http\Controllers\GastoController::class, 'create'])->name('gasto.create');
Route::post('/gastos/store', [App\Http\Controllers\GastoController::class, 'store'])->name('gasto.store');

//llamadas
Route::get('/llamadas', [App\Http\Controllers\LlamadaController::class, 'index'])->name('llamada.index');
Route::get('/llamadas/new', [App\Http\Controllers\LlamadaController::class, 'create'])->name('llamada.create');
Route::post('/llamadas/store', [App\Http\Controllers\LlamadaController::class, 'store'])->name('llamada.store');

//exportaciones
Route::get('/exportUser', [App\Http\Controllers\UsuarioController::class, 'export'])->name('usuario.export');
Route::get('/exportclientes', [App\Http\Controllers\ClienteController::class, 'export'])->name('cliente.export');
Route::get('/exportDespacho', [App\Http\Controllers\DespachoController::class, 'export'])->name('despacho.export');
Route::get('/exportgasto', [App\Http\Controllers\GastoController::class, 'export'])->name('gasto.export');
Route::get('/exportLlamada', [App\Http\Controllers\LlamadaController::class, 'export'])->name('llamada.export');
