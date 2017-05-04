<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
})->name('page.dashboard');

Route::get('/siswa','Pages\UserController@siswa')->name('page.list-siswa');
Route::get('/guru','Pages\UserController@guru')->name('page.list-guru');
Route::get('/staf','Pages\UserController@staf')->name('page.list-staf');
Route::get('/users/create','Pages\UserController@create')->name('page.create-user');
Route::get('/users/{id}/edit','Pages\UserController@edit')->name('page.edit-user');

Route::get('/activity','Pages\ActivityController@index')->name('page.list-activity');
Route::get('/activity/create','Pages\ActivityController@create')->name('page.create-activity');
Route::get('/activity/{id}/edit','Pages\ActivityController@edit')->name('page.edit-activity');

Route::get('/calendar', function () {
    return view('pages.calendar');
})->name('page.calendar');

Route::get('/login', function () {
    return view('pages.login');
})->name('page.login');
