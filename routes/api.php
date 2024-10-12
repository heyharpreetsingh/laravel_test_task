<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// User Registration
Route::post('/register', [RegisterController::class, 'register']);

// User Login
Route::post('/login', [LoginController::class, 'login']);

// Products (Authenticated)
Route::middleware('auth:api')->get('/products', [ProductController::class, 'index']);

