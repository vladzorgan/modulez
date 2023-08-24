<?php

use App\Modules\AboutMe\Controllers\AboutMeController;
use \Illuminate\Support\Facades\Route;

Route::resource('about-me', AboutMeController::class);
