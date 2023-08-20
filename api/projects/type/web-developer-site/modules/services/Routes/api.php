<?php

use App\Modules\Services\Controllers\ServiceController;
use \Illuminate\Support\Facades\Route;

Route::prefix('services')->group(function () {
   Route::resource('', ServiceController::class);
});
