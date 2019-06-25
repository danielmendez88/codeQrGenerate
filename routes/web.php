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

Route::resource('/', 'incideController');

Route::get('qr-code-g', function () {

  $qrcodes = \QrCode::format('png')
  			->size(200)
            ->color(176,154,91)
            ->generate('ItSolutionStuff.com');

    

  return view('qrCode')->with('codes', $qrcodes);
});
// rutas
Route::get('/personal/detalle/{id}', 'incideController@show')->name('personal.detail');
