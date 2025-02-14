<?php

use App\Http\Controllers\BodegaProductoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\TrasladoController;
use App\Livewire\bodega\BodegasInventario;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Personas
Route::get('/personas', [PersonaController::class, 'index'])->middleware('auth')->name('personas.index');

// Empresa
Route::get('/parametrizaciones-generales/empresa', [EmpresaController::class, 'index'])->middleware('auth')->name('empresa.index');

//categoria
Route::get('/categorias', [CategoriaController::class, 'index'])->middleware('auth')->name('categorias.index');

//subcategoria
Route::get('/subcategorias', [SubcategoriaController::class, 'index'])->middleware('auth')->name('subcategorias.index');

//Pais
Route::get('/paises', [PaisController::class, 'index'])->middleware('auth')->name('paises.index');

//Departamento
Route::get('/departamentos', [DepartamentoController::class, 'index'])->middleware('auth')->name('departamentos.index');

//Municipio
Route::get('/municipios', [MunicipioController::class, 'index'])->middleware('auth')->name('municipios.index');

//Productos
Route::get('/productos', [ProductoController::class, 'index'])->middleware('auth')->name('productos.index');

//Bodegas
Route::get('/bodegas', [BodegaProductoController::class, 'index'])->middleware('auth')->name('bodegas.index');
Route::get('/bodegas/create', [BodegaProductoController::class, 'create'])->middleware('auth')->name('bodegas.create');

//Traslados
Route::get('/traslados', [TrasladoController::class, 'index'])->middleware('auth')->name('traslados.index');
Route::get('/traslados/ver', [TrasladoController::class, 'show'])->middleware('auth')->name('traslados.show');

