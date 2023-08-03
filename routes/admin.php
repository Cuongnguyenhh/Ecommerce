<?php 
use App\Http\Controllers\Backend\AdminProductController;
use Illuminate\Support\Facades\Route;




Route::get('/dashboard', function () {
    return view('dashboard_pages.home');
})->middleware(['checkadmin'])->name('dashboard');

Route::prefix('/dashboard')->middleware('checkadmin')->group(function () {
    Route::resource('products', 'App\Http\Controllers\Backend\AdminProductController');
});