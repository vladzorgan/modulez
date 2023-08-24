<?php

use App\Modules\Portfolio\Controllers\PortfolioWorkController;
use \Illuminate\Support\Facades\Route;

Route::resource('portfolio/works', PortfolioWorkController::class);

