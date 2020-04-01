<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/tasks','TaskerController@index')->name('tasker.index');
Route::get('/tasks/new','TaskerController@create')->name('tasker.create');
Route::get('/tasks/edit/{id}','TaskerController@edit')->name('tasker.edit');
Route::get('/tasks/info/{id}','TaskerController@info')->name('tasker.info');
Route::get('/tasks/delete/{id}','TaskerController@destroy')->name('tasker.destroy');
Route::post('/tasks/store','TaskerController@store')->name('tasker.store');
Route::post('/tasks/update','TaskerController@update')->name('tasker.update');
