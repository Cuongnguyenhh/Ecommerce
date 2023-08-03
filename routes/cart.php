<?php
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;



Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/shopingcart', [CartController::class, 'shopingcart'])->name('shopingcart');