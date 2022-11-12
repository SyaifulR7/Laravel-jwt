<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route register | Method post
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

// Route register | Method get
Route::get('/register', function () {
    return view('register');
});

// Route login | Method post
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

// Route login | Method get
Route::get('/login', function () {
    return view('login');
});

// Route user | Method post
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route logout | Method post
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
