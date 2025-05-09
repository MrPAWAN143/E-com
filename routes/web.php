<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\CheckUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageUserController;
use App\Http\Controllers\UserDashboardController;

Route::get('/', [HomePageUserController::class , 'getUserDetails'])->name('home');

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
   Route::get('dashboard', [DashboardController::class , 'getUserDetails'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('user-dashboard', [UserDashboardController::class, 'showUserDashboard'])->name('user.dashboard');
});




Route::post('/check-username', [CheckUserController::class, 'checkUsername'])->name('check.username');








require __DIR__.'/auth.php';
