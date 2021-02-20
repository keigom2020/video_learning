<?php

namespace App\Http\Controllers;

use App\BrowsingHistory;
use Illuminate\Http\Request;

class BrowsingHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = '動画で学習';
        $browsing_history = BrowsingHistory::all();
        return view('video.show', ['message' => $message, 'browsing_history' => $browsing_history]);
        // return view('video.show', ['browsing_history' => $browsing_history]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\BrowsingHistory  $browsingHistory
     * @return \Illuminate\Http\Response
     */
    public function show(BrowsingHistory $browsingHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrowsingHistory  $browsingHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(BrowsingHistory $browsingHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrowsingHistory  $browsingHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrowsingHistory $browsingHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrowsingHistory  $browsingHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrowsingHistory $browsingHistory)
    {
        //
    }
}
