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


Route::get('/', function () {
    return view('acceuil');
}); */

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'StaticPageController@index')->name('welcome');
Route::resource('prospects', 'ProspectController');
Route::get('/', 'ProspectController@index')->name('welcome');
Route::post('/', 'ProspectController@store')->name('welcome');





Route::get('tableau-de-bord', 'DashboardController@index')->name('dashboard');
Route::resource('users', 'UserController');
Route::resource('prospects', 'ProspectController');
Route::get('envoi-de-mail', 'ProspectController@sendMail')->name('sendMail');
