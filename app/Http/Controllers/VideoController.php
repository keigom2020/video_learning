<?php

namespace App\Http\Controllers;

use App\Video;
use App\BrowsingHistory;
use Auth;

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

    public function updateBrowsingHistory(Request $request, $id) 
    {
        $browsing_history = BrowsingHistory::where('video_id', $id)->where('user_id', Auth::id())->first();

        if (empty($browsing_history)) {
            $browsing_history = new BrowsingHistory;
            $browsing_history->user_id = Auth::id();
            $browsing_history->video_id = $id;
        }

        $browsing_history->state_button = $browsing_history->state_button == 1 ? 0 : 1; //if文で描いてもいい　三項演算子で調べる
        $browsing_history->save();
        // return redirect()->route('video.show', ['id' => $video->id]);
        return redirect()->route('video.show', ['id' => $id]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    // public function create(Request $request)
    public function create()
    {
        $message = '新しい動画';
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
        $video->title = $request->title;
        $video->video_url = $request->video_url;
        $video->detail = $request->detail;
        $video->author = $request->author;
        $video->category_id = $request->category_id;
        $video->image_src = $request->image_src;
        $video->content = $request->content;
        $video->save();
        return redirect()->route('video.index', ['id' => $video->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id, Video $video)
    {
        $browsing_history = BrowsingHistory::where('video_id', $id)->where('user_id', Auth::id())->first();

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
            'browsing_history' => $browsing_history,
            'video_players' => $video_players
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id, Video $video)
    {
        $message = '動画を編集 ' . $id;
        $video = Video::find($id);
        return view('video.edit', [
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
    public function update(Request $request, Video $video, $id)
    {
        $video = Video::find($id);

        $video->title = $request->title;
        $video->content = $request->content;
        $video->save();
        return redirect()->route('video.show', ['id' => $video->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Request $request, $id, Video $video)
    public function destroy(Request $request, $id, Video $video)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect('/videos');
    }
}
