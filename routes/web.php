<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/produk', [MenuController::class, 'show']);

Route::get('/order/{menu:slug}', [MenuController::class, 'order']);

Route::match(['get', 'post'], 'add-cart', [OrderController::class, 'addtoCart']);

Route::get('/checkout', [OrderController::class, 'show']);
