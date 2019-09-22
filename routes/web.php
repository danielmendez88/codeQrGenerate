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

/*Route::get('qr-code-g', function () {

  $qrcodes = \QrCode::format('png')
  			->size(200)
            ->color(176,154,91)
            ->generate('ItSolutionStuff.com');

    

  return view('qrCode')->with('codes', $qrcodes);
});*/

Route::get('/', function(){
	return Redirect::to('/login');
});

Auth::routes();

// ruta con midlaware
Route::group(['middleware' => ['preventBackButton','auth']], function() {
	// rutas
	Route::get('/personal/detalle/{id}', 'incideController@show')->name('personal.detail');
	Route::resource('/', 'incideController');
	Route::get('/home', 'HomeController@index')->name('home');
	// ruta de formulario de personal para modificación
	Route::get('/updatepersonal/{id}', 'personalController@edit')->name('personalForm');
	// ruta para administrador
	Route::get('/administrador', 'AdminController@index')->name('administrador');
	Route::get('/administrador/add-personal', 'AdminController@addpersonal')->name('add.personal');
	Route::post('/administrador/add-personal', 'AdminController@store')->name('add.personal.post');
	Route::get('/administrador/registro-personal', 'AdminController@registroPersonal')->name('administrador-registro-personal');
	Route::get('/administrador/update-personal', 'AdminController@updatePersonal')->name('administador-update-personal');
	Route::get('/administrador/updated/{id}', 'AdminController@show')->name('administador-update-personal');
});

/**
*	cerrar sesión
*/
Route::get('/personal/logout', function(){
		Session::flush();
		Auth::logout();
		return Redirect::to("/login");
});
/**
* ruta para consumir el servicio web
*/
Route::get('/personal/generado/{id}', 'generadoController@show')->name('personal.generado');