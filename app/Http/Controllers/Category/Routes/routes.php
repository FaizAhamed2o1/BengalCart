<?php

use App\Http\Controllers\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('/categories')
    ->group(function () {
        // List all categories
        Route::get('/', [CategoryController::class, 'index'])
            ->name('categories.index');
        
        // Create a new category
        Route::post('/', [CategoryController::class, 'store'])
            ->name('categories.store');
        
        // Update an existing category
        Route::post('/update/{id}', [
            CategoryController::class, 'update'
        ])->name('categories.update');
        
        // Delete a category
        Route::delete('/{id}', [
            CategoryController::class, 'destroy'
        ])->name('categories.destroy');

        // getting category wise sub categories
        Route::get('/category-wise-sub/{categoryId}', [
            CategoryController::class, 'getCategoryWiseSub'
        ])->name('categories.catWiseSub');
    });
