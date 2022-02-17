<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ComentarioController;
use App\Models\Articulo;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    return view('welcome');
});

Route::resource('articulos', ArticuloController::class);

Route::get('/home', [ArticuloController::class, 'index'])->middleware('auth')->name('articulos');

Route::get('articulos/{id}', [ArticuloController::class, 'show'])->name('detalleArticulo');

Route::delete('articulos/{id}', [ArticuloController::class, 'destroy'])->name('borrarArticulo');

Route::get('articulos/{id}/create', [ArticuloController::class, 'create'])->middleware('auth')->name('crearArticulo');

Route::post('createArticulo/', [ArticuloController::class, 'store'])->name('nuevoArticulo');

Route::post('detalleArticulo/', [ComentarioController::class, 'store'])->name('nuevoComentario');

Auth::routes();

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
