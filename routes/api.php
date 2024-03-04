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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user_accounts','UserAccountsController@index');
Route::get('user_accounts/search','UserAccountsController@search');
Route::get('user_accounts/{user_account}','UserAccountsController@show');
Route::post('user_accounts','UserAccountsController@store');
Route::put('user_accounts/{user_account}','UserAccountsController@update');
Route::delete('user_accounts/{user_account}','UserAccountsController@delete');
