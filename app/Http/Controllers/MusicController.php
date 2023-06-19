<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $music = Music::all();
        $response = [
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => $music
        ];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {
        $music = Music::create($request->validated());
        $response = [
            'status' => 'success',
            'message' => 'Data stored successfully',
            'data' => $music
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        $music->update($request->validated());
        $response = [
            'status' => 'success',
            'message' => 'Data updated successfully',
            'data' => $music
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        $music->delete();
        $response = [
            'status' => 'success',
            'message' => 'Data deleted successfully',
            'data' => $music
        ];
    }
}
