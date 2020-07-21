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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Team module
Route::resource('teams', 'TeamController');

//Player module
Route::resource('players', 'PlayerController');

//Match module
Route::resource('matches', 'MatchController');

//Point module
Route::resource('points', 'PointController');

Route::get('playmatch', 'MatchController@playMatch')->name('playmatch');
Route::post('playmatch', 'MatchController@saveMatch')->name('savematch');  
