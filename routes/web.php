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

Route::get('/','Auth\LoginController@getLogin')->name('landingpage');
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('page.dashboard');

Route::get('/siswa','Pages\SiswaController@siswa')->name('page.list-siswa');
Route::get('/guru','Pages\GuruController@guru')->name('page.list-guru');
Route::get('/staf','Pages\UserController@staf')->name('page.list-staf');
Route::get('/staf/create','Pages\UserController@create')->name('page.create-user');
Route::get('/siswa/create','Pages\SiswaController@createSiswa')->name('page.create-siswa');
Route::get('/guru/create','Pages\GuruController@createGuru')->name('page.create-guru');
Route::get('/users/{id}/edit','Pages\UserController@edit')->name('page.edit-user');

Route::get('/activity','Pages\ActivityController@index')->name('page.list-activity');
Route::get('/activity/create','Pages\ActivityController@create')->name('page.create-activity');
Route::get('/activity/{id}/edit','Pages\ActivityController@edit')->name('page.edit-activity');

Route::get('/calendar', function () {
    return view('pages.calendar');
})->name('page.calendar');

Route::get('/login','Auth\LoginController@getLogin')->name('page.login');
