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

//info
Route::get('/info/welcome', 'InfoController@getWelcome');
Route::get('/info/parameter/{name}/{message}', 'InfoController@getParameter');
Route::get('/info/query', 'InfoController@getQuery');
Route::get('/info/view', 'InfoController@getView');
Route::post('/info/view', 'InfoController@postView');
Route::get('/info/template', 'InfoController@getViewTemplate');

//db
Route::get('db/select', 'DbController@getSelect');
Route::post('db/insert', 'DbController@postInsert');
Route::post('db/update', 'DbController@postUpdate');
Route::post('db/delete', 'DbController@postDelete');

//student
Route::get('student/list', 'StudentController@getList');
Route::get('student/view/{id}', 'StudentController@getView');
Route::get('student/add', 'StudentController@getAdd');
Route::get('student/edit/{id}', 'StudentController@getEdit');
Route::post('student/add', 'StudentController@postAdd');
Route::post('student/edit/{id}', 'StudentController@postEdit');

//queue
Route::get('queue', 'QueueController@getIndex');

//Admin
Route::group(["prefix" => "admin", "namespace" => "Admin"], function(){
    Route::get('teacher', 'TeacherController@getIndex');
    Route::get('student', 'StudentController@getIndex');
    Route::get('classroom', 'ClassroomController@getIndex');
});
