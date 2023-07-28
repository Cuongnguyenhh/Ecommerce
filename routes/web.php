<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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


Route::get('/testproducts',[CategoryController::class,'getAllCategories']);



Route::get('/dashboard', function () {
    return view('dashboard_pages.home');
})->middleware(['checkadmin'])->name('dashboard');


Route::middleware('checkadmin')->group(function () {
    Route::get('/dashboard/products', function () {
        return view('dashboard_pages.products');
    });
});


require __DIR__ . '/auth.php';
