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
/* RUTAS AUTENTIFICACION */
Auth::routes();
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

/* RUTAS PUBLICAS */
Route::get('/','PublicController@index')->name('portal.home');
Route::get('/publicaciones','PublicController@indexPost')->name('portal.posts');
Route::get('/home', 'HomeController@index')->name('home');

/* RUTAS PRIVADAS */
Route::group(['middleware' => 'auth'], function () {\
   
  Route::resource('noticias', 'PostController');

});
