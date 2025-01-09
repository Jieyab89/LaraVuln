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

// MAIN PAGE 
Route::get('/', 'MainController@index')->name('index');
Route::get('/developer-notes', 'MainController@developer_notes')->name('dev.notes');

// ---- vulner ----

// IDOR 
Route::get('/api/v1/account/user', 'UserController@index')->name('users');
Route::get('/api/v1/account/user/{user:id}', 'UserController@get_users')->name('users.get.id');

// AUTH ROUTES 
Auth::routes();

// DASHBOARD USER 
Route::get('/home', 'HomeController@index')->name('home');
