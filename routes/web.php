<?php

Route::get('/', function () {
    // return view('welcome');
    return view('top');
});

Route::get('/mypage', function () {
    return view('mypage');
});

Route::get('/courses', function () {
    return view('courses');
});

// 保険コース
Route::get('/course/insurance', function () {
    return view('course.insurance.index');
});

Route::get('/course/insurance/primary', function () {
    return view('course.insurance.primary.index');
})->name('insurance.primary');

Route::get('/course/insurance/medium', function () {
    return view('course.insurance.medium');
})->name('insurance.medium');

Route::get('/course/insurance/advanced', function () {
    return view('course.insurance.advanced');
})->name('insurance.advanced');

// 不動産コース
Route::get('/course/realestate', function () {
    return view('course.realestate.index');
});

Route::get('/course/realestate/primary', function () {
    return view('course.insurance.primary');
})->name('realestate.primary');

Route::get('/course/realestate/medium', function () {
    return view('course.realestate.medium');
})->name('realestate.medium');

Route::get('/course/realestate/advanced', function () {
    return view('course.realestate.advanced');
})->name('realestate.advanced');

// 証券投資コース
Route::get('/course/stock', function () {
    return view('course.stock.index');
});

Route::get('/course/stock/primary', function () {
    return view('course.stock.primary');
})->name('realestate.primary');

Route::get('/course/stock/medium', function () {
    return view('course.stock.medium');
})->name('stock.medium');

Route::get('/course/stock/advanced', function () {
    return view('course.stock.advanced');
})->name('stock.advanced');

// VideoController制御
Route::get('/videos', 'VideoController@index')->name('video.index');
Route::get('/video/{id}', 'VideoController@show')->name('video.show');
Route::get('/video/new', 'VideoController@create')->name('video.new');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
