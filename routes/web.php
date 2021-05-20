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

/*Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/', 'AdminController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/history', 'HistoryController@history');
Route::get('/help', 'HelpController@help');
Route::get('/lasthours', 'HistoryLatestController@historylatest');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

