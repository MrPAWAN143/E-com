<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CheckUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageUserController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\UserDashboardController;

Route::get('/', [HomePageUserController::class, 'getUserDetails'])->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'getUserDetails'])->name('dashboard');
    Route::get('admin/add-product', [ProductController::class, 'showAddProductForm'])->name('add-product');
    Route::post('admin/add-product', [ProductController::class, 'addProduct'])->name('add-prodcut');
    Route::get('admin/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('admin/add-category', [CategoryController::class, 'storeCategory'])->name('add-category');
    Route::get('admin/categories', [CategoryController::class, 'index'])->name('category-list');
    Route::get('admin/category/edit/{slug}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('update-category');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('user-dashboard', [UserDashboardController::class, 'showUserDashboard'])->name('user.dashboard');
});




Route::post('/check-username', [CheckUserController::class, 'checkUsername'])->name('check.username');








require __DIR__ . '/auth.php';
