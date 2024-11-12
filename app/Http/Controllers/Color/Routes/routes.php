<?php

namespace App\Http\Controllers\Color\Routes;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Color\ColorController;

Route::prefix('/colors')->group(function () {

    // Get all colors (paginated)
    Route::get('/', [ColorController::class, 'index'])->name('colors.index');

    // Get products associated with a specific color
    Route::get('/{colorId}/products', [ColorController::class, 'showColorProducts'])->name('colors.products');

    // Store a new color
    Route::post('/', [ColorController::class, 'store'])->name('colors.store');

    // Update an existing color
    Route::put('/{id}', [ColorController::class, 'update'])->name('colors.update');

    // Delete a color
    Route::delete('/{id}', [ColorController::class, 'destroy'])->name('colors.destroy');
});
