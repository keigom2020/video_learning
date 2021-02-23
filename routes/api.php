<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => ['api']], function(){
//     Route::resource('video.show', 'VideoController');
//   });


// https://qiita.com/Yorinton/items/1fe722ce9ccef3aa1c96
// Route::group(['middleware' => 'api'],function(){
//     Route::post('/video/{id}',function($id){
//         $user = App\User::where('id',$id)->first(); //->firstではないよね？

//         $video = new App\Video();
//         $video->state_button = request('state_button');
//         // $video->title = request('title');
//         // $video->content = request('content');

//         $user->videos()->save($video);

//         return ['state_button' => request('state_button')]; //1つだけでも配列の[]で表示すべきなのか？
//     });

// });