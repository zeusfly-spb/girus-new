<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $user = User::find(Auth::id());
            return response()->json(['user' => $user, 'token' => $user->createToken('token')->plainTextToken]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function details(): JsonResponse
    {
        $user = User::find(Auth::id());
        return response()->json(['user' => $user]);
    }

}
