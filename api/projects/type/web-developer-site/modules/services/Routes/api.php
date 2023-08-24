<?php

use App\Modules\Services\Controllers\ServiceController;
use \Illuminate\Support\Facades\Route;

Route::resource('services', ServiceController::class);
