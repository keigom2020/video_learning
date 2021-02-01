<?php

Route::get('/', function () {
    // return view('welcome');
    return view('top');
});

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/videos', 'VideoController@index')->name('video.index');
Route::get('/video/{id}', 'VideoController@show')->name('video.show');
Route::get('/video/new', 'VideoController@create')->name('video.new');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
