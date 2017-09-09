<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/admin', function () {
    return view('admin.indexadmin');
});


Route::get('/', 'PaginasEstaticasController@indexsecciones');
Route::get('catalogo_productos/{id}', 'PaginasEstaticasController@indexproductos');

//Route::resource('/', 'ProductoController');
//Route::resource('/admin', 'AdminController');

//Route::resource('/admin.secciones', 'SeccionesController');
//Route::resource('/admin/secciones', 'SeccionesController');
/*
Route::get('/admin/secciones', function(){
	return view('admin.secciones.CRUDsecciones');
});
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {


    Route::resource('/secciones', 'SeccionesController');

});
/*
Route::get('/admin', function(){
	return view('admin.indexadmin');
});
*/

//Route::get('/hola', 'hola@index');

