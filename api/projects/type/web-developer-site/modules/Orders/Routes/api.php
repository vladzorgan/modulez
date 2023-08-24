<?php

use App\Modules\Orders\Controllers\OrdersController;
use \Illuminate\Support\Facades\Route;

Route::resource('orders', OrdersController::class);
