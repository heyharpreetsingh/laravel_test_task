<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /**
     * Handle user registration.
     *
     * @param  \App\Http\Requests\Api\RegisterRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request): JsonResponse
    {
        $data = $request->validated();

        // Hash the plain password before saving it to the database for security.
        // bcrypt() is used to encrypt the password.
        $data['password'] = bcrypt($request->password);
        
        User::create($data);

        return response()->json(['message' => 'User registered successfully!'], 201);
    }
}
