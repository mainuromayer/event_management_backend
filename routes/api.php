<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/healthcheck', function(){
    return response()->json([
        'message' => 'API is Working'
    ]);
});

/***********************
    Users
 ************************/
// get all users:
Route::get('/users', [UserController::class, 'getUsers']);

// get single user:
Route::get('/user/{id}', [UserController::class, 'getUser']);

// create user:
Route::post('/create-user', [UserController::class, 'createUser']);

// update user:
Route::put('/update-user/{id}', [UserController::class, 'updateUser']);

// delete user:
Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser']);



/***********************
    Bookings
 ************************/
// get all bookings:
Route::get('/bookings', [BookingController::class, 'getAllBookings']);