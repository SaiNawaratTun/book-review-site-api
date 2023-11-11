<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ReviewController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/user', [AuthController::class, 'getAuthUser']);
// Route::post('register', 'AuthController@register');
// // Route::post('login', 'AuthController@login');
// // Route::post('logout', 'AuthController@logout');
// // Route::get('user', 'AuthController@getAuthUser');


Route::apiResource('books', BookController::class);
Route::post('books/{book}/ratings', [RatingController::class, 'store']);
Route::post('books/{book}/reviews', [ReviewController::class, 'store']);