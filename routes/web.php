<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/prosess-login', [AuthController::class, 'prosessLogin']);
