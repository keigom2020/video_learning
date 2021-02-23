<?php

Route::get('/', function () {
    return view('top');
});

Route::get('/top', function () {
    return view('top');
});

// マイページ、ダッシュボード
Route::get('/mypage', function () {
    return view('mypage');
})->name('mypage');

//ミドルウェアでのグループ化
Route::group(['middleware' => ['auth']], function () {

    // コース一覧
    Route::get('/courses', function () {
        return view('courses');
    })->name('courses');

    // 保険コース
    Route::get('/course/insurance', function () {
        return view('course.insurance.index');
    })->name('insurance');

    // Route::get('/course/insurance/primary', function () {
    //     return view('course.insurance.primary.index');
    // })->name('insurance.primary');

    // 不動産コース
    Route::get('/course/realestate', function () {
        return view('course.realestate.index');
    })->name('realestate');

    // 証券投資コース
    Route::get('/course/stock', function () {
        return view('course.stock.index');
    })->name('stock');

    // 記事一覧を表示
    Route::get('/articles', 'ArticleController@index')->name('article.index');
    Route::get('/article/{id}', 'ArticleController@show')->name('article.show');

    Route::get('/article/new', 'ArticleController@create')->name('article.new');
    // Route::post('/article', 'ArticleController@store')->name('article.store');

    //
    Route::get('/', function() {
        return redirect('/mypage');
    });
    Route::get('/article', function() {
        return redirect('/articles');
    });
    Route::delete('/article/{id}', 'ArticleController@destroy')->name('article.delete');

});

// システム管理者のみ
Route::group(['middleware' => ['auth', 'can:system-only']], function () {
    Route::get('/videos', 'VideoController@index')->name('video.index');
    Route::get('/video/new', 'VideoController@create')->name('video.new');
    Route::delete('/video/delete', 'VideoController@destroy')->name('video.delete');
    Route::delete('/video/new', 'VideoController@create')->name('video.new');

    Route::post('/video/store', 'VideoController@store')->name('video.store');

    Route::get('/video/edit/{id}', 'VideoController@edit')->name('video.edit');
    Route::post('/video/update/{id}', 'VideoController@update')->name('video.update');
});

// BrowsingHistory
// Route::get('/video/{id}', 'BrowsingHistoryController@index');

// VideoController制御
Route::get('/video/{id}', 'VideoController@show')->name('video.show');




// 保険の動画ページ
Route::get('/video/1', 'VideoController@show')->name('video.insurance.primary');
Route::get('/video/11', 'VideoController@show')->name('video.insurance.medium');
Route::get('/video/21', 'VideoController@show')->name('video.insurance.advanced');

// 不動産の動画ページ
Route::get('/video/31', 'VideoController@show')->name('video.realestate.primary');
Route::get('/video/41', 'VideoController@show')->name('video.realestate.medium');
Route::get('/video/51', 'VideoController@show')->name('video.realestate.advanced');

// 証券投資の動画ページ
Route::get('/video/61', 'VideoController@show')->name('video.stock.primary');
Route::get('/video/71', 'VideoController@show')->name('video.stock.medium');
Route::get('/video/81', 'VideoController@show')->name('video.stock.advanced');


// HTTPステータスコードを引数に、該当するエラーページを表示させる
Route::get('error/{code}', function ($code) {
  abort($code);
});

// 認証関係
Auth::routes();

# ゲストユーザーログイン
Route::get('guest', 'Auth\LoginController@guestLogin')->name('login.guest');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function() {
    return redirect('/top');
});


