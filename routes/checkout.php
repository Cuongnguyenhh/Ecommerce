<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::resource('/checkout', CheckoutController::class)->middleware('checkAuth');
