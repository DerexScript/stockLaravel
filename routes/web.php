<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

//Rotas Com Parametros tipados
Route::get('/tt/{nome}/{n}', function ($nome, $n) {
    for ($i = 0; $i < $n; $i++) {
        echo "$i -> Seja Bem Vindo, $nome! <br>";
    }
})->where('nome', '[a-zA-Z]+')->where('n', '[\d]+');

//Agrupamento De Rotas
Route::prefix('/app')->group(function () {
    
    Route::get('/', function () {
        return view("app");
    })->name('app');
    
    Route::get('/user', function () {
        return view("user");
    })->name('app.user');
    
    Route::get('/profile', function () {
        return view("profile");
    })->name('app.profile');

});


Route::get('/produtos', function () {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook</li>";
    echo "<li>Impressora</li>";
    echo "<li>Mouse</li>";
    echo "</ol>";
})->name('products');

//Redirecionando Paginas Example 1
Route::redirect('toodsProdutos', 'products', 301);

//Redirecionando Paginas Example 2
Route::get('todosprodutos2', function () {
    return redirect()->route('products');
});

///////////////////////

Route::post('/requests', function ( Request $request ) {
    return "Hello POST";
});

Route::delete('/requests', function ( Request $request ) {
    return "Hello DELETE";
});
Route::put('/requests', function ( Request $request ) {
    return "Hello PUT";
});

Route::patch('/requests', function ( Request $request ) {
    return "Hello PATCH";
});

Route::options('/requests', function ( Request $request ) {
    return "Hello OPTIONS";
});

Route::get('/requests', function ( Request $request ) {
    return "Hello GET";
});

