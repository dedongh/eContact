<?php

use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
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

Route::middleware('auth:api')->group(function () {
    Route::apiResource('contacts', ContactController::class);

    Route::get('birthdays', [BirthdayController::class, 'index']);
    Route::post('search', [SearchController::class, 'index']);
});

//Route::post('/contacts', [ContactController::class, 'store']);


