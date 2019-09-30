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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/tasks','TaskController@index')->name('tasks.index');

Route::get('/add','TaskController@add')->name('tasks.add');
Route::post('/index','TaskController@insert')->name('tasks.insert');
