<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


/** Modular */
$modules = config('modular.modules');
$path = config('modular.path');
$base_namespace = config('modular.base_namespace');

if ($modules) {
    foreach ($modules as $key => $mod) {
        if (is_string($key)) {
            $mod = $key;
        }

        $relativePath = '/' . $mod ;
        $routesPath = $path . $relativePath . '/Routes/api.php';

        if (file_exists($routesPath)) {
            Route::namespace("")->group($routesPath);
        }
    }
}
