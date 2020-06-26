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
    return view('ADD_par_ville');
});
Route::get('/total', function () {
    return view('ADD_total');
});
Route::post('/', 'TestController@add')->name('covid.add');
Route::post('/total', 'TestController@add2')->name('covid.total');