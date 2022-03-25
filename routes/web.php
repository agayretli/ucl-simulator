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

Route::get('/', 'Client\SimulatorController@teams')->name('teams');
Route::get('/fixtures', 'Client\SimulatorController@fixtures')->name('fixtures');
Route::get('/start_simulation', 'Client\SimulatorController@playNextWeek')->name('start.simulation');
Route::get('/play_next_week', 'Client\SimulatorController@playNextWeek')->name('play.next.week');
Route::get('/play_all_weeks', 'Client\SimulatorController@playAllWeeks')->name('play.all.weeks');
Route::get('/reset_data', 'Client\SimulatorController@resetData')->name('reset.data');
