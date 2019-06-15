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

Auth::routes();

Route::get('/add', 'ContactsController@index');

Route::post('/add', 'ContactsController@store')->name('add');

Route::get('/home', 'ContactsController@show');

Route::get('/profile', 'ProfileController@index');

Route::get('/profile/{id}', 'ProfileController@show');

Route::post('/editInfo/{id}', 'ProfileController@editInfo')->name('editInfo');

// Search
Route::post('/search', 'HomeController@search')->name('search');

//Delete

Route::get('/deleteContact/{id}', 'ContactsController@destroy')->name('deleteContact');
