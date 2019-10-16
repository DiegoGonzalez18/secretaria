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
Route::get('/', 'GenericController@index');
Route::get('/info/{id}','GenericController@infoevento');
Route::get('/hola', 'GenericController@sliderI');
Route::group(['middleware'=>['guest']],function(){
    Route::get('/login','Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    Route::get('slider','SliderController@slider');
    Route::get('slider2','SliderController@slider');
});


Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin', function () {
        return view('contenido/contenido');
    })->name('admin');
    Route::get('/admin/slider','SliderController@index');
Route::post('/admin/slider/registerSlider','SliderController@store');

Route::post('/admin/slider/updateSlider','SliderController@update');
Route::post('/admin/slider/deletedSlider','SliderController@destroy');
Route::get('/admin/usuario','UserController@index');
Route::post('/admin/usuario/registerUser','UserController@store');
Route::post('/admin/usuario/updateUser','UserController@update');
Route::post('/admin/usuario/deletedUser','UserController@destroy');

Route::post('/admin/evento/registerEvento','EventoController@store');
Route::get('/admin/evento','EventoController@index');
Route::post('/admin/evento/updateEvento','EventoController@update');
Route::post('/admin/evento/deletedEvento','EventoController@destroy');

Route::post('/admin/novedad/registerNovedad','NovedadController@store');
Route::get('/admin/novedad','NovedadController@index');
Route::post('/admin/novedad/Novedad','NovedadController@update');
Route::post('/admin/novedad/deletedNovedad','NovedadController@destroy');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
});
