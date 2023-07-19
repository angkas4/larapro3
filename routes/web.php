<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/data', \App\Http\Controllers\DataController::class);
Route::get('/', function () {
    return view('a');
});

Route::get('/chart', function () {
    return view('chart');
});

//Route::get('/table','DataController@index');

Route::get('/table', 'App\Http\Controllers\DataController@index');

Route::get('/form', function () {
    return view('form');
});

Route::get('/dashboard', 'App\Http\Controllers\DataController@dash');