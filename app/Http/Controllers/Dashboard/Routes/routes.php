<?php

namespace App\Http\Controllers\Dashboard\Route;

use App\Http\Controllers\Dashboard\DashboardViewController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->group(function() {
    Route::get('/', [DashboardViewController::class, 'index'])->name('dashboard');

    Route::get('/user', [DashboardViewController::class, 'user'])->name('user');
    Route::get('/edit/user', [DashboardViewController::class, 'editUser'])->name('edit.user');
    Route::get('/create/user', [DashboardViewController::class, 'createUser'])->name('create.user');

    Route::get('/category', [DashboardViewController::class, 'category'])->name('category');
    Route::get('/create/category', [DashboardViewController::class, 'createCategory'])->name('create.category');
    Route::get('/edit/category', [DashboardViewController::class, 'editCategory'])->name('edit.category');

    Route::get('/brand', [DashboardViewController::class, 'brand'])->name('brand');
    Route::get('/create/brand', [DashboardViewController::class, 'createBrand'])->name('create.brand');
    Route::get('/edit/brand', [DashboardViewController::class, 'editBrand'])->name('edit.brand');


    Route::get('/slider', [DashboardViewController::class, 'slider'])->name('slider');
    Route::get('/add/slider', [DashboardViewController::class, 'addSlider'])->name('add.slider');
    Route::get('/product', [DashboardViewController::class, 'product'])->name('product');
    Route::get('/edit/slider', [DashboardViewController::class, 'editSlider'])->name('edit.slider');
});


