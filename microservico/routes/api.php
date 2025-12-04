<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/notify', [NotificationController::class, 'notify']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/order/create', [OrderController::class, 'create']);
Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');
