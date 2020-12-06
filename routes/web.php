<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MeuControlador; 

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
    return view('welcome');
});



Route::get('/produtos', [MeuControlador::class, 'produtos']);
Route::get('/nome', [MeuControlador::class, 'getNome']);
Route::get('/idade', [MeuControlador::class, 'getIdade']);
Route::get('/multiplicar/{n1}/{n2}', [MeuControlador::class, 'multiplicar']);






