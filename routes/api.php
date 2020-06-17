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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::post('login', 'ApiController@login');
Route::post('register', 'ApiController@register');
//Route::get('test', 'RechercheController@index');
//Route::get('getpost', 'AnnonceUserController@index');
//Route::get('add_annonce', 'AnnonceUserController@store');
Route::post('annonces/search', 'AnnonceController@search');
Route::put('user/{id}', 'ApiController@updateUser');
Route::get('annonces/{id}', 'AnnonceController@show');
Route::apiResource('annonces', 'AnnonceController');

Route::group(['middleware' => 'auth.jwt'], function () {
    //Route::apiResource('annonces', 'AnnonceController');
    Route::get('logout', 'ApiController@logout');

  

});
