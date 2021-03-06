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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 1
Route::get("/tasks", "TaskController@index")->name('tasks.index');
Route::post("/tasks", "TaskController@store")->name('tasks.store');
Route::get("/tasks/create", "TaskController@create")->name('tasks.create');
Route::get("/tasks/{task}", "TaskController@show")->name('tasks.show');
Route::delete("/tasks/{task}", "TaskController@delete")->name('tasks.delete');