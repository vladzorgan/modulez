<?php

use App\Modules\Portfolio\Controllers\PortfolioWorkController;
use App\Modules\Skills\Controllers\SkillsController;
use \Illuminate\Support\Facades\Route;

Route::resource('skills', SkillsController::class);
