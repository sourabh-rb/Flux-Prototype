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

Route::get('/', 'toDoController@index');
Route::post('/create', 'toDoController@create')->name('create');
Route::get('/update/{id}', 'toDoController@update')->name('update');
Route::get('/delete/{id}', 'toDoController@delete')->name('delete');

/*
Route::get('/', function () {
    return view('todo.index');

});
*/
