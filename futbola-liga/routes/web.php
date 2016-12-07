<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get( 'teams', 'teamController@showTeams');
Route::get( 'players', 'playerController@showPlayers');
Route::get( 'trainers', 'trainerController@showTrainers');
Route::get( 'results', 'resultController@showResults');

Route::get( 'editPlayers', 'playerEditController@editPlayers');
Route::get( 'editTeams', 'teamEditController@editTeams');
Route::get( 'editResults', 'resultEditController@editResults');
Route::get( ' ', 'trainerEditController@editTrainers');
Route::post( 'treneri-select', 'trainerEditController@fetch_data');

Route::get('editTrainers', function(){
return View::make('treneri-index');
    
});
Route::post( 'editTrainers', 'teamEditController@editTrainers');