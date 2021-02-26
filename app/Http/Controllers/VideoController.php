<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = '動画で学習';
        $videos = Video::all();
        return view('video.index', [
            'message' => $message, 
            'videos' => $videos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $message = 'New Video';
        return view('video.new', ['message' => $message]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video();

        $video->id = '0.';
        $video->category_id = '1';
        $video->title = '導入';
        $video->detail = 'サンプル動画タイトルです。';
        $video->content = 'サンプル動画のテキスト文です。';
        $video->author = '田中太郎';
        $video->video_url = 391525572;
        $video->image_src = '';
        
        $video->save();
        return redirect('/videos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Video $video)
    {
        $message = '動画 ' . $id;
        $videos = Video::all();
        $video = Video::find($id);
        // $videoがnullなら404表示にする　短い記述で住むならコントローラでの記述でもOK
        // この記述だとコントローラ側に書くしかない if文
        // もしくはmodel next_video_idみたいな
        $nextVideo = Video::nextVideo($id+1);
        $video_players = video::where('category_id', $video->category_id)->get();
        return view('video.show', [
            'nextVideo' => $nextVideo, 
            'message' => $message, 
            'videos' => $videos, 
            'video' => $video, 
            'video_players' => $video_players
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Video $video)
    {
        $message = 'Edit your Video ' . $id;
        $video = Video::find($id);
        return view('show', [
            'message' => $message, 
            'video' => $video
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id, Video $video)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect('/videos');
    }
}
