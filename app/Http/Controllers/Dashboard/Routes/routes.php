<?php

namespace App\Http\Controllers\Dashboard\Route;

use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\DashboardViewController;
use App\Http\Controllers\Dashboard\Product\ProductViewController;
use App\Http\Controllers\Dashboard\Settings\GeneralSettingsController;
use App\Http\Controllers\Dashboard\SubCategory\SubCategoryViewController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->group(function() {
    Route::get('/', [DashboardViewController::class, 'index'])->name('dashboard');

    // user route
    Route::get('/user', [DashboardViewController::class, 'user'])->name('user');
    Route::get('/edit/user', [DashboardViewController::class, 'editUser'])->name('edit.user');
    Route::get('/create/user', [DashboardViewController::class, 'createUser'])->name('create.user');

    // category
    Route::get('/category', [DashboardViewController::class, 'category'])->name('category');
    Route::get('/create/category', [DashboardViewController::class, 'createCategory'])->name('create.category');
    Route::get('/edit/category/{categoryId}', [DashboardViewController::class, 'editCategory'])->name('edit.category');

    // slider
    Route::get('/slider', [DashboardViewController::class, 'slider'])->name('slider');
    Route::get('/add/slider', [DashboardViewController::class, 'addSlider'])->name('add.slider');
    Route::get('/edit/slider', [DashboardViewController::class, 'editSlider'])->name('edit.slider');

    // sub categories url
    Route::prefix('/sub-categories')->group(function () {
        Route::get('/', [ SubCategoryViewController::class, 'index' ])->name('sub-categories.index');
        Route::get('/create', [ SubCategoryViewController::class, 'create' ])->name('sub-categories.create');
        Route::get('/edit/{id}', [ SubCategoryViewController::class, 'edit' ])->name('sub-categories.edit');
    });

    // brands url
    Route::prefix('/brands')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('brands.index');
        Route::get('/create', [BrandController::class, 'create'])->name('brands.create');
        Route::post('/store', [BrandController::class, 'store'])->name('brands.store');
        Route::get('/{id}', [BrandController::class, 'show'])->name('brands.show');
        Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
        Route::post('/{id}', [BrandController::class, 'update'])->name('brands.update');
        Route::delete('/{id}', [BrandController::class, 'destroy'])->name('brands.delete');
    });

    // products Url
    Route::prefix('/products')->group(function () {
        Route::get('/', [ProductViewController::class, 'index'])->name('products.index');
        Route::get('/create', [ProductViewController::class, 'create'])->name('products.create');
        Route::post('/store', [ProductViewController::class, 'store'])->name('products.store');
        Route::get('/{id}', [ProductViewController::class, 'show'])->name('products.show');
        Route::get('/{id}/edit', [ProductViewController::class, 'edit'])->name('products.edit');
        Route::post('/{id}', [ProductViewController::class, 'update'])->name('products.update');
        Route::delete('/{id}', [ProductViewController::class, 'destroy'])->name('products.delete');
    });

    // settings urls
    Route::prefix('/settings')->group(function () {
        Route::get('/general', [GeneralSettingsController::class, 'index'])->name('settings.general.index');
    });
});


