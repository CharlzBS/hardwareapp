<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Permissions\PermissionController;
use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Customers\CustomerController;
use App\Http\Controllers\POS\SalesController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::resource('/permission', PermissionController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);

    Route::get('/getProductDetails',[ProductController::class, 'getProductDetails']);

    Route::resource('/customer', CustomerController::class);
    Route::resource('/sales', SalesController::class);
    

    
});





require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';
