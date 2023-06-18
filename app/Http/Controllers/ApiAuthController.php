<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $request->validated();
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            $user->tokens()->delete();
            $token = $user->createToken('auth_token')->plainTextToken;

            return new LoginResource([
                'user' => $user,
                'token' => $token
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized'
            ], 401);
        }
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'data' => $user
        ], 201);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Token deleted successfully'
        ], 200);
    }
}
