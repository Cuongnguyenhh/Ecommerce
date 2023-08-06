<?php
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

// use App\Http\Controllers\Backend\AdminProductController;
// use Illuminate\Support\Facades\Route;
// Route::get('/testjson', [AdminProductController::class, 'testjsonResponse']);


require __DIR__.'/home.php';
require __DIR__.'/checkout.php';
require __DIR__.'/admin.php';
require __DIR__.'/cart.php';
require __DIR__ .'/auth.php';


