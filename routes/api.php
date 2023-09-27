<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\RentalController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('signup', [UserController::class, 'signup']);

Route::post('login', [UserController::class, 'login']);

Route::get('users', [UserController::class, 'index']);

Route::get('cars', [CarController::class, 'index']);

Route::get('cars/{id}', [CarController::class, 'show']);

Route::get('logout', [UserController::class, 'logout']);

Route::get('rents', [RentalController::class, 'index']);

Route::post('rents', [RentalController::class, 'store']);

Route::post('cars', [CarController::class, 'store']);

Route::get('/users/{user_id}/rents', [RentalController::class, 'getUserRents']);

Route::put('/user/{user_id}', [UserController::class, 'updateProfile']);

Route::delete('/cars/{id}', [CarController::class, 'destroy']);
Route::delete('/rents/{id}', [RentalController::class, 'destroy']);
Route::delete('/users/{id}', [UserController::class, 'destroy']);

Route::put('cars/{id}', [CarController::class, 'update']);
Route::put('rents/{id}', [RentalController::class, 'update']);
Route::put('users/{id}', [UserController::class, 'update']);
