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

Route::get('hello', 'HelloController@index');


// Kuizy
Route::get('kuizy', 'KuizyController@quiz');
Route::get('kuizy/1', 'KuizyController@quiz1');
Route::get('kuizy/2', 'KuizyController@quiz2');
