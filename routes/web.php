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

Route::get('user_balance', 'ApiController@userBalance');
Route::get('stats_site', 'ApiController@statsSite');

Route::resource('sites', 'SiteController');
Route::resource('sites.authors', 'SiteAuthorController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
