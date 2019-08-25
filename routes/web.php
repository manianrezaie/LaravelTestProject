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

Route::group(["middleware" => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\MainController@index')->name('admin_dashboard');

    //teams
    Route::get('/teams', 'Admin\TeamController@index')->name('admin_teams');
    Route::get('/teams/new', 'Admin\TeamController@newTeamForm')->name('admin_new_team');
    Route::post('/teams/new', 'Admin\TeamController@newTeamSave')->name('admin_new_team_save');
    Route::get('/teams/edit/{id}', 'Admin\TeamController@editTeamForm')->name('admin_edit_team');
    Route::post('/teams/edit', 'Admin\TeamController@editTeamSave')->name('admin_edit_team_save');
});