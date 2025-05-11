<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Route for the dashboard to be shown at the root URL
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
