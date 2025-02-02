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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'SobreController@sobre')->name('site.index');

Route::get('/login', function() { return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function() {
Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
Route::get('/fornecedores', function() { return 'Fornecedores'; })->name('app.fornecedores');
Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});
Route::get('/rota1', function(){
    echo 'Rota1';
})->name('site.rota1');

Route::get('/rota2', function(){
    echo 'Rota2';
})->name('site.rota1');

Route::redirect('/rota1', '/rota2');