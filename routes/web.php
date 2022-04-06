<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartsController;
use App\Http\Controllers\articlesController;
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

Route::get('/', [articlesController::class, 'index']);

Route::get('/cart', [cartsController::class, 'index'])->middleware(['auth'])->name('cart');
Route::post('cart/delete/{id}', [cartsController::class, 'delete'])->middleware(['auth']);
Route::get('cart/checkout/{id}/{total}', [cartsController::class, 'checkout'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
