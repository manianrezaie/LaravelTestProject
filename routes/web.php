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
    return view('home');
});

Auth::routes();

Route::group(["middleware" => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin_dashboard');

    //teams
    Route::get('/teams', 'Admin\TeamController@index')->name('admin_teams');
    Route::get('/team_players/{id}', 'Admin\TeamController@getTeamPlayersView')->name('admin_get_team_players');
    Route::get('/teams/new', 'Admin\TeamController@newTeamForm')->name('admin_new_team');
    Route::post('/teams/new', 'Admin\TeamController@newTeamSave')->name('admin_new_team_save');
    Route::get('/teams/edit/{id}', 'Admin\TeamController@editTeamForm')->name('admin_edit_team');
    Route::post('/teams/edit', 'Admin\TeamController@editTeamSave')->name('admin_edit_team_save');

    //players
    Route::get('/players', 'Admin\PlayerController@index')->name('admin_players');
    Route::get('/players/new', 'Admin\PlayerController@newPlayerForm')->name('admin_new_player');
    Route::post('/players/new', 'Admin\PlayerController@newPlayerSave')->name('admin_new_player_save');
    Route::get('/players/edit/{id}', 'Admin\PlayerController@editPlayerForm')->name('admin_edit_player');
    Route::post('/players/edit', 'Admin\PlayerController@editPlayerSave')->name('admin_edit_player_save');


});


Route::get('/players', function () {
    return view('home');
})->name('players');

Route::get('/player/{id}', function ($id) {
    return view('home');
})->name('player');

Route::get('/teams', function () {
    return view('home');
})->name('teams');


Route::get('/team/{id}', function ($id) {
    return view('home');
})->name('team');