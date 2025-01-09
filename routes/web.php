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

// GUIDE HOW TO SOLVE AND FIX 
Route::get('/guide', 'GuideController@index')->name('guide.index');

// MAIN PAGE 
Route::get('/', 'MainController@index')->name('index');
Route::get('/developer-notes', 'MainController@developer_notes')->name('dev.notes');

// ---- START VULNER ----

// IDOR 
Route::get('/api/v1/account/user', 'ApiController@index')->name('users');
Route::get('/api/v1/account/user/{user:id}', 'ApiController@get_users')->name('users.get.id');

// BAC
Route::get('/account/user/', 'DashboardUserController@profile_user_get_page')->name('user.profile');
Route::get('/account/user/{user:id}', 'DashboardUserController@profile_user_get_data')->name('user.data');

// ---- END VULNER ----

// AUTH ROUTES 
Auth::routes();

// DASHBOARD USER 
Route::get('/home', 'HomeController@index')->name('home'); // ONLY USED FOR LOGIN AUTH AKA HOME DASHBOARD
