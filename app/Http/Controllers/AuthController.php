<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\SignInRequest;
use App\Http\Requests\Auth\SignUpRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function profile(Request $request)
    {
        $user = $request->user();

        return response()->json(['success' => true, $user]);
    }

    public function signIn(SignInRequest $request)
    {
        $data = $request->validated();

        return response()->json(['success' => true, $data]);
    }

    public function signUp(SignUpRequest $request)
    {
        $data = $request->validated();

        return response()->json(['success' => true, $data]);
    }
}
