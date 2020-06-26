<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//-----------------------------
//select la sum des cas depuis la table (reg...)
Route::get('/','TestController@all');
//-----------------------------
//select les regions qui existe dans la table
Route::get('/regions','TestController@regionsdata');
//-----------------------------
//select depuis la table coviddata (confirmeed,recovred,deaths)
Route::get('/datas','TestController@datas');
//-----------------------------
//Sum des cas par regions
Route::get('/regions/{intitule_reg}','TestController@reg');
//-----------------------------
//return les statistique d'une ville d'une region
Route::get('/{intitule_reg}/{ville}','TestController@villereg');

 //return les villes d'une region avec le nbr ajouter
Route::get('/{intitule_reg}','TestController@regionsdatac');

