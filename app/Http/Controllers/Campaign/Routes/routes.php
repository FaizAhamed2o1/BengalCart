<?php

namespace App\Http\Controllers\Campaign\Routes;

use App\Http\Controllers\Campaign\CampaignController;
use Illuminate\Support\Facades\Route;

Route::prefix('/campaigns')->group(function () {
    Route::get('/', [
        CampaignController::class, 'index'
    ])->name('campaigns.index');

    Route::get('/{campaignId}', [
        CampaignController::class, 'campaignWiseProducts'
    ])->name('campaigns.campaign.wise.products');

    Route::post('/store', [
        CampaignController::class, 'store'
    ])->name('campaigns.store');

    Route::put('/update/{id}', [
        CampaignController::class, 'update'
    ])->name('campaigns.update');

    Route::delete('/delete/{id}', [
        CampaignController::class, 'destroy'
    ])->name('campaigns.destroy');
});
