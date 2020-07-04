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
    return view('items.home');
});

Route::get('/data-tables', function () {
    return view('items.data-tables');
});


Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');

Route::get('/pertanyaan/{id}','PertanyaanController@lihat');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@ubah');
Route::put('/pertanyaan/{id}','PertanyaanController@storeUbah');
Route::delete('/pertanyaan/{id}','PertanyaanController@hapus');

Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');
