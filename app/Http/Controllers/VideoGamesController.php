<?php

namespace App\Http\Controllers;

use App\Models\VideoGames;
use App\Http\Requests\StoreVideoGamesRequest;
use App\Http\Requests\UpdateVideoGamesRequest;

class VideoGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoGamesRequest $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoGamesRequest $request, VideoGames $videoGames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoGames $videoGames)
    {
        //
    }
}
