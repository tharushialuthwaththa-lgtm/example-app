<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Customer Pages
|--------------------------------------------------------------------------
*/

Route::get('/', [AdminController::class,'home'])->name('customers-home');

Route::get('/about', [AdminController::class,'about'])->name('customers-about');

Route::get('/contact', [AdminController::class,'contact'])->name('customers-contact');




/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.check');

Route::get('/register', [AdminController::class,'register'])->name('register');


/*
|--------------------------------------------------------------------------
| Admin Pages
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [LoginController::class,'dashboard'])->name('dashboard');

Route::get('/products', [ProductController::class,'index'])->name('products');

Route::get('/products/create', [AdminController::class,'products'])->name('admin.customers.products');

Route::get('/orders', [AdminController::class,'orders'])->name('admin.orders');



// Admin
Route::get('/admin/products', [ProductController::class, 'index'])
    ->name('admin.add_products');




Route::resource('customers', CustomerController::class);


Route::get('/customers/create', [CustomerController::class, 'create'])
->name('customer.create');

Route::get('/customers', [CustomerController::class, 'index'])->name('customer.index');

