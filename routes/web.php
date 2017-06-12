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

// Route::get('/','Auth\LoginController@getLogin')->name('landingpage');
// Route::get('/login','Auth\LoginController@getLogin')->name('page.login');
Route::get('/dashboard', 'HomeController@dashboard')->name('page.dashboard');
Route::get('/', 'LandingpageController@index')->name('page.home');
Route::get('/list', 'LandingpageController@list')->name('page.list');
Route::get('/table', 'LandingpageController@table')->name('page.table');
Route::get('/detail/{id}/detail', 'LandingpageController@detail')->name('page.detail');

Route::get('/member','Pages\MemberController@guru')->name('page.list-guru');
Route::get('/admin','Pages\UserController@staf')->name('page.list-staf');
Route::get('/admin/create','Pages\UserController@create')->name('page.create-user');
Route::get('/member/create','Pages\MemberController@createMember')->name('page.create-guru');
Route::get('/admin/{id}/edit','Pages\UserController@edit')->name('page.edit-user');
Route::get('/member/{id}/edit','Pages\MemberController@edit')->name('page.edit-guru');

Route::get('/activity','Pages\ActivityController@index')->name('page.list-activity');
Route::get('/activity/create','Pages\ActivityController@create')->name('page.create-activity');
Route::get('/activity/{id}/edit','Pages\ActivityController@edit')->name('page.edit-activity');
Route::get('/activity/{id}/detail','Pages\ActivityController@detail')->name('page.detail-activity');

Route::get('/calendar', function () {
    return view('pages.calendar');
})->name('page.calendar');

Auth::routes();
Route::get('/home', 'HomeController@index');
