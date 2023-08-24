<?php

use App\Modules\Reviews\Controllers\ReviewsController;
use \Illuminate\Support\Facades\Route;

Route::resource('reviews', ReviewsController::class);

