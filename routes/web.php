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
	if (!empty(auth()->user())) {
		if (auth()->user()->authorizeRoles('admin','user','employee','cashier')) {
			return redirect('/home');
        }
	}else{
    	return view('welcome');
    }
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/proveedores', 'ProviderController@showaprovider')->name('showaprovider')->middleware('auth', 'role:admin');
Route::get('/proveedores/opciones', 'ProviderController@showprovider')->name('showprovider')->middleware('auth', 'role:admin');
Route::get('/proveedores/inactivos', 'ProviderController@showiprovider')->name('showiprovider')->middleware('auth', 'role:admin');
Route::get('/proveedores/agregar','ProviderController@addprovider')->name('addprovider')->middleware('auth', 'role:admin');
Route::post('/proveedor/agregado','ProviderController@registerprovider')->name('registerprovider')->middleware('auth', 'role:admin');
Route::get('/proveedor/editar/{id}','ProviderController@editprovider')->name('editprovider')->middleware('auth', 'role:admin');
Route::post('/proveedor/actualizado/{id}','ProviderController@updateprovider')->name('updateprovider')->middleware('auth', 'role:admin');
Route::get('/proveedor/eliminar/{id}','ProviderController@offprovider')->name('offprovider')->middleware('auth', 'role:admin');
Route::get('/proveedor/recuperar/{id}','ProviderController@onprovider')->name('onprovider')->middleware('auth', 'role:admin');


Route::get('/usuarios', 'UserController@showuser')->name('showuser')->middleware('auth', 'role:admin');
Route::get('/usuarios/agregar','UserController@adduser')->name('adduser');
Route::post('/usuario/agregado','UserController@registeruser')->name('registeruser');
Route::get('/encargados de almacen', 'UserController@showemployee')->name('showemployee')->middleware('auth', 'role:admin');
Route::get('/cajeros', 'UserController@showcashier')->name('showcashier')->middleware('auth', 'role:admin');

// 
Route::get('/productos', 'ProductController@showproducts')->name('showproducts')->middleware('auth', 'role:admin');
Route::get('/produtos/agregar','ProductController@addproduct')->name('addproduct')->middleware('auth', 'role:admin');
Route::post('/produto/agregado','ProductController@registerproduct')->name('registerproduct');
// 


Route::get('/lista/caja','UserController@listacaja')->name('listacajas');
Route::get('/registrar/caja','UserController@registrarcaja')->name('registrarcaja');
Route::post('/caja/registrado','UserController@guardarcaja')->name('guardarcaja');
Route::post('/actualizar/caja/{id}','UserController@editarcaja')->name('actualizarcaja');
Route::get('/eliminar/caja/{id}','UserController@bajacaja')->name('eliminarcaja');