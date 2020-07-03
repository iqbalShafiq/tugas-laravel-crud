<?php

use App\Http\Controllers\JawabanController;
use App\Http\Controllers\PertanyaanController;

// home
Route::get('/', function () {
    return view('home');
});

// pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index')->name('get_pertanyaan');
Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('create_pertanyaan');
Route::post('/pertanyaan', 'PertanyaanController@store')->name('post_pertanyaan');

// jawaban
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index')->name('get_jawaban');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store')->name('post_jawaban');
