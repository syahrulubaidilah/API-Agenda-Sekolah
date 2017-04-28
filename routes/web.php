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

Route::get('/list-guru', function () {
    return view('pages.list-guru');
})->name('page.list-guru');

Route::get('/list-siswa', function () {
    return view('pages.list-siswa');
})->name('page.list-siswa');

Route::get('/list-staf', function () {
    return view('pages.list-staf');
})->name('page.list-staf');

Route::get('/list-agenda', function () {
    return view('pages.list-activity');
})->name('page.list-agenda');

Route::get('/calendar', function () {
    return view('pages.calendar');
})->name('page.calendar');

Route::get('/user/create', function () {
    return view('pages.create-user');
})->name('page.create-user');

Route::get('/agenda/create', function () {
    return view('pages.create-activity');
})->name('page.create-agenda');

Route::get('/user/edit', function () {
    return view('pages.update-user');
})->name('page.edit-user');

Route::get('/agenda/edit', function () {
    return view('pages.update-activity');
})->name('page.edit-agenda');