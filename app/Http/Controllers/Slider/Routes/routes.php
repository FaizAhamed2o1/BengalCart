<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Slider\SliderController;

Route::prefix('/sliders')->group(function () {
    Route::get('/', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::get('/edit/{sliderId}', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::get('/{sliderId}', [SliderController::class, 'show'])->name('sliders.show');
    Route::post('/', [SliderController::class, 'store'])->name('sliders.store');
    Route::put('/{sliderId}', [SliderController::class, 'update'])->name('sliders.update');
    Route::delete('/{sliderId}', [SliderController::class, 'destroy'])->name('sliders.destroy');
});
