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
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Contacts', function () {
    return view('Contacs');
  });
  Route::get('/About', function () {
      return view('About');
    });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/logout', 'Auth\AuthController@logout');
