<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\VnPayController;
use Illuminate\Support\Facades\Route;

Route::resource('/checkout', CheckoutController::class)->middleware('checkAuth');
Route::post('/payment', [VnPayController::class, 'index'])->middleware('checkAuth')->name('vnpay.load');
Route::get('/testaddpay', [VnPayController::class, 'store']);


