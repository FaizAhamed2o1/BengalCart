<?php

namespace App\Http\Controllers\SubCategory\Routes;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubCategory\SubCategoryController;


Route::prefix('/subcategories')->group(function () {
    // List all subcategories
    Route::get('/', [SubCategoryController::class, 'index'])
        ->name('subcategories.index');

    // List subcategories for a specific category
    Route::get('/category/{categoryId}', [SubCategoryController::class, 'getCategoryWiseSubCategories'])
        ->name('subcategories.category');

    // Create a new subcategory
    Route::post('/', [SubCategoryController::class, 'store'])
        ->name('subcategories.store');

    // Update an existing subcategory
    Route::put('/update-subcategory/{id}', [SubCategoryController::class, 'update'])
        ->name('subcategories.update');

    // Delete a subcategory
    Route::delete('/delete/{id}', [SubCategoryController::class, 'destroy'])
        ->name('subcategories.destroy');

});
