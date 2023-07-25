<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/product', function () {
    return view('pages.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['checkadmin'])->name('dashboard');

Route::middleware('checkAuth')->group(function () {
    // Your protected routes go here
    Route::get('/checkauth', function(){
        echo "checkAuth";
    });
   
});
Route::get('/checksession', function () {
    $user = Auth::user();
    var_dump($user->name);
});

require __DIR__.'/auth.php';
