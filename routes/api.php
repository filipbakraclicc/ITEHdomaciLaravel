<?php

use App\Http\Controllers\AutentfController;
use App\Http\Controllers\GradController;
use App\Http\Controllers\ZgradaController;
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

Route::post('register', [AutentfController::class, 'register']);
Route::post('login', [AutentfController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('grad', GradController::class);
    Route::resource('zgrada', ZgradaController::class);
    Route::post('logout', [AutentfController::class, 'logout']);
});
