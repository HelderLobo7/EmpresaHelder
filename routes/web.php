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
    return view('ola');
});
Route::get('/ola', function () {
    return view('ola');
});

Route::get('/produtos', 'ProdutoController@index')->name('produtos.index');

Route::get('/produtos/{id}/show', 'ProdutoController@show')->name('produtos.show');

Route::get('/produtos/{id}/edit','ProdutoController@edit')->name('produtos.edit');
    
Route::patch('/produtos/{id}','ProdutoController@update')->name('produtos.update');


// CATEGORIA 
Route::get('/categoria', 'CategoriaController@index')->name('categoria.index');

Route::get('/categoria/{id}/show', 'CategoriaController@show')->name('categoria.show');

Route::get('/categoria/{id}/edit','CategoriaController@edit')->name('categoria.edit');
    
Route::patch('/categoria/{id}','CategoriaController@update')->name('categoria.update');

// FORNECEDORES
Route::get('/fornecedor', 'ForneceController@index')->name('fornecedor.index');

Route::get('/fornecedor/{id}/show', 'ForneceController@show')->name('fornecedor.show');

Route::get('/fornecedor/{id}/edit','ForneceController@edit')->name('fornecedor.edit');
    
Route::patch('/fornecedor/{id}','ForneceController@update')->name('fornecedor.update');


// SAIDAS 
Route::get('/saidas', 'SaidasController@index')->name('saidas.index');

Route::get('/saidas/{id}/show', 'SaidasController@show')->name('saidas.show');

Route::get('/saidas/{id}/edit','SaidasController@edit')->name('saidas.edit');
    
Route::patch('/saidas/{id}','SaidasController@update')->name('saidas.update');
