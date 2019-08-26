<?php

use Illuminate\Http\Request;

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

Route::get('/players', 'Admin\PlayerController@apiListAll')->name("api_all_players");
Route::get('/player/{id}', 'Admin\PlayerController@apiShow')->name("api_get_player");
Route::get('/teams', 'Admin\TeamController@apiListAll')->name("api_all_teams");
Route::get('/team/{id}', 'Admin\TeamController@apiShow')->name("api_get_team");