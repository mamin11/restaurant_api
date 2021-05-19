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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/menus', 'MenuController@index');
Route::get('/menus/{id}', 'MenuController@menuItem');
Route::get('/menus/category/{name}', 'MenuController@menuCategory');

Route::resource('/booking', 'BookingController');