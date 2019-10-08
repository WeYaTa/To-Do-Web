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

Route::get('todo', 'ToDoController@index')->name("home");
Route::get('todo/{id}/details', 'ToDoController@getById')->name("getbyid");
Route::get('todo/finished', 'ToDoController@finishedtodo')->name("finished_todo");
Route::get('todo/new', 'ToDoController@new')->name("new_todo");
Route::post('todo/new', 'ToDoController@add')->name("add_todo");
Route::get('todo/{id}/edit', 'ToDoController@edit')->name("edit_todo");
Route::post('todo/{id}/edit', 'ToDoController@update')->name("update_todo");
Route::get('todo/{id}/delete', 'ToDoController@delete')->name("delete_todo");
