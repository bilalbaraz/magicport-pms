<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\SignInRequest;
use App\Http\Requests\Auth\SignUpRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function profile(Request $request)
    {
        $user = $request->user();

        return response()->json(['success' => true, 'user' => $user]);
    }

    public function signIn(SignInRequest $request)
    {
        $data = $request->validated();
        $token = $this->authService->createToken($data);

        return response()->json(['success' => true, 'token' => $token]);
    }

    public function signUp(SignUpRequest $request)
    {
        $data = $request->validated();
        $this->authService->signUp($data);

        return response()->json(['success' => true]);
    }
}
