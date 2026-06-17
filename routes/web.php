<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;


Route::prefix('admin')->group(function () {
// Login page
    Route::get('/login', [LoginController::class, 'index'])->name('login');

// Check login
    Route::post('/login', [LoginController::class, 'login'])->name('login.check');
// Dashboard
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'home'])->name(name: 'customer-home');
    Route::get('about', [AdminController::class, 'about'])->name(name: 'customer-about');
    Route::get('contact', [AdminController::class, 'contact'])->name(name: 'customer-contact');
    Route::get('login', [AdminController::class, 'login'])->name(name: 'customer-login');
    Route::get('register', [AdminController::class, 'register'])->name(name: 'register');
    Route::post('products', [AdminController::class, 'products'])->name(name: 'products');

    Route::post('orders', [AdminController::class, 'orders'])->name(name: 'admin.orders');
    Route::post('customers', [AdminController::class, 'customers'])->name(name: 'admin.customers');

});


// Dashboard
Route::get('/dashboard', [LoginController::class,'dashboard'])->name('dashboard');


Route::get('/products',[ProductController::class,'index']);

