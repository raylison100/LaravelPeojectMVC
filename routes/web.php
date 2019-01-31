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

Route::get('/','AutomoveisController@index');
Route::resource('/painel/automoveis', 'AutomoveisController');
Route::post('/painel/automoveis/busca','AutomoveisController@show');
