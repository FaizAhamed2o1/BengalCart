<?php

namespace App\Http\Controllers\Brand\Routes;

use App\Http\Controllers\Brand\BrandController;
use Illuminate\Support\Facades\Route;

Route::prefix('/brands')->group(function () {

    Route::get('/', [
        BrandController::class, 'index'
    ])->name('brands.index');

    Route::post('/create', [
        BrandController::class, 'store'
    ])->name('brands.store');

    Route::put('/update/{id}', [
        BrandController::class, 'update'
    ])->name('brands.update');

    Route::delete('/delete/{id}', [
        BrandController::class, 'destroy'
    ])->name('brands.delete');

});
