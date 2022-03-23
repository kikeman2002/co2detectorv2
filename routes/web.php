<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrosController;
use App\Http\Controllers\UsuariosController;
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
Route::get('/', function () {return view('welcome');}) -> name('index');

Route::get('/login', function(){return view('usuarios.login');}) -> name('login');

Route::post('/login', [LoginController::class, 'login']) -> name('login');

Route::post('/logout', [LoginController::class, 'logout']) -> name('logout');


Route::get('/registros', [RegistrosController::class, 'index']) -> name('registros');

Route::post('/registros', [RegistrosController::class, 'store']) -> name('registros');

Route::get('/usuarios', [UsuariosController::class, 'index']) -> name('usuarios');

Route::post('/usuarios', [UsuariosController::class, 'store'])-> name('usuarios');

Route::get('/usuarios/{id}', [UsuariosController::class, 'show'])-> name('usuarios-edit');

Route::patch('/usuarios/{id}', [UsuariosController::class , 'update'])->name('usuarios-update');

Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy'])-> name('usuarios-destroy');
