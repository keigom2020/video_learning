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
        return view('video.index', ['message' => $message, 'videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = new Video();

        $video->id = '0.';
        $video->category_id = '1';
        $video->title = '導入';
        $video->detail = 'サンプル動画タイトルです。';
        $video->content = 'サンプル動画のテキスト文です。';
        $video->author = '田中太郎';
        $video->save();
        return redirect('/videos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $videos_1 = video::where('category_id', 1)->get();
        return view('video.show', ['message' => $message, 'videos' => $videos, 'video' => $video, 'videos_1' => $videos_1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
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
