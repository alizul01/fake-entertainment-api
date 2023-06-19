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
        $videoGames = VideoGames::all();
        $response = [
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => $videoGames
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVideoGamesRequest $request)
    {
        $videoGames = VideoGames::create($request->validated());
        $response = [
            'status' => 'success',
            'message' => 'Data stored successfully',
            'data' => $videoGames
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoGamesRequest $request, VideoGames $videoGames)
    {
        $videoGames->update($request->validated());
        $response = [
            'status' => 'success',
            'message' => 'Data updated successfully',
            'data' => $videoGames
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VideoGames $videoGames)
    {
        $videoGames->delete();
        $response = [
            'status' => 'success',
            'message' => 'Data deleted successfully',
            'data' => $videoGames
        ];
    }
}
