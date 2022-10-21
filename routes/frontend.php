<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(function () {
    Route::get('index.html', [FrontendController::class, 'home'])
        ->name('home');
});
