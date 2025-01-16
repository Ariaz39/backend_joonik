<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

Route::middleware('api_key')->group(function () {
    Route::get('/locations', [LocationController::class, 'index']);
});
