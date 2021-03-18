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

/*
Route::get('/', function () {
    return view('layouts/app');
});
*/

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('pages.index');
Route::get('/about','App\Http\Controllers\PagesController@about')->name('pages.about');

Route::get('/todos','App\Http\Controllers\TodosController@index')->name('todos.index');
Route::get('/todos/create','App\Http\Controllers\TodosController@create')->name('todos.create');
Route::post('/todos','App\Http\Controllers\TodosController@store')->name('todos.store'); // making a post request
Route::get('/todos/{id}','App\Http\Controllers\TodosController@show')->name('todos.show');
Route::get('/todos/{id}/edit','App\Http\Controllers\TodosController@edit')->name('todos.edit');
Route::put('/todos/{id}','App\Http\Controllers\TodosController@update')->name('todos.update'); // making a put request
Route::delete('/todos/{id}','App\Http\Controllers\TodosController@destroy')->name('todos.destroy'); // making a delete request */

Route::resource('/todos','App\Http\Controllers\TodosController');

