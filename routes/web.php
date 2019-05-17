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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UserController@showuser')->name('showuser')->middleware('auth', 'role:admin');
Route::get('/usuarios/agregar','UserController@adduser')->name('adduser');
Route::post('/usuario/agregado','UserController@registeruser')->name('registeruser');
Route::get('/encargados de almacen', 'UserController@showemployee')->name('showemployee')->middleware('auth', 'role:admin');
Route::get('/cajeros', 'UserController@showcashier')->name('showcashier')->middleware('auth', 'role:admin');

// 
Route::get('/productos', 'ProductController@showproducts')->name('showproducts')->middleware('auth', 'role:admin');
Route::get('/produtos/agregar','ProductController@addproduct')->name('addproduct')->middleware('auth', 'role:admin');
Route::post('/produto/agregado','ProductoController@registerproduct')->name('registerproduct');
// 


Route::get('/lista/caja','UserController@listacaja')->name('listacajas');
Route::get('/registrar/caja','UserController@registrarcaja')->name('registrarcaja');
Route::post('/caja/registrado','UserController@guardarcaja')->name('guardarcaja');
Route::post('/actualizar/caja/{id}','UserController@editarcaja')->name('actualizarcaja');
Route::get('/eliminar/caja/{id}','UserController@bajacaja')->name('eliminarcaja');