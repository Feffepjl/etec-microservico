<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/notify', [NotificationController::class, 'notify']);
Route::get('/dashboard', [DashboardController::class, 'index']);
