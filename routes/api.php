<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/healthcheck', function(){
    return response()->json([
        'message' => 'API is Working'
    ]);
});

Route::post('/member-registration',[AuthController::class, 'memberRegistration']);
Route::post('/login',[AuthController::class, 'login']);
Route::post('/logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/user/{id}',[AuthController::class, 'user'])->middleware('auth:sanctum');

/***********************
    Users
 ************************/
// get all users:
Route::get('/users', [UserController::class, 'getUsers']);

// get single user:
// Route::get('/user/{id}', [UserController::class, 'getUser']);

// create user:
Route::post('/create-user', [UserController::class, 'createUser']);

// update user:
Route::put('/update-user/{id}', [UserController::class, 'updateUser']);

// delete user:
Route::delete('/delete-user/{id}', [UserController::class, 'deleteUser']);



/***********************
    Events
 ************************/
// get all events:
Route::get('/events', [EventController::class, 'events']);


/***********************
    Bookings
 ************************/
// get all bookings:
Route::get('/bookings', [BookingController::class, 'getAllBookings']);