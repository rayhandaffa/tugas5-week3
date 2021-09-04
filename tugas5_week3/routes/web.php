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
    return view('master');
});

Route::get('/dashboard', function () {
    return view('masterpart.dashboard');
});

Route::get('/table', function () {
    return view('masterpart.table');
});

Route::get('/data-tables', function () {
    return view('masterpart.data_tables');
});

Route::get('/cast/{id}', 'CastController@tampilkan');
Route::post('/cast', 'CastController@store');
Route::get('/cast/create', 'CastController@create'); 
Route::get('/cast', 'CastController@index');
Route::get('/cast/{id}/edit', 'CastController@edit');
Route::delete('/cast/{id}', 'CastController@hapus');
Route::put('/cast/{id}', 'CastController@update');
