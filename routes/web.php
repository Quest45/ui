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

//Hey welcome!
Route::view('/', 'welcome');

//authentications routes
Auth::routes();

//users
Route::resource('/users', 'UsersController');
Route::view('/settings', 'users/settings');

//infos
Route::resource('/infos', 'InfosController');

//app routes
Route::view('/associations', 'app/associations');
Route::view('/calendar', 'app/calendar');


