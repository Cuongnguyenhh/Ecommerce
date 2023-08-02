<?php

use App\Http\Controllers\Backend\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Models\Images;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'product']);
Route::get('/category/{id}', [HomeController::class, 'productbyCate']);
Route::get('/productdetail', [HomeController::class, 'productDetails']);
Route::get('/shopingcart', [CartController::class, 'shopingcart'])->name('shopingcart');


Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('checkout', [ProductController::class, 'productDetails']);

Route::get('/dashboard', function () {
    return view('dashboard_pages.home');
})->middleware(['checkadmin'])->name('dashboard');

Route::prefix('/dashboard')->middleware('checkadmin')->group(function () {
    Route::resource('products', 'App\Http\Controllers\Backend\AdminProductController');
});




require __DIR__ . '/auth.php';
