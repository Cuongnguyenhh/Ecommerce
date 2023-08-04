<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'product']);
Route::get('/category/{id}', [HomeController::class, 'productbyCate']);
Route::get('/productdetail', [HomeController::class, 'productDetails']);
Route::get('successpayment', [HomeController::class, 'successpayment']);
Route::get('/accessdenied', function(){
    return view('pages.access_denied');
});
Route::fallback(function () {
    return view('pages.404');
});

