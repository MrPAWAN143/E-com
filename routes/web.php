<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\HomePageUserController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\CategoryController;

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
    Route::get('super_admin/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('super_admin/add-category', [CategoryController::class, 'storeCategory'])->name('add-category');
    Route::get('super_admin/categories', [CategoryController::class, 'index'])->name('category-list');
    Route::get('super_admin/category/edit/{slug}', [CategoryController::class, 'edit'])->name('edit-category');
    Route::post('super_admin/category/update/{id}', [CategoryController::class, 'update'])->name('update-category');
    Route::get('super-admin/add-subcategory', [SubCategoryController::class, 'addSubCategory'])->name('super.add_SubCategory');
    Route::get('admin/add-subcategory', [SubCategoryController::class, 'addSubCategory'])->name('add_SubCategory');
    Route::post('super-admin/add-subcategory', [SubCategoryController::class, 'storeSubCategory'])->name('add_SubCategory');
    Route::post('admin/add-subcategory', [SubCategoryController::class, 'storeSubCategory'])->name('add_SubCategory');
    Route::get('/get-subcategories/{category_id}', [SubCategoryController::class, 'getSubcategories'])->name('get.subcategories');

});


Route::middleware('auth')->group(function () {
   Route::post('admin/add-product', [ProductController::class, 'addProduct'])->name('admin.addProduct');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('user-dashboard', [UserDashboardController::class, 'showUserDashboard'])->name('user.dashboard');
});




Route::post('/check-username', [CheckUserController::class, 'checkUsername'])->name('check.username');








require __DIR__ . '/auth.php';
