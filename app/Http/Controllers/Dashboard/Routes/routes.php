<?php

namespace App\Http\Controllers\Dashboard\Route;

use App\Http\Controllers\Dashboard\DashboardViewController;
use Illuminate\Support\Facades\Route;


Route::prefix('dashboard')->group(function() {
    Route::get('/', [DashboardViewController::class, 'index'])->name('dashboard');
    Route::get('/user', [DashboardViewController::class, 'user'])->name('user');
    Route::get('/category', [DashboardViewController::class, 'category'])->name('category');
    Route::get('/slider', [DashboardViewController::class, 'slider'])->name('slider');
    Route::get('/add/slider', [DashboardViewController::class, 'addSlider'])->name('add.slider');
    Route::get('/product', [DashboardViewController::class, 'product'])->name('product');
    Route::get('/edit/slider', [DashboardViewController::class, 'editSlider'])->name('edit.slider');
});


