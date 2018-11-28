<?php

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

Route::get('/home','HomeController@index');

/*Route::Controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);*/


Route::get('/', function () {
    return view('home');
});

Route::get('/Version', function () {
    return var_dump(phpinfo());
});

Route::get('/Produtos','ProdutoController@lista');

Route::get('/Produtos/Mostra/{id}','ProdutoController@mostra');//->where('id',[0-9]);

Route::get('/Produtos/novo','ProdutoController@novo');

Route::post('/Produtos/adiciona','ProdutoController@adiciona');

Route::get('/Produtos/listaJson','ProdutoController@listaJson');

Route::get('/Produtos/remove/{id}','ProdutoController@remove');

Route::get('/Produtos/update/{id}','ProdutoController@update');

Route::post('/Produtos/atualiza/{id}','ProdutoController@atualiza');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
