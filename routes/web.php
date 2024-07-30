<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomePageController;

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
    return view('home');
});

// Home page route with HomePageController
Route::get('/', [HomePageController::class, 'index'])->name('home');

// Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Products Routes
Route::resource('products', ProductController::class);

// Profile Routes
Route::get('profile', [UserController::class, 'profile'])->name('profile');

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
});


require __DIR__.'/auth.php';
