<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::view('/', 'index')->name('index');

//Login Personas
Route::get('/login/personas', 'Auth\LoginController@showLoginForm')->name('login.people');

//Login Empresas
Route::get('/login/empresas', 'Auth\LoginController@showLoginFormBusiness')->name('login.business');

//Personas modulo
Route::get('/home', 'DashboardController@index')->name('dashboard');

//Login redes sociales
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

//UserProfile
Route::get('Profile/edit','ProfileController@Edit')->name('profile.edit');
Route::put('Profile/update','ProfileController@Update')->name('profile.update');



