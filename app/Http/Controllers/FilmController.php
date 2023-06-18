<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::all();
        $response = [
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => $film
        ];

        return response()->json($response, 200, [
            'Accept' => 'application/json',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        $film = Film::create($request->validated());
        $response = [
            'status' => 'success',
            'message' => 'Data stored successfully',
            'data' => $film
        ];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $film->update($request->validated());
        $response = [
            'status' => 'success',
            'message' => 'Data updated successfully',
            'data' => $film
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        $film->delete();
        $response = [
            'status' => 'success',
            'message' => 'Data deleted successfully',
            'data' => $film
        ];
    }
}
