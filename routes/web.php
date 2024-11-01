<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Auth::routes();

Route::get('/', function () {
    return view('homepage');
});

Route::resource('products', ProductController::class);
Route::get('profile', [UserController::class, 'profile'])->name('profile');
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/users', [AdminController::class, 'users'])->name('admin.users');
    Route::get('admin/orders', [AdminController::class, 'orders'])->name('admin.orders');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function() {
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
});
