<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Campaigns\CampaingController;

Route::prefix('/campaigns')->group(function () {
    Route::get('/', [CampaingController::class, 'index'])->name('campaigns.index');
    Route::get('/create', [CampaingController::class, 'create'])->name('campaigns.create');
    Route::get('/edit/{campaignId}', [CampaingController::class, 'edit'])->name('campaigns.edit');
    Route::get('/{campaignId}', [CampaingController::class, 'show'])->name('campaigns.show');
    Route::post('/', [CampaingController::class, 'store'])->name('campaigns.store');
    Route::put('/{campaignId}', [CampaingController::class, 'update'])->name('campaigns.update');
    Route::delete('/{campaignId}', [CampaingController::class, 'destroy'])->name('campaigns.destroy');
});



