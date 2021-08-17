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
Route::get('/comments', 'CommentController@index');
Route::get('/monthly_schedules', 'Monthly_scheduleController@index');
Route::get('/networks', 'NetworkController@index');
Route::get('/records', 'RecordController@index');
Route::get('/today_schedules', 'Today_scheduleController@index');
Route::get('/users', 'UserController@index');