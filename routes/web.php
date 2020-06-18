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

Route::view('/', 'signin');
Route::view('/signup', 'signup');
Route::view('/confirm', 'confirm');
Route::view('/forgot', 'forgot');
Route::view('/associations', 'associations');
Route::view('/calendar', 'calendar');
Route::view('/settings', 'settings');

//users
Route::get('users', 'UsersController@index'); //users list
Route::get('users/create', 'UsersController@create'); //create user
Route::post('users', 'UsersController@store'); //persist user in db
Route::get('users/{user}', 'UsersController@show'); //display user
Route::get('users/{user}/edit', 'UsersController@edit'); //edit user
Route::patch('users/{user}', 'UsersController@update'); //update user
Route::delete('users/{user}', 'UsersController@destroy'); //delete user

//informations
Route::get('infos', 'InfosController@index'); //infos list
Route::get('infos/info', 'InfosController@create'); //create info
Route::post('infos', 'InfosController@store'); //persist info in db
Route::get('infos/{info}', 'InfosController@show'); //display info
Route::get('infos/{info}/edit', 'InfosController@edit'); //edit info
Route::patch('infos/{info}', 'InfosController@update'); //update info
Route::delete('infos/{info}', 'InfosController@destroy'); //delete info  

