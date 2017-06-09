<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('user','UserController');
Route::resource('guru','MemberController');
Route::resource('activity','ActivityController');
Route::resource('register','RegisterController');
Route::get('list-guru','UserController@getListMember')->name('user.list.guru');
Route::get('list-staf','UserController@getListStaf')->name('user.list.staf');
Route::post('post-login', 'Auth\LoginController@postLogin')->name('api.login');
Route::get('logout', 'Auth\LoginController@getLogout')->name('api.logout');
Route::get('event-calendars', function(){
    return [
    ['title'=> 'Event Pertama','end'=> '2017-06-15 03:53:56','start'=> '2017-06-10 03:53:56','allDay'=> 0,'className'=> 'label-important'],
    ['title'=> 'Event kedua','end'=> '2017-06-16 03:53:56','start'=> '2017-06-09 03:53:56','allDay'=> 0,'className'=> 'label-important'],
    ['title'=> 'Event ketiga','end'=> '2017-06-17 03:53:56','start'=> '2017-06-11 03:53:56','allDay'=> 0,'className'=> 'label-important'],
    ['title'=> 'Event keempat','end'=> '2017-06-18 03:53:56','start'=> '2017-06-12 03:53:56','allDay'=> 0,'className'=> 'label-important'],
    ['title'=> 'Event kelima','end'=> '2017-06-19 03:53:56','start'=> '2017-06-13 03:53:56','allDay'=> 0,'className'=> 'label-important'],
    ];
});