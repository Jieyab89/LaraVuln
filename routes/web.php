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

// TEST ROUTING 

// TEST CUSTOM REDIRECT ROUTES VS META TAG 

// CUSTOM .ENV, .GIT ROUTES (RESEARCH)

Route::get('/.env', function () {
    return "Hello, World!";
});

// END TEST ROUTING 

// GUIDE HOW TO SOLVE AND FIX 

Route::get('/guide', 'GuideController@index')->name('guide.index');
Route::get('/guide-idor', 'GuideController@idor')->name('guide.idor');
Route::get('/guide-missconfig', 'GuideController@missconf')->name('guide.missconf');

// END GUIDE HOW TO SOLVE AND FIX 

// MAIN PAGE 

Route::get('/', 'MainController@index')->name('index');
Route::get('/developer-notes', 'MainController@developer_notes')->name('dev.notes');
Route::get('/Laravuln-feeds', 'MainController@feeds')->name('feeds');
Route::get('/infinite-scroll', 'MainController@feeds_loader')->name('feeds.scroll');

//  END MAIN PAGE 

// ---- START VULNER ----

// IDOR 
Route::get('/api/v1/account/user', 'ApiController@index')->name('users');
Route::get('/api/v1/account/user/{user:id}', 'ApiController@get_users')->name('users.get.id');

// BAC
Route::get('/account/user/', 'DashboardUserController@profile_user_get_page')->name('user.profile');
Route::get('/account/user/{user:id}', 'DashboardUserController@profile_user_get_data')->name('user.data');
Route::post('/account/user/update/{user:id}', 'DashboardUserController@profile_user_update')->name('user.data.update');

// FILE UPLOAD 
Route::group(['prefix' => '', 'middleware' => 'auth'], function () {
    Route::get('/upgrade/membership-plan/', 'DashboardUserController@updgradeplan')->name('user.plan');
    Route::get('/faq-sugesstion', 'DashboardUserController@suggestion')->name('user.suggesstion');
    Route::post('/faq-sugesstion-deliver/send', 'DashboardUserController@suggestion_deliver')->name('user.suggesstion.send');
    Route::get('/user/post-feeds', 'DashboardUserController@make_feeds')->name('user.feeds');
    Route::post('/user/post-feeds/send', 'DashboardUserController@feeds_send')->name('user.feeds.send');
});

// ---- END VULNER ----

// AUTH ROUTES 
Auth::routes();
// END AUTH 

// DASHBOARD USER 
Route::get('/home', 'HomeController@index')->name('home'); // ONLY USED FOR LOGIN AUTH AKA HOME DASHBOARD
// END DASHBOARD USER