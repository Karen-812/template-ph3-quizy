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


// Kuizyユーザー画面
Route::get('kuizy/index', 'KuizyController@index');
Route::get('kuizy', 'KuizyController@quiz');
Route::get('kuizy/1', 'KuizyController@quiz1')->name('Kuizy.tokyo');
Route::get('kuizy/2', 'KuizyController@quiz2')->name('Kuizy.hiroshima');
// 管理者画面ー追加
// Route::get('kuizy/model1','Big_questionController@index')->name('Kuizy.new');
Route::get('kuizy/admin/add','AdminController@index')->name('Kuizy.admin');
Route::post('kuizy/admin/add','AdminController@create')->name('Kuizy.admin');

// 管理者画面ー編集・削除
Route::get('kuizy/admin/edit','AdminController@editBigQuestions')->name('Kuizy.admin2');
Route::post('kuizy/admin/edit','AdminController@update')->name('Kuizy.admin2');
Route::get('kuizy/admin/delete','AdminController@delete')->name('Kuizy.admin2');

// 大問の中身を編集
Route::get('kuizy/admin/editQuestion','AdminController@editQuiz');
Route::post('kuizy/admin/editQuestion','AdminController@updateQuiz');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
