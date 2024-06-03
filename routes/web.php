<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
