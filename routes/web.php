<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ReverseUserAuthCheck;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', function () {
    return view('auth_login');
})->middleware(ReverseUserAuthCheck::class);

Route::post('/auth/login', [UserController::class, 'authenticate'])->middleware(ReverseUserAuthCheck::class);
Route::get('/auth/logout', [UserController::class, 'logout']);
