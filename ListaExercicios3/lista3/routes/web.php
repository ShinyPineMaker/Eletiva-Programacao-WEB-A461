<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\listacontroller;

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

Route::get('/exer1', [listacontroller::class, 'mostrarExer1']);
Route::post('/respostaexer1', [listacontroller::class, 'calcularExer1']);