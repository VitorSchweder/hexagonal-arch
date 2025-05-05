<?php

use App\Http\Controllers\PortfolioController;

Route::post('/portfolio/assets', [PortfolioController::class, 'add']);
Route::get('/portfolio/assets', [PortfolioController::class, 'list']);
